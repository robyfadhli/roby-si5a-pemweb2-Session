<?php
session_start();
if (isset($_SESSION['login'])) { //JIKA SUDAH LOGIN
    //MENAMPILKAN ISI SESSION
    echo "<center><h1> Anda Berhasil Logout</h1>";
    echo "<h4> <a href='login.php'>Klik untuk LOGIN kembali</a></h4>";

}

?>