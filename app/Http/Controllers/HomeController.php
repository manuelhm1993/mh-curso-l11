<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //------------------------------------ Controlador de un único método
    public function __invoke() 
    {
        // return view('welcome');
        return 'Bienvenidos a MHenriquez';
    }
}
