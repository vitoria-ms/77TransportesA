<?php

declare(strict_types=1);

require __DIR__ . "/vendor/autoload.php";

$url = $_GET['url'] ?? "/";
switch ($url) {
    case "/":
        echo "Página Inicial";
        break;
        case "login":
            echo "Página de Login";
            break;
            case "cadastro":
                echo "Página de Cadastro";
                break;
    default:
    echo "404 - Página não Encontrada";
        break;
}