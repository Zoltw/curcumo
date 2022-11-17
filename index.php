<?php

require 'routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('login', 'DefaultController');
Router::get('signup', 'DefaultController');
Router::get('preferences', 'DefaultController');
Router::get('preferences_sec', 'DefaultController');

Router::post('login', 'SecurityController');

Router::run($path);