<?php

namespace App\Http\Controllers\maestros;

use App\Http\Requests\CreateM_medicoRequest;
use App\Http\Requests\UpdateM_medicoRequest;
use App\Repositories\M_medicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Menu;
use App\Models\Usuario;
use App\Models\Especialidad;


class M_medicoController extends AppBaseController
{
    /** @var  M_medicoRepository */
    private $mMedicoRepository;

    public function __construct(M_medicoRepository $mMedicoRepo)
    {
        $this->mMedicoRepository = $mMedicoRepo;
    }

    /**
     * Display a listing of the M_medico.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        Menu::seleccionMenu('Medico', null);
        $mMedicos = $this->mMedicoRepository->all();

        return view('m_medicos.index')
            ->with('mMedicos', $mMedicos);
    }

    /**
     * Show the form for creating a new M_medico.
     *
     * @return Response
     */
    public function create()
    {
        $usuarios           = Usuario::pluck('name','id');
        $especialidades     = Especialidad::pluck('nombre','id'); 
        return view('m_medicos.create', compact('usuarios', 'especialidades'));
    }

    /**
     * Store a newly created M_medico in storage.
     *
     * @param CreateM_medicoRequest $request
     *
     * @return Response
     */
    public function store(CreateM_medicoRequest $request)
    {
        $input = $request->all();

        $mMedico = $this->mMedicoRepository->create($input);

        Flash::success('M Medico saved successfully.');

        return redirect(route('mMedicos.index'));
    }

    /**
     * Display the specified M_medico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mMedico = $this->mMedicoRepository->find($id);

        if (empty($mMedico)) {
            Flash::error('M Medico not found');

            return redirect(route('mMedicos.index'));
        }

        return view('m_medicos.show')->with('mMedico', $mMedico);
    }

    /**
     * Show the form for editing the specified M_medico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mMedico = $this->mMedicoRepository->find($id);

        if (empty($mMedico)) {
            Flash::error('M Medico not found');

            return redirect(route('mMedicos.index'));
        }

        return view('m_medicos.edit')->with('mMedico', $mMedico);
    }

    /**
     * Update the specified M_medico in storage.
     *
     * @param int $id
     * @param UpdateM_medicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateM_medicoRequest $request)
    {
        $mMedico = $this->mMedicoRepository->find($id);

        if (empty($mMedico)) {
            Flash::error('M Medico not found');

            return redirect(route('mMedicos.index'));
        }

        $mMedico = $this->mMedicoRepository->update($request->all(), $id);

        Flash::success('M Medico updated successfully.');

        return redirect(route('mMedicos.index'));
    }

    /**
     * Remove the specified M_medico from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mMedico = $this->mMedicoRepository->find($id);

        if (empty($mMedico)) {
            Flash::error('M Medico not found');

            return redirect(route('mMedicos.index'));
        }

        $this->mMedicoRepository->delete($id);

        Flash::success('M Medico deleted successfully.');

        return redirect(route('mMedicos.index'));
    }
}
