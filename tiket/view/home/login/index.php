<?php
// include("database.php");
// // Validasi login jika data telah dikirimkan
// if (isset($_POST["SUBMIT"])) {
//     $username =$_POST["username"];
//     $password = $_POST["password"];

//     $query = "SELECT * FROM logindb WHERE Username='$username' AND Password='$password'";
//     $result = mysqli_query($conn, $query);

//     if ($result) {
//         if (mysqli_num_rows($result) > 0) {
//             header("Location:homepage.php");
//             exit();
//         } else {
//             echo "<script>alert('Akun Tidak Terdaftar')</script>";
//         }
//     } else {
//         echo "Error: " . mysqli_error($conn);
//     }

// }

session_start();
include("database.php");

// Validasi login jika data telah dikirimkan
if (isset($_POST["SUBMIT"])) {
    // Gunakan prepared statement untuk mencegah SQL injection
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);


    $query = "SELECT * FROM logindb WHERE Username=? AND Password=?";
    $stmt = mysqli_prepare($conn, $query);


    mysqli_stmt_bind_param($stmt, "ss", $username, $password);

    // Execute statement
    mysqli_stmt_execute($stmt);

    // Simpan hasil
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            header("Location:homepage.php");
            exit();
        } else {
            echo "<script>alert('Akun Tidak Terdaftar')</script>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

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