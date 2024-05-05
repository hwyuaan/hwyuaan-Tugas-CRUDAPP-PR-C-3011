<?php

require_once '../tiket/core/database.php';

class Tambahdata {
    private $table ='pesandb';
    private $db;

   public function __construct() {
       $this ->db = new database;
   }

   public function getAllPesan() {
       $this ->db->query('SELECT * FROM '. $this->table);
       return $this->db->resultSet();
   }
   
   public function tambahdatapesan($data) 
   {
        if (!isset($data['foto'])) {

            $data['foto'] = null;
        }

        $query = "INSERT INTO pesandb (nama, alamat, konser, tanggal, jumlahtiket, foto) VALUES (?, ?, ?, ?, ?, ?)";
        $this->db->query($query);
        $this->db->bind(1, $data['nama']);
        $this->db->bind(2, $data['alamat']);
        $this->db->bind(3, $data['konser']);
        $this->db->bind(4, $data['tanggal']);
        $this->db->bind(5, $data['jumlahtiket']);
        $this->db->bind(6, $data['foto']);
        $this->db->execute();
        return $this->db->rowCount();
    

    } 
       
    public function hapusdatapesan($id) 
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE id=:id';
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
?>
