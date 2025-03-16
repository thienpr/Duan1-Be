<?php
ob_start();
session_start();
require_once __DIR__ . '/../commoms/function.php';

// $act = $_GET['act'] ?? '/';
// match ($act){
//     '/' => (new trang_chu())->trang_chu(),
// };
ob_end_flush();