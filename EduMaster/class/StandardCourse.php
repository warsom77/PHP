<?php

namespace class;

class StandardCourse extends Course
{
    public function getAccessLevel(): string
    {
        return "Full Access (Free)";
    }

    public function isFree(): bool
    {
        return true;
    }
}