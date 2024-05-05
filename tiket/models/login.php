<?php

class LoginModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function validateUser($username, $password) {
        // Gunakan prepared statement untuk mencegah SQL injection
        $query = "SELECT * FROM logindb WHERE Username=? AND Password=?";
        $stmt = mysqli_prepare($this->conn, $query);

        mysqli_stmt_bind_param($stmt, "ss", $username, $password);

        // Execute statement
        mysqli_stmt_execute($stmt);

        // Simpan hasil
        $result = mysqli_stmt_get_result($stmt);

        // Periksa jika ada baris yang sesuai
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                return true; // Pengguna valid
            } else {
                return false; // Pengguna tidak terdaftar
            }
        } else {
            return false; // Kesalahan query
        }
    }
}

?>

