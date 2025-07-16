<?php

/*
 * Kamu diminta membangun sebuah sistem manajemen kursus online bernama EduMaster,
 * di mana pengguna dapat mendaftar sebagai instruktur atau siswa, mengelola kursus, mengikuti pelajaran, dan menyelesaikan ujian.
 * Sistem ini harus mendukung modularitas, fleksibilitas, dan perluasan fitur.
 */

require_once 'interfaces/Summarizable.php';
require_once 'interfaces/Renderable.php';
require_once 'traits/HasLogger.php';
require_once 'traits/HasTimestamp.php';
require_once 'traits/HasReport.php';
require_once 'traits/CanNotify.php';
require_once 'traits/HasAuditLog.php';
require_once 'class/User.php';
require_once 'class/Course.php';
require_once 'class/Lesson.php';
require_once 'class/Student.php';
require_once 'class/Instructor.php';
require_once 'class/LessonContent.php';
require_once 'class/StandardCourse.php';
require_once 'class/PremiumCourse.php';
require_once 'class/TextLesson.php';
require_once 'class/VideoLesson.php';
require_once 'class/QuizLesson.php';
require_once 'class/Admin.php';
require_once 'class/SystemSupervisor.php';

use class\User;
use class\Course;
use class\Lesson;
use class\Student;
use class\Instructor;
use class\StandardCourse;
use class\PremiumCourse;
use class\TextLesson;
use class\VideoLesson;
use class\QuizLesson;
use class\Admin;
use class\SystemSupervisor;

// Buat user instruktur
$instructor = new User("Fajar", "fajar@example.com", "instructor");

// Buat kursus
$course = new Course("Belajar PHP OOP", "Pelajari OOP PHP dari dasar", $instructor);
$course->info();

// Buat pelajaran
$lesson1 = new Lesson("Pengantar OOP", 15, 1);
$lesson2 = new Lesson("Membuat Class & Object", 25, 2);

$lesson1->show();
$lesson2->show();

$course->addLesson($lesson1);
$course->addLesson($lesson2);
$course->listLessons();

$instructor->introduce();
echo "Saya seorang {$instructor->getRole()}" . PHP_EOL;
$instructor->changeRole("student");
$instructor->changeEmail("fajar@edu.com");
$instructor->introduce();
$course->info();

echo str_repeat("-", 100) . PHP_EOL;

$instruktur = new Instructor("Nina", "nina@edu.com");
$kursus1 = $instruktur->createCourse("PHP OOP Mastery", "Kuasai OOP dari dasar ke mahir");
$kursus2 = $instruktur->createCourse("PHP & Laravel", "Bangun aplikasi nyata");

// Buat murid
$murid = new Student("Ali", "ali@murid.com");
$murid->enroll($kursus1);
$murid->enroll($kursus2);

// Lihat daftar
$instruktur->listCreatedCourses();
$murid->listCourses();

echo str_repeat("-", 100) . PHP_EOL;

// Buat kursus
$standard = new StandardCourse("Dasar PHP", "Belajar dasar PHP", $instruktur);
$premium = new PremiumCourse("PHP Premium", "Materi lengkap + mentoring", $instruktur, 250000, 45);

// Buat array polymorphic
$allCourses = [$standard, $premium];

foreach ($allCourses as $course) {
    echo "$course->title: {$course->getAccessLevel()}" . PHP_EOL;
}

echo str_repeat("-", 100) . PHP_EOL;

$text = new TextLesson("Belajar Dasar OOP", "OOP adalah paradigma ...");
$video = new VideoLesson("OOP Lanjutan", "https://youtu.be/_P2t0lCzU-Q?si=K0ETY4uvM_IgWXzX", 313);
$quiz = new QuizLesson("Kuis OOP", [
    "Apa itu class?",
    "Apa itu inheritance?",
    "Apa itu polymorphism?"
    ], 10);

$lessons = [$text, $video, $quiz];

foreach ($lessons as $lesson) {
    echo "Judul   : {$lesson->getTitle()}" . PHP_EOL;
    echo "Durasi  : {$lesson->getDuration()}" . PHP_EOL;
    echo "Summary : {$lesson->summary()}" . PHP_EOL;
    echo "Render  : {$lesson->render()}\n" . PHP_EOL;
}

echo str_repeat("-", 100) . PHP_EOL;

$admin = new Admin();
$admin->action();
echo $admin->generateReport();

$supervisor = new SystemSupervisor();
$supervisor->performAudit();
echo $supervisor->generateReport();

echo str_repeat("-", 100) . PHP_EOL;
