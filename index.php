<?php
session_start();

// Điều hướng controller và action
$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

$controllerFile = "controllers/{$controller}UserController.php";
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $className = ucfirst($controller) . 'Controller';
    $obj = new $className();
    if (method_exists($obj, $action)) {
        $obj->$action();
    } else {
        echo "Phương thức $action không tồn tại trong $className";
    }
} else {
    echo "Không tìm thấy controller $controller";
}
?>
