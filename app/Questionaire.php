<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionaire extends Model
{
    protected $fillable = [
        'title',
        'id'
    ];

    public function question()
    {
        return $this->hasMany('App\Question');
    }

    public function questionaires()
    {
        // $this->with('question', function($questionQueryBuilder) {
        //     $questionQueryBuilder->select('question_title')->with('questionOption', function($questionOptionQueryBuilder) {
        //         $questionOptionQueryBuilder->select('question_option', 'question_option2')->with('userAnswer', function($userAnswerQueryBuilder) {
        //             $userAnswerQueryBuilder->select()
        //         })
        //     })
        // });
        return $this->with(['question.questionOptions.userAnswer'])->get();
    }
}
