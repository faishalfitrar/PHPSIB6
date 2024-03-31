<?php

$nama = 'Budi Santoso';
$matkul = 'PHP';
$nilai = 60; // nilai yang diinput

// ternary
$ket = ($nilai >= 60) ? "lulus" : "gagal";

//if else
if ($nilai >= 85 && $nilai <= 100) $grade = 'A';
else if ($nilai >= 75 && $nilai < 85) $grade = 'B';
else if ($nilai >= 50 && $nilai < 75) $grade = 'C';
else if ($nilai >= 30 && $nilai < 50) $grade = 'D';
else if ($nilai >= 0 && $nilai < 30) $grade = 'E';
else $grade = '';

//switch case
switch($grade){
    case 'A': 
        $predikat = 'Memuaskan';
        break;
    case 'B': 
        $predikat = 'Bagus';
        break;
    case 'C': 
        $predikat = 'Cukup';
        break;
    case 'D': 
        $predikat = 'Kurang';
        break;
    case 'E': 
        $predikat = 'Jelek';
        break;
    default:
        $predikat = '';
}

echo '<hr>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 PHP</title>
</head>
<body>
    <h2>Nama Mahasiswa: <?= $nama ?></h2>
    <h2>Mata Kuliah <?= $matkul ?></h2>
    <h2>Nilai: <?= $nilai ?></h2>
    <h2>Keterangan: <?= $ket ?></h2>
    <h2>Grade: <?= $grade ?></h2>
    <h2>Predikat: <?= $predikat ?></h2>
</body>
</html>

<!--
NAMA MAHASISWA: Budi Santoso => variabel
Mata Kuliah: PHP => variabel
Nilai: 80 => nilai yang diinput
Keterangan: Lulus => ternary
Grade: B => if/else
Predikat: Bagus => switch/case 
-->