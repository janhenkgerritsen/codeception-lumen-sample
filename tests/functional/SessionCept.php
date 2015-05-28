<?php
$I = new FunctionalTester($scenario);
$I->wantTo('set a session variable');
$I->amOnPage('/session/My%20Message');
//$I->seeCurrentUrlEquals('/');
//$I->seeInSession('message', 'My%20Message');
