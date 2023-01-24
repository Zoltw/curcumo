<?php

require_once __DIR__.'/../repository/MealRepository.php';

class MealController {

    private MealRepository $mealRepository;

    public function __construct() {
        $this->mealRepository = new MealRepository();
    }

    public function meals() {
        $meals = $this->mealRepository->getMeals();
        $this->render('meals', ['meals' => $meals]);
    }

    public function meal() {
        $id = $_GET['id'];
        $meal = $this->mealRepository->getMeal($id);
        $this->render('meal', ['meal' => $meal]);
    }

}