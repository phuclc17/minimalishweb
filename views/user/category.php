<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Danh Mục Sản Phẩm</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body style="background-color: black; color: white;">
  <div class="container mt-5">
    <h1 class="text-center mb-4">DANH MỤC SẢN PHẨM</h1>
    <div class="row">
      <?php foreach ($categories as $category): ?>
        <div class="col-md-4 mb-4">
          <div class="card text-white bg-dark">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($category['name']) ?></h5>
              <a href="index.php?page=products&category_id=<?= $category['id'] ?>" class="btn btn-outline-light">Xem sản phẩm</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>
