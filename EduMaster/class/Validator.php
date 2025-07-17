<?php

namespace Assignment;

use DateTime;
use Exception;

class Validator
{
    public static function validateEmail(string $email): void {
        if (!preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/', $email)) {
            throw new ValidationException("Email tidak valid : $email");
        }
    }

    public static function validateDueDate(DateTime $due): void {
        $now = new DateTime();
        if ($due < $now) {
            throw new ValidationException("Tanggal pengumpulan sudah lewat");
        }
    }

    public static function validateName(string $name): void {
        if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
            throw new ValidationException("Nama tidak valid : hanya huruf dan spasi diperbolehkan.");
        }
    }
}

class ValidationException extends Exception {

}