<?php

namespace class;

class Student extends User
{
    private array $enrolledCourses = [];

    public function __construct(string $name, string $email)
    {
        parent::__construct($name, $email);
        echo "Student $this->name dibuat" . PHP_EOL;
    }

    public function enroll(Course $course): void
    {
        foreach ($this->enrolledCourses as $enrolledCourse) {
            if ($enrolledCourse === $course) {
                echo "Kursus $enrolledCourse->title sudah terdaftar" . PHP_EOL;
                return;
            }
        }
        $this->enrolledCourses[] = $course;
        echo "{$this->getEmail()} mendaftar ke kursus : $course->title" . PHP_EOL;
    }

    public function listCourses(): void
    {
        echo "Kursus yang diikuti {$this->getEmail()}" . PHP_EOL;
        foreach ($this->enrolledCourses as $course) {
            echo "- $course->title" . PHP_EOL;
        }
    }
}