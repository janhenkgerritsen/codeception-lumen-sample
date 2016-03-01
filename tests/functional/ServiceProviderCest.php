<?php

class ServiceProviderCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $validator = \Validator::make(['test' => 'abcde%'], ['test' => 'alpha_dash_spaces']);
        $validator->fails();
    }
}
