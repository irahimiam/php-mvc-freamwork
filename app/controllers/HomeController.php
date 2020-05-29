<?php

class HomeController extends Controller
{
    public function index($name = '')
    {
        $user = User::findorFail(1);
        $this->view('home/index' , ['name' => $user->email]);
    }
}