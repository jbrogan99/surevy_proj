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
        //dd(intval($id));
        $questionaires = Questionaire::find($questionaireId);
        $question = Question::find($questionId);
        $questionOption = QuestionOption::find($questionOptionId);
        // dd($questionaires);
        // $questionaire = DB::table('questionaires')
        //     ->where('id', '=', $id)
        //     ->get();

        // $questionaireTitle = $questionaire[0]->title;

        // $questionaireModel = new Questionaire;
        // $questionModel = new Question;
        // $question = $questionModel->question($questionId);

        // $questionOptionModel = new QuestionOption();
        // $questionOptions = $questionOptionModel->questionOptions($questionId);
        // $questionOptions = $questionaireModel->questions(
        //dd($questionaires)$
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
        //dd($request->all());
        // $answer = new UserAnswer;
        // $answer->questionaire_id = $requequestionaire_id;
        // $answer->question_id = $question_id;
        // $answer->answer = $request->answer;
        // dd($answer->all());
        $new_question_option_id = null;
        UserAnswer::create($request->all());
        $allQuestionOptions = QuestionOption::orderBy('id', 'asc')->get();
        for ($x = 0; $x < count($allQuestionOptions) - 1; $x++) {
            if ($allQuestionOptions[$x]->id == $request->question_option_id) {
                $new_question_option_id = $allQuestionOptions[$x + 1];
            }
        }

        if ($new_question_option_id == null) {
            return  redirect()->route('optionMenu');
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
