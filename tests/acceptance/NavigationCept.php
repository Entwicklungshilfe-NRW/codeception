<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Test main navigation');
$I->amOnPage('/');
$I->moveMouseOver('.nav > li:nth-of-type(3)');
$I->wait(1);
$I->see('Overview');
$I->click('Overview');
$I->waitForElement('h4');
$I->see('The Enterprise');
