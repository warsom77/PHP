<?php

function loadProducts(): array {
    return [
        ["nama" => "KEYBOARD", "stok" => 7, "harga" => 250_000],
        ["nama" => "MOUSE", "stok" => 15, "harga" => 100_000],
        ["nama" => "MONITOR", "stok" => 5, "harga" => 1_500_000],
    ];
}

function showProducts(array $products): void {
    echo str_pad("NAMA PRODUK", 15) .
         str_pad("STOK", 5) .
         str_pad("HARGA", 15) . PHP_EOL;
    echo str_repeat("-", 35) . PHP_EOL;
    foreach ($products as $product) {
        echo str_pad(strtoupper($product["nama"]), 15) .
             str_pad($product["stok"], 5) .
             str_pad("Rp ". number_format($product["harga"], 0, ",", "."), 15) . PHP_EOL;
    }
}

function addProduct(array &$products, string $nama, int $stok, int $harga): void {
    $products[] = [
        "nama" => $nama,
        "stok" => $stok,
        "harga" => $harga
    ];
}

function deleteProduct(array &$products, string $nama): bool {
    foreach ($products as $key => $product) {
        if ($product["nama"] == $nama) {
            unset($products[$key]);
            return true;
        }
    }
    return false;
}

$filterHarga = fn(array $product, int $min, int $max): bool =>
    $product["harga"] >= $min && $product["harga"] <= $max;

function filterProduct(array $products, callable $callback): array {
    return array_values(array_filter($products, $callback));
}