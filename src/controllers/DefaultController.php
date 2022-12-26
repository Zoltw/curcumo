<?php

require_once 'AppController.php';

class DefaultController extends AppController {

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
        $this->render('pref-second');
    }

    public function list() {
        $this->render('list');
    }

    public function meal() {
        $this->render('meal');
    }

    public function plan() {
        $this->render('plan');
    }

}