<?php
require_once __DIR__ . '/../config/db.php';

class Model {
    protected $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }
}
