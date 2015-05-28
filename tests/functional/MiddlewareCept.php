<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('test middleware');

$I->haveRecord('users', [
    'email' =>  'john@doe.com',
    'password' => Hash::make('password'),
    'created_at' => new DateTime(),
    'updated_at' => new DateTime(),
]);

$I->amOnPage('/secure');
$I->seeResponseCodeIs('401');

$I->amLoggedAs(['email' => 'john@doe.com', 'password' => 'password']);
$I->amOnPage('/secure');
$I->seeResponseCodeIs(200);
$I->see('Secure');
