<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class AdminController extends AppController {

    private UserRepository $userRepository;

    public function __construct() {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function admin() {
        if (isset($_COOKIE['user'])) {
            $user = $this->userRepository->getUser($_COOKIE['user'], true);
            $user->getRole() == 1 ? $this->render('admin') : $this->render('login');
        }
        else {
            $this->render('login');
        }
    }

}