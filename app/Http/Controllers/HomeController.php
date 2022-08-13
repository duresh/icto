<?php

namespace App\Http\Controllers;

use App\Models\Pay;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
// use Illuminate\Support\Facades\Auth;




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
        // $countMembers['count'] = User::count();
        // $findUser['fuser'] = Pay::count('status');
        $count = User::count();
        $finduser = Pay::all();
        $completed = $finduser->where('status', '1');
        $pending = $finduser->where('status', '0');
        $puser = $pending->count();
        $fuser = $completed->count();

        return view('dashboard.contents.dashboard',compact('count','fuser','puser'));
    }

    public function chart()
    {
        // $chartData = Pay::where('status','1')->pluck('amount','created_at')->all();
        $chartData = Pay::where('status','1');
        // $amount = $chartData->select('amount','created_at');
        $pluckedAmount = $chartData->pluck('amount');
        $pluckedDate = $chartData->pluck('created_at');
        $amm = $pluckedAmount->all();
        $datepl = $pluckedDate->all();



        return view('dashboard.contents.chart',compact('pluckedAmount','pluckedDate'));
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

    public function paidCustomers()
    {
        $finduser = Pay::all();
        $completed = $finduser->where('status', '1');
        $total = $completed->sum('amount');
        return view('dashboard.contents.pcustomer',compact('completed','total'));
    }

    public function pendingCustomers()
    {
        $finduser = Pay::all();
        $completed = $finduser->where('status', '0');
        $totalP = $completed->sum('amount');
        return view('dashboard.contents.rcustomer',compact('completed','totalP'));
    }



}
