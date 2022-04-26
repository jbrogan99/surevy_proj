<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class QuestionController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $numberOfSavedQuestions = DB::table('questions') //get questions table from db
            ->where('questionaire_id', '=', $request->id) // questionaire id from db is equal to the request id
            ->get();
        return view('admin/createQuestion', ['numberOfSavedQuestions' => $numberOfSavedQuestions]); // assigning variable to the string
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [ //validation min / max word count
            'question_title' => 'min:5|max:400'

        ]);
        $input = $request->all(); // get all requests 
        $questionTitle = Question::create($input);
        return redirect()->route('questionOption', ['id' => $questionTitle->id, 'questionaire_id' => $questionTitle->questionaire_id]); // accessing varibales properties and assigning them to string 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
