<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;

class NameControll extends Controller
{
    public function hello($name){
        return 'Olá, '.$name.'! Bem-vindo ao meu site.';
    }
}