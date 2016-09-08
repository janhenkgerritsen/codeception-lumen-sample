<?php

class InternalDomainsCest
{
    public function testExternalDomainThrowsException(FunctionalTester $I)
    {
        try {
            $I->amOnPage('https://www.google.com');
            $I->fail('Visiting an external URL should throw an ExternalUrlException');
        } catch (\Codeception\Exception\ExternalUrlException $ignored) {
        }
    }

    public function testWithUrlSetInModuleConfig(FunctionalTester $I)
    {
        $I->amOnPage('http://test.dev/simple-route');
        $I->see('simple route');
    }
}
