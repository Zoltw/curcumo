<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Meal.php';
require_once __DIR__.'/../repository/MealRepository.php';

class MealController extends AppController {

    private MealRepository $mealRepository;

    public function __construct() {
        parent::__construct();
        print "jestem w MealController";
        $this->mealRepository = new MealRepository();
    }

    public function meals() {
        if($this->isGet()) {
            $meals = $this->mealRepository->getAllMeals();
            $this->render('meals', ['meals' => $meals]);
        }
        else {
            print "jestem w else meals";
        }
    }



}