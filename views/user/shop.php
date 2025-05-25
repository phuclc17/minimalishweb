<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shop - Minimalish</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: black;
      color: white;
      font-family: 'Arial', sans-serif;
    }

    .category-card {
      background-color: #1a1a1a;
      border: none;
      border-radius: 10px;
      overflow: hidden;
      transition: transform 0.3s;
    }

    .category-card:hover {
      transform: scale(1.03);
    }

    .category-card img {
      height: 300px;
      object-fit: cover;
    }

    .category-title {
      text-align: center;
      font-weight: bold;
      padding: 15px 0;
      text-transform: uppercase;
      font-size: 18px;
    }

    .container {
      padding-top: 60px;
    }

    .back-home {
      position: absolute;
      top: 20px;
      right: 30px;
    }

    .back-home a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      border: 1px solid white;
      padding: 8px 16px;
      border-radius: 4px;
      transition: all 0.3s;
    }

    .back-home a:hover {
      background-color: white;
      color: black;
    }
  </style>
</head>
<body>
  <div class="back-home">
    <a href="index.php">Back to Home</a>
  </div>

  <div class="container">
    <h1 class="text-center mb-5">Shop by Category</h1>
    <div class="row g-4">
      <?php
      // Kết nối cơ sở dữ liệu và lấy danh mục
      include_once 'models/CategoryModel.php';
      $categoryModel = new CategoryModel();
      $categories = $categoryModel->getAllCategories();

      foreach ($categories as $category) {
        $imageUrl = '';

        // Gán hình ảnh tương ứng theo id
        switch ($category['id']) {
          case 1:
            $imageUrl = 'https://sc3.locondo.jp/contents/commodity_image/Y0/Y04686EM00078_1_l.jpg';
            break;
          case 2:
            $imageUrl = 'https://verseas.co/cdn/shop/files/Oversized_Cotton_Trousers_SIMPLE_PROJECT_DESIGNER_BRAND_FASHION_AW23_COLLECTION_ITEM_10.jpg?v=1747066392&width=1946';
            break;
          case 3:
            $imageUrl = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCokQp2xOUidlqKPwV22au3I3x3UFU9OmR9w&s';
            break;
          case 4:
            $imageUrl = 'https://www.hlorenzo.com/cdn/shop/files/HP-Y98-700-DARK-BR1250411019_800x.jpg?v=1741647945';
            break;
          default:
            $imageUrl = 'https://via.placeholder.com/300x300.png?text=Category';
        }

        echo '
          <div class="col-md-3 col-sm-6">
            <div class="card category-card">
              <img src="' . $imageUrl . '" class="card-img-top" alt="' . htmlspecialchars($category['name']) . '">
              <div class="category-title">' . htmlspecialchars($category['name']) . '</div>
            </div>
          </div>
        ';
      }
      ?>
    </div>
  </div>
</body>
</html>
