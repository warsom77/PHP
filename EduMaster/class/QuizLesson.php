<?php

namespace class;

class QuizLesson extends LessonContent
{
    private array $questions = [];
    private int $duration;

    public function __construct(string $title, array $questions, int $duration)
    {
        parent::__construct($title);
        $this->questions = $questions;
        $this->duration = $duration;
    }

    public function render(): string
    {
        $output =  "<h2>$this->title</h2><ol>";
        foreach ($this->questions as $question) {
            $output .= "<li>$question</li>";
        }
        $output .= "</ol>";
        return $output;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function summary(): string
    {
        return "Kuis dengan " . count($this->questions) . " pertanyaan";
    }
}
