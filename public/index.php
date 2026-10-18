<?php
session_start();

require_once __DIR__ . "/../app/controllers/HomeController.php";
require_once __DIR__ . "/../app/controllers/ProductController.php";
require_once __DIR__ . "/../app/controllers/AuthController.php";

$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch ($uri) {
    case "/":
        (new HomeController())->index();
        break;
    case "/products":
        (new ProductController())->index();
        break;
    case "/login":
        $auth = new AuthController();
        $_SERVER["REQUEST_METHOD"] === "POST" ? $auth->authenticate() : $auth->login();
        break;
    case "/logout":
        (new AuthController())->logout();
        break;
    default:
        http_response_code(404);
        echo "404 - Halaman tidak ditemukan";
}
