<?php
    require_once '../core/Router.php';

    $router = new Router();

    $router->get(path: '/users', callback: 'UserController@index');
    //$router->post(path: '/users', callback: 'UserController@store');

    $router->dispatch();
