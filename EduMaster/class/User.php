<?php

namespace class;

class User
{
    public string $id;
    public string $name;
    public string $email;
    public string $role;
    public const DEFAULT_ROLE = 'student';

    public function __construct(string $name, string $email, string $role = self::DEFAULT_ROLE)
    {
        $this->id = uniqid();
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
        echo "User $this->name dibuat" . PHP_EOL;
    }

    public function introduce(): void
    {
        echo "Halo, saya $this->name, peran saya adalah $this->role" . PHP_EOL;
    }

    public function changeRole(string $role): void
    {
        $this->role = $role;
    }

    public function __destruct()
    {
        echo "User $this->name dihapus dari memori" . PHP_EOL;
    }
}