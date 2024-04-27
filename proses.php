<?php
function edit($nama, $alamat, $konser, $tanggal, $jumlahTiket, $id){
    include("database.php");
    $sql = "UPDATE datapesan SET NamaAnda = '$nama', Alamat = '$alamat', NamaKonser = '$konser', Tanggal = '$tanggal', JumlahTiket = $jumlahTiket WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

