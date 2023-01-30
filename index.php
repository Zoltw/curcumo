<?php

require 'routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('login', 'DefaultController');
Router::get('sign', 'DefaultController');
Router::get('pref', 'DefaultController');
Router::get('pref_second', 'DefaultController');
Router::get('list', 'DefaultController');
Router::get('meal', 'MealController');
//Router::get('plan', 'DefaultController');
Router::get('plan', 'MealController');
Router::post('login', 'SecurityController');
Router::post('register', 'SecurityController');

Router::run($path);
