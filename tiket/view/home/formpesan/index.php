<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Form Pesan</title>
</head>
<body>
<center>
<div class="containerpage">
        <div class="title">Pesan Tiket</div>
        <div class="contentpage">
            <form action="<?php echo BASEURL ?>Ctambah/tambah" method="POST" enctype="multipart/form-data">
                <div class="input-inbox">
                    <span> Masukkan Nama Anda</span>
                    <input type="text" placeholder="Masukkan Nama Anda" name="nama" class="box">
                </div>
                <div class="input-inbox">
                    <span>Masukkan Alamat Anda</span>
                    <input type="text" placeholder="Masukkan Alamat Anda" name="alamat" class="box">
                </div>
                <div class="input-inbox">
                    <span>Masukkan Nama Konser</span>
                    <input type="text" placeholder="Nama Konser" name="konser" class="box">
                </div>
                <div class="input-inbox">
                    <span>Massukkan Tanggal</span>
                    <input type="date" placeholder="Tanggal" name="tanggal" class="box"  value="<?php echo date('Y-m-d'); ?>">
                </div>
                <div class="input-inbox">
                    <span>Jumlah Tiket</span>
                    <input type="text" placeholder="Jumlah Tiket" name="jumlahtiket" class="box"><br>
                </div>
                <div class="input-inbox">
                    <span>Upload Bukti Pembayaran</span>
                    <input type="file" placeholder="Masukkan Bukti Pembayaran" name="foto" class="box"><br>
                </div>
                <button type="submit" class="simpan" name="Pesan">Simpan</button>
            </form>
        </div>
    </div>
    <!-- <script>
        function validateForm() {
            var konfirmasi = confirm("Anda yakin menambah data?");
            if (konfirmasi) {
                return true
            }else{
                return false
            }}
            </script> -->
</body>
</center>
</html>
<?php

// include("database.php");
// if (isset($_POST["Pesan"])) {
//     $nama = $_POST['nama'];
//     $alamat = $_POST['alamat'];
//     $konser= $_POST['konser'];
//     $tanggal = $_POST['tanggal'];
//     $jumlahtiket = $_POST['jumlahtiket'];
//     $foto = $_FILES['foto'];

//     //Memeriksa apakah ada kesalahan saat mengunggah file
//     if ($foto['error'] === 0) {
//         $uploadDir = "uploads/";
//         $uploadPath = $uploadDir .basename($foto['name']);

//         $sql = "INSERT INTO pesandb (nama, alamat, konser, tanggal,jumlahtiket, foto) VALUES ('$nama', '$alamat', '$konser', '$tanggal', '$jumlahtiket', '$uploadPath')";
//         move_uploaded_file($foto['tmp_name'], $uploadPath);
//         if (mysqli_query($conn, $sql)) {
//             echo "<script>alert('Done');window.location.replace('index.php');</script>";
//         } else {
//             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//         }
//     } else {
//         echo "File upload error.";
//     }
// }

// include("database.php");
// if (isset($_POST["Pesan"])) {
//     $nama = mysqli_real_escape_string($conn, $_POST['nama']);
//     $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
//     $konser = mysqli_real_escape_string($conn, $_POST['konser']);
//     $tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
//     $jumlahtiket = mysqli_real_escape_string($conn, $_POST['jumlahtiket']);

//     //Memeriksa apakah ada kesalahan saat mengunggah file
//     if ($_FILES['foto']['error'] === 0) {
//         $uploadDir = "uploads/";
//         $uploadPath = $uploadDir . basename($_FILES['foto']['name']);

//         $sql = "INSERT INTO pesandb (nama, alamat, konser, tanggal, jumlahtiket, foto) VALUES ('$nama', '$alamat', '$konser', '$tanggal', '$jumlahtiket', '$uploadPath')";
//         $stmt = mysqli_prepare($conn, $sql);
//         mysqli_stmt_bind_param($stmt,$nama, $alamat, $konser, $tanggal, $jumlahtiket, $uploadPath);

//         if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadPath) && mysqli_stmt_execute($stmt)) {
//             echo "<script>alert('Done');window.location.replace('index.php');</script>";
//         } else {
//             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//         }
//     } else {
//         echo "File upload error.";
//     }
// }


?> 

