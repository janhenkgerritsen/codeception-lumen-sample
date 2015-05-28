<?php

class RoutesCest
{

    public function openPageByRoute(FunctionalTester $I)
    {
        $I->amOnRoute('simple-route');
        $I->seeCurrentUrlEquals('/simple-route');
    }

    public function openPageByRouteWithMultipleParameters(FunctionalTester $I)
    {
        $I->amOnRoute('complex-route', ['a', 'b']);
        $I->seeCurrentUrlEquals('/complex-route/a/b');
    }

}