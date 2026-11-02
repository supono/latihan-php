<form method="post" action="kalkulator.php">
    <input type="text" name="nilai1"> * 
    <input type="text" name="nilai2">
    <input type="submit" name="submit" value="Hitung">
</form>
<hr>
<?php
$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
echo "Nilai 1 = ".$nilai1;
echo "<br>Nilai 2 = ".$nilai2;
echo "<hr>";
if (is_numeric($nilai1) &&  is_numeric($nilai2)){ // cek pastikan angka
    echo "Hasilnya adalah: ".(abs($nilai1) * abs($nilai2));
} else {
    echo "Input harus angka";
}
?>