<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PaginaController extends Controller
{
    


    public function contacto(){

        return view('contacto');
    }

    public function nosotros(){
       /* $nombre = "ronald";*/

        return view('nosotros')->with(['nombreenviado' => 'ronald alejo' , 'empresa' => 'bio sac']);
    } 
}