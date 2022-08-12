<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function servis()
    {
        return view('servis');
    }
    public function invoice()
    {
        return view('invoice');
    }
    public function terima()
    {
        return view('terimapesanan');
    }
}
