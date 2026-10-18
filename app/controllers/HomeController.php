<?php
require_once __DIR__ . "/../helpers/view.php";

class HomeController
{
    public function index()
    {
        render("home", [], "Home - mY Store");
    }
}
