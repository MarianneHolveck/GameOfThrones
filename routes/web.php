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

//======================================
// MainController
//======================================

$router->get(
    '/',
    [
        'uses' => 'MainController@home',
        'as'   => 'main-home'
    ]
);

//======================================
// CharacterController
//======================================

$router->get(
    '/character/{id}',
    [
        'uses' => 'CharacterController@item',
        'as'   => 'character-item'
    ]
);

//======================================
// HouseController
//======================================

$router->get(
    '/house',
    [
        'uses' => 'HouseController@list',
        'as'   => 'house-list'
    ]
);

$router->get(
    '/house/{id}',
    [
        'uses' => 'HouseController@item',
        'as'   => 'house-item'
    ]
);
