<?php

/*
 * Kamu diminta membangun sebuah sistem manajemen kursus online bernama EduMaster,
 * di mana pengguna dapat mendaftar sebagai instruktur atau siswa, mengelola kursus, mengikuti pelajaran, dan menyelesaikan ujian.
 * Sistem ini harus mendukung modularitas, fleksibilitas, dan perluasan fitur.
 */

require_once 'class/User.php';
require_once 'class/Course.php';
require_once 'class/Lesson.php';

use class\User;
use class\Course;
use class\Lesson;

$instructor = new User("Fajar", "fajar@gmail.com", "instructor");

$course = new Course("Belajar PHP OOP", "Pelajari OOP PHP dari dasar", $instructor);
$course->info();

$lesson1 = new Lesson("Pengantar OOP", 15, 1);
$lesson2 = new Lesson("Membuat Class & Object", 25, 2);

$lesson1->show();
$lesson2->show();

$instructor->introduce();
$instructor->changeRole("student");
$instructor->introduce();

$course->addLesson($lesson1);
$course->addLesson($lesson2);
$course->listLessons();