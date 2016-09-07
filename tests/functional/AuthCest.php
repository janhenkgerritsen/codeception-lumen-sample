<?php

use App\User;

class AuthCest
{
    private $userAttributes;

    public function _before()
    {
        $this->userAttributes = [
            'email' => 'john@doe.com',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'api_token' => str_random(),
        ];
    }

    public function authenticateWithApiToken(FunctionalTester $I)
    {
        $user = User::create($this->userAttributes);

        $I->amOnPage('/secure');
        $I->seeResponseCodeIs(401);
        $I->dontSeeAuthentication();

        $I->amOnPage('/secure?api_token=' . $user->api_token);
        $I->seeResponseCodeIs(200);
        $I->seeAuthentication();
        $I->see('Secure');
    }
}
