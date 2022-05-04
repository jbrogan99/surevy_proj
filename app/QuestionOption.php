<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class QuestionOption extends Model
{
    protected $fillable = [
        'id',
        'question_option',
        'question_option2',
        'question_id'
    ];
    //defines the relationship between the question options and questionnaire
    public function questionTitle()
    {
        return $this->belongsTo('App\Question');
    }
    //defines the relationship between the question options and user answer 
    public function userAnswer()
    {
        return $this->hasMany('App\UserAnswer');
    }
}
