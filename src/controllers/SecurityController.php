<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController {

    private UserRepository $userRepository;

    public function __construct() {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function login() {
        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->userRepository->getUser($email);

        if (!$user) {
            return $this->render('login', ['messages' => ['User not found!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if (!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }
        setcookie("user", md5($_POST['email']), time() + (3600 * 30), "/");

        header("Location: http://$_SERVER[HTTP_HOST]/preferences");
    }

    public function register() {
        if (!$this->isPost()) {
            echo "nie jest postem";
            return $this->render('sign');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $userEmail = null;

        try {
            $userEmail=$this->userRepository->getUser($email);
        } catch(UnexpectedValueException $e) {
            return $this->render('sign', ['messages' => ['Something went wrong! Please try again!']]);
        }

        if ($userEmail) {
            return $this->render('sign', ['messages' => ['User with this email already exist!']]);
        }

        if (empty($name) || empty($email) || empty($password)) {
            echo $name;
            echo $email;
            echo $password;
            return $this->render('sign', ['messages' => ['All fields are required!']]);
        }


        $user = new User((int)null, $_POST['name'], $_POST['email'], password_hash($_POST['password'], PASSWORD_BCRYPT), (int)null);

        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);
    }
}