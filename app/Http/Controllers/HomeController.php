<?php

namespace App\Http\Controllers;
use App\Models\Profile;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;


class HomeController extends Controller

{

    protected $image;

    public function __construct()
    {
        $this->image = new Profile();
    }

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

    public function dashboard()
    {
        $response['load'] = $this->image->all();
        return view('dashboard.contents.dashboard')->with($response);
    }

    public function chart()
    {
        return view('dashboard.contents.chart');
    }

    public function pay()
    {
        return view('dashboard.contents.pay');
    }



}
