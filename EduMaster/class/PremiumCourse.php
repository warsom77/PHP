<?php

namespace class;

class PremiumCourse extends Course
{
    private int $price;
    private int $accessDays;

    public function __construct(string $title, string $description, Instructor $instructor, int $price, int $accessDays = 30)
    {
        parent::__construct($title, $description, $instructor);
        $this->price = $price;
        $this->accessDays = $accessDays;
    }

    public function getAccessLevel(): string
    {
        return "Premium Access ($this->accessDays hari) - Harga : $this->price";
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function isFree(): bool
    {
        return false;
    }

    public function extendAccess(int $days): void
    {
        $this->accessDays += $days;
        echo "Kursus $this->title diperpanjang sebanyak $days hari. Sekarang dapat diakses selama $this->accessDays hari" . PHP_EOL;
    }

    public function pay(User $user): void
    {
        echo "{$user->getEmail()} membayar Rp " . number_format($this->price, 0, ',', '.') . " untuk kursus '$this->title'" . PHP_EOL;
    }
}