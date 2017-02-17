<?php
$I = new AcceptanceTester($scenario);
$I->amOnPage('/crud');
$I->canSeeLink('region','/region');
$I->canSeeLink('city','/city');
$I->canSeeLink('lead','/lead');

