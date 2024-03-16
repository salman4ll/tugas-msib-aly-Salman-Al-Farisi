<?php

class HomeModel
{
    private $table = 'peserta';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPeserta()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPesertaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        return $this->db->single();
    }

    public function daftarPeserta($data)
    {
        $query = "INSERT INTO $this->table (nama, email, alamat, nomor, nim, prodi, created_at) VALUES (:nama, :email, :alamat, :nomor, :nim, :prodi, NOW())";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('nomor', $data['nomor']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('prodi', $data['prodi']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updatePeserta($data)
    {
        $query = "UPDATE $this->table SET nama = :nama, email = :email, alamat = :alamat, nomor = :nomor, nim = :nim, updated_at = NOW() WHERE id_peserta = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('nomor', $data['nomor']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('prodi', $data['prodi']); // Menambahkan binding untuk id

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteProduct($id)
    {
        $query = "DELETE FROM $this->table WHERE id_peserta = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
