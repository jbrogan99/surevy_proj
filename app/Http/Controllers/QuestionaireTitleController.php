<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionaire;

class QuestionaireTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**This function will return a view passing the attributes 
     *     from the questionaires function within the questionaire model
     */
    public function index()
    {
        $questionaire = new Questionaire();
        $questionaires = $questionaire->questionaires();

        return view('admin/viewResponses')->with('questionaires', $questionaires);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/createQuestionaireTitle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * This function will validate user input
     * Get the request from the user
     * Redirect the user to passing through varibales from the Questionaire model. 
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'min:5|max:255'
        ]);

        $input = $request->all();
        $questionaire = Questionaire::create($input);

        return redirect()->route('question', ['id' => $questionaire->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Finds id in questionaire model 
     * Deletes ID from database  
     */
    public function destroy($id)
    {
        $questionaire = Questionaire::find($id); // find all ID in Questionaire model 

        $questionaire->delete(); //delete from db

        return redirect('modifyQuestionaire');

        //
    }
}
