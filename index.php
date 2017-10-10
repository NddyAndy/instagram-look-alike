<?php

require 'config.php';

require 'routes.php';



$full_url = "http://{$_SERVER['HTTP_HOST']}{$_SERVER["REQUEST_URI"]}";

$filtered_url = parse_url($full_url, PHP_URL_PATH);

$controller = $app->processData($filtered_url, $_SERVER["REQUEST_METHOD"]);

require $controller;

