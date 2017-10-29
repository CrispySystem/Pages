<?php

use CrispySystem\Helpers\Config;
use CrispySystem\Router\Router;
use CrispySystem\Router\Route;

$baseUrl = Config::get('system.base_urls.frontend');

Router::group()
    ->setPathPrefix($baseUrl)
    ->setHandlerPrefix('CrispySystem\Modules\Pages\Controllers\FrontendController.')
    ->setNamePrefix('frontend.pages')
    ->routes(function () {

        // Index
        Route::get('/{slug}', 'slug')
            ->where('slug', '((?!' . ltrim(Config::get('system.base_urls.backend'), '/') . ').*)')
            ->setName('index');

    });
