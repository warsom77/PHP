<?php

/*
 * Buat program kuis yang:
 * Menampilkan pertanyaan (5 buah)
 * Meminta jawaban user dan mengevaluasi benar/salah
 * Menampilkan skor akhir
 * Menyediakan pilihan main ulang menggunakan rekursi
 */

$questions = [
    ["question" => "Apa hasil dari 5 + 3 * 2?", "answer" => "11"],
    ["question" => "Fungsi PHP untuk menghitung panjang string adalah?", "answer" => "strlen"],
    ["question" => "Apakah output dari kode ini: var_dump(true && false);", "answer" => "bool(false)"],
    ["question" => "Tipe data yang menyimpan beberapa nilai sekaligus dalam satu variabel adalah?", "answer" => "array"],
    ["question" => "Operator logika untuk 'atau' dalam PHP adalah?", "answer" => "||"]
];

function runQuiz(array $questions): void {
    shuffle($questions);

    echo "=== SELAMAT DATANG DI KUIS PHP ===" . PHP_EOL;
    echo "Masukan nama Anda (tekan Enter untuk skip) : ";
    $name = trim(fgets(STDIN)) ?? '';
    $name = $name !== '' ? $name : "Player";

    $score = 0;

    foreach ($questions as $index => $question) {
        echo $index+1 . ". " . $question["question"] . " ";
        $answer = strtolower(trim(fgets(STDIN)));
        if ($answer === $question["answer"]) {
            echo "✅ benar!" . PHP_EOL;
            $score += 20;
        } else {
            echo "❌ Salah. Jawabannya adalah " . $question['answer'] . PHP_EOL;
        }
    }

    echo PHP_EOL;
    echo "=== HASIL PROGRAM QUIZ ===" . PHP_EOL;
    echo "Nama      : " . $name . PHP_EOL;
    echo "Score     : " . $score . PHP_EOL;

    tanyaLagi:
    echo PHP_EOL;
    echo "Ingin bermain lagi? (y/n) : " ;
    $again = strtolower(trim(fgets(STDIN)));
    if ($again === 'y') {
        runQuiz($questions);
    } else if ($again === 'n') {
        echo "Terima kasih sudah bermain! Sampai jumpa lagi!" . PHP_EOL;
    } else {
        echo "Pilih y atau n jangan yang lain!" . PHP_EOL;
        goto tanyaLagi;
    }
}

runQuiz($questions);