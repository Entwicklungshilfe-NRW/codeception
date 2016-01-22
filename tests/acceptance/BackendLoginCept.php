<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('login to backend');
$I->amOnPage('/typo3');
$I->waitForElement('#t3-username');
$I->seeInCurrentUrl('/typo3/');

$I->wantToTest('Login failed');
$I->fillField('#t3-username', 'testify');
$I->fillField('#t3-password', 'jsdlabvj');
$I->click('Login');
$I->waitForElement('body');
$I->seeNumberOfElements('#t3-login-error', 1);
