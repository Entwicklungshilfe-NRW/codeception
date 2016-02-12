<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->canSeeElement('#teaser');
$I->canSeeElement('.iq-image');
$I->resizeWindow(800,800);
$I->canSeeElement('#teaser');
$I->cantSeeElement('.iq-image');
