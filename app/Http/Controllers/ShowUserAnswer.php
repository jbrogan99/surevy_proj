<?php

namespace App\Http\Controllers;

use App\UserAnswer;
use Illuminate\Http\Request;

class ShowUserAnswer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userAnswer = UserAnswer::all();
        return view("admin/viewReponses")->with('userAnswer', $userAnswer);
    }
}
