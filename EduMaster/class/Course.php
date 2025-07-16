<?php

namespace class;

class Course
{
    public string $title;
    public string $description;
    public User $instructor;
    public array $lessons;

    public function __construct(string $title, string $description, User $instructor)
    {
        $this->title = $title;
        $this->description = $description;
        $this->instructor = $instructor;
    }

    public function info(): void
    {
        echo "Kursus : $this->title oleh {$this->instructor->getEmail()}" . PHP_EOL;
    }

    public function addLesson(Lesson $lesson): void
    {
        $this->lessons[] = $lesson;
    }

    public function listLessons(): void
    {
        foreach ($this->lessons as $lesson) {
            $lesson->show();
        }
    }

    public function getAccessLevel(): string
    {
        return "Access not defined";
    }

    public function isFree(): ?bool
    {
        return null;
    }
}