<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::livewire('/post','post.index')
->layout('layouts.app')->name('post.index');
Route::livewire('/post/create','post.create')
->layout('layouts.app')->name('post.create');

Route::livewire('/post/edit/{id}','post.edit')
->layout('layouts.app')->name('post.edit');