<?php

//fungsi if
//jika umur lebih dari 20 tahun, maka anda dapat mengendarai mobil (if)
//Jika umur rata-rata > 17 tahun, maka Anda dapat mengendarai motor (else if)
//Jika umur lebih 10 tahun, maka Anda dapat mengendarai sepeda (else if)
//Selain itu tidak boleh
$umur = 18; //ubah umurnya
if ($umur > 20){
    echo 'Selamat kamu dapat mengendarai mobil';
}
else if ($umur > 17){
    echo 'Selamat kamu dapat mengendarai motor';
}
else {
    echo 'Kamu dilarang mengendarai apapun';
}