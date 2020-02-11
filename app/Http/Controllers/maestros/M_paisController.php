<?php

namespace App\Http\Controllers\maestros;

use App\Http\Requests\CreateM_paisRequest;
use App\Http\Requests\UpdateM_paisRequest;
use App\Repositories\M_paisRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class M_paisController extends AppBaseController
{
    /** @var  M_paisRepository */
    private $mPaisRepository;

    public function __construct(M_paisRepository $mPaisRepo)
    {
        $this->mPaisRepository = $mPaisRepo;
    }

    /**
     * Display a listing of the M_pais.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mPais = $this->mPaisRepository->all();

        return view('m_pais.index')
            ->with('mPais', $mPais);
    }

    /**
     * Show the form for creating a new M_pais.
     *
     * @return Response
     */
    public function create()
    {
        return view('m_pais.create');
    }

    /**
     * Store a newly created M_pais in storage.
     *
     * @param CreateM_paisRequest $request
     *
     * @return Response
     */
    public function store(CreateM_paisRequest $request)
    {
        $input = $request->all();

        $mPais = $this->mPaisRepository->create($input);

        Flash::success('M Pais saved successfully.');

        return redirect(route('mPais.index'));
    }

    /**
     * Display the specified M_pais.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mPais = $this->mPaisRepository->find($id);

        if (empty($mPais)) {
            Flash::error('M Pais not found');

            return redirect(route('mPais.index'));
        }

        return view('m_pais.show')->with('mPais', $mPais);
    }

    /**
     * Show the form for editing the specified M_pais.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mPais = $this->mPaisRepository->find($id);

        if (empty($mPais)) {
            Flash::error('M Pais not found');

            return redirect(route('mPais.index'));
        }

        return view('m_pais.edit')->with('mPais', $mPais);
    }

    /**
     * Update the specified M_pais in storage.
     *
     * @param int $id
     * @param UpdateM_paisRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateM_paisRequest $request)
    {
        $mPais = $this->mPaisRepository->find($id);

        if (empty($mPais)) {
            Flash::error('M Pais not found');

            return redirect(route('mPais.index'));
        }

        $mPais = $this->mPaisRepository->update($request->all(), $id);

        Flash::success('M Pais updated successfully.');

        return redirect(route('mPais.index'));
    }

    /**
     * Remove the specified M_pais from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mPais = $this->mPaisRepository->find($id);

        if (empty($mPais)) {
            Flash::error('M Pais not found');

            return redirect(route('mPais.index'));
        }

        $this->mPaisRepository->delete($id);

        Flash::success('M Pais deleted successfully.');

        return redirect(route('mPais.index'));
    }
}
