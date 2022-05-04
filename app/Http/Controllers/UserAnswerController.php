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

    /**
     * This function grabs the ID from each Model
     * Passes the data back to the view 
     */
    public function index($questionaireId, $questionId, $questionOptionId) //ID paramaters
    {
        $questionaires = Questionaire::find($questionaireId);
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
        return view('createQuestionaireTitle'); //return to createQuestionaireTitle page
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * This function saves the user answer, 
     * Determines the IDs of the next question and question option the user must answer
     * Redirects back to the user answers page with the next question and question option.
     */
    public function store(Request $request)
    {

        $new_question_option_id = null;
        UserAnswer::create($request->all());

        $allQuestionOptions = QuestionOption::orderBy('id', 'asc')->get();

        for ($x = 0; $x < count($allQuestionOptions) - 1; $x++) {
            if ($allQuestionOptions[$x]->id == $request->question_option_id) {
                $new_question_option_id = $allQuestionOptions[$x + 1];
            }
        }

        $questionId = Question::getNextQuestionId($request->question_id, $request->questionaire_id);

        if ($questionId == null) {
            return  redirect()->route('endOfQuestionaire');
        }

        return  redirect()->route('getUserAnswer', ['questionaireId' => $request->questionaire_id, 'questionId' => $questionId, 'questionOptionId' => $new_question_option_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Finds the ID of the Questionaire 
     * Removes from the DB
     */
    public function destroy($id)
    {
        $questionaire = Questionaire::find($id);
        $questionaire->delete();

        return redirect('/modifyQuestionaire');
    }
}
