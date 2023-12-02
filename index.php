<?php

declare(strict_types=1);

use Transportes\Controllers\ErroController;
use Transportes\Controllers\HomeController;
use Transportes\Controllers\LoginController;

require __DIR__ . "/vendor/autoload.php";

$url = $_GET['url'] ?? "/";
switch ($url) {
    case "/":
        $controller = new HomeController();
        $controller->index();
        break;
        case "login":
            $controller = new LoginController();
            $controller->login();
            break;
            case "cadastro":
                $controller = new LoginController();
                $controller->criarConta();
                break;
    default:
    $controller = new ErroController();
    $controller->erro404();
        break;
}