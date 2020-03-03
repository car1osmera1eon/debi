<?php

namespace App\Http\Controllers\agenda;

use App\Http\Requests\agenda\CreateHorarioMedicoRequest;
use App\Http\Requests\agenda\UpdateHorarioMedicoRequest;
use App\Repositories\agenda\HorarioMedicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

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
        $input = $request->all();

        $horarioMedico = $this->horarioMedicoRepository->create($input);

        Flash::success('Horario Medico saved successfully.');

        return redirect(route('horarioMedicos.index'));
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

        if (empty($horarioMedico)) {
            Flash::error('Horario Medico not found');

            return redirect(route('horarioMedicos.index'));
        }

        return view('horario_medicos.edit')->with('horarioMedico', $horarioMedico);
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
        return view('horario_medicos.horario_medico', ['medico_id'=>$id, 'tipo'=>'agenda']);
    }

    public function getHorarioMedico($id)
    {
        $data = array();    $evento = array();
        $horario = $this->horarioMedicoRepository->all(['medico_id'=>$id]); 
        $fecha = date('Y-m-d');
        foreach($horario as $row){
            $evento['id']     = $row->id;             
            $evento['title']  = $row->dia;     
            $evento['start']  = date('Y-m-d',strtotime($fecha)).' '.$row->horaini;       
            $evento['end']    = date('Y-m-d',strtotime($fecha)).' '.$row->horafin;   
            
            $data[] = $evento;    
        }
        return response()->json($data); 
    }

    
    public function crearHorario($ndia, $horaini)
    {
        $horafin = '18:00:00';
        return view('agendas.create',compact('ndia','horaini','horafin'));
    }
}
