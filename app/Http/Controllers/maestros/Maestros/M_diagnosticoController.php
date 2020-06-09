<?php

namespace App\Http\Controllers\maestros\Maestros;

use App\Http\Requests\maestros\Maestros\CreateM_diagnosticoRequest;
use App\Http\Requests\maestros\Maestros\UpdateM_diagnosticoRequest;
use App\Repositories\maestros\Maestros\M_diagnosticoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class M_diagnosticoController extends AppBaseController
{
    /** @var  M_diagnosticoRepository */
    private $mDiagnosticoRepository;

    public function __construct(M_diagnosticoRepository $mDiagnosticoRepo)
    {
        $this->mDiagnosticoRepository = $mDiagnosticoRepo;
    }

    /**
     * Display a listing of the M_diagnostico.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mDiagnosticos = $this->mDiagnosticoRepository->all();

        return view('m_diagnosticos.index')
            ->with('mDiagnosticos', $mDiagnosticos);
    }

    /**
     * Show the form for creating a new M_diagnostico.
     *
     * @return Response
     */
    public function create()
    {
        return view('m_diagnosticos.create');
    }

    /**
     * Store a newly created M_diagnostico in storage.
     *
     * @param CreateM_diagnosticoRequest $request
     *
     * @return Response
     */
    public function store(CreateM_diagnosticoRequest $request)
    {
        $input = $request->all();

        $mDiagnostico = $this->mDiagnosticoRepository->create($input);

        Flash::success('M Diagnostico saved successfully.');

        return redirect(route('mDiagnosticos.index'));
    }

    /**
     * Display the specified M_diagnostico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mDiagnostico = $this->mDiagnosticoRepository->find($id);

        if (empty($mDiagnostico)) {
            Flash::error('M Diagnostico not found');

            return redirect(route('mDiagnosticos.index'));
        }

        return view('m_diagnosticos.show')->with('mDiagnostico', $mDiagnostico);
    }

    /**
     * Show the form for editing the specified M_diagnostico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mDiagnostico = $this->mDiagnosticoRepository->find($id);

        if (empty($mDiagnostico)) {
            Flash::error('M Diagnostico not found');

            return redirect(route('mDiagnosticos.index'));
        }

        return view('m_diagnosticos.edit')->with('mDiagnostico', $mDiagnostico);
    }

    /**
     * Update the specified M_diagnostico in storage.
     *
     * @param int $id
     * @param UpdateM_diagnosticoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateM_diagnosticoRequest $request)
    {
        $mDiagnostico = $this->mDiagnosticoRepository->find($id);

        if (empty($mDiagnostico)) {
            Flash::error('M Diagnostico not found');

            return redirect(route('mDiagnosticos.index'));
        }

        $mDiagnostico = $this->mDiagnosticoRepository->update($request->all(), $id);

        Flash::success('M Diagnostico updated successfully.');

        return redirect(route('mDiagnosticos.index'));
    }

    /**
     * Remove the specified M_diagnostico from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mDiagnostico = $this->mDiagnosticoRepository->find($id);

        if (empty($mDiagnostico)) {
            Flash::error('M Diagnostico not found');

            return redirect(route('mDiagnosticos.index'));
        }

        $this->mDiagnosticoRepository->delete($id);

        Flash::success('M Diagnostico deleted successfully.');

        return redirect(route('mDiagnosticos.index'));
    }
}
