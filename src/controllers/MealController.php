<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Meal.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../repository/MealRepository.php';
require_once __DIR__.'/../repository/ListRepository.php';

class MealController extends AppController {

    private MealRepository $mealRepository;
    private ListRepository $listRepository;

    public function __construct() {
        parent::__construct();
        $this->mealRepository = new MealRepository();
        $this->listRepository = new ListRepository();
    }

    public function plan() {
        if($this->isGet()) {
            $meals = $this->mealRepository->getAllMeals();
            $this->render('plan', ['meals' => $meals]);
        }
    }

    public function meal($id) {
        $meal = $this->mealRepository->getMealFromDatabase($id);
        $this->render('meal', ['meal' => $meal[0], 'products' => $meal[1], 'optionals' => $meal[2]]);
    }

    public function mealList($id) {
        $userRepository = new UserRepository();
        $user = $userRepository->getUser($_COOKIE['user'], true);
        $this->listRepository->addMealToList($id, $user->getId());
        http_response_code(200);

    }



}