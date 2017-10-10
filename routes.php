<?php
require 'Model/Router.php';

$app = new Router();

$app->get("/", "Controllers/index.controller.php");
$app->post("about", "Controllers/index.controller.php");


