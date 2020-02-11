<?php

namespace App\Http\Controllers\maestros;

use App\Http\Requests\CreateM_parroquiaRequest;
use App\Http\Requests\UpdateM_parroquiaRequest;
use App\Repositories\M_parroquiaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class M_parroquiaController extends AppBaseController
{
    /** @var  M_parroquiaRepository */
    private $mParroquiaRepository;

    public function __construct(M_parroquiaRepository $mParroquiaRepo)
    {
        $this->mParroquiaRepository = $mParroquiaRepo;
    }

    /**
     * Display a listing of the M_parroquia.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mParroquias = $this->mParroquiaRepository->all();

        return view('m_parroquias.index')
            ->with('mParroquias', $mParroquias);
    }

    /**
     * Show the form for creating a new M_parroquia.
     *
     * @return Response
     */
    public function create()
    {
        return view('m_parroquias.create');
    }

    /**
     * Store a newly created M_parroquia in storage.
     *
     * @param CreateM_parroquiaRequest $request
     *
     * @return Response
     */
    public function store(CreateM_parroquiaRequest $request)
    {
        $input = $request->all();

        $mParroquia = $this->mParroquiaRepository->create($input);

        Flash::success('M Parroquia saved successfully.');

        return redirect(route('mParroquias.index'));
    }

    /**
     * Display the specified M_parroquia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mParroquia = $this->mParroquiaRepository->find($id);

        if (empty($mParroquia)) {
            Flash::error('M Parroquia not found');

            return redirect(route('mParroquias.index'));
        }

        return view('m_parroquias.show')->with('mParroquia', $mParroquia);
    }

    /**
     * Show the form for editing the specified M_parroquia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mParroquia = $this->mParroquiaRepository->find($id);

        if (empty($mParroquia)) {
            Flash::error('M Parroquia not found');

            return redirect(route('mParroquias.index'));
        }

        return view('m_parroquias.edit')->with('mParroquia', $mParroquia);
    }

    /**
     * Update the specified M_parroquia in storage.
     *
     * @param int $id
     * @param UpdateM_parroquiaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateM_parroquiaRequest $request)
    {
        $mParroquia = $this->mParroquiaRepository->find($id);

        if (empty($mParroquia)) {
            Flash::error('M Parroquia not found');

            return redirect(route('mParroquias.index'));
        }

        $mParroquia = $this->mParroquiaRepository->update($request->all(), $id);

        Flash::success('M Parroquia updated successfully.');

        return redirect(route('mParroquias.index'));
    }

    /**
     * Remove the specified M_parroquia from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mParroquia = $this->mParroquiaRepository->find($id);

        if (empty($mParroquia)) {
            Flash::error('M Parroquia not found');

            return redirect(route('mParroquias.index'));
        }

        $this->mParroquiaRepository->delete($id);

        Flash::success('M Parroquia deleted successfully.');

        return redirect(route('mParroquias.index'));
    }
}
