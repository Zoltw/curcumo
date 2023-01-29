<?php

require_once __DIR__.'/../repository/Repository.php';
require_once __DIR__.'/../repository/MealRepository.php';

class MealController {

    private MealRepository $mealRepository;

    public function getAllMeal() {
        $this->mealRepository = new MealRepository();
        $meal = $this->mealRepository->getAllMealFromDatabase($_GET['id']);
        $this->render('meal', ['meal' => $meal]);
    }

}