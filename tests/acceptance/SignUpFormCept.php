<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->waitForElement('#login-flyout');
$I->moveMouseOver('#login-flyout');
$I->waitForElement('#user');
$I->see('Sign up!');
$I->click('Sign up!');
$I->waitForElement('#tx-ajaxlogin-password-check');
$I->cantSeeElement('.b-form-error-message');
$I->click('Sign up!');
$I->waitForElement('.b-form-error-message');
$I->seeNumberOfElements('.b-form-error-message', 4);