<?php

namespace App\Http\Controllers;

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
            return redirect()->to('/login');
        } else {
            return redirect()->route('optionMenu');
        }
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/');
    }
}
