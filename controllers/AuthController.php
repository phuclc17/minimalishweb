<?php
require_once 'models/User.php';

class AuthController {
    public function login() {
        include 'views/auth/login.php';
    }

    public function register() {
        include 'views/auth/register.php';
    }

    public function logout() {
        session_destroy();
        header("Location: index.php");
    }

    public function handleLogin() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userModel = new User();
        $user = $userModel->checkLogin($username, $password);

        if ($user) {
            $_SESSION['user'] = $user;
            header("Location: index.php");
        } else {
            echo "Sai tên đăng nhập hoặc mật khẩu.";
        }
    }

    public function handleRegister() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $userModel = new User();
        $userModel->register($username, $password, $email);

        header("Location: index.php?controller=auth&action=login");
    }
}
