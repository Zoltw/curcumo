<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Meal.php';
require_once __DIR__.'/../repository/MealRepository.php';

class DefaultController extends AppController {

    private MealRepository $mealRepository;

    public function index() {
        $this->render('start');
    }

    public function login() {
        $this->render('login');
    }
    
    public function sign() {
        $this->render('sign');
    }

    public function preferences() {
        $this->render('preferences');
    }

    public function logout() {
        setcookie("user", $_COOKIE['user'], time() - 3600, "/");
        if (isset($_COOKIE['user'])) {
            header("Refresh:0");
        }
        $this->index(null);
    }

}