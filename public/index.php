<?php
require_once '../core/Router.php';

$router = new Router();
$router->dispatch($_SERVER['REQUEST_URI']);