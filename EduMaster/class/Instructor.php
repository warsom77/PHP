<?php

namespace class;

class Instructor extends User
{
    private array $createdCourses = [];
    private static int $maxCourses = 3;

    public function __construct(string $name, string $email)
    {
        parent::__construct($name, $email, 'instructor');
        echo "Instruktur $this->name dibuat" . PHP_EOL;
    }

    public function createCourse(string $title, string $description): ?Course
    {
        if (count($this->createdCourses) >= self::$maxCourses) {
            echo "Instruktur tidak bisa membuat lebih dari " . self::$maxCourses . " kursus" . PHP_EOL;
            return null;
        }
        $course = new Course($title, $description, $this);
        $this->createdCourses[] = $course;
        echo "Instruktur {$this->getEmail()} membuat kursus : $course->title" . PHP_EOL;
        return $course;
    }

    public function listCreatedCourses(): void
    {
        echo "Kursus yang dibuat oleh {$this->getEmail()} : " . PHP_EOL;
        foreach ($this->createdCourses as $course) {
            echo "- $course->title" . PHP_EOL;
        }
    }
}