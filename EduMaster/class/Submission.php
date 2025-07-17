<?php

namespace Assignment;

use DateTime;
use ReflectionClass;
use ReflectionMethod;

interface ISubmissionHandler
{
    public function handle(Student $student): SubmissionResult;
}

class SubmissionResult
{
    public function message(): string {
        return "Submission received.";
    }
}

class SuccessResult extends SubmissionResult {
    public function message(): string {
        return "✅ Success! Assignment saved.";
    }
}

class LateSubmissionResult extends SubmissionResult {
    public function message(): string {
        return "⚠️ Terlambat! Tugas tetap diterima tapi terkena penalti.";
    }
}

class User {
    public string $email;

    function __construct(string $email) {
        $this->email = $email;
    }
}

class Student extends User {
    public string $name;

    public function __construct(string $name, string $email) {
        parent::__construct($email);
        $this->name = $name;
    }
}

class AssignmentSubmission implements ISubmissionHandler {
    private DateTime $dueDate;

    public function __construct(DateTime $due) {
        $this->dueDate = $due;
    }

    public function handle(User $student): SubmissionResult {
        Validator::validateEmail($student->email);
//        Validator::validateDueDate($this->dueDate);

        if ($student instanceof Student) {
            Validator::validateName($student->name);
        }

        $now = new DateTime();
        if ($this->dueDate < $now) {
            return new LateSubmissionResult();
        }

        return new SuccessResult();
    }

    public function debugStudent(Student $student): void {
        $ref = new ReflectionClass($student);
        echo "Reflect Class : " . $ref->getName() . PHP_EOL;
        foreach ($ref->getProperties() as $property) {
            $property->setAccessible(true);
            echo "- {$property->getName()} : " . $property->getValue($student) . PHP_EOL;
        }
        foreach ($ref->getMethods() as $method) {
            echo "- " . $method->getName() . PHP_EOL;
        }
    }
}