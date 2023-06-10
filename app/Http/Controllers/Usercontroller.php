<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    

    //register form 
    public function register()
    {
        return view('user.register');
    }

    //create new user
  
    public function create(request $request)
    {
        $formFields = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|unique:users',
            'phone' => 'required|numeric|min:8',
            'city'=>'required',
            'password' => 'required|confirmed|min:6'
            

        ]);

        if ($request->hasFile('avatar')){

            $formFields['avatar']=$request->file('avatar')->store('profile_images', 'public');

        }

        $formFields['password'] = bcrypt($formFields['password']);


        $user = User::create($formFields);
        auth()->login($user);

        return redirect('/')->with('message', 'user createed successfullt');
    }






   // show login form
    public function login()

    {
        return view('user.login');
    }

    // Authenticate User
 public function authenticate(Request $request) {
    $formFields = $request->validate([
        'email' => ['required', 'email'],
        'password' => 'required'
    ]);

    if(auth()->attempt($formFields)) {
        $request->session()->regenerate();

        return redirect('/')->with('message', 'You are now logged in!');
    }

    return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
}




    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/')->with('message ', 'you have been logoed out');
    }

   
   
}
