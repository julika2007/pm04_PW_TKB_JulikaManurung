<?php
// Merender halaman ke dalam layout utama.
function render(string $page, array $data = [], string $title = "mY Store"): void
{
    extract($data);
    ob_start();
    require __DIR__ . "/../../views/pages/" . $page . ".php";
    $content = ob_get_clean();
    require __DIR__ . "/../../views/layouts/main.php";
}
