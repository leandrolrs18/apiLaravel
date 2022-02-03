<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/tasks", "App\Http\Controllers\TasksController@index");
Route::get("/tasks/{task}", "App\Http\Controllers\TasksController@show");
Route::post("/tasks", "App\Http\Controllers\TasksController@store");
Route::patch("/tasks/{task}", "App\Http\Controllers\TasksController@update");
Route::delete("/tasks/{task}", "App\Http\Controllers\TasksController@destroy");

Route::get("/processos", "App\Http\Controllers\ProcessosController@index");
Route::get("/processos/{processo}", "App\Http\Controllers\ProcessosController@show");
Route::post("/processos", "App\Http\Controllers\ProcessosController@store");
Route::patch("/processos/{processo}", "App\Http\Controllers\ProcessosController@update");
Route::delete("/processos/{processo}", "App\Http\Controllers\ProcessosController@destroy");

//Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'App\Http\Controllers\RegistrationController@store');

//Route::get('/login', 'App\Http\Controllers\SessionsController@create');
Route::post('/login', 'App\Http\Controllers\SessionsController@store');
Route::get('/logout', 'App\Http\Controllers\SessionsController@destroy');