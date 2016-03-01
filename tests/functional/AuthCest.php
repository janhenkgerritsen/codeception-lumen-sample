<?php

use App\User;

class AuthCest
{

    private $userAttributes;

    public function  _before()
    {
        $this->userAttributes= [
            'email' =>  'john@doe.com',
            'password' => \Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
    }

    public function loginUsingUserRecord(FunctionalTester $I)
    {
        $I->dontSeeAuthentication();

        $user = User::create($this->userAttributes);
        $I->amLoggedAs($user);

        $I->amOnPage('/');
        $I->seeAuthentication();

        $I->logout();
        $I->amOnPage('/');
        $I->dontSeeAuthentication();
    }

    public function loginUsingCredentials(FunctionalTester $I)
    {
        $I->dontSeeAuthentication();
        $I->haveRecord('users', $this->userAttributes);
        $I->amLoggedAs(['email' => 'john@doe.com', 'password' => 'password']);

        $I->amOnPage('/');
        $I->seeAuthentication();

        $I->logout();
        $I->amOnPage('/');
        $I->dontSeeAuthentication();
    }

}
