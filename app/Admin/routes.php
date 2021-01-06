<?php

use Illuminate\Routing\Router;
Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', UserController::class);
    $router->resource('modType', ModTypeController::class);
    $router->resource('/example', ExampleController::class);
    $router->resource('categories', CategoriesController::class);
    $router->resource('news', NewsController::class);
    $router->resource('articles', ArticleController::class);
    $router->resource('jobs', JobsController::class);
    $router->resource('apply_jobs', ApplyJobsController::class);
    $router->resource('contacts', ContactController::class);
    $router->resource('miscellaneouses', MiscellaneousController::class);
    $router->post('/uploadFile', 'UploadsController@uploadImg');
});
