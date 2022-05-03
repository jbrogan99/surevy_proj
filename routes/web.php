<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'LoginController@index');
Route::get('/option', 'OptionController@index')->name('optionMenu');

Route::get('/question/createQuestion', 'QuestionController@create')->name('question');
Route::post('/question/createQuestion', 'QuestionController@store');
Route::get('/questionOptions/createOption', 'QuestionOptionsController@create')->name('questionOption');
Route::post('/questionOptions/createOption', 'QuestionOptionsController@store');
Route::get('/addAnotherQuestion', 'AddAnotherQuestionController@index')->name('addQuestionMenu');
Route::get('/modifyQuestionaire', 'ModifyTitleOption@index')->name('modifyExistingQuestionaire');
Route::get('/useranswer/{questionaireId}/{questionId}/{questionOptionId}', 'UserAnswerController@index')->name('getUserAnswer');
Route::post('/useranswer/create', 'UserAnswerController@store')->name('createUserAnswer');
Route::delete('/questionaireTitle/delete/{id}', 'QuestionaireTitleController@destroy')->name('deleteQuestionaire');
Route::get('/viewResponses', 'QuestionaireTitleController@index')->name('viewResponses');
Route::get('/endOfQuestionaire', 'EndOfQuestionaireController@index')->name('endOfQuestionaire');
Route::get('/questionaireTitle', 'QuestionaireTitleController@index');
Route::get('/questionaireTitle/create', 'QuestionaireTitleController@create');
Route::post('/questionaireTitle/create', 'QuestionaireTitleController@store');

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');
