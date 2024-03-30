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



?>