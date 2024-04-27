<?php
session_start();
include("database.php");
// Validasi login jika data telah dikirimkan
if (isset($_POST["SUBMIT"])) {
    // Lakukan validasi username dan password di sini
    // Contoh sederhana: jika username dan password sesuai, set session dan redirect ke halaman utama
    // echo '$_POST["username"]';
    $login = 0;
    foreach (mysqli_query($conn, "SELECT * FROM login") as $data){
        if ($_POST["username"] == $data["Username"] && $_POST["password"] == $data["Password"]) {
            header("Location: index.php"); // Ganti dengan nama file halaman utama Anda
            exit();
        }
    }
    echo "<script>alert('Akun Tidak Terdaftar')</script>";
    // $username = isset($_SESSION["username"]) ? $_SESSION["username"] : "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="pagelogin">
    <div class="wrapper">
       <form action="" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="username" id="" placeholder="username" required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="remember">
                <label for=""><input type="checkbox"> Remember me</label>
                <a href="">Lupa Password?</a>
            </div>
            <button type="submit" name="SUBMIT" class="btn"> Login</button>
            <div class="register-link">
                <p>Dont have an account <a href="#">Register</a></p>
            </div>
       </form>
    </div>
    
</body>
</html>