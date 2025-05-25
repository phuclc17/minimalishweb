<?php
require_once('config/db.php');

class Product {
    public function getProductsByCategory($categoryId) {
        $conn = DB::connect();
        $stmt = $conn->prepare("SELECT * FROM products WHERE category_id = ?");
        $stmt->execute([$categoryId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
