<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function portfolioDetails()
    {
        return view('portfolio-details');
    }

    public function serviceDetails()
    {
        return view('service-details');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function terms()
    {
        return view('terms');
    }

    public function starterPage()
    {
        return view('starter-page');
    }
}