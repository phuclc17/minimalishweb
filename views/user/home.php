<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Minimalish Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: black;
      color: white;
      font-family: 'Arial', sans-serif;
      overflow-x: hidden;
    }

    .left-menu a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      text-transform: uppercase;
      transition: 0.3s;
    }

    .left-menu a:hover {
      opacity: 0.6;
    }

    .auth-buttons a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      border: 1px solid white;
      padding: 8px 16px;
      border-radius: 4px;
      transition: all 0.3s;
    }

    .auth-buttons a:hover {
      background-color: white;
      color: black;
    }

    .center-title {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 4rem;
      letter-spacing: 4px;
      font-weight: bold;
      pointer-events: none;
      z-index: 1050;
    }

    .bg-image {
      background-size: cover;
      background-position: center;
      height: 100vh;
    }

    .extra-img {
      height: 80vh;
      background-size: cover;
      background-position: center;
    }

    @media (max-width: 768px) {
      .center-title {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

  <!-- Auth Buttons -->
  <div class="position-fixed top-0 end-0 m-3 auth-buttons d-flex gap-2 z-3">
    <a href="index.php?action=login">Login</a>
    <a href="index.php?action=register">Register</a>
  </div>

  <!-- Fixed Center Title -->
  <div class="center-title text-white text-center">MINIMALISH</div>

  <!-- Main Section -->
  <div class="container-fluid d-flex p-0">

    <!-- Left Sidebar -->
    <div class="d-flex flex-column justify-content-center align-items-start ps-4 gap-3 col-12 col-md-2 left-menu z-2">
      <a href="index.php?page=category">SHOP</a>
      <a href="#">COLLECTION</a>
      <a href="#">EDITORIAL</a>
      <a href="#">ABOUT</a>
      <a href="#">SEARCH</a>
      <a href="#">CART</a>
    </div>

    <!-- Left Image -->
    <div class="d-none d-md-block col-md-5 bg-image" style="background-image: url('https://media.gq.com/photos/5f106f8f97f256cb0f1930d4/master/w_1600%2Cc_limit/03-Yohji-Yamamoto-menswear-Spring-2021-humble-minimalism-gq-july.jpg');">
    </div>

    <!-- Right Image -->
    <div class="d-none d-md-block col-md-5 bg-image" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiACJEBvuRBAAdTdaa6pgeAADhNWDRLQIbcg&s');">
    </div>

  </div>

  <!-- Additional Images Section -->
  <div class="container-fluid p-0">
    <div class="row gx-0">
      <div class="col-md-6 extra-img" style="background-image: url('https://i.ytimg.com/vi/1m_LEqP9unA/oardefault.jpg?sqp=-oaymwEYCJUDENAFSFqQAgHyq4qpAwcIARUAAIhC&rs=AOn4CLD8IjsMU1o531oyJvvqqo_6PygtBg');">
      </div>
      <div class="col-md-6 extra-img" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjjg37Ga3oQBryiJjpiCbvp8ptN_7mzZoNFA&s');">
      </div>
    </div>
  </div>

</body>
</html>
