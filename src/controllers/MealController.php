<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Meal.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../repository/MealRepository.php';
require_once __DIR__.'/../repository/ListRepository.php';

class MealController extends AppController {

    private MealRepository $mealRepository;
    private ListRepository $listRepository;
    private UserRepository $userRepository;

    public function __construct() {
        parent::__construct();
        $this->mealRepository = new MealRepository();
        $this->listRepository = new ListRepository();
        $this->userRepository = new UserRepository();
    }

    public function plan() {
        if($this->isGet()) {
            $meals = $this->mealRepository->getAllMeals();
            $user = $this->userRepository->getUser($_COOKIE['user'], true);
            $number = $this->listRepository->getNumberOfMeals($user->getId());
            $this->render('plan', ['meals' => $meals, 'number' => $number]);
        }
    }

    public function meal($id) {
        $id = (int)$id;
        $meal = $this->mealRepository->getMealFromDatabase($id);
        $this->render('meal', ['meal' => $meal[0], 'products' => $meal[1], 'optionals' => $meal[2]]);
    }

    public function mealList($id) {
        $user = $this->userRepository->getUser($_COOKIE['user'], true);
        $this->listRepository->addMealToList($id, $user->getId());
        http_response_code(200);
    }

    public function list($id) {
        $user = $this->userRepository->getUser($_COOKIE['user'], true);
        $result= $this->listRepository->getList($user->getId());
        $this->render('list', ["list" => $result[0], "additionalList" => $result[1]]);
    }

    public function deleteList() {
        $user = $this->userRepository->getUser($_COOKIE['user'], true);
        $this->listRepository->deleteUserList($user->getId());
        http_response_code(200);
        $this->mealRepository->getAllMeals();
        $this->listRepository->getNumberOfMeals($user->getId());
        header("Location: /plan");
    }

    public function cook() {
        $user = $this->userRepository->getUser($_COOKIE['user'], true);
        $meals = $this->listRepository->cookMealFromList($user->getId());
        $this->render('cook', ['meals' => $meals]);
    }
}