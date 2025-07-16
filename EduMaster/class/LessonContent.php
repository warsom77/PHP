<?php

namespace class;

use interfaces\Renderable;

abstract class LessonContent implements Renderable
{
    protected string $title;

    public function __construct(string $title)
    {
        $this->setTitle($title);
    }

    abstract public function getDuration(): int;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        if (strlen($title) < 5) {
            throw new \Exception('Judul terlalu pendek');
        }
        $this->title = $title;
    }
}
