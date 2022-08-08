<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateProfileController extends Controller
{

    protected $image;

    public function __construct()
    {
        $this->image = new User();
    }

     public function index()
    {
        $response['load'] = $this->image->all();
        return view('dashboard.contents.profile')->with($response);
    }

    public function save_profile(Request $request)
    {


        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        $imgname = $request->file('image')->getClientOriginalName();
        $email = Auth::user()->email;
        $path = $request->file('image')->storeAs('public/images',$imgname);
        $contact = $request->input('contact');

           $data = User::where('email',$email);
            if($data){

            $data->Update([
                'imgname' => $imgname,
                'contact' => $contact,
            ]);

            return redirect('/udate-profile')->with('status', 'Image Has been uploaded');
        }
        else
        {

            // $update = new Profile();

            // $update->name = $name;
            // $update->path = $path;

            // $update->Update();

            return redirect('/udate-profile')->with('danger', 'Image Not updated.');

        }


    }


}
