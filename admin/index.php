<?php
ob_start();
session_start();
require_once __DIR__ . '/../commoms/function.php';
require_once __DIR__ . '/controller/userController.php';
require_once __DIR__ . '/controller/trangchu.php';
require_once __DIR__ . '/model/userModel.php';
// abc
$act = $_GET['act'] ?? '/';
$id_user = $_GET['id_user'] ?? null;

match ($act) {
    '/' => (new trang_chu())->trang_chu(),
    'listUser' => (new UserController())->listUsers(),
    'addUser' => (new UserController())->addUser(),
    'insertUser' => (new UserController())->insertUser(),
    'deleteUser' => (new UserController())->deleteUser($id_user),
    default => throw new Exception("No matching action found for '$act'"),
};

ob_end_flush();
