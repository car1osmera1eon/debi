<?php

namespace App\Http\Controllers\maestros;

use App\Http\Requests\CreateM_tipo_identificacionRequest;
use App\Http\Requests\UpdateM_tipo_identificacionRequest;
use App\Repositories\M_tipo_identificacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class M_tipo_identificacionController extends AppBaseController
{
    /** @var  M_tipo_identificacionRepository */
    private $mTipoIdentificacionRepository;

    public function __construct(M_tipo_identificacionRepository $mTipoIdentificacionRepo)
    {
        $this->mTipoIdentificacionRepository = $mTipoIdentificacionRepo;
    }

    /**
     * Display a listing of the M_tipo_identificacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mTipoIdentificacions = $this->mTipoIdentificacionRepository->all();

        return view('m_tipo_identificacions.index')
            ->with('mTipoIdentificacions', $mTipoIdentificacions);
    }

    /**
     * Show the form for creating a new M_tipo_identificacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('m_tipo_identificacions.create');
    }

    /**
     * Store a newly created M_tipo_identificacion in storage.
     *
     * @param CreateM_tipo_identificacionRequest $request
     *
     * @return Response
     */
    public function store(CreateM_tipo_identificacionRequest $request)
    {
        $input = $request->all();

        $mTipoIdentificacion = $this->mTipoIdentificacionRepository->create($input);

        Flash::success('M Tipo Identificacion saved successfully.');

        return redirect(route('mTipoIdentificacions.index'));
    }

    /**
     * Display the specified M_tipo_identificacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mTipoIdentificacion = $this->mTipoIdentificacionRepository->find($id);

        if (empty($mTipoIdentificacion)) {
            Flash::error('M Tipo Identificacion not found');

            return redirect(route('mTipoIdentificacions.index'));
        }

        return view('m_tipo_identificacions.show')->with('mTipoIdentificacion', $mTipoIdentificacion);
    }

    /**
     * Show the form for editing the specified M_tipo_identificacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mTipoIdentificacion = $this->mTipoIdentificacionRepository->find($id);

        if (empty($mTipoIdentificacion)) {
            Flash::error('M Tipo Identificacion not found');

            return redirect(route('mTipoIdentificacions.index'));
        }

        return view('m_tipo_identificacions.edit')->with('mTipoIdentificacion', $mTipoIdentificacion);
    }

    /**
     * Update the specified M_tipo_identificacion in storage.
     *
     * @param int $id
     * @param UpdateM_tipo_identificacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateM_tipo_identificacionRequest $request)
    {
        $mTipoIdentificacion = $this->mTipoIdentificacionRepository->find($id);

        if (empty($mTipoIdentificacion)) {
            Flash::error('M Tipo Identificacion not found');

            return redirect(route('mTipoIdentificacions.index'));
        }

        $mTipoIdentificacion = $this->mTipoIdentificacionRepository->update($request->all(), $id);

        Flash::success('M Tipo Identificacion updated successfully.');

        return redirect(route('mTipoIdentificacions.index'));
    }

    /**
     * Remove the specified M_tipo_identificacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mTipoIdentificacion = $this->mTipoIdentificacionRepository->find($id);

        if (empty($mTipoIdentificacion)) {
            Flash::error('M Tipo Identificacion not found');

            return redirect(route('mTipoIdentificacions.index'));
        }

        $this->mTipoIdentificacionRepository->delete($id);

        Flash::success('M Tipo Identificacion deleted successfully.');

        return redirect(route('mTipoIdentificacions.index'));
    }
}
