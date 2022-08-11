<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
// use Illuminate\Support\Facades\Auth;
use App\Models\Profile;



class HomeController extends Controller

{

    protected $user;

    public function __construct()
    {
        $this->user = new User();
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
        $countMembers['count'] = User::count();
        $findUser['fuser'] = Profile::find(1,['contact']);
        return view('dashboard.contents.dashboard')->with($countMembers)->with($findUser);
    }

    public function chart()
    {
        return view('dashboard.contents.chart');
    }

    public function pay()
    {
        return view('dashboard.contents.pay');
    }
    public function members()
    {
        $request['users'] = $this->user->all();
        return view('dashboard.contents.member')->with($request);
    }



}
