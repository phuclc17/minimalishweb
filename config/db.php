<?php
class DB {
    public static function connect() {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=minimalishdb;charset=utf8", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
?>
