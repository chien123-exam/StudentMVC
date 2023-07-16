<?php

function view(string $viewPath, array $data  = []) {
    foreach ($data as $key => $value) {
        $$key = $value;
    }

    $viewFile = './Views/' . str_replace('.' , '/' ,$viewPath). '.php';

    require_once($viewFile);
}

function redirect($routeName)
{
    header("location:{$routeName}");
}