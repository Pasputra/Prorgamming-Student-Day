<?php

echo "<h3>PROSEDUSAL</h3>";
echo date('d-m-Y');

echo "<h3>OBJEK</h3>";
$tanggalHariIni = new DateTime();
echo $tanggalHariIni->format('d-m-Y'); 

echo "<h3>TIMESTAMP</h3>";
echo time();

echo "<h3>TIMESTAMP FUNGSI DATE</h3>";
$timestamp = 1234567890;
$stringDate = date('d-m-Y H:i', $timestamp);

echo "Timestamp: {$timestamp} <br>";
echo "String date: {$stringDate} <br>";

echo "<h3>STRING DATE</h3>";
echo strtotime("now") . '<br>'; # timestime untuk waktu sekarang
echo strtotime("2020-12-31") . '<br>'; # timestamp untuk tanggal 31 Desember 2020
echo strtotime("2020-12-31 12:00") . '<br>'; # timestamp untuk tanggal 31 Desember 2020 pukul 12:00

echo "<h3>INGGRIS</h3>";
echo strtotime("05th maret 2004") . '<br>'; # untuk tanggal 5 Maret 2004
echo strtotime("next sunday") . '<br>'; # hari minggu yang akan datang
echo strtotime("previous friday") . '<br>'; # hari jumat yang lalu
echo strtotime("+2 days") . '<br>'; # 2 hari lagi

echo "<h3>ZONA WAKTU</h3>";
date_default_timezone_set("America/Regina") . '<br>';

echo date("d-m-Y H:i") . '<br>';

echo "<h3>LOKAL</h3>";
date_default_timezone_set("Asia/Jakarta") . '<br>';

echo date("d-m-Y H:i");