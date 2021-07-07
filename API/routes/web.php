<?php


$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/users', 'MainController@Users');
$router->get('/categories', 'MainController@categories');
$router->post('/imgblogcontent', 'ImageUploadController@BlogUploadImageContent');
$router->post('/blog-insert', 'BlogsController@insert');


// Authorization user 
$router->group(['prefix' => 'member', 'middleware' => ['member']], function () use ($router) {
    $router->get('/users', 'UsersController@Users');
});
// Authorization user 


// Authorization admin 
$router->group(['prefix' => 'admin', 'middleware' => ['admin']], function () use ($router) {
    $router->get('/users', 'UsersController@Users');
});
// Authorization admin 