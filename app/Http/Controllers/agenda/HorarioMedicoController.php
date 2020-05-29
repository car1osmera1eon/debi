<?php

namespace App\Http\Controllers\agenda;

use Illuminate\Support\Facades\Auth; 
use App\Http\Requests\agenda\CreateHorarioMedicoRequest;
use App\Http\Requests\agenda\UpdateHorarioMedicoRequest;
use App\Repositories\agenda\HorarioMedicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\agenda\HorarioMedico; 
use App\Models\maestros\M_medico; 

class HorarioMedicoController extends AppBaseController
{
    /** @var  HorarioMedicoRepository */
    private $horarioMedicoRepository;

    public function __construct(HorarioMedicoRepository $horarioMedicoRepo)
    {
        $this->horarioMedicoRepository = $horarioMedicoRepo;
    }

    /**
     * Display a listing of the HorarioMedico.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $horarioMedicos = $this->horarioMedicoRepository->all();

        return view('horario_medicos.index')
            ->with('horarioMedicos', $horarioMedicos);
    }

    /**
     * Show the form for creating a new HorarioMedico.
     *
     * @return Response
     */
    public function create()
    {
        return view('horario_medicos.create');
    }

    /**
     * Store a newly created HorarioMedico in storage.
     *
     * @param CreateHorarioMedicoRequest $request
     *
     * @return Response
     */
    public function store(CreateHorarioMedicoRequest $request)
    {
        $input  =   $request->all(); 
        // $cont   =   $this->validarExisteEvento($request);
        // if($cont==3){
        //     Flash::danger('El Horario del Medico no puede ser creado.');
        //     return redirect(route('crearHorario',[$input['medico_id'], $input['ndia'],  $input['horaini']])); //$medico_id, $ndia, $horaini
        // }
        //dd($input);
        $dia    =   "";
        switch ($input['ndia']){
            case 0: $dia = "Dom."; break;
            case 1: $dia = "Lun."; break;
            case 2: $dia = "Mar."; break;
            case 3: $dia = "Mie."; break;
            case 4: $dia = "Jue."; break;
            case 5: $dia = "Vie."; break;
            case 6: $dia = "Sab."; break;
        }
        $input['dia']               = $dia;
        $input['usuariocrea_id']    = Auth::user()->id;
        $input['usuariomod_id']     = Auth::user()->id;
        $input['ip_creacion']       = $_SERVER['REMOTE_ADDR'];
        $input['ip_modificacion']   = $_SERVER['REMOTE_ADDR'];
        $horarioMedico = $this->horarioMedicoRepository->create($input);

        Flash::success('Horario Medico saved successfully.');

        return redirect(route('horarioMedico',[$input['medico_id']]));
    }

    public function validaAgregarHorarioMedico(Request $request){ 
        
        $horarios   = $this->horarioMedicoRepository->all(['medico_id'=>$request->medico_id, 
        'ndia' => $request->ndia]);
        if(count($horarios)==3){
            $data['estado'] = "error";
            $data['msj']    = "Ya no se puede agregar más horarios a este día";
        }else{
            $data['estado'] = "ok";
            $data['msj']    = "ok";
        }
        return response()->json($data); 
    }

    public function validaAgregarHorarioMedico2(Request $request){ 
        
        $horario   = HorarioMedico::find($request->id);
        // dd($horario->ndia);
        if($horario->ndia!=$request->ndia){
            $horarios   = $this->horarioMedicoRepository->all(['medico_id'=>$request->medico_id, 
            'ndia' => $request->ndia]);
            if(count($horarios)==3){
                $data['estado'] = "error";
                $data['msj']    = "Ya no se puede agregar más horarios a este día";
            }else{
                $data['estado'] = "ok";
                $data['msj']    = "ok";
            }
            // $data['estado'] = "error";
            // $data['msj']    = "Ya no se puede agregar más horarios a este día";
        }else{
            $data['estado'] = "ok";
            $data['msj']    = "ok";
        }
        return response()->json($data); 
    }

    /**
     * Display the specified HorarioMedico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $horarioMedico = $this->horarioMedicoRepository->find($id);

        if (empty($horarioMedico)) {
            Flash::error('Horario Medico not found');

            return redirect(route('horarioMedicos.index'));
        }

        return view('horario_medicos.show')->with('horarioMedico', $horarioMedico);
    }

    /**
     * Show the form for editing the specified HorarioMedico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $horarioMedico = $this->horarioMedicoRepository->find($id);
        // dd($horarioMedico);
        // $medicos    = M_medico::find($horarioMedico->medico_id);
        $medicosall     = M_medico::where('id','=',$horarioMedico->medico_id)->get();  
        $medicos        = '[]';
        foreach($medicosall as $row){
            $medico[$row->id]         = $row->usuario->name; 
            $medicos = $medico;
        } 

        $ndia       = $horarioMedico->ndia;

        $tipo       = array('1'=>'Normal', '2'=>'Almuerzo');

        $horaini    = $horarioMedico->horaini;
        $horafin    = $horarioMedico->horafin;

        if (empty($horarioMedico)) {
            Flash::error('Horario Medico not found');

            return redirect(route('horarioMedicos.index'));
        }

        return view('horario_medicos.edit', ['horarioMedico'=>$horarioMedico, 'medicos'=>$medicos, 'tipo'=>$tipo, 
        'ndia'=>$ndia, 'horaini'=>$horaini, 'horafin'=>$horafin]);
    }

    /**
     * Update the specified HorarioMedico in storage.
     *
     * @param int $id
     * @param UpdateHorarioMedicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHorarioMedicoRequest $request)
    {
        $horarioMedico = $this->horarioMedicoRepository->find($id);

        if (empty($horarioMedico)) {
            Flash::error('Horario Medico not found');

            return redirect(route('horarioMedicos.index'));
        }

        $horarioMedico = $this->horarioMedicoRepository->update($request->all(), $id);

        Flash::success('Horario Medico updated successfully.');

        return redirect(route('horarioMedicos.index'));
    }

    /**
     * Remove the specified HorarioMedico from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $horarioMedico = $this->horarioMedicoRepository->find($id);

        if (empty($horarioMedico)) {
            Flash::error('Horario Medico not found');

            return redirect(route('horarioMedicos.index'));
        }

        $this->horarioMedicoRepository->delete($id);

        Flash::success('Horario Medico deleted successfully.');

        return redirect(route('horarioMedicos.index'));
    }

    public function horarioMedico($id){
        $medico = M_medico::find($id);
        return view('horario_medicos.horario_medico', ['medico_id'=>$id, 'tipo'=>'agenda', 'medico'=>$medico]);
    }

    public function getHorarioMedico($id)
    {
        $data = array();    $evento = array();
        $horario = $this->horarioMedicoRepository->all(['medico_id'=>$id]); 
        // $fecha = date('Y-m-d'); 
        $year = date('Y');
        $week = date('W');  
        $dayofweek = array ('sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'); 
        foreach($horario as $row){
            if($row->tipo==1){
                $label = "Horario de atención al paciente";     $color = "#1E90FF";
            }else{
                $label = "Horario de almuezo / Lunch";          $color = "#FF4500";
            }
            $evento['id']     = $row->id;             
            $evento['title']  = "$row->dia, $label";       
            $fecha            = date("Y-m-d", strtotime($dayofweek[$row->ndia].' this week')); 
            $evento['start']  = $fecha.' '.$row->horaini;  
            $evento['end']    = $fecha.' '.$row->horafin;   
            $evento['ndia']   = $row->ndia;   
            $evento['color']  = $color;   
            
            
            $data[] = $evento;    
        }

       
        return response()->json($data); 
    }

    public function diasDeLaSemana(){
        $week =  date('W');
        for($i=0; $i<7; $i++){
            echo date('Y-m-d', strtotime('01/01 +' . $week . ' weeks first day +' . $i . ' day')) . '<br />';
        }
    }

    
    public function crearHorario($medico_id, $ndia, $horaini)
    {
        $medicosall     = M_medico::where('id','=',$medico_id)->get();  
        $medicos        = '[]';
        foreach($medicosall as $row){
            $medico[$row->id]         = $row->usuario->name; 
            $medicos = $medico;
        } 
        $mediodia = '12:00';
        // dd(strtotime($horaini)." >> ".strtotime($mediodia));

        if(strtotime($horaini) > strtotime($mediodia)){
            $horafin = '18:00:00';
        }else{
            $horafin = '12:00:00';
        }
        
        $tipo = array('1'=>'Normal', '2'=>'Almuerzo');
        return view('horario_medicos.create',compact('ndia','horaini','horafin','medicos','tipo'));
        // return view('agendas.create',compact('ndia','horaini','horafin'));
    }

    
    public function actualizarHorarioMedico(Request $request){
        $horarioMedico  = $this->horarioMedicoRepository->find($request->id);
        $request->fechaini = str_replace('T', ' ', $request->fechaini);
        $horaini = date('H:i', strtotime($request->fechaini));

        $ndia = date('N', strtotime($request->fechaini));
        // dd($horarioMedico->id);
        $horarios       = $this->horarioMedicoRepository->all(['id !='=>$request->id,'medico_id'=>$request->medico_id, 
        'ndia' => $ndia]);
        $data = array();
        // dd("$ndia == $horarioMedico->ndia");
        if(count($horarios)>0){
            $data['estado'] = "error";
            $data['msj'] = "No se pueden realizar los cambios<br>Ya existe un horario registrado para este dia";
        }else{
            $request->fechafin = str_replace('T', ' ', $request->fechafin);
            $horafin = date('H:i', strtotime($request->fechafin));
            
            $input['horaini']   = $horaini;
            $input['horafin']   = $horafin;
            $input['ndia']      = $ndia;
            // dd($input);
            HorarioMedico::where('id', $request->id)->update($input);
            $data['estado'] = "ok";
            $data['res'] = "Cambios realizados con éxito";
            
        }
        return response()->json($data); 
    }
}
