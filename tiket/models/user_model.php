<?php
require_once '../tiket/core/database.php';

class user_model{

  static function read(){
    $db = new Database();
    $db->query("SELECT * FROM `pesandb`");
    return $db->resultSet();
    $data = array();
    
  }

  static function create($nama, $alamat, $konser, $tgl, $jumlah, $foto){
    global $conn;
    $query = "INSERT INTO pesandb (`id`, `nama`, `alamat`, `konser`, `tanggal`, `jumlahtiket`, `foto`) values (?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    // $stmt->bind_param("ssssi", $nama, $deskripsi, $link, $tgl, $id);
    // $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    $stmt->close();
    return $result;
  }

 
//   static function update($id, $nama, $deskripsi, $link, $tgl){
//     global $conn;
//     $stmt = $conn->prepare("update portofolio set nama_porto=?, deskripsi_porto=?, link_porto=?, tgl_upload=? WHERE id_porto=".$id);
//     $stmt->bind_param("ssss", $nama, $deskripsi, $link, $tgl);
//     $stmt->execute();
//     $result = $stmt->affected_rows > 0 ? true : false;
//     $stmt->close();
//     return $result;
//   }

//   static function delete($id){
//     global $conn;
//     $query = "delete from portofolio where id_porto=?";
//     $stmt = $conn->prepare($query);
//     $stmt->bind_param('i', $id);
//     $stmt->execute();
//     $result = $stmt->affected_rows > 0 ? true : false;
//     $stmt->close();
//     return $result;
//   }
// }
}