<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('check drupal in search');
$I->amOnPage('/');
$I->fillField('#form-element-21', 'Drupal');
$I->click('#solr-website-search button');
$I->waitForElement('h2');
$I->see('Migrating Drupal to TYPO3');
