<?php
require "../App/Core/Database.php";

class Auth {
    private $db;
    private $config;

    public function __construct() {
        $this->config = require("../App/config.php");
        $this->db = new Database($this->config);
    }

    public function getUser($username) {
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->db->execute($query, [$username]);
        return $stmt->fetch();
    }
    

    public function register($username, $password, $email) {
        $query = "INSERT INTO users (username, password, email)
        VALUES (:username, :password, :email);";
        $params = [
            ":username" => $username,
            ":password" => password_hash($password, PASSWORD_BCRYPT),
            ":email" => $email
        ];
        $this->db->execute($query, $params);
    }


    public function createAdmin($username, $password, $email) {
        $query = "INSERT INTO users (username, password, email, admin)
        VALUES (:username, :password, :email, :admin);";
        $params = [
            ":username" => $username,
            ":password" => password_hash($password, PASSWORD_BCRYPT),
            ":email" => $email,
            ":admin" => true
        ];
        $this->db->execute($query, $params);
    }

    
}
?>
