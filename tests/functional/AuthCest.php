<?php

use App\User;

class AuthCest
{
    public function authenticateWithApiToken(FunctionalTester $I)
    {
        $user = $I->have(User::class);

        $I->amOnPage('/secure');
        $I->seeResponseCodeIs(401);

        $I->amOnPage('/secure?api_token=' . $user->api_token);
        $I->seeResponseCodeIs(200);
        $I->see('Secure');
    }

    public function authenticateWithAmLoggedAs(FunctionalTester $I)
    {
        $user = $I->have(User::class);

        $I->amLoggedAs($user);
        $I->amOnPage('/secure');

        $I->see('Secure');
    }
}
