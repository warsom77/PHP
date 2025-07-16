<?php

namespace class;

class TextLesson extends LessonContent
{
    private string $content;

    public function __construct(string $title, string $content)
    {
        parent::__construct($title);
        $this->content = $content;
    }

    public function render(): string
    {
        return "<h2>$this->title</h2><p>$this->content</p>";
    }

    public function getDuration(): int
    {
        return ceil(strlen($this->content) / 500);
    }

    public function summary(): string
    {
        return substr($this->content, 0, 50) . "...";
    }
}