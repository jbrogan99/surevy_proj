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
    public function store(Request $request)
    {
        //     $option1 = $request->question_option;
        //     $option2 = $request->question_option2;
        //     dd($request);
        //     if ($option1 || $option2 == "") {
        //         return false;
        //     } else {
        //         return ('/endOfQuestionaire');
        //     }

        $this->validate($request, [ //validation min / max word count
            'question_option' => 'min:2|max:100',
            'question_option2' => 'min:2|max:100',
        ]);
        $input = $request->all();
        QuestionOption::create($input);
        // $option_one = $request->question_option;
        // if ($option_one == "") {
        //     return view('/endOfQuestionaire');
        // }


        return redirect()->route('question', ['id' => $request->questionaire_id]);
    }
}
