<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class QuestionController extends Controller

{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * This function will return a view 
     * Passes the attributes from the Question model
     */
    public function create(Request $request)
    {
        $numberOfSavedQuestions = Question::getQuestions($request->id); // get all the questions for the given questionaire id

        return view('admin/createQuestion', ['numberOfSavedQuestions' => $numberOfSavedQuestions]); // return the create question view so admin can create a new question
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * This function will validate user input
     * Get the request from the user
     * Store in DB 
     * Redirect the user to passing through varibales from the Question model. 
     */
    public function store(Request $request)
    {
        $this->validate($request, [ //validation min / max word count
            'question_title' => 'min:5|max:400'
        ]);

        $input = $request->all(); // get all requests 
        $questionTitle = Question::create($input);
        return redirect()->route('questionOption', ['id' => $questionTitle->id, 'questionaire_id' => $questionTitle->questionaire_id]); // redirect user to question option page with required ids
    }
}
