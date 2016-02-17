<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('check if logo links to startpage');
$I->amOnPage('/');
$I->waitForElement('h1');
$href = $I->grabAttributeFrom('#logo', 'href');
$this->assertEquals('https://typo3.org/', $href);
