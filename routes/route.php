<?php
Route::add('/', function(){
//define which page you want to display while user hit main page. 
include('./index.php');
});
Route::add('/home', function(){
//define which page you want to display while user hit main page. 
include('./views/home.php');
});

Route::submit();