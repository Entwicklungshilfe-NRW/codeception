<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('check drupal in search');
$I->amOnPage('/');
$I->fillField('#form-element-21', 'Drupal');
$I->click('#solr-website-search button');
$I->waitForElement('h2');
$I->see('Migrating Drupal to TYPO3');

$I->wantTo('check autocomplete');
$I->amOnPage('/');
$I->fillField('#form-element-21', 'rel');
$I->waitForElement('.ui-autocomplete > li');
$I->seeLink('relations');
$I->Click('relations');
$I->waitForElement('#tx-solr-q');
$search = $I->grabValueFrom('#tx-solr-q');
$this->assertEquals($search, 'relations');