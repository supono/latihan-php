<pre>
    <?php print_r($_GET)?>
</pre>
<?php 
echo $_GET['nama'];
?>
<hr>
Registrasi
<form method="get" action="register.php">
    Nama: <input type="text" name="nama"><br>
    Alamat: <input type="text" name="alamat"><br>
    <input type="submit" name="submit" value="Kirim">
</form>