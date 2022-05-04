<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionaire extends Model
{
    protected $fillable = [
        'title',
        'id'
    ];
    //defines the relationship between the questionaire and question
    public function question()
    {
        return $this->hasMany('App\Question');
    }
    //returns question, question option and user answer 
    public function questionaires()
    {

        return $this->with(['question.questionOptions.userAnswer'])->get();
    }
}
