<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
         $data = [  
            'title' => 'Interior Padang',
            'isi' => 'frontend/v_fe_home'
        ];
        echo view('layout/v_fe_wrapper', $data);
    }
}
