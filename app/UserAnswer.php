<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    protected $fillable = [
        'id',
        'questionaire_id',
        'question_id',
        'question_option_id',
        'answer'

    ];

    public function questionOption()
    {
        return $this->belongsTo('App\QuestionOption');
    }
}
