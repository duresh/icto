<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{


    /**

     * Display register page.

     *

     * @return \Illuminate\Http\Response

     */

    public function show()

    {

        return view('layouts.auth.registration');

    }



    /**

     * Handle account registration request

     *

     * @param RegisterRequest $request

     *

     * @return \Illuminate\Http\Response

     */

    public function register(RegisterRequest $request)

    {



        $user = User::create($request->validated());



        auth()->login($user);



        return redirect('/dashboard')->with('success', "Account successfully registered.");

    }
}
