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

    //This function will return a view passing the attributes from the UserAnswer model


    public function index()
    {
        $userAnswer = UserAnswer::all();
        return view("admin/viewReponses")->with('userAnswer', $userAnswer);
    }
}
