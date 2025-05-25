<?php
require_once 'config/db.php';

class Category {
  private $conn;

  public function __construct() {
    $db = new Database();
    $this->conn = $db->connect();
  }

  public function getAllCategories() {
    $sql = "SELECT * FROM tbl_categories";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
