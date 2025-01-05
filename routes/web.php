<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return 'hello world';
});
Route::get('/greeting', function () {
    return view('greeting');
});
Route::get('/users', function () {
    // $users =['dipu','sagar','rifat'];
    // return view('users',compact('users'));
    $users = User::all();
    return view('users',compact('users'));
});


