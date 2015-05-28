<?php

$app->group(['namespace' => 'App\Http\Controllers'], function($app) {

    $app->get('/', 'HomeController@index');
    $app->get('redirect', 'HomeController@redirect');
    $app->get('simple-route', ['as' => 'simple-route', 'uses' => 'HomeController@simpleRoute']);
    $app->get('complex-route/{param1}/{param2}', ['as' => 'complex-route', 'uses' => 'HomeController@complexRoute']);
    $app->get('flash', 'HomeController@flash');
    $app->get('back', 'HomeController@back');
    $app->get('session/{message}', 'HomeController@session');
    $app->get('secure', ['middleware' => 'auth', 'uses' => 'HomeController@secure']);

});