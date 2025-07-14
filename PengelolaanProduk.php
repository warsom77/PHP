<?php

/*
 * Buat sistem untuk menyimpan daftar produk (nama, stok, harga). Tambahkan fitur:
 * Menampilkan semua produk
 * Menambahkan produk baru
 * Menghapus produk berdasarkan nama
 */

require_once "functions/PengelolaanProduk.php";

$products = loadProducts();

while (true) {
    echo "======= INVENTORY =======" . PHP_EOL;
    echo "1. Tampilkan Produk" . PHP_EOL;
    echo "2. Tambah Produk" . PHP_EOL;
    echo "3. Hapus Produk" . PHP_EOL;
    echo "4. Filter Produk" . PHP_EOL;
    echo "0. Keluar" . PHP_EOL;
    echo "-------------------------" . PHP_EOL;
    echo "Pilih menu : ";
    $menu = trim(fgets(STDIN));

    switch ($menu) {
        case "1":
            showProducts($products);
            break;
        case "2":
            echo "Nama produk   : ";
            $nama = trim(fgets(STDIN));
            echo "Stok          : ";
            $stok = trim(fgets(STDIN));
            echo "Harga (angka) : ";
            $harga = trim(fgets(STDIN));
            if (is_string($nama) && is_numeric($stok) && is_numeric($harga)) {
                addProduct($products, strtoupper($nama), $stok, $harga);
                echo "✅ Produk berhasil ditambahkan." . PHP_EOL;
            } else {
                echo "Nama produk harus string, stok dan harga harus angka.";
            }
            break;
        case "3":
            echo "Nama produk   : ";
            $nama = trim(fgets(STDIN));
            if ($nama) {
                if (deleteProduct($products, strtoupper($nama))) {
                    echo "🗑️ Produk berhasil dihapus." . PHP_EOL;
                } else {
                    echo "Produk tidak ditemukan." . PHP_EOL;
                }
            } else {
                echo "Nama produk harus string.";
            }
            break;
        case "4":
            echo "Range harga minimum : ";
            $min = trim(fgets(STDIN));
            echo "Range harga maximum : ";
            $max = trim(fgets(STDIN));
            if (is_numeric($min) && is_numeric($max)) {
                global $filterHarga;
                $hasil = filterProduct($products, fn($p) => $filterHarga($p, $min, $max));
                showProducts($hasil);
            } else {
                echo "Range harga minimum dan maximum harus angka";
            }
            break;
        case "0": exit;
        default: echo "Menu tidak valid."; break;
    }
}
