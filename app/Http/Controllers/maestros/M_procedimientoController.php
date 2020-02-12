<?php

namespace App\Http\Controllers\maestros;

use App\Http\Requests\CreateM_procedimientoRequest;
use App\Http\Requests\UpdateM_procedimientoRequest;
use App\Repositories\M_procedimientoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class M_procedimientoController extends AppBaseController
{
    /** @var  M_procedimientoRepository */
    private $mProcedimientoRepository;

    public function __construct(M_procedimientoRepository $mProcedimientoRepo)
    {
        $this->mProcedimientoRepository = $mProcedimientoRepo;
    }

    /**
     * Display a listing of the M_procedimiento.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mProcedimientos = $this->mProcedimientoRepository->all();

        return view('m_procedimientos.index')
            ->with('mProcedimientos', $mProcedimientos);
    }

    /**
     * Show the form for creating a new M_procedimiento.
     *
     * @return Response
     */
    public function create()
    {
        return view('m_procedimientos.create');
    }

    /**
     * Store a newly created M_procedimiento in storage.
     *
     * @param CreateM_procedimientoRequest $request
     *
     * @return Response
     */
    public function store(CreateM_procedimientoRequest $request)
    {
        $input = $request->all();

        $mProcedimiento = $this->mProcedimientoRepository->create($input);

        Flash::success('M Procedimiento saved successfully.');

        return redirect(route('mProcedimientos.index'));
    }

    /**
     * Display the specified M_procedimiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mProcedimiento = $this->mProcedimientoRepository->find($id);

        if (empty($mProcedimiento)) {
            Flash::error('M Procedimiento not found');

            return redirect(route('mProcedimientos.index'));
        }

        return view('m_procedimientos.show')->with('mProcedimiento', $mProcedimiento);
    }

    /**
     * Show the form for editing the specified M_procedimiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mProcedimiento = $this->mProcedimientoRepository->find($id);

        if (empty($mProcedimiento)) {
            Flash::error('M Procedimiento not found');

            return redirect(route('mProcedimientos.index'));
        }

        return view('m_procedimientos.edit')->with('mProcedimiento', $mProcedimiento);
    }

    /**
     * Update the specified M_procedimiento in storage.
     *
     * @param int $id
     * @param UpdateM_procedimientoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateM_procedimientoRequest $request)
    {
        $mProcedimiento = $this->mProcedimientoRepository->find($id);

        if (empty($mProcedimiento)) {
            Flash::error('M Procedimiento not found');

            return redirect(route('mProcedimientos.index'));
        }

        $mProcedimiento = $this->mProcedimientoRepository->update($request->all(), $id);

        Flash::success('M Procedimiento updated successfully.');

        return redirect(route('mProcedimientos.index'));
    }

    /**
     * Remove the specified M_procedimiento from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mProcedimiento = $this->mProcedimientoRepository->find($id);

        if (empty($mProcedimiento)) {
            Flash::error('M Procedimiento not found');

            return redirect(route('mProcedimientos.index'));
        }

        $this->mProcedimientoRepository->delete($id);

        Flash::success('M Procedimiento deleted successfully.');

        return redirect(route('mProcedimientos.index'));
    }
}
