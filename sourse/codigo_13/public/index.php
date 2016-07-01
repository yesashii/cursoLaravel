<?php

use Illuminate\Http\Request;

use PlatziPHP\Http\Controller\HomeController;

require_once __DIR__.'/../vendor/autoload.php';


$request = Request::capture();

$request = Request::capture();

$controller = new HomeController();

echo $controller->index($request);