<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePermisosRequest;
use App\Http\Requests\UpdatePermisosRequest;
use App\Repositories\PermisosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Flash;
use Response;
use App\User;
use App\Models\Perfil;
use App\Submodulo;
use App\Submodulo2; 
use App\Models\Sistema; 

class PermisosController extends AppBaseController
{
    /** @var  PermisosRepository */
    private $permisosRepository;

    public function __construct(PermisosRepository $permisosRepo)
    {
        $this->permisosRepository = $permisosRepo;
    }

    /**
     * Display a listing of the Permisos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $subm = Submodulo::where('nom_submodulo', 'Permisos')->first();
        $request->session()->put('submodulo', $subm->id); 

        $subm2 = Submodulo2::where('nom_submodulo2', 'Perfil por usuario')->first();
        $request->session()->put('submodulo2', $subm2->id); 

        $permisos = $this->permisosRepository->all();

        $nom_perfils= array();
        $perfiles = DB::table('perfils') 
        ->select('nom_perfil','id')
        ->get();   
        foreach($perfiles as $object)
        {
            $nom_perfils[$object->id] =  $object->nom_perfil;
        }
        //dd($nom_perfils);
        return view('permisos.index', compact('permisos', 'nom_perfils'));
    }

    /**
     * Show the form for creating a new Permisos.
     *
     * @return Response
     */
    public function create()
    {
        $usuarios = User::pluck('name','id');
        $perfiles = Perfil::pluck('nom_perfil','id');
        //$perfiles = DB::table('perfils')->select('nom_perfil','id')->get();
        //dd($perfiles);
        return view('permisos.create',compact('usuarios','perfiles'));
    }

    /**
     * Store a newly created Permisos in storage.
     *
     * @param CreatePermisosRequest $request
     *
     * @return Response
     */
    public function store(CreatePermisosRequest $request)
    {
        $input = $request->all();

        $permisos = $this->permisosRepository->create($input);

        Flash::success('Permisos saved successfully.');

        return redirect(route('permisos.index'));
    }

    /**
     * Display the specified Permisos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $permisos = $this->permisosRepository->find($id);

        if (empty($permisos)) {
            Flash::error('Permisos not found');

            return redirect(route('permisos.index'));
        }

        return view('permisos.show')->with('permisos', $permisos);
    }

    /**
     * Show the form for editing the specified Permisos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $permisos = $this->permisosRepository->find($id);

        if (empty($permisos)) {
            Flash::error('Permisos not found');

            return redirect(route('permisos.index'));
        }

        $usuarios = User::pluck('name','id');
        $perfiles = Perfil::pluck('nom_perfil','id');

        return view('permisos.edit',compact('permisos','usuarios','perfiles'));

        //return view('permisos.edit')->with('permisos', $permisos, 'perfiles', $perfiles, 'usuarios', $usuarios);
    }

    /**
     * Update the specified Permisos in storage.
     *
     * @param int $id
     * @param UpdatePermisosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePermisosRequest $request)
    {
        $permisos = $this->permisosRepository->find($id);

        if (empty($permisos)) {
            Flash::error('Permisos not found');

            return redirect(route('permisos.index'));
        }

        $permisos = $this->permisosRepository->update($request->all(), $id);

        Flash::success('Permisos updated successfully.');

        return redirect(route('permisos.index'));
    }

    /**
     * Remove the specified Permisos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $permisos = $this->permisosRepository->find($id);

        if (empty($permisos)) {
            Flash::error('Permisos not found');

            return redirect(route('permisos.index'));
        }

        $this->permisosRepository->delete($id);

        Flash::success('Permisos deleted successfully.');

        return redirect(route('permisos.index'));
    }
}
