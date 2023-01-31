<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Meal.php';
require_once __DIR__.'/../repository/MealRepository.php';

class MealController extends AppController {

    private MealRepository $mealRepository;

    public function __construct() {
        parent::__construct();
        $this->mealRepository = new MealRepository();
    }

    public function plan() {
        if($this->isGet()) {
            $meals = $this->mealRepository->getAllMeals();
            $this->render('plan', ['meals' => $meals]);
        }
    }

    public function meal($id) {
            $meal = $this->mealRepository->getMealFromDatabase($id);
            $this->render('meal', ['meal' => $meal]);
    }



}