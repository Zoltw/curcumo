<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('start');
    }

    public function login()
    {
        $this->render('login');
    }
    
    public function signup()
    {
        $this->render('sign');
    }

    public function preferences()
    {
        $this->render('pref');
    }

    public function preferences_sec()
    {
        $this->render('pref-second');
    }
}