<?php
    //array: sekumpulan data
    //array numerik dan array asosiatif

    // 1. array numerik
    $ar_buah = ['Pepaya','Mangga','Pisang','Anggur','Jeruk'];

    //cetak index ke ?
    echo $ar_buah[4];
    echo "<hr>";

    //tampilkan jumlah total pada buah
    $jumlah = count($ar_buah); //agregat untuk array
    echo $jumlah;
    echo "<hr>";

    //lihat hasil data buah dengan foreach
    foreach ($ar_buah as $value) {
        echo "$value <br>";
    }
    echo "<hr>";

    // 2. Array Asosiatif
    $ar_hewan = [10 => 'Babi Ngepet', 20 => 'Bebek','Kucing', 30 => 'Putri Duyung','Anjing Galak'];
    echo $ar_hewan[10];
    echo '<hr>';

    //lihat hasil data hewan dengan foreach
    foreach ($ar_hewan as $id => $value) {
        echo "$id $value <br>";
    }
    echo '<hr>';

    // 3. Array Multidimensi (Array dalam Array)
        //cara 1
    $daftar_tahanan = [
        ["nama" => "Budi", "alamat" => "Depok", "Telp" => 211231, "status" => "Jomblo"],
        ["nama" => "Alif", "alamat" => "Bogor", "Telp" => 925622, "status" => "Duda"],
        ["nama" => "Jamal", "alamat" => "Mars", "Telp" => 2416531, "status" => "Jomblo Gatel"]
    ];

    foreach($daftar_tahanan as $namax){
        echo "$namax[nama] <br>";
    }
    echo '<hr>';

        //cara 2
    $a1 = ["nama" => "Budi", "alamat" => "Depok", "Telp" => 211231, "status" => "Jomblo"];
    $a2 = ["nama" => "Alif", "alamat" => "Bogor", "Telp" => 925622, "status" => "Duda"];
    $a3 = ["nama" => "Jamal", "alamat" => "Mars", "Telp" => 2416531, "status" => "Jomblo Gatel"];

    $daftar_siswa = [$a1, $a2, $a3];
    foreach ($daftar_siswa as $siswa) {
        echo "$siswa[nama] <br>";
    }

?>