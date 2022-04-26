<?php

class createQuestionaireCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('dashboard');
        $I->see('Login');
        $I->see('Create Account');
        $I->click('dashboard');
        //options page 
        $I->amOnPage('/option');
        $I->see('Create Survey');
        $I->see('Modify Existing Survey');
        $I->see('View responses');
        $I->click('Create Survey');
        //title page 
        $I->amOnPage('questionaireTitle/create');
        $I->see('Add Questionaire Title:');
        $I->fillField('title_input', 'test');
        $I->click('submit');
        //survey creatation page
        $I->amOnPage('question/createQuestion');
        $I->fillField('question_title', 'test');
        $I->click('submit');
    }
}
