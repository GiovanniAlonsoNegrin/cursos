<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;

Route::get('', [HomeController::class, 'index'])->name('home');

Route::resource('roles', RoleController::Class)->names('roles');

Route::resource('users', UserController::Class)->only('index', 'edit', 'update')->names('users');
