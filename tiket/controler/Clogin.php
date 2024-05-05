<?php

include 'database/database.php'; // Pastikan path ke file database.php sudah benar

class CLogin extends Controller {
    private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
    public function login() {
        // Validasi login jika data telah dikirimkan
        if (isset($_POST["SUBMIT"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $loginModel = new LoginModel($this->conn); // Membuat objek LoginModel dengan koneksi database

            if ($loginModel->validateUser($username, $password)) {
                // Jika pengguna valid, arahkan ke homepage
                header("Location: homepage.php");
                exit();
            } else {
                // Jika pengguna tidak terdaftar, tampilkan pesan kesalahan
                echo "<script>alert('Akun Tidak Terdaftar')</script>";
            }
        }
    }
}

?>