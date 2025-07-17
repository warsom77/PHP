<?php

namespace class;

use http\Exception\InvalidArgumentException;

class StudentProfile implements \Iterator
{
    private array $data = [];
    private int $position = 0;

    public function __construct(array $initial = [])
    {
        $this->data = $initial;
        $this->position = 0;
    }

    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    public function __set(string $name, $value): void
    {
        if ($name == 'email') {
            if (!preg_match('/^[\w\.\-]+@[\w\-]+\.[\w]{2,}$/', $value)) {
                throw new \InvalidArgumentException("Email tidak valid : $value");
            }
        }
        $this->data[$name] = $value;
        $this->data['updated_at'] = date('Y-m-d H:i:s');
    }

    public function __toString(): string
    {
        return "Student : " . $this->data['name'] ?? "Unknown";
    }

    public function __clone(): void
    {
        $this->data['cloned_at'] = date("Y-m-d H:i:s");
    }

    public function __call(string $name, array $arguments)
    {
        return "[Peringatan] Method '$name' tidak tersedia";
    }

    public function current()
    {
        return array_values($this->data)[$this->position];
    }

    public function key()
    {
        return array_keys($this->data)[$this->position];
    }

    public function next()
    {
        $this->position++;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function valid()
    {
        return $this->position < count($this->data);
    }

    public function courseGenerator(): \Generator
    {
        foreach ($this->data['courses'] ?? [] as $course) {
            yield $course;
        }
    }
}