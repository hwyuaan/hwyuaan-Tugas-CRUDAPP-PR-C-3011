<?php
// $id = ($_GET['ID']);
// include("database.php");
// $data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM pesandb Where Id=$id"));
// if (isset($_POST["Pesan"])) {
//     $nama = $_POST['Editnama'];
//     $alamat = $_POST['Editalamat'];
//     $konser = $_POST['Editkonser'];
//     $tanggal = $_POST['Edittanggal'];
//     $tiket = $_POST['EditTiket'];
   
//     // Periksa apakah file telah diunggah
//     if(isset($_FILES['foto']) && $_FILES['foto']['name'] != '') {
//         $foto = $_FILES['foto']['name'];
//         $foto_tmp = $_FILES['foto']['tmp_name'];
//         move_uploaded_file($foto_tmp, "uploads/" . $foto);
//     } else {
//         $foto =  $data["foto"]; 
//     }
    
//     $sql = "UPDATE pesandb SET nama = '$nama', alamat = '$alamat', konser = '$konser', tanggal = '$tanggal', jumlahtiket = '$tiket', foto ='$foto' WHERE id = '$id'";
//     if ($conn->query($sql) === TRUE) {
//         echo '<script>alert("Data berhasil diubah dalam database!");</script>';
//         header("Location: index.php");
//         exit();
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }

// // $id = intval($_GET['ID']);
// include("database.php");
// $data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM pesandb Where Id=$id"));
// if (isset($_POST["Pesan"])) {
//     $nama = htmlspecialchars($_POST['Editnama']);
//     $alamat = htmlspecialchars($_POST['Editalamat']);
//     $konser = htmlspecialchars($_POST['Editkonser']);
//     $tanggal = htmlspecialchars($_POST['Edittanggal']);
//     $tiket = htmlspecialchars($_POST['EditTiket']);
   
   
//     if(isset($_FILES['foto']) && $_FILES['foto']['name'] != '') {
//         $foto = $_FILES['foto']['name'];
//         $foto_tmp = $_FILES['foto']['tmp_name'];
//         move_uploaded_file($foto_tmp, "uploads/" . $foto);
//     } else {
//         $foto =  $data["foto"]; 
//     }
    
//     $sql = "UPDATE pesandb SET nama = '$nama', alamat = '$alamat', konser = '$konser', tanggal = '$tanggal', jumlahtiket = '$tiket', foto ='$foto' WHERE id = '$id'";
//     if ($conn->query($sql) === TRUE) {
//         echo '<script>alert("Data berhasil diubah dalam database!");</script>';
//         header("Location: index.php");
//         exit();
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Data</title>
</head>
<body>
<center>
<div class="containerpage">
        <div class="title">Edit Data Tiket</div>
        <div class="contentpage">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="input-inbox">
                    <span> Masukkan Nama Anda</span>
                    <input type="text" value="<?= $data['nama']; ?>" name="Editnama" class="box">
                </div>
                <div class="input-inbox">
                    <span>Masukkan Alamat Anda</span>
                    <input type="text" value="<?= $data['konser']; ?>" name="Editkonser" class="box">
                </div>
                <div class="input-inbox">
                    <span>Masukkan Nama Konser</span>
                    <input type="text" value="<?= $data['konser']; ?>" name="Editkonser" class="box">
                </div>
                <div class="input-inbox">
                    <span>Massukkan Tanggal</span>
                    <input type="date" placeholder="tanggal" name="Edittanggal" class="box" value="<?= $data["tanggal"]; ?>">
                </div>
                <div class="input-inbox">
                    <span>Jumlah Tiket</span>
                    <input type="text" value="<?= $data['jumlahtiket']; ?>" name="EditTiket" class="box">
                </div>
                <div class="input-inbox">
                    <span>Upload Bukti Pembayaran</span>
                    <input type="file" value="<?= $data['foto']; ?>" placeholder="Masukkan Bukti Pembayaran" name="foto" class="box" >
                </div>
                <button type="submit" class="simpan" name="Pesan">Simpan</button>
            </form>
        </div>
    </div>
</div>   
</center>
</body>
</html>

