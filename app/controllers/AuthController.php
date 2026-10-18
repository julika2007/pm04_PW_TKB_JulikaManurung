<?php
require_once __DIR__ . "/../helpers/view.php";

class AuthController
{
    public function login($error = null)
    {
        render("auth/login", ["error" => $error], "Login - mY Store");
    }

    public function authenticate()
    {
        require_once __DIR__ . "/../models/User.php";
        require_once __DIR__ . "/../../config/database.php";

        $username = trim($_POST["username"] ?? "");
        $password = $_POST["password"] ?? "";

        $user = (new User($pdo))->findByUsername($username);

        if ($user && password_verify($password, $user["password"])) {
            session_regenerate_id(true);
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["username"] = $user["username"];
            header("Location: /products");
            exit;
        }

        $this->login("Username atau password salah.");
    }

    public function logout()
    {
        session_destroy();
        header("Location: /login");
        exit;
    }
}
