<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('admin/createRegister');
    }
    /**
     * This function will validate user input
     * Get an instance of the current request 
     * Authenticate user 
     * Redirect 
     */

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = Register::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect()->to('/login');
    }

    // This function log out a user 

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/');
    }
}
