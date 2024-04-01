<?php
    //looping dengan for
    for($x = 1; $x <= 10; $x = $x + 2){
        echo "Saya sedang belajar PHP cuy <br>";
    }
    echo '<hr>';

    //hitung pengulangan 10 s.d 1
    for($y = 10; $y >= 0; $y = $y - 2){
        echo "$y <br>";
    }
    echo '<hr>';

    //looping while
    $j = 1;
    while($j <= 10){
        echo "$j <br>";
        $j++;
    }
    echo '<hr>';

    //hitung pengulangan 10 s.d 1
    $k = 10;
    while ($k >= 0) {
        echo "$k <br>";
        $k--;
    }
    echo '<hr>';
?>

<form action="">
    Jumlah Siswa:
    <?php 
        for($z = 1; $z <= 10; $z = $z + 1){
            echo '<input type="radio" name="jk" value="Pria">' . $z;
        }   
    ?>
</form>