<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Denilson";
        $idade = 31;
        $arr = [1,2,3,4,5];
    
        $nomes = ['Denilson','João','Maria','Carlos','Gabriel'];
    
        return view('welcome',
            [
                'nome' => $nome, 
                'idade' => $idade,
                'arr' => $arr,
                'nomes' => $nomes
            ]);
    }

    public function create (){
        return view('events.create');
    }
}
