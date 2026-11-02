<?php
class Mahasiswa {
    public string $nama;
    public string $nim;
    public function perkenalan() {
        return "Halo, saya " . $this->nama .
               ", NIM " . $this->nim;
    }
}
$mahasiswa1 = new Mahasiswa(); // create obj
$mahasiswa1->nama = "Budi";
$mahasiswa1->nim = "2026001";

// Membuat objek kedua
$mahasiswa2 = new Mahasiswa();
$mahasiswa2->nama = "Siti";
$mahasiswa2->nim = "2026002";

// Memanggil method
echo $mahasiswa1->perkenalan();
echo "<br>";
echo $mahasiswa2->perkenalan();


