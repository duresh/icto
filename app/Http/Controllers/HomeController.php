<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class HomeController extends Controller

{

    public function index()

    {

        return view('home.home');

    }

    public function skills()
    {
        return view('home.skills');
    }

    public function services()
    {
        return view('home.services');
    }

    public function projects()
    {
        return view('home.projects');
    }

    public function team()
    {
        return view('home.team');
    }

    public function contact()
    {
        return view('home.contact');
    }



}
