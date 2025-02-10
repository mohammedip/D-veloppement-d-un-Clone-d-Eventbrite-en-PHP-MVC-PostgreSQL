<?php

require_once 'User.php';
require_once 'Database.php';
require_once 'LoginLogoutTrait.php';
require_once 'RegisterTrait.php';

class Organizator extends User {
    use LoginLogoutTrait, RegisterTrait;

    public function __construct($id, $email, $name, $role = 'Organizator') {
        parent::__construct($id, $email, $name, $role);
    }

    // Add a course
    public function addCourse($title, $description, $content, $tags = [], $category) {
        $db = Database::getInstance()->getConnection();

        $query = $db->prepare("INSERT INTO courses (title, description, content, teacher_id, category) VALUES (?, ?, ?, ?, ?)");
        $query->execute([$title, $description, $content, $this->id, $category]);

        $courseId = $db->lastInsertId();

        // Add tags if provided
        foreach ($tags as $tag) {
            $tagQuery = $db->prepare("INSERT INTO course_tags (course_id, tag) VALUES (?, ?)");
            $tagQuery->execute([$courseId, $tag]);
        }

        echo "Course added successfully!";
    }

    // Manage courses
    public function manageCourses() {
        $db = Database::getInstance()->getConnection();

        $query = $db->prepare("SELECT * FROM courses WHERE teacher_id = ?");
        $query->execute([$this->id]);
        $courses = $query->fetchAll();

        if (empty($courses)) {
            echo "You have not created any courses.";
        } else {
            foreach ($courses as $course) {
                echo "Course ID: " . $course['id'] . ", Title: " . $course['title'] . ", Description: " . $course['description'] . "\n";
            }
        }
    }

    // Edit a course
    public function editCourse($courseId, $title, $description, $content, $tags = [], $category) {
        $db = Database::getInstance()->getConnection();

        $query = $db->prepare("UPDATE courses SET title = ?, description = ?, content = ?, category = ? WHERE id = ? AND teacher_id = ?");
        $query->execute([$title, $description, $content, $category, $courseId, $this->id]);

        // Remove existing tags and re-add them
        $deleteTagsQuery = $db->prepare("DELETE FROM course_tags WHERE course_id = ?");
        $deleteTagsQuery->execute([$courseId]);

        foreach ($tags as $tag) {
            $tagQuery = $db->prepare("INSERT INTO course_tags (course_id, tag) VALUES (?, ?)");
            $tagQuery->execute([$courseId, $tag]);
        }

        echo "Course updated successfully!";
    }

    // Delete a course
    public function deleteCourse($courseId) {
        $db = Database::getInstance()->getConnection();

        // Delete the course and associated tags
        $deleteTagsQuery = $db->prepare("DELETE FROM course_tags WHERE course_id = ?");
        $deleteTagsQuery->execute([$courseId]);

        $deleteCourseQuery = $db->prepare("DELETE FROM courses WHERE id = ? AND teacher_id = ?");
        $deleteCourseQuery->execute([$courseId, $this->id]);

        echo "Course deleted successfully!";
    }
}
