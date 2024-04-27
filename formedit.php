<?php
$id = $_GET['ID'];
include("database.php");
if (isset($_POST["Edit"])) {
    $nama = $_POST['Editnama'];
    $alamat = $_POST['Editalamat'];
    $konser = $_POST['EditKonser'];
    $tanggal = $_POST['EditTanggal'];
    $jumlahTiket = $_POST['EditTiket'];
    $sql = "UPDATE datapesan SET NamaAnda = '$nama', Alamat = '$alamat', NamaKonser = '$konser', Tanggal = '$tanggal', JumlahTiket = $jumlahTiket WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Data berhasil Edit ke dalam database!");</script>';
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
                <h2>Edit Data</h2>
                <input type="text" value="<?= $data['NamaAnda']; ?>" name="Editnama" class="box">
                <input type="text" value="<?= $data['Alamat']; ?>" name="Editalamat" class="box">
                <input type="text" value="<?= $data['NamaKonser']; ?>" name="EditKonser" class="box">
                <input type="date" placeholder="Tanggal" name="EditTanggal" class="box" value="<?= $data["Tanggal"]; ?>">
                <input type="text" value="<?= $data['JumlahTiket']; ?>" name="EditTiket" class="box"><br>
                <button type="submt" class="simpan" name="Edit">Edit</button>
            </form>
            </center>
        </div>
    </div>
</body>
</html>