<?php
require_once 'models/Category.php';

class CategoryController {
  public function index() {
    $model = new Category();
    $categories = $model->getAllCategories();
    include 'views/user/category.php';
  }
}
