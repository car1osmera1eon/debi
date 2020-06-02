<?php

namespace App\Http\Controllers\maestros;

use App\Http\Requests\maestros\CreateFormOdonDiagPaciRequest;
use App\Http\Requests\maestros\UpdateFormOdonDiagPaciRequest;
use App\Repositories\maestros\FormOdonDiagPaciRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FormOdonDiagPaciController extends AppBaseController
{
    /** @var  FormOdonDiagPaciRepository */
    private $formOdonDiagPaciRepository;

    public function __construct(FormOdonDiagPaciRepository $formOdonDiagPaciRepo)
    {
        $this->formOdonDiagPaciRepository = $formOdonDiagPaciRepo;
    }

    /**
     * Display a listing of the FormOdonDiagPaci.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $formOdonDiagPacis = $this->formOdonDiagPaciRepository->all();

        return view('form_odon_diag_pacis.index')
            ->with('formOdonDiagPacis', $formOdonDiagPacis);
    }

    /**
     * Show the form for creating a new FormOdonDiagPaci.
     *
     * @return Response
     */
    public function create()
    {
        return view('form_odon_diag_pacis.create');
    }

    /**
     * Store a newly created FormOdonDiagPaci in storage.
     *
     * @param CreateFormOdonDiagPaciRequest $request
     *
     * @return Response
     */
    public function store(CreateFormOdonDiagPaciRequest $request)
    {
        $input = $request->all();

        $formOdonDiagPaci = $this->formOdonDiagPaciRepository->create($input);

        Flash::success('Form Odon Diag Paci saved successfully.');

        return redirect(route('formOdonDiagPacis.index'));
    }

    /**
     * Display the specified FormOdonDiagPaci.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $formOdonDiagPaci = $this->formOdonDiagPaciRepository->find($id);

        if (empty($formOdonDiagPaci)) {
            Flash::error('Form Odon Diag Paci not found');

            return redirect(route('formOdonDiagPacis.index'));
        }

        return view('form_odon_diag_pacis.show')->with('formOdonDiagPaci', $formOdonDiagPaci);
    }

    /**
     * Show the form for editing the specified FormOdonDiagPaci.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $formOdonDiagPaci = $this->formOdonDiagPaciRepository->find($id);

        if (empty($formOdonDiagPaci)) {
            Flash::error('Form Odon Diag Paci not found');

            return redirect(route('formOdonDiagPacis.index'));
        }

        return view('form_odon_diag_pacis.edit')->with('formOdonDiagPaci', $formOdonDiagPaci);
    }

    /**
     * Update the specified FormOdonDiagPaci in storage.
     *
     * @param int $id
     * @param UpdateFormOdonDiagPaciRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFormOdonDiagPaciRequest $request)
    {
        $formOdonDiagPaci = $this->formOdonDiagPaciRepository->find($id);

        if (empty($formOdonDiagPaci)) {
            Flash::error('Form Odon Diag Paci not found');

            return redirect(route('formOdonDiagPacis.index'));
        }

        $formOdonDiagPaci = $this->formOdonDiagPaciRepository->update($request->all(), $id);

        Flash::success('Form Odon Diag Paci updated successfully.');

        return redirect(route('formOdonDiagPacis.index'));
    }

    /**
     * Remove the specified FormOdonDiagPaci from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $formOdonDiagPaci = $this->formOdonDiagPaciRepository->find($id);

        if (empty($formOdonDiagPaci)) {
            Flash::error('Form Odon Diag Paci not found');

            return redirect(route('formOdonDiagPacis.index'));
        }

        $this->formOdonDiagPaciRepository->delete($id);

        Flash::success('Form Odon Diag Paci deleted successfully.');

        return redirect(route('formOdonDiagPacis.index'));
    }
}
