<?php

include("database.php");
if (isset($_POST["Pesan"])) {
    if (!empty($_POST['nama']) && !empty($_POST['alamat']) && !empty($_POST['Konser']) && !empty($_POST['Tanggal']) && !empty($_POST['Tiket'])) {
        if(is_numeric($_POST['Tiket'])){
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $konser = $_POST['Konser'];
            $tanggal = $_POST['Tanggal'];
            $jumlahTiket = $_POST['Tiket'];
            $sql = "INSERT INTO datapesan (NamaAnda, Alamat, NamaKonser, Tanggal, JumlahTiket) VALUES ('$nama', '$alamat', '$konser', '$tanggal', '$jumlahTiket')";
            if ($conn->query($sql) === TRUE) {
                echo '<script>alert("Data berhasil ditambahkan ke dalam database!");</script>';
                header("Location: index.php"); // Ganti dengan nama file halaman utama Anda
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }else{
            echo '<script>alert("Jumlah tiket harus berupa integer/angka");</script>';

        }
    } else {
        echo '<script>alert("Harap lengkapi semua input!");</script>';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="containerform">
        <div class="formpesan">
            <center>
            <form action="#" method="post" onsubmit="return validateForm()">
                <h2>Pesan Tiket</h2>
                <input type="text" placeholder="Masukkan Nama Anda" name="nama" class="box">
                <input type="text" placeholder="Masukkan Alamat Anda" name="alamat" class="box">
                <input type="text" placeholder="Nama Konser" name="Konser" class="box">
                <input type="date" placeholder="Tanggal" name="Tanggal" class="box"  value="<?php echo date('Y-m-d'); ?>">
                <input type="text" placeholder="Jumlah Tiket" name="Tiket" class="box"><br>
                <button type="submt" class="simpan" name="Pesan">simpan</button>
            </form>
            </center>
        </div>
    </div>
    <script>
        function validateForm() {
            var konfirmasi = confirm("Anda yakin menambah data?");
            if (konfirmasi) {
                return true
            }else{
                return false
            }}
    </script>
</body>
</html>