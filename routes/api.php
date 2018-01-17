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
    return view('welcome');
});

$router->group(['prefix' => 'api/'], function ($router) {

    /**
     * POST login
     * Summary: User login
     * Output-Formats: [application/json]
     */
    $router->POST('/user/login', 'Api\Auth\LoginController@login');
    
    /**
     * POST logout
     * Summary: User logout
     * Output-Formats: [application/json]
     */
    $router->POST('/user/logout', 'Api\Auth\LoginController@logout');
    
    /**
     * POST forgetPassword
     * Summary: forget password
     * Output-Formats: [application/json]
     */
    $router->POST('/user/password/forget', 'Api\Auth\ForgotPasswordController@getResetToken');
    
    /**
     * POST restPassword
     * Summary: rest password
     * Output-Formats: [application/json]
     */
    $router->POST('/user/password/reset', 'Api\Auth\ResetPasswordController@reset');
    
    /**
     * POST firstStepPost
     * Summary: User first step
     * Output-Formats: [application/json]
     */
    $router->POST('/user/first-step', 'ApiUsersController@firstStepPost');
    
    /**
     * POST registrationPost
     * Summary: User registration
     * Output-Formats: [application/json]
     */
    $router->POST('/user/registration', 'ApiUsersController@registrationPost');
    
    /**
     * GET countriesGet
     * Summary: Get countries list
     * Output-Formats: [application/json]
     */
    $router->GET('/get-countries', 'Api\LocationsController@countriesGet');
    
    /**
     * GET countriesIdGet
     * Summary: Get states list by country id
     * Output-Formats: [application/json]
     */
    $router->GET('/get-countries/{id}', 'Api\LocationsController@countriesIdGet');
    
    /**
     * GET statesIdGet
     * Summary: Get cities list by state id
     * Output-Formats: [application/json]
     */
    $router->GET('/get-states/{id}', 'Api\LocationsController@statesIdGet');
});

