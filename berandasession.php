<?php
    session_start(); //sesi tangkap login
    if(!$_SESSION['user']){
        header('location: latihan7-session.php');
    }
?>

<h1>Selamat Datang di Web NF</h1>
<h2>Anda login sebagai <mark><?= $_SESSION['user'] ?></mark></h2>
<br>

<form action="" method="post">
    <input type="submit" name="logout" value="logout">
</form>

<?php 
if(isset($_POST['logout'])){
    session_destroy(); //sesi lepas login
    header('location: latihan7-session.php');
}
?>