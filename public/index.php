<?php

    require("../vendor/autoload.php");

    $slug = $_GET["slug"] ?? "";

    $slug = explode("/", $slug);

    $resource = $slug[0] == "" ? "/" : $slug[0];
    $id = $slug[1] ?? null;

    switch ($resource) {
        case '/':
            echo "estas en la raiz";
            break;
        case 'incomes':
            echo "estas en incomes";
            break;
        case 'withdrawals':
            echo "estas en withdrawals";
            break;
        
        default:
            echo "404";
            break;
    }

?>