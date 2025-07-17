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
require_once 'class/Config.php';
require_once 'class/LoggerFactory.php';
require_once 'class/StudentProfile.php';
require_once 'class/Submission.php';
require_once 'class/Validator.php';

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
use class\Config;
use class\LoggerFactory;
use class\StudentProfile;
use Assignment\Student as AssignmentStudent;
use Assignment\AssignmentSubmission;
use Assignment\ValidationException;
//use DateTime;

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

echo Config::getAppInfo() . PHP_EOL;
Config::setVersion("2.1.5");
echo Config::getAppInfo() . PHP_EOL;
echo Config::systemName() . PHP_EOL;
echo "Access Count : " . Config::$accessCount . PHP_EOL;

$logger = LoggerFactory::createLogger();
$logger->log("Sistem berjalan lancar");
$logger->error("Terjadi kesalahan koneksi");

$profile = new stdClass();
$profile->name = "Dina";
$profile->role = "student";
$profile->courses = ["PHP", "Laravel"];

echo "Profile User :" . PHP_EOL;
foreach ($profile as $key => $value) {
    echo "- $key : " . (is_array($value) ? implode(", ", $value) : $value) . PHP_EOL;
}

$reportQuiz = new stdClass();
$reportQuiz->skor = 5;
$reportQuiz->waktu = 10;
$reportQuiz->feedback = "Sangat membantu";

echo "Report Quiz :" . PHP_EOL;
foreach ($reportQuiz as $key => $value) {
    echo "- $key : " . (is_array($value) ? implode(", ", $value) : $value) . PHP_EOL;
}

echo str_repeat("-", 100) . PHP_EOL;

$student = new StudentProfile([
    'name' => 'Budi',
    'email' => 'budi@gmail.com',
    'courses' => ["PHP", "Laravel"]
]);

echo $student . PHP_EOL;
echo "Email : $student->email" . PHP_EOL;

$student->level = 'intermediate';
echo "Update at : $student->updated_at" . PHP_EOL;

echo "Student Profile :" . PHP_EOL;
foreach ($student as $key => $value) {
    echo "$key => ";
    echo is_array($value) ? implode(", ", $value) . PHP_EOL : $value . PHP_EOL;
}

echo "Courses : " . PHP_EOL;
foreach ($student->courseGenerator() as $course) {
    echo "-> $course" . PHP_EOL;
}

$copy = clone $student;
echo "Clone profile at : $copy->cloned_at" . PHP_EOL;

echo "Student Profile :" . PHP_EOL;
foreach ($copy as $key => $value) {
    echo "$key => ";
    echo is_array($value) ? implode(", ", $value) . PHP_EOL : $value . PHP_EOL;
}

echo "Courses : " . PHP_EOL;
foreach ($copy->courseGenerator() as $course) {
    echo "-> $course" . PHP_EOL;
}

echo "Comparing Object :" . PHP_EOL;
echo $student == $copy ? "Isi sama" . PHP_EOL : "Isi beda" . PHP_EOL;
echo $student === $copy ? "Object sama" . PHP_EOL : "Object beda" . PHP_EOL;

echo "Method tidak tersedia" . PHP_EOL;
echo $student->generateCertificate() . PHP_EOL;

echo str_repeat("-", 100) . PHP_EOL;

try {
    $student = new AssignmentStudent("Dini", "dini@gmail.com");
    $submission = new AssignmentSubmission(new DateTime("+1 day"));

    $result = $submission->handle($student);
    echo $result->message() . PHP_EOL;

    $submission->debugStudent($student);
} catch (ValidationException $ve) {
    echo "⚠️ Validasi Gagal : " . $ve->getMessage() . PHP_EOL;
} catch (Exception $e) {
    echo "⚠️ Error Lain : " . $e->getMessage() . PHP_EOL;
}

echo str_repeat("-", 100) . PHP_EOL;
