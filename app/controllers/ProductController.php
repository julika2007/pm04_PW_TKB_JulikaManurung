<?php
require_once __DIR__ . "/../helpers/view.php";
require_once __DIR__ . "/../middleware/AuthMiddleware.php";

class ProductController
{
    public function index()
    {
        AuthMiddleware::handle();

        require_once __DIR__ . "/../models/Product.php";
        require_once __DIR__ . "/../../config/database.php";

        $product  = new Product($pdo);
        $products = $product->all();

        render("products/index", ["products" => $products], "Produk - mY Store");
    }
}
