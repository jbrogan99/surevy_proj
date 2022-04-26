<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionaire;
use App\Question;
use App\QuestionOption;
use App\UserAnswer;
use Illuminate\Support\Facades\DB;

class UserAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($questionaireId, $questionId, $questionOptionId)
    {
        $questionaires = Questionaire::find($questionaireId); // assign id from all models to variables
        $question = Question::find($questionId);
        $questionOption = QuestionOption::find($questionOptionId);
        return view('questionaire_answers')->with(['questionaire' => $questionaires, 'question' => $question, 'questionOption' => $questionOption]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('createQuestionaireTitle');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_question_option_id = null;
        UserAnswer::create($request->all());
        $allQuestionOptions = QuestionOption::orderBy('id', 'asc')->get(); //order id by ascending order
        for ($x = 0; $x < count($allQuestionOptions) - 1; $x++) { // get the last ID
            if ($allQuestionOptions[$x]->id == $request->question_option_id) { //if id from questionoption model is equal to the request question_option_id
                $new_question_option_id = $allQuestionOptions[$x + 1];
            }
        }

        if ($new_question_option_id == null) { // if the user completes all questions 
            return  redirect()->route('endOfQuestionaire');
        }

        return  redirect()->route('getUserAnswer', ['questionaireId' => $request->questionaire_id, 'questionId' => $request->question_id, 'questionOptionId' => $new_question_option_id]);
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
        $questionaire = Questionaire::find($id);
        $questionaire->delete();

        return redirect('/modifyQuestionaire');

        //
    }
}
