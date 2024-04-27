<?php
$id = $_GET['ID'];
include("database.php");
if (isset($_POST["Delete"])) {
    $sql = "DELETE FROM datapesan WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Data berhasil Hapus!");</script>';
        header("Location: index.php"); // Ganti dengan nama file halaman utama Anda
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
            <?php
            $data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM datapesan Where Id=$id"));
            ?>
            <form action="#" method="post">
                <h2>delete</h2>
                <h3>Nama         = "<?= $data['NamaAnda']; ?>"</h3>                
                <h3>Alamat       = "<?= $data['Alamat']; ?>"</h3>                
                <h3>Nama Konser  = "<?= $data['NamaAnda']; ?>"</h3>                
                <h3>Tanggal      = "<?= $data['Tanggal']; ?>"</h3>                
                <h3>Jumlah Tiket = "<?= $data['JumlahTiket']; ?>"</h3>             
                <button type="submt" class="simpan" name="Delete">Yakinnnnnn</button>
            </form>
        </center>
        </div>
    </div>
</body>
</html>