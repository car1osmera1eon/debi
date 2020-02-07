<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePerfilRequest;
use App\Http\Requests\UpdatePerfilRequest;
use App\Repositories\PerfilRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Flash;
use Response;
use Session; 
use App\Submodulo;
use App\Submodulo2;
use App\Models\Perfil;
use App\Models\Sistema; 

class PerfilController extends AppBaseController
{
    /** @var  PerfilRepository */
    private $perfilRepository;

    public function __construct(PerfilRepository $perfilRepo)
    {
        $this->perfilRepository = $perfilRepo;
    }

    /**
     * Display a listing of the Perfil.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $subm = Submodulo::where('nom_submodulo', 'Permisos')->first();
        Session::flash('submodulo', $subm->id);  

        $subm2 = Submodulo2::where('nom_submodulo2', 'Perfiles')->first();
        Session::flash('submodulo2', $subm2->id);  

        $perfils = $this->perfilRepository->all();
        return view('perfils.index')
            ->with('perfils', $perfils);
    }

    /**
     * Show the form for creating a new Perfil.
     *
     * @return Response
     */
    public function create()
    {
        $sistemas = Sistema::pluck('nom_sistema','id');
        return view('perfils.create')
            ->with('sistemas', $sistemas);
    }

    /**
     * Store a newly created Perfil in storage.
     *
     * @param CreatePerfilRequest $request
     *
     * @return Response
     */
    public function store(CreatePerfilRequest $request)
    {
        $input = $request->all();

        $perfil = $this->perfilRepository->create($input);

        Flash::success('Perfil saved successfully.');

        return redirect(route('perfils.index'));
    }

    /**
     * Display the specified Perfil.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $perfil = $this->perfilRepository->find($id);

        if (empty($perfil)) {
            Flash::error('Perfil not found');

            return redirect(route('perfils.index'));
        }

        return view('perfils.show')->with('perfil', $perfil);
    }

    /**
     * Show the form for editing the specified Perfil.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $perfil = $this->perfilRepository->find($id);

        $sistemas = Sistema::pluck('nom_sistema','id');

        if (empty($perfil)) {
            Flash::error('Perfil not found');

            return redirect(route('perfils.index'));
        }

        return view('perfils.edit', compact('sistemas','perfil'));
    }

    /**
     * Update the specified Perfil in storage.
     *
     * @param int $id
     * @param UpdatePerfilRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePerfilRequest $request)
    {
        $perfil = $this->perfilRepository->find($id);

        if (empty($perfil)) {
            Flash::error('Perfil not found');

            return redirect(route('perfils.index'));
        }

        $perfil = $this->perfilRepository->update($request->all(), $id);

        Flash::success('Perfil updated successfully.');

        return redirect(route('perfils.index'));
    }

    /**
     * Remove the specified Perfil from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $perfil = $this->perfilRepository->find($id);

        if (empty($perfil)) {
            Flash::error('Perfil not found');

            return redirect(route('perfils.index'));
        }

        $this->perfilRepository->delete($id);

        Flash::success('Perfil deleted successfully.');

        return redirect(route('perfils.index'));
    }
}
