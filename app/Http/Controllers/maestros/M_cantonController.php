<?php

namespace App\Http\Controllers\maestros;

use App\Http\Requests\CreateM_cantonRequest;
use App\Http\Requests\UpdateM_cantonRequest;
use App\Repositories\M_cantonRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Models\maestros\M_canton;

class M_cantonController extends AppBaseController
{
    /** @var  M_cantonRepository */
    private $mCantonRepository;

    public function __construct(M_cantonRepository $mCantonRepo)
    {
        $this->mCantonRepository = $mCantonRepo;
    }

    /**
     * Display a listing of the M_canton.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mCantons = $this->mCantonRepository->all();

        return view('m_cantons.index')
            ->with('mCantons', $mCantons);
    }

    /**
     * Show the form for creating a new M_canton.
     *
     * @return Response
     */
    public function create()
    {
        return view('m_cantons.create');
    }

    /**
     * Store a newly created M_canton in storage.
     *
     * @param CreateM_cantonRequest $request
     *
     * @return Response
     */
    public function store(CreateM_cantonRequest $request)
    {
        $input = $request->all();

        $mCanton = $this->mCantonRepository->create($input);

        Flash::success('M Canton saved successfully.');

        return redirect(route('mCantons.index'));
    }

    /**
     * Display the specified M_canton.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mCanton = $this->mCantonRepository->find($id);

        if (empty($mCanton)) {
            Flash::error('M Canton not found');

            return redirect(route('mCantons.index'));
        }

        return view('m_cantons.show')->with('mCanton', $mCanton);
    }

    /**
     * Show the form for editing the specified M_canton.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mCanton = $this->mCantonRepository->find($id);

        if (empty($mCanton)) {
            Flash::error('M Canton not found');

            return redirect(route('mCantons.index'));
        }

        return view('m_cantons.edit')->with('mCanton', $mCanton);
    }

    /**
     * Update the specified M_canton in storage.
     *
     * @param int $id
     * @param UpdateM_cantonRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateM_cantonRequest $request)
    {
        $mCanton = $this->mCantonRepository->find($id);

        if (empty($mCanton)) {
            Flash::error('M Canton not found');

            return redirect(route('mCantons.index'));
        }

        $mCanton = $this->mCantonRepository->update($request->all(), $id);

        Flash::success('M Canton updated successfully.');

        return redirect(route('mCantons.index'));
    }

    /**
     * Remove the specified M_canton from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mCanton = $this->mCantonRepository->find($id);

        if (empty($mCanton)) {
            Flash::error('M Canton not found');

            return redirect(route('mCantons.index'));
        }

        $this->mCantonRepository->delete($id);

        Flash::success('M Canton deleted successfully.');

        return redirect(route('mCantons.index'));
    }

   
}
