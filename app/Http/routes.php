<?php

$app->get('/', 'HomeController@index');
$app->get('redirect', 'HomeController@redirect');
$app->get('simple-route', ['as' => 'simple-route', 'uses' => 'HomeController@simpleRoute']);
$app->get('complex-route/{param1}/{param2}', ['as' => 'complex-route', 'uses' => 'HomeController@complexRoute']);
$app->get('secure', ['middleware' => 'auth', 'uses' => 'HomeController@secure']);