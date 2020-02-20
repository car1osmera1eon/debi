<?php

namespace App\Http\Controllers\agenda;

use Illuminate\Support\Facades\DB;
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
use Flash;
use Response;

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
        return view('agendas.create');
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

        $agenda = $this->agendaRepository->create($input);

        Flash::success('Agenda saved successfully.');

        return redirect(route('agendas.index'));
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
        if (empty($agenda)) {
            Flash::error('Agenda not found');

            return redirect(route('agendas.index'));
        }

        return view('agendas.edit', compact('agenda','pacientes','procedimientos','medicos','consultorios','clinicas','especialidades'));
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

    public function agendaDelDia($id){
        return view('agendas.agenda', ['medico_id'=>$id, 'tipo'=>'agenda']);
    }

    
    public function agendaMedico($id){ 
        $data = array();    $evento = array();
        $agenda = $this->agendaRepository->all(['medico_id'=>$id]); 
        foreach($agenda as $row){
            $evento['id']     = $row->id;             
            $evento['title']  = "Procedimiento: ".$row->procedimiento->nombre.", Paciente: ".$row->paciente->primernombre." ".$row->paciente->primerapellido;     
            $evento['start']  = date('Y-m-d H:i',strtotime($row->fechaini));       
            $evento['end']    = date('Y-m-d H:i',strtotime($row->fechafin));  
            $evento['url']    = route('agendas.edit',[$row->id]);  
            
            $data[] = $evento;    
        }
        return response()->json($data); 
    }

    public function actualizarAgenda(Request $request){    
        $input['fechaini'] = $request->fechaini;
        $input['fechafin'] = $request->fechafin;
        Agenda::where('id', $request->id)
            ->update($input);
 
    }
}
