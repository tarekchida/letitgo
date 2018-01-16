<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It is a breeze. Simply tell Lumen the URIs it should respond to
  | and give it the Closure to call when that URI is requested.
  |
 */


/**
 * throwIt
 * @version 1.0.0
 */
$router->get('/', function () use ($router) {
    return $router->version();
});

$router->group(['prefix' => 'api/'], function ($router) {

    $router->POST('/user/login', 'ApiUsersController@authenticate');

    /**
     * POST firstStepPost
     * Summary: User first step
     * Notes: User first step
     * Output-Formats: [application/json]
     */
    $router->POST('/first-step', 'RegistrationApi@firstStepPost');
    /**
     * POST registrationPost
     * Summary: User registration
     * Notes: User registration
     * Output-Formats: [application/json]
     */
    $router->POST('/registration', 'RegistrationApi@registrationPost');
    /**
     * GET countriesGet
     * Summary: Get countries list
     * Notes: Get countries list
     * Output-Formats: [application/json]
     */
    $router->GET('/countries', 'ApiLocationController@countriesGet');
    /**
     * GET countriesIdGet
     * Summary: Get states list by country id
     * Notes: Get states list by country id
     * Output-Formats: [application/json]
     */
    $router->GET('/countries/{id}', 'ApiLocationController@countriesIdGet');
    /**
     * GET statesIdGet
     * Summary: Get cities list by state id
     * Notes: Get cities list by state id
     * Output-Formats: [application/json]
     */
    $router->GET('/states/{id}', 'ApiLocationController@statesIdGet');
});

