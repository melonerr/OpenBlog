<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//********* Testing Connect Databases ************
$router->get('/users', 'MainController@Users');
$router->get('/categories', 'MainController@categories');
//***********************************************

//********* Blogs user ************
$router->get('/blog', 'BlogsController@getAll');
$router->get('/blog-title/{title}', 'BlogsController@getTitle');
//***********************************

//********* Blogs Member ************
$router->get('/blog-member', 'BlogsController@getAllmember');
$router->get('/blog-member-title/{title}', 'BlogsController@getTitlemember');
$router->post('/blog-insert', 'BlogsController@insert');
$router->post('/blog-edit/{id}', 'BlogsController@edite');
$router->post('/blog-update', 'BlogsController@update');
$router->post('/blog-delete/{id}', 'BlogsController@dalete');
$router->post('/imgblogcontent', 'ImageUploadController@BlogUploadImageContent');
//***********************************


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