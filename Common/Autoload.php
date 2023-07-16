<?php

// Autoload Models

spl_autoload_register(function ($className) {
    $modelFilePath = './Models/' . $className . '.php';
    $controllerFilePath = './Controllers/' . $className . '.php';

    if (file_exists($modelFilePath)) {
        require $modelFilePath;
    }

    //echo $controllerFilePath;

    if (file_exists($controllerFilePath)) {
        require $controllerFilePath;
    }
});