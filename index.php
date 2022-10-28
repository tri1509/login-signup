<?php 
session_start();
ob_start();

require 'data/product.php';
require 'data/page.php';
require 'data/users.php';

require 'lib/data.php';
require 'lib/users.php';
require 'lib/pages.php';
require 'lib/product.php';
require 'lib/cart.php';
require 'lib/number.php';
require 'lib/url.php';
require 'lib/template.php';
?>
<?php
$mod = isset($_GET['mod']) ? $_GET['mod'] : 'home';
$act = isset($_GET['act']) ? $_GET['act'] : 'main';
$path = "modules/{$mod}/{$act}.php";

// cookie

if(!empty($_COOKIE['is_login'])){
    $_SESSION['is_login'] = $_COOKIE['is_login'];
    $_SESSION['user_login'] = $_COOKIE['user_login'];
}

// kiểm tra login
if(!is_login() && $path != 'modules/login/login.php'){
    redirect('?mod=login&act=login');
}

if (file_exists($path)) {
    require "{$path}";
} else {
    require "./modules/404.php";
}
?>