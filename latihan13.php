<?php
    //contoh fungsi bawaan dari PHP
    $str = 'Belajar PHP di Kampus Merdeka';
    echo $str;

    echo '<br>';

    $str = strtoupper($str); //huruf kapital semua
    echo $str;

    echo'<br>';

    $str = strtolower($str); //huruf kecil semua
    echo $str;

    echo '<br>';

    // ucfirst
    // ucwords

    $ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu', 'apel'];
    sort($ar_buah); //A-Z, Z-A:arsort
    foreach ($ar_buah as $value) {
        echo "$value <br>";
    }

    echo '<hr>';

    //1. fungsi tanpa argumen/parameter(?)
    function salam (){
        echo "Selamat pagi semuanya..";
    }
    salam(); //cetak function

    echo "<br>";

    //2. fungsi menggunakan parameter/argumen(...)
    function sapa($kawan){
        echo "Selamat pagi $kawan";
    }
    sapa("Ical"); //cetak 1
    $nama = 'Jamal';
    echo '<br>';
    sapa($nama); //cetak 2

    echo '<br>';

    //3. fungsi dengan parameter beserta isinya
    function kabar($kawan = 'Sabardi'){
        echo "Hai Apa Kabar $kawan";
    }
    kabar(); //cetak 1
    echo '<br>';
    kabar('Jamal'); //cetak 2
    echo '<br>';
    $siswa = 'Budi'; //cetak 3
    kabar($siswa);

    echo '<br>';

    //fungsi dengan void (tidak mengembalikan nilai)
    function hitung($x, $y){
        $z = $x + $y;
        echo $z;
    }
    hitung (80, 50);

    echo '<br>';

    //fungsi dengan return (mengembalikan nilai)
    function tambah ($a, $b){
        $c = $a + $b;
        return $c;
    }
    echo tambah (80, 50);

    echo '<hr>';

    //buat fungsi hitung umur
    function hitungUmur ($thn_lahir){
        $thn_sekarang = 2024;
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }
    echo hitungUmur(2001);
    echo '<br>';
    echo 'Umur saya sekarang ' . hitungUmur(2003) . ' tahun';


?>