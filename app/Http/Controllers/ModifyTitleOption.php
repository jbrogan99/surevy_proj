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

    /**
     * This function will return a view passing the attributes from the questionaire model
     */
    public function index()
    {
        $questionaire = Questionaire::all();

        return view('admin/modifyExistingQuestionaire')->with('questionaire', $questionaire);
    }
}
