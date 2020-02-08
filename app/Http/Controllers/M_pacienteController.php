<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateM_pacienteRequest;
use App\Http\Requests\UpdateM_pacienteRequest;
use App\Repositories\M_pacienteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Session;

use App\Models\M_tipo_identificacion; 
use App\Models\M_pais; 
use App\Models\M_provincia; 
use App\Models\M_canton; 
use App\Models\M_parroquia; 
use App\Submodulo; 


class M_pacienteController extends AppBaseController
{
    /** @var  M_pacienteRepository */
    private $mPacienteRepository;

    public function __construct(M_pacienteRepository $mPacienteRepo)
    {
        $this->mPacienteRepository = $mPacienteRepo;
    }

    /**
     * Display a listing of the M_paciente.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $subm = Submodulo::where('nom_submodulo', 'Pacientes')->first();
        Session::flash('submodulo', $subm->id);  

        $mPacientes = $this->mPacienteRepository->all();

        return view('m_pacientes.index')
            ->with('mPacientes', $mPacientes);
    }

    /**
     * Show the form for creating a new M_paciente.
     *
     * @return Response
     */
    public function create()
    {
        $tipo_ident     = M_tipo_identificacion::pluck('tipo_identificacion','id');
        $paises         = M_pais::pluck('nombre','id');
        $provincias     = M_provincia::pluck('nombre_m_provincia','codigo_m_provincia');
        return view('m_pacientes.create', compact('tipo_ident', 'paises', 'provincias'));
    }

    /**
     * Store a newly created M_paciente in storage.
     *
     * @param CreateM_pacienteRequest $request
     *
     * @return Response
     */
    public function store(CreateM_pacienteRequest $request)
    {
        $input = $request->all();

        $mPaciente = $this->mPacienteRepository->create($input);

        Flash::success('M Paciente saved successfully.');

        return redirect(route('mPacientes.index'));
    }

    /**
     * Display the specified M_paciente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mPaciente = $this->mPacienteRepository->find($id);

        if (empty($mPaciente)) {
            Flash::error('M Paciente not found');

            return redirect(route('mPacientes.index'));
        }

        return view('m_pacientes.show')->with('mPaciente', $mPaciente);
    }

    /**
     * Show the form for editing the specified M_paciente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mPaciente = $this->mPacienteRepository->find($id);

        if (empty($mPaciente)) {
            Flash::error('M Paciente not found');

            return redirect(route('mPacientes.index'));
        }

        return view('m_pacientes.edit')->with('mPaciente', $mPaciente);
    }

    /**
     * Update the specified M_paciente in storage.
     *
     * @param int $id
     * @param UpdateM_pacienteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateM_pacienteRequest $request)
    {
        $mPaciente = $this->mPacienteRepository->find($id);

        if (empty($mPaciente)) {
            Flash::error('M Paciente not found');

            return redirect(route('mPacientes.index'));
        }

        $mPaciente = $this->mPacienteRepository->update($request->all(), $id);

        Flash::success('M Paciente updated successfully.');

        return redirect(route('mPacientes.index'));
    }

    /**
     * Remove the specified M_paciente from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mPaciente = $this->mPacienteRepository->find($id);

        if (empty($mPaciente)) {
            Flash::error('M Paciente not found');

            return redirect(route('mPacientes.index'));
        }

        $this->mPacienteRepository->delete($id);

        Flash::success('M Paciente deleted successfully.');

        return redirect(route('mPacientes.index'));
    }

     
    public function getCantones(Request $request, $id){
        if($request->ajax()){
            $cantones = M_canton::cantones($id);
            return response()->json($cantones);
        }
    }

    public function getParroquias(Request $request, $id){
        if($request->ajax()){
            $parroquias = M_parroquia::parroquias($id);
            return response()->json($parroquias);
        }
    }

}
