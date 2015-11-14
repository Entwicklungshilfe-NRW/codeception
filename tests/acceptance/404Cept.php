<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('check my 404');
$I->amOnPage('/husel');
$I->waitForElement('h1');
$I->see('Breathe deeply. Stay calm.');
