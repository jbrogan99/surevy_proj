<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Question extends Model
{
    // allows mass assigment 
    protected $fillable = [
        'question_title',
        'questionaire_id',
        'id'
    ];
    //defines the relationship between the question and question options
    public function questionOptions()
    {
        return $this->hasMany('App\QuestionOption');
    }
    //defines the relationship between the question and questionnaire
    public function questionaire()
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
            ->orderBy('id', 'asc')
            ->get();

        return $questions;
    }

    // The next question id will be the one after the current question 
    // because each questions id is numerically bigger than the last one.
    // An easier way would have been to add another column the questions table
    // which points to the ID of the next question. 
    public static function getNextQuestionId($questionId, $questionaireId)
    {
        $questions = Question::getQuestions($questionaireId);
        $nextQuestionId = null;
        for ($x = 0; $x < count($questions) - 1; $x++) {
            if ($questions[$x]->id == $questionId) {
                $nextQuestionId = $questions[$x + 1]->id;
            }
        };

        return $nextQuestionId;
    }
}
