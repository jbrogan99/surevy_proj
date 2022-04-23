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
        $I->amOnPage('/surveyTitlePage');
        $I->see('Survey Title');
        $I->fillField('survey_title', 'test');
        $I->click('submit');
        //survey creatation page
        $I->amOnPage('/surveyCreationPage');
        $I->see('Q1');
        $I->see('A');
        $I->see('Choice A');
        $I->see('B');
        $I->see('Choice B');
    }
}
