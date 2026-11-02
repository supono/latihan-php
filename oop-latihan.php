<?php
class Produk {
    public string $nama;
    public int $harga;
    public int $stok;

    public function tampilkanData() {
        echo "Nama Produk: " . $this->nama . "<br>";
        echo "Harga: " . $this->harga . "<br>";
        echo "Stok: " . $this->stok . "<br>";
    }

    public function hitungNilaiStok() {
        return $this->harga * $this->stok;
    }

    public function cekStok() {
        if ($this->stok > 0) {
            return "Tersedia";
        } else {
            return "Habis";
        }
    }
}

// Membuat objek pertama
$produk1 = new Produk();
$produk1->nama = "Buku Tulis";
$produk1->harga = 5000;
$produk1->stok = 10;

// Membuat objek kedua
$produk2 = new Produk();
$produk2->nama = "Pulpen";
$produk2->harga = 3000;
$produk2->stok = 20;

// Menampilkan produk pertama
$produk1->tampilkanData();
echo "Nilai Stok: " . $produk1->hitungNilaiStok() . "<br>";
echo "Status: " . $produk1->cekStok() . "<br>";

echo "<hr>";

// Menampilkan produk kedua
$produk2->tampilkanData();
echo "Nilai Stok: " . $produk2->hitungNilaiStok() . "<br>";
echo "Status: " . $produk2->cekStok() . "<br>";

echo "<hr>";

// Pengujian ketika stok habis
echo "<strong>Setelah stok Pulpen diubah menjadi 0:</strong><br>";

$produk2->stok = 0;

$produk2->tampilkanData();
echo "Nilai Stok: " . $produk2->hitungNilaiStok() . "<br>";
echo "Status: " . $produk2->cekStok();
