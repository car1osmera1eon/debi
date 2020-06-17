<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Session;
// use App\Models\perfiles\Sistema;
// use App\Models\Usuario;
use App\Models\agenda\Agenda;
use App\Models\Maestros\M_medico;

use App\Repositories\agenda\AgendaRepository;

class SitioController extends Controller
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
        
    }

    public function agenda()
    {
        $empresa            = \App\Models\maestros\M_clinica::find(1);
        $sitio              = \App\Models\maestros\M_sitio::first();
        $medicos            = \App\Models\maestros\M_medico::get();
        $allprocedimientos  = \App\Models\maestros\M_procedimiento::limit(6)->get();
        $medico             = \App\Models\maestros\M_medico::find(1);

        return view('sitio.agenda', compact('empresa','sitio','allprocedimientos','medicos','medico'));
    }

    public function getTodoAgenda()
    {
        $data       = array();    $evento = array();
        $agenda     = $this->agendaRepository->all(); 
        
        foreach($agenda as $row){
            $evento['id']     = $row->id;             
            $evento['title']  = "No Disponible";     
            $evento['start']  = date('Y-m-d',strtotime($row->fechaini)).' '.$row->horaini;       
            $evento['end']    = date('Y-m-d',strtotime($row->fechafin)).' '.$row->horafin;  
            // $evento['url']    = route('agendas.edit',[$row->id]);  
            
            $data[] = $evento;    
        }
        return response()->json($data); 
    }
    
}
