<?php 
    session_start(); //sesi tangkap login
    if(!$_SESSION['user']){
        header('location: latihan6.php');
    }
?>

<h1>Selamat Datang <?= $_SESSION['user'] ?> di NF Website</h1>

<br>

<form action="" method="POST">
    <input type="submit" name="logout" value="logout">
</form>

<?php 
if(isset($_POST['logout'])){
    session_destroy(); //lepas sesi login
    header('location: latihan6.php');
}
?>