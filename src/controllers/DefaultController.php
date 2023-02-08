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

    public function pref() {
        $this->render('pref');
    }

    public function pref_second() {
        $this->render('pref_second');
    }

//    public function list() {
//        $this->render('list');
//    }

    public function admin() {
        $this->render('admin');
    }

//    public function meal() {
//        $this->render('meal');
//    }

//    public function plan() {
//        $meals = $this->mealRepository->getAllMeals();
//        $this->render('plan', ['plan' => $meals]);
//    }

    public function logout() {
        setcookie("user", $_COOKIE['user'], time() - 3600, "/");
        if (isset($_COOKIE['user'])) {
            header("Refresh:0");
        }
        $this->index(null);
    }

}