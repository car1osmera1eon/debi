<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePerfilaccionRequest;
use App\Http\Requests\UpdatePerfilaccionRequest;
use App\Repositories\PerfilaccionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Session; 
use App\Modulo;
use App\Submodulo;
use App\Submodulo2; 
use App\Accion; 
use App\Models\Sistema; 
use App\Models\Perfil; 

class PerfilaccionController extends AppBaseController
{
    /** @var  PerfilaccionRepository */
    private $perfilaccionRepository;

    public function __construct(PerfilaccionRepository $perfilaccionRepo)
    {
        $this->perfilaccionRepository = $perfilaccionRepo;
    }

    /**
     * Display a listing of the Perfilaccion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $subm = Submodulo::where('nom_submodulo', 'Permisos')->first();
        Session::flash('submodulo', $subm->id);  

        $subm2 = Submodulo2::where('nom_submodulo2', 'Acciones por perfil')->first();
        Session::flash('submodulo2', $subm2->id);

        $perfilaccions = $this->perfilaccionRepository->all();

        return view('perfilaccions.index')
            ->with('perfilaccions', $perfilaccions);
    }

    /**
     * Show the form for creating a new Perfilaccion.
     *
     * @return Response
     */
    public function create()
    {
        $perfiles       = Perfil::pluck('nom_perfil','id');
        $modulos        = Modulo::pluck('nom_modulo','id');
        $acciones       = Accion::pluck('nom_accion','id');
        $submodulos     = array();
        $submodulos2    = array();
        return view('perfilaccions.create', compact('perfiles', 'acciones', 'modulos', 'submodulos', 'submodulos2'));
    }

    /**
     * Store a newly created Perfilaccion in storage.
     *
     * @param CreatePerfilaccionRequest $request
     *
     * @return Response
     */
    public function store(CreatePerfilaccionRequest $request)
    {
        $input = $request->all();

        $perfilaccion = $this->perfilaccionRepository->create($input);

        Flash::success('Perfilaccion saved successfully.');

        return redirect(route('perfilaccions.index'));
    }

    /**
     * Display the specified Perfilaccion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $perfilaccion = $this->perfilaccionRepository->find($id);

        if (empty($perfilaccion)) {
            Flash::error('Perfilaccion not found');

            return redirect(route('perfilaccions.index'));
        }

        return view('perfilaccions.show')->with('perfilaccion', $perfilaccion);
    }

    /**
     * Show the form for editing the specified Perfilaccion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $perfilaccion   = $this->perfilaccionRepository->find($id);
        $perfiles       = Perfil::pluck('nom_perfil','id');
        $modulos        = Modulo::pluck('nom_modulo','id');
        $submodulos     = Submodulo::pluck('nom_submodulo','id');
        $submodulos2    = Submodulo2::pluck('nom_submodulo2','id');
        $acciones = Accion::pluck('nom_accion','id');
        if (empty($perfilaccion)) {
            Flash::error('Perfilaccion not found');

            return redirect(route('perfilaccions.index'));
        }

        return view('perfilaccions.edit', compact('perfilaccion', 'perfiles', 'acciones', 'modulos', 'perfilaccion', 'submodulos', 'submodulos2') );
    }

    /**
     * Update the specified Perfilaccion in storage.
     *
     * @param int $id
     * @param UpdatePerfilaccionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePerfilaccionRequest $request)
    {
        $perfilaccion = $this->perfilaccionRepository->find($id);

        if (empty($perfilaccion)) {
            Flash::error('Perfilaccion not found');

            return redirect(route('perfilaccions.index'));
        }

        $perfilaccion = $this->perfilaccionRepository->update($request->all(), $id);

        Flash::success('Perfilaccion updated successfully.');

        return redirect(route('perfilaccions.index'));
    }

    /**
     * Remove the specified Perfilaccion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $perfilaccion = $this->perfilaccionRepository->find($id);

        if (empty($perfilaccion)) {
            Flash::error('Perfilaccion not found');

            return redirect(route('perfilaccions.index'));
        }

        $this->perfilaccionRepository->delete($id);

        Flash::success('Perfilaccion deleted successfully.');

        return redirect(route('perfilaccions.index'));
    }

    public function getSubModulos(Request $request, $id){
        if($request->ajax()){
            $submodulos = Submodulo::submodulos($id);
            return response()->json($submodulos);
        }
    }

    public function getSubModulos2(Request $request, $id){
        if($request->ajax()){
            $submodulos2 = Submodulo2::submodulos2($id);
            return response()->json($submodulos2);
        }
    }
}
