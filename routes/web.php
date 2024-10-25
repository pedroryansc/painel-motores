<?php

use App\Livewire\Motor as LivewireMotor;
use App\Models\Empresa;
use App\Models\Motor;
use Illuminate\Support\Facades\Route;

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
    return view('empresas', ['empresas' => Empresa::all()]);
})->name('home');

Route::get("/motor/{motor}", function(Motor $motor){
    return view('motor', ['motor' => $motor]);
})->name('motor');
