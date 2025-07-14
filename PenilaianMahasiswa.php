<?php

/*
 * Buat program yang menerima nilai ujian mahasiswa (0–100), dan:
 * Menentukan grade (A, B, C, D, E)
 * Menentukan apakah lulus atau tidak
 * Menampilkan deskripsi menggunakan switch-case
 */

function getGrade(int $nilai): string {
    if ($nilai >= 90) {
        return "A";
    } else if ($nilai >= 80) {
        return "B";
    } else if ($nilai >= 70) {
        return "C";
    } else if ($nilai >= 60) {
        return "D";
    } else {
        return "E";
    }
}

function getDeskripsiGrade(string $grade): string {
    return match ($grade) {
        "A" => "Sangat Baik",
        "B" => "Baik",
        "C" => "Cukup",
        "D" => "Kurang",
        "E" => "Sangat Kurang",
        default => "",
    };
}

function getStatus(int $nilai): string {
    if ($nilai >= 65) {
        return "LULUS";
    } else {
        return "TIDAK LULUS";
    }
}

function urutNilai($a, $b): int
{
    return $b["nilai"] <=> $a["nilai"];
}

$nilaiSeluruhMahasiswa = [];

echo "Masukan jumlah mahasiswa : ";
$jumlahMahasiswa = trim(fgets(STDIN));
echo str_repeat('-', 30) . PHP_EOL;

if (is_numeric($jumlahMahasiswa)) {
    for ($i = 0; $i < $jumlahMahasiswa; $i++) {
        echo "Masukan nama mahasiswa  : ";
        $namaMahasiswa = strtoupper(trim(fgets(STDIN)));
        echo "Masukan nilai mahasiswa : ";
        $nilaiMahasiswa = trim(fgets(STDIN));
        if (is_string($namaMahasiswa) && is_numeric($nilaiMahasiswa) && 0 <= $nilaiMahasiswa && 100 >= $nilaiMahasiswa) {
            $nilaiSeluruhMahasiswa[$i]["nama"] = $namaMahasiswa;
            $nilaiSeluruhMahasiswa[$i]["nilai"] = $nilaiMahasiswa;
            $nilaiSeluruhMahasiswa[$i]["grade"] = getGrade($nilaiMahasiswa);
        } else {
            echo "ERROR: Nama mahasiswa harus string dan nilai mahasiswa harus angka diantara 0 - 100";
            exit;
        }
    }
} else {
    echo "ERROR: Jumlah mahasiswa harus berupa angka";
    exit;
}

usort($nilaiSeluruhMahasiswa, "urutNilai");

echo str_repeat('-', 30) . PHP_EOL;
echo str_pad("DAFTAR MAHASISWA", 63, " ", STR_PAD_BOTH) . PHP_EOL;
echo "|" . str_pad("NO", 4, " ", STR_PAD_BOTH) . "|" . str_pad("NAMA", 12, " ", STR_PAD_BOTH) . "|";
echo str_pad("NILAI", 7, " ", STR_PAD_BOTH) . "|" . str_pad("GRADE", 7, " ", STR_PAD_BOTH) . "|";
echo str_pad("DESKRIPSI", 13, " ", STR_PAD_BOTH) . "|" . str_pad("STATUS", 13, " ", STR_PAD_BOTH) . "|" . PHP_EOL;
echo str_repeat('=', 63) . PHP_EOL;

foreach ($nilaiSeluruhMahasiswa as $key => $value) {
    echo "|" . str_pad($key + 1, 4, " ", STR_PAD_BOTH) . "|" .  str_pad($value["nama"], 12, " ", STR_PAD_BOTH) . "|";
    echo str_pad($value["nilai"], 7, " ", STR_PAD_BOTH) . "|" . str_pad($value["grade"], 7, " ", STR_PAD_BOTH) . "|";
    echo str_pad(getDeskripsiGrade($value["grade"]), 13, " ", STR_PAD_BOTH) . "|" . str_pad(getStatus($value["nilai"]), 13, " ", STR_PAD_BOTH) . "|" . PHP_EOL;
}