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

    public function store (Request $request){
      $carros = new Carros;   
      $carros->marca = $request->marca;  
      $carros->ilha = $request->ilha;
      $carros->Descricao = $request->description; 
       
      $carros->kilometragem = $request->kilometragem;

     

      if($request->hasFile('image') && $request->file('image')->isValid()) {

        $requestImage = $request->image;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('img/events'), $imageName);

        $carros->image = $imageName;

    }

    
      
      $carros->save();
      return redirect ('/');
    }
}
