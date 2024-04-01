<h1>Selamat Datang di Web NF </h1>

<br>

<form action="" method="POST">
    <input type="submit" name="logout" value="logout">
</form>

<?php 
if(isset($_POST['logout'])){
    header('location: latihan6.php');
}
?>