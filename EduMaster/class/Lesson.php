<?php

namespace class;

class Lesson
{
    public string $title;
    public int $duration;
    public int $order;

    public function __construct(string $title, int $duration, int $order)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->order = $order;
    }

    public function show(): void
    {
        echo "Pelajaran #$this->order : $this->title ($this->duration menit)" . PHP_EOL;
    }
}