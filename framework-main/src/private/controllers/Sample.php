<?php
namespace App\Controllers;

use App\Libraries\Controller;

class Sample extends Controller
{
    public function index()
    {
        $this->view('sample');
    }

    public function login()
    {
        
        $this->view('login');
    }
}