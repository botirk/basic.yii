<?php
$I = new AcceptanceTester($scenario);
$I->amOnPage('/crud/region');
$I->seeLink('Create Region');
$I->click('Create Region');
$I->amOnPage('/crud/region/create');
$I->see('Name');
$I->seeElement('input');
$I->fillField('Region[name]', 'Testland Codeception');
$I->see('Create');
$I->click('Create');
$I->see('Testland');
$I->seeLink('Update');
$I->seeLink('Delete');
$I->click('Delete');
//prompt window

