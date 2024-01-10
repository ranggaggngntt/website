<?php

echo "<h1> nilai Akademik Mahasiswa </h1>";

$nilai = 80;
$hasil = "";
if ($nilai > 0 && $nilai < 50) {
    $hasil = 'E';
} elseif ($nilai >= 50 && $nilai < 60) {
    $hasil = 'D';
} elseif ($nilai >= 60 && $nilai < 70) {
    $hasil = 'C';
} elseif ($nilai >= 70 && $nilai < 80) {
    $hasil = 'B';
} elseif ($nilai >= 80 && $nilai < 90) {
    $hasil = 'A';
} elseif ($nilai >= 90) {
    $hasil = 'A+';
}

echo "nilai mahasiswa: $hasil";

?>