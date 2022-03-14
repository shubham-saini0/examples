<?php
namespace App\Controllers;

use App\Libraries\Controller;

class Blog extends Controller
{
    public function index()
    {
        $this->view('sample');
    }

    public function addUser()
    {
        
        $postdata = $_POST ?? array() ;
        if (isset($postdata["fullname"]) && isset($postdata["username"]) && isset($postdata["email"]) && isset($postdata["password"])) {
            $user = $this->model('Blog');
            $user->fullname=$postdata["fullname"];
            $user->username=$postdata["username"];
            $user->email=$postdata["email"];
            $user->password=$postdata["password"];
            $user->role="user";
            $user->status="reject";
            $user->save();
        }
        $data['user']=$this->model('Blog')::all();
        $this->view('signup', $data);
    }
}