<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function(){
    return "<a href='/resources'>goto Resources</a>";
});

Route::resource('resources', UserController::class);
