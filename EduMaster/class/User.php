<?php

namespace class;

class User
{
    protected string $id;
    protected string $name;
    protected string $email;
    protected string $role;
    private const DEFAULT_ROLE = 'student';

    public function __construct(string $name, string $email, string $role = self::DEFAULT_ROLE)
    {
        $this->id = uniqid();
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }

    public function introduce(): void
    {
        echo "Halo, saya $this->name, peran saya adalah $this->role" . PHP_EOL;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function changeRole(string $role): void
    {
        $this->role = $role;
    }

    public function changeEmail(string $newEmail): void
    {
        $this->email = $newEmail;
    }

    public function __destruct()
    {
        echo "User $this->name dihapus dari memori" . PHP_EOL;
    }
}