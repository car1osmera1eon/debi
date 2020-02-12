<?php

namespace App\Http\Controllers\maestros;

use App\Http\Requests\CreateM_consultorioRequest;
use App\Http\Requests\UpdateM_consultorioRequest;
use App\Repositories\M_consultorioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Models\maestros\M_clinica; 

class M_consultorioController extends AppBaseController
{
    /** @var  M_consultorioRepository */
    private $mConsultorioRepository;

    public function __construct(M_consultorioRepository $mConsultorioRepo)
    {
        $this->mConsultorioRepository = $mConsultorioRepo;
    }

    /**
     * Display a listing of the M_consultorio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mConsultorios = $this->mConsultorioRepository->all();

        return view('m_consultorios.index')
            ->with('mConsultorios', $mConsultorios);
    }

    /**
     * Show the form for creating a new M_consultorio.
     *
     * @return Response
     */
    public function create()
    {
        $clinicas     = M_clinica::pluck('razonsocial','id');
        return view('m_consultorios.create', compact('clinicas'));
    }

    /**
     * Store a newly created M_consultorio in storage.
     *
     * @param CreateM_consultorioRequest $request
     *
     * @return Response
     */
    public function store(CreateM_consultorioRequest $request)
    {
        $input = $request->all();

        $mConsultorio = $this->mConsultorioRepository->create($input);

        Flash::success('M Consultorio saved successfully.');

        return redirect(route('mConsultorios.index'));
    }

    /**
     * Display the specified M_consultorio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mConsultorio = $this->mConsultorioRepository->find($id);

        if (empty($mConsultorio)) {
            Flash::error('M Consultorio not found');

            return redirect(route('mConsultorios.index'));
        }

        return view('m_consultorios.show')->with('mConsultorio', $mConsultorio);
    }

    /**
     * Show the form for editing the specified M_consultorio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mConsultorio = $this->mConsultorioRepository->find($id);

        if (empty($mConsultorio)) {
            Flash::error('M Consultorio not found');

            return redirect(route('mConsultorios.index'));
        }
        $clinicas     = M_clinica::pluck('razonsocial','id');
        return view('m_consultorios.edit', compact('mConsultorio', 'clinicas'));
    }

    /**
     * Update the specified M_consultorio in storage.
     *
     * @param int $id
     * @param UpdateM_consultorioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateM_consultorioRequest $request)
    {
        $mConsultorio = $this->mConsultorioRepository->find($id);

        if (empty($mConsultorio)) {
            Flash::error('M Consultorio not found');

            return redirect(route('mConsultorios.index'));
        }

        $mConsultorio = $this->mConsultorioRepository->update($request->all(), $id);

        Flash::success('M Consultorio updated successfully.');

        return redirect(route('mConsultorios.index'));
    }

    /**
     * Remove the specified M_consultorio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mConsultorio = $this->mConsultorioRepository->find($id);

        if (empty($mConsultorio)) {
            Flash::error('M Consultorio not found');

            return redirect(route('mConsultorios.index'));
        }

        $this->mConsultorioRepository->delete($id);

        Flash::success('M Consultorio deleted successfully.');

        return redirect(route('mConsultorios.index'));
    }
}
