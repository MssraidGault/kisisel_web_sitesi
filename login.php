<?php
// Kullanıcıdan gelen verileri al
$email = $_POST['email'];
$sifre = $_POST['sifre'];

// Doğru kullanıcı bilgileri (örnek: sabit)
$dogruEmail = "b2412100001@sakarya.edu.tr";
$dogruSifre = "b2412100001";

if ($email === $dogruEmail && $sifre === $dogruSifre) {
    echo "<h2>Hoşgeldiniz $sifre</h2>";
} else {
    header("Location: login.html");
    exit();
}
?>
