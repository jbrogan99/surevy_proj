<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuestionOption;

class QuestionOptionsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/createQuestionOptions');
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
     * Save the model 
     * Redirect the user, passing through varibales from the Questionaire model. 
     */

    public function store(Request $request)
    {

        $this->validate($request, [ //validation min / max word count
            'question_option' => 'min:2|max:100',
            'question_option2' => 'min:2|max:100',
        ]);
        $input = $request->all();
        QuestionOption::create($input);



        return redirect()->route('question', ['id' => $request->questionaire_id]);
    }
}
