<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Motor;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('empresas');
});

Route::get("/motor/{id}", function($id){
    return view("motor", ["id" => $id]);
});