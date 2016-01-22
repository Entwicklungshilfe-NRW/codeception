<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('login to backend');
$I->amOnPage('/typo3');
$I->waitForElement('#t3-username');
$I->seeInCurrentUrl('/typo3/');

