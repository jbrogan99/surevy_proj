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

    public function store()
    {

        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Your email or password is incorrect '
            ]);
        }

        return redirect()->to('/option');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/');
    }
}
