<?php
echo "Ini adalah halaman Dashboard<hr>";
session_start();
if (isset($_SESSION['username']) != NULL){ 
    echo "Hai ".$_SESSION['username'];
    echo " hak askes anda sebagai ".$_SESSION['role']; 
} else { 
    echo "Akses di tolak, tidak ada Session"; 
}
