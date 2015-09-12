<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Test welcome page');
$I->amOnPage('/');
$I->see('What is TYPO3 CMS?');
