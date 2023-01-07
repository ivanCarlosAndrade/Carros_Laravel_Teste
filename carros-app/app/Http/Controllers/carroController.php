<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carros;
class carroController extends Controller
{
    public function index (){
        $carros = Carros::all();
        return view('teste',['carros' => $carros]);

    }
}
