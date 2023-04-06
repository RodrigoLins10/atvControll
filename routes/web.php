<?php

use App\Http\Controllers\CalculoControll;
use App\Http\Controllers\IdadeControll;
use App\Http\Controllers\NameControll;

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;


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


Route::get('/hello/{name}', [NameControll::class, 'hello']) ->where('name', '[A-Za-z]{3,}$');

Route::get('/conta/{numero1}/{numero2}/{operacao?}', [CalculoControll::class, 'calculo']) ->where('numero1' and
'numero2' , '[0-9]+');


Route::get('/idade/{ano}/{mês?}/{dia?}', [IdadeControll::class, 'calcula'])->where ('ano', '[0-9]{4}')
    ->where ('mes', '[0-9]{1,2}?')
        ->where ('dia', '[0-9]{1,2}?');