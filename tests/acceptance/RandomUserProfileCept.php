<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->waitForElement('#randomUserProfiles');
$I->canSeeNumberOfElements('#randomUserProfiles > ul > li', 21);
