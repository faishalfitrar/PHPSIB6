<?php
// variabel

// ini contoh komentar dalam php

/* komentar1
komentar2
komentar3
komentar4 */

// cetak
echo 'Belajar PHP <br>';
echo '<br>';
echo "Saya Senang Belajar \"PHP\"";
echo '<br>';
print "Belajar MySQL";
echo '<hr>';

//variabel user
$nama = "Dono Warkop"; //Data String
$alamat = "Bogor Raya";
$umur = 30; //Data Integer
$berat = 70.5; //Data Desimal 
echo $nama;
echo '<br>';
echo $alamat;
echo '<br>';
echo $umur;
echo '<br>';
echo $berat;
echo '<br>';
echo "Nama Saya $nama Alamat di $alamat <br>";
echo 'Nama Saya ' .$nama. ' Alamat di ' .$alamat. ' Umur Saya ' .$umur. ' dan Berat Saya ' .$berat;
echo '<hr>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Nama Saya <?php echo $nama ?></h2>
    <h2>Umur Saya <?= $umur ?> Tahun</h2>
    <hr>
</body>
</html>
<?php

//variabel system
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";

//variabel konstanta
//define: untuk memanggil variabel konstanta
define('PELAJARAN','PHP Dasar');
echo PELAJARAN;
echo "<br>";
echo "Ini Mata Pelajaran " .PELAJARAN;

echo "<hr>";
$a = 100;
$b = 80;
echo $a + $b;

echo "<hr>";

?>

<?php

//tipe data string
$itungstring = "Belajar PHP di Kampus Merdeka";
var_dump($itungstring); echo '<br>';

//mengetahui tipe variabel
$huruf = "Dono";
$hasil = gettype($huruf);
echo $hasil; echo '<br>';

$bil = 100;
$hasil = gettype($bil);
echo $hasil; echo '<br>';

$bil2 = 70.5;
$hasil = gettype($bil2);
echo $hasil;

echo '<hr>';
$baju = 'M'; //ukuran baju
switch($baju){
    case 'L': //cara 1 
    case 'l':
        echo 'Large';
        break;
    case 'M' && 'm': //cara 2
        echo 'Medium';
        break;
    default:
        echo 'Small';
}

/* $baju = 'M'; //ukuran baju
$baju = strtolower($baju) // cara 3
switch($baju){
    case 'L': //cara 1 
    case 'l':
        echo 'Large';
        break;
    case 'M' && 'm': //cara 2
        echo 'Medium';
        break;
    default:
        echo 'Small';
} */

//TUGAS SWITCH CASE
// Jika Nilai <= 0 nilai: Buruk
// Jika Nilai <= 40 nilai: Kurang
// Jika Nilai <= 70 nilai: Cukup
// Jika Nilai <= 80 nilai: Memuaskan
// Jika Nilai <= 100 nilai: Sangat Memuaskan
// Selain itu nilai: null

$nilai = 80; // inisiasi nilai
switch($nilai){
    case $nilai <= 0:
        echo "$nilai : Buruk";
        break;
    case $nilai <= 40:
        echo "$nilai : Kurang";
        break;
    case $nilai <= 70:
        echo "$nilai : Cukup";
        break;
    case $nilai <= 80:
        echo "$nilai : Memuaskan";
        break;
    case $nilai <= 100:
        echo "$nilai : Sangat Memuaskan";
        break;       
    default:
        echo "null";
}
echo "<hr>";

// TUGAS 2 SWITCHCASE
// jika nilai >= 85 dan nilain <= 100 grade: A
// jika nilai >= 75 dan nilain < 85 grade: B
// jika nilai >= 60 dan nilain < 75 grade: C
// jika nilai >= 35 dan nilain < 60 grade: D
// jika nilai >= 0 dan nilain < 35 grade: E
// selain itu grade: null

$nilai2 = 50; //inisiasi nilai
switch ($nilai2){
    case $nilai2 >= 0 && $nilai2 < 35:
        echo "$nilai2: E";
        break;
    case $nilai2 >= 35 && $nilai2 < 60:
        echo "$nilai2: D";
        break;
    case $nilai2 >= 60 && $nilai2 < 75:
        echo "$nilai2: C";
        break;
    case $nilai2 >= 75 && $nilai2 < 85:
        echo "$nilai2: B";
        break;
    case $nilai2 >= 85 && $nilai2 < 100:
        echo "$nilai2: A";
        break;
    default:
        echo "$nilai2: null";
}
?>