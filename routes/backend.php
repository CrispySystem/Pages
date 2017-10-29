<?php

use CrispySystem\Helpers\Config;
use CrispySystem\Router\Router;
use CrispySystem\Router\Route;

$baseUrl = Config::get('system.base_urls.backend');

Router::group()
    ->setPathPrefix($baseUrl . '/pages')
    ->setHandlerPrefix('CrispySystem\Modules\Pages\Controllers\BackendController.')
    ->setNamePrefix('backend.pages')
    ->routes(function () {

        // Index
        Route::get('', 'index')
            ->setName('index');

        // Add
        Route::get('/new', 'new')
            ->setName('new');

        Route::post('/create', 'create');

        // Edit
        Route::get('/edit/{id}', 'edit')
            ->where('id', '(\\d+)')
            ->setName('edit');

        Route::post('/update/{id}', 'update')
            ->where('id', '(\\d+)');

        // Delete
        Route::get('/delete/{id}', 'delete')
            ->where('id', '(\\d+)')
            ->setName('delete');

        Route::post('/destroy/{id}', 'destroy')
            ->where('id', '(\\d+)');

    });
