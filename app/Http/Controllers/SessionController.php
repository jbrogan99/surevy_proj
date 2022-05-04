<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function create()
    {
        return view('admin/createSession');
    }

    /**
     * Creates a session for the admin 
     * This function will check to see whether the admin user name and password  matches the one in the DB
     * Either log them in or redirect them back to current page with an error message  
     */
    public function store()
    {

        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Your email or password is incorrect '
            ]);
        }

        return redirect()->to('/option');
    }
    // log out function 
    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/');
    }
}
