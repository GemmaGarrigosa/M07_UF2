<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SignController extends Controller
{
    public function signin($valor1,$valor2,$valor3,$valor4){

        $titolFinal = $valor1.' '.$valor2.' '.$valor3.' '.$valor4;
        return view('signin')-> with('titolFinal', $titolFinal);
    }

    public function signup($valor1,$valor2,$valor3){
        $titolFinal = $valor1.' '.$valor2.' '.$valor3;
        return view('signup')-> with('titolFinal',$titolFinal);
    }
}
