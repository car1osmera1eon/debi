<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateM_provinciaRequest;
use App\Http\Requests\UpdateM_provinciaRequest;
use App\Repositories\M_provinciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class M_provinciaController extends AppBaseController
{
    /** @var  M_provinciaRepository */
    private $mProvinciaRepository;

    public function __construct(M_provinciaRepository $mProvinciaRepo)
    {
        $this->mProvinciaRepository = $mProvinciaRepo;
    }

    /**
     * Display a listing of the M_provincia.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mProvincias = $this->mProvinciaRepository->all();

        return view('m_provincias.index')
            ->with('mProvincias', $mProvincias);
    }

    /**
     * Show the form for creating a new M_provincia.
     *
     * @return Response
     */
    public function create()
    {
        return view('m_provincias.create');
    }

    /**
     * Store a newly created M_provincia in storage.
     *
     * @param CreateM_provinciaRequest $request
     *
     * @return Response
     */
    public function store(CreateM_provinciaRequest $request)
    {
        $input = $request->all();

        $mProvincia = $this->mProvinciaRepository->create($input);

        Flash::success('M Provincia saved successfully.');

        return redirect(route('mProvincias.index'));
    }

    /**
     * Display the specified M_provincia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mProvincia = $this->mProvinciaRepository->find($id);

        if (empty($mProvincia)) {
            Flash::error('M Provincia not found');

            return redirect(route('mProvincias.index'));
        }

        return view('m_provincias.show')->with('mProvincia', $mProvincia);
    }

    /**
     * Show the form for editing the specified M_provincia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mProvincia = $this->mProvinciaRepository->find($id);

        if (empty($mProvincia)) {
            Flash::error('M Provincia not found');

            return redirect(route('mProvincias.index'));
        }

        return view('m_provincias.edit')->with('mProvincia', $mProvincia);
    }

    /**
     * Update the specified M_provincia in storage.
     *
     * @param int $id
     * @param UpdateM_provinciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateM_provinciaRequest $request)
    {
        $mProvincia = $this->mProvinciaRepository->find($id);

        if (empty($mProvincia)) {
            Flash::error('M Provincia not found');

            return redirect(route('mProvincias.index'));
        }

        $mProvincia = $this->mProvinciaRepository->update($request->all(), $id);

        Flash::success('M Provincia updated successfully.');

        return redirect(route('mProvincias.index'));
    }

    /**
     * Remove the specified M_provincia from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mProvincia = $this->mProvinciaRepository->find($id);

        if (empty($mProvincia)) {
            Flash::error('M Provincia not found');

            return redirect(route('mProvincias.index'));
        }

        $this->mProvinciaRepository->delete($id);

        Flash::success('M Provincia deleted successfully.');

        return redirect(route('mProvincias.index'));
    }
}
