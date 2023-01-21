<?php

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index {
         $data = [  
            'title' => 'Login',
            'validation' => \Config\Services::validation()
        ];
        echo view('auth/v_login', $data);
    }
}
?>