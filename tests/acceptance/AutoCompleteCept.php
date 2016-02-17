<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('check drupal in search');
$I->amOnPage('/');
$I->fillField('#form-element-21', 'Dru');
$I->wait(1);
$I->see('drupal');