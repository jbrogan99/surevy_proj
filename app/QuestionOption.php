<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    protected $fillable = [
        'id',
        'question_option',
        'question_option2',
        'question_id'

    ];

    public function questionTitle()
    {
        return $this->belongsTo('App\Question');
    }
}