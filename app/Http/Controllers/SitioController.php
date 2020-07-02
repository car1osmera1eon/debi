<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Session;
// use App\Models\perfiles\Sistema;
// use App\Models\Usuario;
use App\Models\agenda\Agenda;
use App\Models\agenda\HorarioMedico;
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

    public function agenda(Request $request)
    {
        // dd($request->presentacion);
        $presentacion       = 'agendaWeek';
        $empresa            = \App\Models\maestros\M_clinica::find(1);
        $sitio              = \App\Models\maestros\M_sitio::first();
        $medicos            = \App\Models\maestros\M_medico::get();
        $allprocedimientos  = \App\Models\maestros\M_procedimiento::limit(6)->get();
        $agendaproced       = \App\Models\maestros\M_procedimiento::where('agenda_sitio','1')->get();
        if(isset($request->medico_id)){ 
            $medico         = \App\Models\maestros\M_medico::where('id', $request->medico_id)->first();
            $medico_id      = $request->medico_id;
            $presentacion   = $request->presentacion;
            $bussinesHour   = Agenda::horarioLaboralMedico($request->medico_id);
        }else{
            $medico         = \App\Models\maestros\M_medico::find(1);
            $medico_id      = 1;
            $bussinesHour   = Agenda::horarioLaboralMedico(1);
        }
        return view('sitio.agenda', compact('empresa','sitio','allprocedimientos','medicos','medico','medico_id','presentacion','bussinesHour','agendaproced'));
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

    public function consultaAgenda(Request $request){


        $presentacion       = 'agendaDay';
        $empresa            = \App\Models\maestros\M_clinica::find(1);
        $sitio              = \App\Models\maestros\M_sitio::first();
        $medicos            = \App\Models\maestros\M_medico::get();
        $allprocedimientos  = \App\Models\maestros\M_procedimiento::limit(6)->get();
        $bussinesHour       = "";
        if(isset($request->fechadesde)){
            $desde          = $request->fechadesde;
        }else{
            $desde          = date('Y-m-d'); 
        }
        if(isset($request->fechahasta)){
            $hasta          = $request->fechahasta;
        }else{
            $hasta          = date('Y-m-d'); 
        }
        if(isset($request->profesional_id)){ 
            $medico         = \App\Models\maestros\M_medico::where('id', $request->profesional_id)->first();
            $medico_id      = $request->profesional_id;
            $presentacion   = $request->presentacion;
            
            $bussinesHour   = Agenda::horarioLaboralMedico($request->medico_id);
        }else{
            $medico         = \App\Models\maestros\M_medico::find(1);
            $medico_id      = 1;
            $bussinesHour   = Agenda::horarioLaboralMedico(1);
        }

        $semana = $this->crearSemana($request->profesional_id,$desde,$hasta,$empresa);

        return view('sitio.resultadoconsulta', compact('empresa','sitio','allprocedimientos','medicos','presentacion','bussinesHour','medico_id','desde','hasta','semana','medico'));
        
    }

    public function crearSemana($medico_id,$fechadesde,$fechahasta,$empresa)
    {
        // dd($tiempo_atencion);
        $nom_dias               =   array('Dom','Lun','Mar','Mie','Jue','Vie','Sab');
        $desde                  =   $fechadesde;
        $fechadesde             =   str_replace('/', '-', $fechadesde);
        $timestamp              =   \Carbon\Carbon::parse($fechadesde)->timestamp;
        $desde                  =   date('Y-m-d', $timestamp);
        $ndia                   =   date('N', strtotime($desde));
        
        list($anio, $mes, $dia) =   explode("-", $desde);

        $nuevaFecha             =   mktime(0,0,0,$mes,$dia,$anio); // m/d/y
        $diaDeLaSemana          =   date("w", $nuevaFecha);
        $nuevaFecha             =   $nuevaFecha - ($diaDeLaSemana*24*3600); //Restar los segundos totales de los dias transcurridos de la semana

        $semana = "<div class=\"table-responsive\">";
        $semana .= "<table class=\"table table-hover\">
        <caption>Horarios Disponibles</caption>
        <thead>
            <tr>";
            $semana .= "<th scope=\"col\">Hora</th>";
        for($i=0;$i<7;$i++){
            $fecha              =   date ("Y-m-d",$nuevaFecha+$i*24*3600);
            list($a, $m, $d)    =   explode("-", $fecha);
            $semana .= "<th scope=\"col\">".$nom_dias[$i]." $d </th>";
        }
        // dd($inicio_atencion);
        $semana     .="</tr></thead><tbody>";
        // $horario    =   $this->getHorarioLaboralxId($medico_id);
        // dd($horario);
        $inicio_atencion                =   $empresa->inicio_atencion;
        while(strtotime($empresa->fin_atencion) > strtotime($inicio_atencion))
        {
            $semana                     .=  "<tr>";
            $inicio_atencion_ant        =   $inicio_atencion;
            $inicio_atencion            =   $this->SumaHoras($inicio_atencion,$empresa->tiempo_atencion); //dd($empresa->inicio_atencion);
            $semana                     .=  "<td >".date('H:i',strtotime($inicio_atencion_ant))."<br>".date('H:i',strtotime($inicio_atencion))."</td>";
            for($i=0;$i<7;$i++){
                    // TODO FECHA DEL DIA
                    $fecha_dia          =   date ("Y-m-d",$nuevaFecha+$i*24*3600);
                    // TODO CONSULTAR LOS HORARIOS LABORABLES
                    if(!$this->getHorarioLaboralxId($medico_id,($i),1,$inicio_atencion_ant)){
                        $semana         .= "<td style='background-color:#d1cece' > <span class=\"label label-primary\">&nbsp;</span> </td>";   
                    }elseif($this->getAgendaOcupado($medico_id,$fecha_dia,$inicio_atencion_ant,$inicio_atencion)){
                        $semana         .= "<td> <button class=\"btn btn-danger\" disabled><i class=\"fa fa-calendar-times-o\"></i> OCUPADO </button> </td>";  
                        // $semana         .= "<td style='background-color:#ff9696' > <span class=\"label label-primary\">OCUPADO</span> </td>";  
                    }else{
                        $semana         .= "<td > <button class=\"btn btn-primary\"><i class=\"fa fa-calendar-check-o\"></i> AGENDAR </button></td>";
                    }
                }

            $semana .="</tr>";
        }

        $semana .="</tbody></table></div>";

        return $semana;
    }

    function parteHora( $hora ){
		$horaSplit = explode(":", $hora);
			if( count($horaSplit) < 3 ){
				$horaSplit[2] = 0;
			}
		return $horaSplit;
    }
    
    function SumaHoras( $time1, $time2 ){
        // dd($time1);
		list($hour1, $min1, $sec1) = $this->parteHora($time1); 
		list($hour2, $min2, $sec2) = $this->parteHora($time2); //dd($this->parteHora($time2));
		return date('H:i:s', mktime( $hour1 + $hour2, $min1 + $min2, $sec1 + $sec2));
    }
    
    public function getHorarioLaboralxId($id,$ndia,$tipo,$hini)
    {
        # code...
        $horario    = HorarioMedico::where('medico_id',$id)
                                    ->where('ndia',$ndia)
                                    ->where('tipo',$tipo)
                                    ->where('horaini','<=',$hini)
                                    ->where('horafin','>',$hini)
                                    ->get();
        if($horario->count()>0){
            return true;
        }else{
            return false;
        }
    }

    public function getAgendaOcupado($id,$fini,$hini,$hfin)
    {
        // dd("$id,$fini,$hini");
        # code...
        $horario    =   Agenda::where('medico_id',$id)
                                    ->where('fechaini',     '<=',   $fini)
                                    ->where('fechafin',     '>=',   $fini)
                                    ->whereTime('horaini',  '<=',   $hini)
                                    ->whereTime('horafin',  '>=',   $hini)
                                    ->get();
        //  dd($horario);
        if($horario->count()>0){
            return true;
        }else{
            return false;
        }
    }
    
}
