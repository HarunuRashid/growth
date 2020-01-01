<?php



$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

$router->get('customers', 'CustomersController@index');
$router->get('uploadData', 'CustomersController@uploadData');
$router->post('uploadData', 'CustomersController@store');
$router->post('deleteData', 'CustomersController@deleteAll');
$router->get('csv', 'CustomersController@getCsv');
$router->get('insertData', 'CustomersController@store');
