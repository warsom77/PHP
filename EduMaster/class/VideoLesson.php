<?php

namespace class;

use mysql_xdevapi\Exception;

class VideoLesson extends LessonContent
{
    private string $url;
    private int $duration;

    public function __construct(string $title, string $url, int $duration)
    {
        parent::__construct($title);
        $this->url = $url;
        $this->setDuration($duration);
    }

    public function render(): string
    {
        return "<h2>$this->title</h2><video src=\"$this->url\" controls></video>";
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): void
    {
        if ($duration < 1) {
            throw new \Exception("Durasi terlalu pendek");
        }
        $this->duration = $duration;
    }

    public function summary(): string
    {
        return "video berdurasi $this->duration menit";
    }
}