<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>formdeleted</title>
</head>
<body>
<center>
<div class="containerpage">
        <div class="title">Hapus Data Tiket</div>
        <div class="contentpage">
        <form action="<?php echo BASEURL ?>Chapus/hapus" method="POST" enctype="multipart/form-data">
                <?php
                $data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM pesandb Where Id=$id"));
                ?>
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
                    <input type="file" placeholder="Masukkan Bukti Pembayaran" name="foto" class="box" value="<?= $data["foto"]; ?>">
                </div>
                <button type="submit" class="btndeleted" name="deleted">Hapus Data</button>
            </form>
        </div>
    </div>
</div>   
</center>
</body>
</html>
