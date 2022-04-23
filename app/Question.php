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

    public function question($id)
    {
        return DB::table('questions')
            ->where('id', '=', $id)
            ->get();
    }
}
