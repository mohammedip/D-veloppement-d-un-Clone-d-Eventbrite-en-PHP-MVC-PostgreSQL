<?php

abstract class Course {
    protected $id;
    protected $title;
    protected $description;
    protected $content;
    protected $tags = [];
    protected $category;
    protected $studentsEnrolled = [];

    abstract public function getCourseDetails();
    abstract public function enrollStudent($studentId);

    public function addTag($tag) {
        if (!in_array($tag, $this->tags)) {
            $this->tags[] = $tag;
            echo "Tag '$tag' added successfully.\n";
        } else {
            echo "Tag '$tag' already exists.\n";
        }
    }

    public function removeTag($tag) {
        $key = array_search($tag, $this->tags);
        if ($key !== false) {
            unset($this->tags[$key]);
            echo "Tag '$tag' removed successfully.\n";
        } else {
            echo "Tag '$tag' not found.\n";
        }
    }

    public function listTags() {
        return $this->tags;
    }
}

