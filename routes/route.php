<?php

use Illuminate\Routing\Router;

Route::group([
    'domain' => config('deep_blog.route.domain'),
    'prefix' => config('deep_blog.route.api_prefix'),
    'namespace' => '\Andruby\DeepBlog\Controllers',
    'middleware' => config('deep_blog.route.middleware')
], function (Router $router) {
    $router->get('/', 'BlogController@index')->name('blog.index');
    $router->get('/{pageIndex}.html', 'BlogController@index')->where(['pageIndex' => '[0-9]+'])->name('blog.index');

    $router->get('/art/{art_id}.html', 'BlogController@detail')->where(['art_id' => '[0-9]+'])->name('blog.detail');

    $router->get('/cat/{cat_id}.html', 'BlogController@category')->where(['cat_id' => '[0-9]+'])->name('blog.category');
    $router->get('/cat/{cat_id}/{pageIndex}.html', 'BlogController@category')->where([
        'cat_id' => '[0-9]+',
        'pageIndex' => '[0-9]+'
    ])->name('blog.category');
    
    $router->get('/404.htm', 'BlogController@not_found')->name('404');
});
Route::fallback(function () {
    return redirect(route('404'));
});

