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
        $I->fillField('title', 'test');
        $I->click(['id' => 'back_img_title_page']);
        $I->seeElement('//img[@src="/img/back.jpg"]');
        $I->click('submit');
        //questionaire creatation page
        $I->amOnPage('/question/createQuestion');
        $I->fillField('question_title', 'test');
        $I->click('submit');

        //answer creation page

        // $I->amOnPage('/questionOptions/createOption');
        // $I->fillField('question_option', 'ee');
        // $I->fillField('question_option2', 'teeeeest');
        // $I->click('submit');


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
        $I->click('input');

        //responses page
        $I->amOnPage('/viewResponses');
        $I->seeElement('//img[@src="/img/back.jpg"]');
        $I->see('Responses', 'h1');
    }
}
