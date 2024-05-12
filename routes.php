<?php

use Core\Router;
use Http\Controllers\Article;
use Http\Controllers\Auth;

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router = new Router();

$router->get('/auth', [Auth::class, 'index']);
$router->get('/articles', [Article::class, 'index']);

$router->route($uri, $method);
