<?php 
    session_start(); //sesi tangkap login
?>

<form action="" method="POST">
    <label for="">Username: </label>
    <input type="text" name="username" placeholder="Masukkan Username"><br><br>
    <label for="">Password: </label>
    <input type="password" name="password" placeholder="Masukkan Password"><br><br>
    <input type="submit" name="masuk" value="login">
</form>

<?php 
    if(isset($_POST['masuk'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // jika username dan password cocok maka dapat login
        // selain itu ditolak
        if($username == 'admin' && $password == 'rahasia'){
            $_SESSION['user'] = $username;
            header('location: beranda.php');
        } else {
            echo "<script>alert('Password Anda Salah, Coba Lagi!!')</script>";
        }
    }
?>