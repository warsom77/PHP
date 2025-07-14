<?php

/*
 * Buat program yang menghitung gaji seorang karyawan berdasarkan jam kerja dan gaji per jam.
 * Jika karyawan bekerja lebih dari 40 jam, jam selebihnya dihitung sebagai lembur (1.5x upah).
 * Cetak total gaji dan keterangan apakah “Gaji Mencukupi” atau “Gaji Belum Mencukupi” (misal ambang Rp1.500.000).
 */

const GAJI_MINIMUM = 1_500_000;
const TARIF_LEMBUR = 1.5;

function hitungGaji(int $jamKerja, int $upahPerJam): int {
    if ($jamKerja > 40) {
        $jamLembur = $jamKerja - 40;
        $gajiLembur = $jamLembur * $upahPerJam * TARIF_LEMBUR;
        $gajiNormal = 40 * $upahPerJam;
        return $gajiLembur + $gajiNormal;
    } else {
        return $jamKerja * $upahPerJam;
    }
}

echo "Masukan jam kerja   : ";
$jamKerja = trim(fgets(STDIN));
echo "Masukan upah perjam : ";
$upahPerJam = trim(fgets(STDIN));
echo "-----------------------------------" . PHP_EOL;

if (is_numeric($jamKerja) && is_numeric($upahPerJam)) {
    $totalGaji = hitungGaji($jamKerja, $upahPerJam);
    $keterangan = $totalGaji >= GAJI_MINIMUM ? "Gaji Mencukupi" : "Gaji Belum Mencukupi";
    echo "Total Gaji : Rp " . number_format($totalGaji, 0, ',', '.') . PHP_EOL;
    echo "Keterangan : " . $keterangan . PHP_EOL;
} else {
    echo "ERROR: Jam kerja dan upah perjam harus angka";
    exit;
}