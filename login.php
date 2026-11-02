<?php
echo "Ini adalah halaman Login,
      digunakan untuk SET SESSION";
session_start();
$_SESSION['username'] = 'Budi';
$_SESSION['role'] = 'admin';
