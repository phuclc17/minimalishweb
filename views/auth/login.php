<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <style>
    body {
      background: #000;
      color: white;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-box {
      border: 1px solid white;
      padding: 30px;
      width: 300px;
      text-align: center;
    }

    input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      background: #222;
      color: white;
      border: none;
      border-bottom: 1px solid white;
    }

    button {
      padding: 10px 20px;
      background: white;
      color: black;
      border: none;
      cursor: pointer;
      font-weight: bold;
    }

    a {
      color: white;
      font-size: 12px;
      display: block;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="form-box">
<h2>Đăng nhập</h2>
<form method="POST" action="index.php?controller=auth&action=handleLogin">
    <input type="text" name="username" placeholder="Tên đăng nhập" required><br>
    <input type="password" name="password" placeholder="Mật khẩu" required><br>
    <button type="submit">Đăng nhập</button>
</form>
    <a href="index.php?action=register">Don't have an account? Register</a>
  </div>
</body>
</html>
