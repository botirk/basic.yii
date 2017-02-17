<?php
$I = new AcceptanceTester($scenario);
$I->amOnPage('/');
$I->canSeeLink('gii','/gii');
$I->canSeeLink('crud','/crud');
