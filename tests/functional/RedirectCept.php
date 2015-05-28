<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('test a redirect');
$I->amOnPage('/redirect');
$I->seeCurrentUrlEquals('');
