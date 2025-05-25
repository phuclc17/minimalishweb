<?php
if ($_GET['action'] == 'home') {
    $controller = new UserController();
    $controller->home();
}
