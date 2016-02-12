<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('check the burger when resize');

$I->amOnPage('/');
$I->waitForElement('h1');

$I->canSeeElement('#nav .inr .iq-nav');
$I->cantSeeElement('.iq-responsive-nav');

$I->resizeWindow(800, 800);

$I->canSeeElement('.iq-responsive-nav');
$I->cantSeeElement('#nav .inr .iq-nav');
