<?php

namespace App\Http\Controllers\agenda;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth; 
use App\Http\Requests\agenda\CreateAgendaRequest;
use App\Http\Requests\agenda\UpdateAgendaRequest;
use App\Repositories\agenda\AgendaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\maestros\M_procedimiento;
use App\Models\maestros\M_paciente; 
use App\Models\maestros\M_medico; 
use App\Models\maestros\M_consultorio; 
use App\Models\maestros\M_clinica; 
use App\Models\maestros\Especialidad; 
use App\Models\agenda\Agenda; 
use App\Models\agenda\HorarioMedico; 
use Flash;
use Response; 
use App\Menu; 

class AgendaController extends AppBaseController
{
    /** @var  AgendaRepository */
    private $agendaRepository;

    public function __construct(AgendaRepository $agendaRepo)
    {
        $this->agendaRepository = $agendaRepo;
    }

    /**
     * Display a listing of the Agenda.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        Menu::seleccionMenu('Odontología ', 'Consulta');
        $agendas = $this->agendaRepository->all();

        return view('agendas.index')
            ->with('agendas', $agendas);
    }

    /**
     * Show the form for creating a new Agenda.
     *
     * @return Response
     */
    public function create()
    {
        $pacientes = array();       $medicos = array();
        //$pacientes = M_paciente::select('primernombre', 'id')->get();
        $procedimientos = M_procedimiento::pluck('nombre','id');
        $consultorios   = M_consultorio::pluck('nombre','id');
        $clinicas       = M_clinica::pluck('razonsocial','id');
        $especialidades = Especialidad::pluck('nombre','id');
        $medicosall     = M_medico::all();
        $pacientesall   = M_paciente::all();
        foreach($pacientesall as $pac){
            $paciente[$pac->id]         = $pac->primernombre . " " . $pac->primerapellido; 
            $pacientes = $paciente;
        }  
        foreach($medicosall as $row){
            $medico[$row->id]         = $row->usuario->name; 
            $medicos = $medico;
        } 
        return view('agendas.create',compact('pacientes','procedimientos','medicos','consultorios','clinicas','especialidades'));
    }

    /**
     * Store a newly created Agenda in storage.
     *
     * @param CreateAgendaRequest $request
     *
     * @return Response
     */
    public function store(CreateAgendaRequest $request)
    {

        $input = $request->all();
        
        $input['usuariocrea_id']    = Auth::user()->id;
        $input['usuariomod_id']     = Auth::user()->id;

        $agenda = $this->agendaRepository->create($input);

        Flash::success('Agenda saved successfully.');

        $dia = date('m/d/Y', strtotime($input['fechaini']));
        return view('agendas.agenda', ['medico_id'=>$input['medico_id'], 'tipo'=>'agenda', 'dia'=>$dia]);

        // return redirect(route('agendas.index'));
    }

    /**
     * Display the specified Agenda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $agenda = $this->agendaRepository->find($id);

        if (empty($agenda)) {
            Flash::error('Agenda not found');

            return redirect(route('agendas.index'));
        }

        return view('agendas.show')->with('agenda', $agenda);
    }

    /**
     * Show the form for editing the specified Agenda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $agenda = $this->agendaRepository->find($id);
        // $agenda->fechaini = date('Y-m-d',strtotime($agenda->fechaini));
        $pacientes = array();       $medicos = array();
        //$pacientes = M_paciente::select('primernombre', 'id')->get();
        $procedimientos = M_procedimiento::pluck('nombre','id');
        $consultorios   = M_consultorio::pluck('nombre','id');
        $clinicas       = M_clinica::pluck('razonsocial','id');
        $especialidades = Especialidad::pluck('nombre','id');
        $medicosall     = M_medico::all();
        $pacientesall   = M_paciente::all();

        $medico_id      = $agenda->medico_id; 

        foreach($pacientesall as $pac){
            $paciente[$pac->id]         = $pac->primernombre . " " . $pac->primerapellido; 
            $pacientes = $paciente;
        }  
        foreach($medicosall as $row){
            $medico[$row->id]         = $row->usuario->name; 
            $medicos = $medico;
        } 
        if (empty($agenda)) {
            Flash::error('Agenda not found');

            return redirect(route('agendas.index'));
        }

        return view('agendas.edit', compact('agenda','pacientes','procedimientos','medicos','consultorios',
        'clinicas','especialidades','medico_id'));
    }

    /**
     * Update the specified Agenda in storage.
     *
     * @param int $id
     * @param UpdateAgendaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAgendaRequest $request)
    {
        $agenda = $this->agendaRepository->find($id);

        if (empty($agenda)) {
            Flash::error('Agenda not found');

            return redirect(route('agendas.index'));
        }

        $agenda = $this->agendaRepository->update($request->all(), $id);

        Flash::success('Agenda updated successfully.');

        return redirect(route('agendas.index'));
    }

    /**
     * Remove the specified Agenda from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $agenda = $this->agendaRepository->find($id);

        if (empty($agenda)) {
            Flash::error('Agenda not found');

            return redirect(route('agendas.index'));
        }

        $this->agendaRepository->delete($id);

        Flash::success('Agenda deleted successfully.');

        return redirect(route('agendas.index'));
    } 

    public function agendaDelDia($id, $tipo="agenda"){
        if ($id==0) {
            $id = Auth::user()->id;
        }
        $bussinesHour = array();
        $horario    = HorarioMedico::where('medico_id', '=', $id)
        ->where('tipo', '=', 1)
        ->select()
        ->get();
        foreach($horario as $row){
            $hours['dow']   = $row->ndia;
            $hours['start'] = "$row->horaini";
            $hours['end']   = "$row->horafin";
            $bussinesHour[] = $hours;
        } 
        $string = "[";
        foreach($horario as $row){
            $string .= "{";
            $string .= "dow: [$row->ndia], "; 
            $string .= "start: `$row->horaini`, "; 
            $string .= "end: `$row->horafin` "; 
            $string .= "},";
        } 
        $string .= "]";
        $medico = M_medico::find($id);
        // $bussinesHour   = Agenda::horarioLaboralMedico($id);
        return view('agendas.agenda', ['medico_id'=>$id, 'tipo'=>$tipo, 'dia'=>date('m/d/Y'), 'horario'=>$horario, 
        'bussinesHour'=>$bussinesHour, 'string' => utf8_encode($string), 'medico'=>$medico]);
    }

    public function agendaDia(){
        Menu::seleccionMenu('Odontología ', 'Agenda');
        $tipo       = "agenda"; 
        $id         = Auth::user()->id;
        $horario    = HorarioMedico::where('medico_id', '=', $id)
        ->where('tipo', '=', 1)
        ->select()
        ->get();
        $bussinesHour = array();
        foreach($horario as $row){
            $hours['dow']   = $row->ndia;
            $hours['start'] = "$row->horaini";
            $hours['end']   = "$row->horafin";
            $bussinesHour[] = $hours;
        } 
        $string = "[";
        foreach($horario as $row){
            $string .= "{";
            $string .= "dow: [$row->ndia], "; 
            $string .= "start: `$row->horaini`, "; 
            $string .= "end: `$row->horafin` "; 
            $string .= "},";
        } 
        $string .= "]";
        $medico = M_medico::find($id);

        // $bussinesHour   = Agenda::horarioLaboralMedico($id);
        return view('agendas.agenda', ['medico_id'=>$id, 'tipo'=>$tipo, 'dia'=>date('m/d/Y'), 'horario'=>$horario, 
        'bussinesHour'=>$bussinesHour, 'string' => utf8_encode($string), 'medico'=>$medico]);
    }
    
    public function agendaMedico($id){ 
        $data       = array();    $evento = array();
        $agenda     = $this->agendaRepository->all(['medico_id'=>$id]); 
        
        foreach($agenda as $row){
            $evento['id']     = $row->id;             
            $evento['title']  = "Procedimiento: ".$row->procedimiento->nombre.", Paciente: ".$row->paciente->primernombre." ".$row->paciente->primerapellido;     
            $evento['start']  = date('Y-m-d',strtotime($row->fechaini)).' '.$row->horaini;       
            $evento['end']    = date('Y-m-d',strtotime($row->fechafin)).' '.$row->horafin;  
            // $evento['url']    = route('agendas.edit',[$row->id]);  
            
            $data[] = $evento;    
        }
        return response()->json($data); 
    }

    public function horarioLaboralMed($id){ 
        $data       = array();    $evento = array();
        $horario    = HorarioMedico::where('medico_id', '=', $id)->where('tipo', '=', 1)->get();
        
        $string = "[";
        foreach($horario as $row){
            $string .= "{";
            $string .= "dow: [$row->ndia], "; 
            $string .= "start: '$row->horaini', "; 
            $string .= "end: '$row->horafin' "; 
            $string .= "},";
        } 
        $string .= "]";
        echo $string; 
        return;
        // $bussinesHour = array();
        // foreach($horario as $row){
        //     $hours['dow']   = $row->ndia;
        //     $hours['start'] = "$row->horaini";
        //     $hours['end']   = "$row->horafin";
        //     $bussinesHour[] = $hours;
        // } 
        // return response()->json($bussinesHour); 
        
    }

    public function actualizarAgenda(Request $request){    
        $input['fechaini']  = $request->fechaini;
        $input['horaini']   = date('H:i',strtotime($request->fechaini));
        $input['fechafin']  = $request->fechafin;
        $input['horafin']   = date('H:i',strtotime($request->fechafin)); 

        Agenda::where('id', $request->id)
            ->update($input);
 
    }

    public function crearAgenda($fechaini, $fechafin)
    {
        $pacientes = array();       $medicos = array();
        //$pacientes = M_paciente::select('primernombre', 'id')->get();
        $procedimientos = M_procedimiento::pluck('nombre','id');
        $consultorios   = M_consultorio::pluck('nombre','id');
        $clinicas       = M_clinica::pluck('razonsocial','id');
        $especialidades = Especialidad::pluck('nombre','id');
        $medicosall     = M_medico::all();
        $pacientesall   = M_paciente::all();
        foreach($pacientesall as $pac){
            $paciente[$pac->id]         = $pac->primernombre . " " . $pac->primerapellido; 
            $pacientes                  = $paciente;
        }  
        foreach($medicosall as $row){
            $medico[$row->id]           = $row->usuario->name; 
            $medicos                    = $medico;
        } 
        if($fechaini!=""){
            $horaini = substr($fechaini, 11, 9);
            $fechaini = substr($fechaini, 0, 10); 
        }
        if($fechafin!=""){
            $horafin = substr($fechafin, 11, 9);
            $fechafin = substr($fechafin, 0, 10); 
        }
        return view('agendas.create',compact('fechaini','horaini','fechafin','horafin','pacientes','procedimientos','medicos','consultorios','clinicas','especialidades'));
    }

}
