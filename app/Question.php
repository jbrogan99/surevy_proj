<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Question extends Model
{
    protected $fillable = [
        'question_title',
        'questionaire_id',
        'id'
    ];

    public function questionOptions()
    {
        return $this->hasMany('App\QuestionOption');
    }

    public function questionTitle()
    {
        return $this->belongsTo('App\Questionaire');
    }

    // this function will return the question with the given id
    public function question($id)
    {
        return DB::table('questions')
            ->where('id', '=', $id)
            ->get();
    }

    // get all questions for a given questionaire id
    public static function getQuestions($questionaireId)
    {
        $questions = DB::table('questions')
            ->where('questionaire_id', '=', $questionaireId)
            ->get();

        return $questions;
    }
}
