<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('konto auswählen');
$I->amOnPage('/');
$I->waitForElement('h1');
$I->see('Konto finden');
$I->click('Konto finden');
$I->waitForElement('h2');
$I->dontSee('Jede Buchung einzeln');
$I->wait(1);
$I->click('.control-navigation-transcluded:nth-of-type(1)');
$I->wait(1);
$I->see('Jede Buchung einzeln');

