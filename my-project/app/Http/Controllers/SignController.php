<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SignController extends Controller
{
    public function signin($valor1,$valor2,$valor3,$valor4){ //els paràmetres rebuts per la funció és el que escriu l'usuari en la URL

        $titolFinal = $valor1.' '.$valor2.' '.$valor3.' '.$valor4; //contruïm la string que voldrem rebre en el <h1> de la vista
        return view('signin')-> with('titolFinal', $titolFinal); // retornem la view amb la variable de la string
    }

    public function signup($valor1,$valor2,$valor3){
        $titolFinal = $valor1.' '.$valor2.' '.$valor3;
        return view('signup')-> with('titolFinal',$titolFinal);
    }


    public function signin2(){ 
        return view('signin');
    }

    public function signup2(){
        return view('signup');
    }

}
