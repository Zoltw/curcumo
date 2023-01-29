<?php

class AppController {

     private $request;

     public function __construct() {
         $this->request = $_SERVER['REQUEST_METHOD'];
     }

     protected function isPost(): bool {
         return $this->request === 'POST';
     }

     protected function isGet(): bool {
         return $this->request === 'GET';
     }


    protected function render(string $template = null, array $variables = [])
    {
        $templatePath = 'public/views/'. $template.'.php';
        $output = 'File not found';

        if(file_exists($templatePath)){
            extract($variables);

            ob_start();
            include $templatePath;
            $output = ob_get_clean();
        }
        print $output;
    }

    public function checkAutentication() {
        if (!isset($_COOKIE['user'])) {
            $url = "htp://$_SERVER[HTTP_HOST]";
            HEADER("Location: {$url}/");
        }
    }

    public function getUserFromCookies() {
        $email = $_COOKIE['user'];
        $userRepository = new UserRepository();

    }
}