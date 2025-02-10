<?php

require_once 'User.php';
require_once 'Database.php';
require_once 'LoginLogoutTrait.php';
require_once 'RegisterTrait.php';
require_once 'RoleRedirectTrait.php';

class Participant extends User {
    use LoginLogoutTrait, RegisterTrait, RoleRedirectTrait;

    private $courses = [];

    public function __construct($id, $email, $name, $role = 'student') {
        parent::__construct($id, $email, $name, $role);
    }

    // Enroll in a course
    public function enrollInCourse($courseId) {
        $db = Database::getInstance()->getConnection();

        $query = $db->prepare("SELECT * FROM enrollments WHERE user_id = ? AND course_id = ?");
        $query->execute([$this->id, $courseId]);
        if ($query->rowCount() > 0) {
            echo "You are already enrolled in this course!";
            return;
        }

        // Enroll the student in the course
        $query = $db->prepare("INSERT INTO enrollments (user_id, course_id) VALUES (?, ?)");
        $query->execute([$this->id, $courseId]);
        echo "Enrolled in course successfully!";
    }

    // View courses the student is enrolled in
    public function viewMyCourses() {
        $db = Database::getInstance()->getConnection();

        $query = $db->prepare("
            SELECT c.id, c.title, c.description 
            FROM courses c 
            INNER JOIN enrollments e ON c.id = e.course_id 
            WHERE e.user_id = ?
        ");
        $query->execute([$this->id]);
        $this->courses = $query->fetchAll();

        if (empty($this->courses)) {
            echo "You are not enrolled in any courses.";
        } else {
            foreach ($this->courses as $course) {
                echo "Course ID: " . $course['id'] . ", Title: " . $course['title'] . ", Description: " . $course['description'] . "\n";
            }
        }
    }
}
