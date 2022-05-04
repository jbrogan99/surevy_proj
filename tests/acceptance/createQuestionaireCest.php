<?php

use Codeception\Util\Locator;

class createQuestionaireCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        //login page
        $I->amOnPage('/');
        $I->see('dashboard');
        $I->see('Login');
        $I->see('Create Account');
        $I->click('Create Account');

        //create account page 
        $I->amOnPage('/register');
        $I->see('Register');
        $I->fillField('name', 'test');
        $I->fillField('email', 'test');
        $I->fillField('password', 'test');
        $I->click('button');

        //login page
        $I->amOnPage('/login');
        $I->fillField('email', 'test');
        $I->fillField('password', 'test');
        $I->click('button');

        //options page 
        $I->amOnPage('/option');
        $I->see('Create Survey');
        $I->see('Modify Existing Survey');
        $I->see('View responses');
        $I->click('Create Survey');

        //title page 
        $I->amOnPage('/questionaireTitle/create');
        $I->see('Add Questionaire Title:');
        $I->fillField('title', 'test');
        $I->click(['id' => 'back_img_title_page']);
        $I->seeElement('//img[@src="/img/back.jpg"]');
        $I->click('submit');

        //question creatation page
        $I->amOnPage('/question/createQuestion');
        $I->fillField('question_title', 'test');
        $I->click('submit');

        //answer creation page

        $I->amOnPage('/questionOptions/createOption');
        $I->fillField('question_option', 'test');
        $I->fillField('question_option2', 'test');
        $I->click('submit');


        // questionaire creation 2nd 
        $I->amOnPage('/question/createQuestion');
        $I->fillField('question_title', 'test');
        Locator::contains('label', 'End questionnaire');
        Locator::contains('button', 'End');
        $I->click('submit');

        //options page
        $I->amOnPage('/option');
        $I->click('h1, Modify Existing Survey');

        //modify existing questioniare page 
        $I->amOnPage('/modifyQuestionaire');
        $I->see('Modify Questionaire', 'h1');
        $I->see('Questionnaire Title');
        $I->see('Delete Questionnaire');
        $I->dontSeeElement('.btn btn-danger');

        //responses page
        $I->amOnPage('/viewResponses');
        $I->seeElement('//img[@src="/img/back.jpg"]');
        $I->see('Responses', 'h1');
        $I->see('Questionnaire', 'th');
        $I->see('Question', 'th');
        $I->see('Question Option 1', 'th');
        $I->see('Question Option 2', 'th');
        $I->see('Answer', 'th');

        //user answers
        $I->amOnPage('/userAnswer');
        $I->amOnPage('/endOfQuestionaire');
    }
}
