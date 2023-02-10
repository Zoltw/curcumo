<?php

require 'routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('login', 'DefaultController');
Router::get('sign', 'DefaultController');
Router::get('preferences', 'DefaultController');
Router::get('list', 'MealController');
Router::get('meal', 'MealController');
Router::get('plan', 'MealController');
Router::get('logout', 'DefaultController');
Router::get('admin', 'AdminController');
Router::post('login', 'SecurityController');
Router::post('register', 'SecurityController');
Router::post('mealList', 'MealController');
Router::get('cook', 'MealController');
Router::post('deleteUser', 'AdminController');
Router::post('deleteList', 'MealController');

Router::run($path);
