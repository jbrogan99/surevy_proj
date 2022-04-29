<?php

namespace App\Http\Controllers;

use App\Questionaire; //importing model 
use Illuminate\Http\Request;

class ModifyTitleOption extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questionaire = Questionaire::all(); // gets all model attributes

        return view('admin/modifyExistingQuestionaire')->with('questionaire', $questionaire); //assigns string to variable 
    }
}
