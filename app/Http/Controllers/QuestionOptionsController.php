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
        $input = $request->all();
        QuestionOption::create($input);

        return redirect()->route('question', ['id' => $request->questionaire_id]);
    }
}
