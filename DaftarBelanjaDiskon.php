<?php

/*
 * Buat sistem daftar belanja sederhana.
 * Tampilkan semua item, lalu total harga keseluruhan.
 * Jika total di atas Rp100.000, berikan diskon 10%.
 * Cetak daftar dalam format rapi.
 */

$belanja = [];
$totalHarga = 0;
$diskon = 0;

echo "Masukan jumlah barang : ";
$jumlahBarang = trim(fgets(STDIN));
echo str_repeat('-', 30) . PHP_EOL;

if (is_numeric($jumlahBarang)) {
    for ($i = 0; $i < $jumlahBarang; $i++) {
        echo "Nama Barang  : ";
        $namaBarang = strtoupper(trim(fgets(STDIN)));
        echo "Harga Barang : ";
        $hargaBarang = trim(fgets(STDIN));
        if (is_string($namaBarang) && is_numeric($hargaBarang)) {
            $belanja[$i] = ["nama" => $namaBarang, "harga" => $hargaBarang];
            $totalHarga += $hargaBarang;
        } else {
            echo "ERROR: Nama barang harus string dan harga Barang harus angka";
            exit;
        }
    }
} else {
    echo "ERROR: Jumlah barang harus angka";
    exit;
}

$diskon = $totalHarga > 100_000 ? 10 : 0;
$hargaDiskon = $totalHarga - ($totalHarga * $diskon / 100);

echo str_repeat('-', 30) . PHP_EOL;
echo "Daftar Belanja" . PHP_EOL;

foreach ($belanja as $key => $item) {
    echo str_pad("- " . $item["nama"], 10) . " : Rp " . number_format($item["harga"], 0, ',', '.') . PHP_EOL;
}

echo str_repeat('-', 30) . PHP_EOL;
echo "Total Harga : " . number_format($totalHarga, 0, ',', '.') . PHP_EOL;
echo "Diskon      : $diskon%" . PHP_EOL;
echo str_repeat('-', 30) . PHP_EOL;
echo "Total Bayar : " . number_format($hargaDiskon, 0, ',', '.') . PHP_EOL;