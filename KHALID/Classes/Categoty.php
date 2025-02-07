<?php

class Category {
    private $id;
    private $name;
    private $description;

    // Static property to store all categories and the courses with their name
    private static $categories = [];
    private static $categoryCourses = []; // To Link courses with categories

    public function __construct($id, $name, $description) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

    public static function addCategory($name, $description) {
        $id = count(self::$categories) + 1; // Auto-generate an ID
        $category = new Category($id, $name, $description);
        self::$categories[$id] = $category;

        echo "Category '$name' has been added successfully with ID: $id.\n";
        return $id;
    }

    public static function addCourseToCategory($courseId, $categoryId) {
        if (!isset(self::$categories[$categoryId])) {
            echo "Category with ID $categoryId does not exist.\n";
            return;
        }

        if (!isset(self::$categoryCourses[$categoryId])) {
            self::$categoryCourses[$categoryId] = [];
        }

        if (in_array($courseId, self::$categoryCourses[$categoryId])) {
            echo "Course with ID $courseId is already in category $categoryId.\n";
            return;
        }

        self::$categoryCourses[$categoryId][] = $courseId;
        echo "Course with ID $courseId has been added to category $categoryId.\n";
    }

    public static function getCoursesByCategory($categoryId) {
        if (!isset(self::$categories[$categoryId])) {
            echo "Category with ID $categoryId does not exist.\n";
            return;
        }

        if (empty(self::$categoryCourses[$categoryId])) {
            echo "No courses found under category $categoryId ({$self::$categories[$categoryId]->name}).\n";
            return;
        }

        echo "Courses under category '{$self::$categories[$categoryId]->name}':\n";
        foreach (self::$categoryCourses[$categoryId] as $courseId) {
            echo "- Course ID: $courseId\n";
        }
    }

    public static function listCategories() {
        if (empty(self::$categories)) {
            echo "No categories available.\n";
            return;
        }

        echo "Available Categories:\n";
        foreach (self::$categories as $category) {
            echo "- ID: {$category->id}, Name: {$category->name}, Description: {$category->description}\n";
        }
    }
}



// Add some categories
$programmingId = Category::addCategory("Programming", "Courses related to coding and software development.");
$designId = Category::addCategory("Design", "Courses related to graphic and UI/UX design.");

// List all categories
Category::listCategories();

// Add courses to categories
Category::addCourseToCategory(101, $programmingId);
Category::addCourseToCategory(102, $programmingId);
Category::addCourseToCategory(201, $designId);

// Retrieve courses by category
Category::getCoursesByCategory($programmingId);
Category::getCoursesByCategory($designId);

// Try adding a non-existent course or category
Category::addCourseToCategory(301, 999); // does not exsist category
Category::getCoursesByCategory(999);     // does not exsist category

