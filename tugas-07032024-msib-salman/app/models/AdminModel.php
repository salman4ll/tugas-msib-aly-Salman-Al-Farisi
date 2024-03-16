<?php
class AdminModel
{
    private $table = 'admin';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data)
    {
        $this->db->query('INSERT INTO ' . $this->table . ' (nama, username, password, created_at) VALUES (:nama, :username, :password, NOW())');

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function login($username, $password)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username = :username');
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        if ($row) {
            $hashedPassword = $row->password;
            if (password_verify($password, $hashedPassword)) {
                return $row;
            }
        }

        return false;
    }


    public function findUserByEmail($email)
    {
        //Prepared statement
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
