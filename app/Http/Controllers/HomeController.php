<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Session;
use App\Models\perfiles\Sistema;
use App\Models\Usuario;
use App\Models\perfiles\Perfil_usuario;
use App\Models\maestros\M_medico;
use App\Models\maestros\M_clinica;
use App\Models\agenda\Agenda;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sistema = Sistema::find(1);
        $clinica = M_clinica::find(1);
        Session::put('logo_sistema', $clinica->logo); 
        Session::put('nom_sistema', $sistema->nom_sistema); 
        Session::put('nom_sistema_des', $sistema->nom_sistema ." | " . $sistema->des_sistema);
        $medicos = M_medico::all();
        $home = 1;
        $perfiles = Perfil_usuario::getPerfilUsuario(Auth::user()->id);
        if(in_array('ADM',$perfiles)){
            return view('home.index', compact('home', 'sistema', 'medicos'));
        }elseif(in_array('DOC',$perfiles)){
            $medicos = M_medico::find(Auth::user()->id);
            return view('home.index', compact('home', 'sistema', 'medicos'));
        }else{
            return view('home.index', compact('home', 'sistema', 'medicos'));
        }
    }
}
