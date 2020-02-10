<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateM_clinicaRequest;
use App\Http\Requests\UpdateM_clinicaRequest;
use App\Repositories\M_clinicaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Menu;
use App\Models\M_provincia;

class M_clinicaController extends AppBaseController
{
    /** @var  M_clinicaRepository */
    private $mClinicaRepository;

    public function __construct(M_clinicaRepository $mClinicaRepo)
    {
        $this->mClinicaRepository = $mClinicaRepo;
    }

    /**
     * Display a listing of the M_clinica.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        Menu::seleccionMenu('Administración del sistema', 'Clinica');
        $mClinicas = $this->mClinicaRepository->all();

        return view('m_clinicas.index')
            ->with('mClinicas', $mClinicas);
    }

    /**
     * Show the form for creating a new M_clinica.
     *
     * @return Response
     */
    public function create()
    {
        $provincias     = M_provincia::pluck('nombre_m_provincia','codigo_m_provincia');
        return view('m_clinicas.create', compact('provincias'));
    }

    /**
     * Store a newly created M_clinica in storage.
     *
     * @param CreateM_clinicaRequest $request
     *
     * @return Response
     */
    public function store(CreateM_clinicaRequest $request)
    {
        $input = $request->all();

        $input['razonsocial']       = strtoupper($input['razonsocial']);
        $input['nombrecomercial']   = strtoupper($input['nombrecomercial']);
        $input['nombre_corto']      = strtoupper($input['nombre_corto']);

        $mClinica = $this->mClinicaRepository->create($input);

        if($request->file('logo')){
            $path = Storage::disk('public')->put('photos_clinica',$request->file('logo'));
            $mClinica->fill(['logo'=>asset($path)])->save();
        }

        Flash::success('Clinica saved successfully.');

        return redirect(route('mClinicas.index'));
    }

    /**
     * Display the specified M_clinica.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mClinica = $this->mClinicaRepository->find($id);

        if (empty($mClinica)) {
            Flash::error('M Clinica not found');

            return redirect(route('mClinicas.index'));
        }

        return view('m_clinicas.show')->with('mClinica', $mClinica);
    }

    /**
     * Show the form for editing the specified M_clinica.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mClinica = $this->mClinicaRepository->find($id);
        $provincias     = M_provincia::pluck('nombre_m_provincia','codigo_m_provincia');

        if (empty($mClinica)) {
            Flash::error('M Clinica not found');

            return redirect(route('mClinicas.index'));
        }

        return view('m_clinicas.edit', compact('mClinica', 'provincias'));
    }

    /**
     * Update the specified M_clinica in storage.
     *
     * @param int $id
     * @param UpdateM_clinicaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateM_clinicaRequest $request)
    {
        $mClinica = $this->mClinicaRepository->find($id);

        if (empty($mClinica)) {
            Flash::error('M Clinica not found');

            return redirect(route('mClinicas.index'));
        }
        $input = $request->all();
        $input['razonsocial']       = strtoupper($input['razonsocial']);
        $input['nombrecomercial']   = strtoupper($input['nombrecomercial']);
        $input['nombre_corto']      = strtoupper($input['nombre_corto']);
        $mClinica = $this->mClinicaRepository->update($input, $id);

        if($request->file('logo')){
            $path = Storage::disk('public')->put('photos_clinica',$request->file('logo'));
            $mClinica->fill(['logo'=>asset($path)])->save();
        }

        Flash::success('M Clinica updated successfully.');

        return redirect(route('mClinicas.index'));
    }

    /**
     * Remove the specified M_clinica from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mClinica = $this->mClinicaRepository->find($id);

        if (empty($mClinica)) {
            Flash::error('M Clinica not found');

            return redirect(route('mClinicas.index'));
        }

        $this->mClinicaRepository->delete($id);

        Flash::success('M Clinica deleted successfully.');

        return redirect(route('mClinicas.index'));
    }
}
