<?php
// Hari ini: Senin, 16 April 2010, Jam 12:00 AM

$hari = [1=>'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu','Minggu'];
$bulan = ['01'=>'Januari', '02'=>'Februari', 9=>'Sept', 'Oktober'];

$hari_ke = date('N'); // nomor urut hari ke-x
echo $hari_ke."<hr>";
$bulan_ke = date('m');

echo "Hari ini: $hari[$hari_ke], ".date('d')." ".$bulan[$bulan_ke];

// Pengulangan
if ($hari_ke == 1){
    $hari = "Senin";
}