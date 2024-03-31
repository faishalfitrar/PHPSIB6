<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4 PHP</title>
</head>
<body>
    <form action="latihan4.php" method="POST">
        <div>
            <label>Nama</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">Tanggal Lahir</label>
            <input type="date" name="tgl">
        </div>
        <div>
            <label for="">Jenis Kelamin</label>
            <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
            <input type="radio" name="jk" value="Perempuan">Perempuan
        </div>
        <div>
            <input type="submit" value="Simpan">
        </div>
    </form>
</body>
</html>
<hr>
<?php
echo 'Nama: ' . $_POST['nama'] . '<br>';
echo 'Password: ' . $_POST['password'] . '<br>';
echo 'Email: ' . $_POST['email'] . '<br>';
echo 'Tanggal Lahir: '.  $_POST['tgl'] . '<br>';
echo 'Jenis Kelamin: ' . $_POST['jk'];

?>