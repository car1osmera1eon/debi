<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Repositories\UsuarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Flash;
use Response;
use Session; 
use App\Submodulo;

class UsuarioController extends AppBaseController
{
    /** @var  UsuarioRepository */
    private $usuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepo)
    {
        $this->usuarioRepository = $usuarioRepo;
    }

    /**
     * Display a listing of the Usuario.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $usuarios = $this->usuarioRepository->all();  
        
        $subm = Submodulo::where('nom_submodulo', 'Usuarios')->first();
        $request->session()->put('submodulo', $subm->id);
        return view('usuarios.index')
            ->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new Usuario.
     *
     * @return Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created Usuario in storage.
     *
     * @param CreateUsuarioRequest $request
     *
     * @return Response
     */
    public function store(CreateUsuarioRequest $request)
    {
        $input = $request->all(); 
        $input['primernombre']      = strtoupper($input['primernombre']);
        $input['segundonombre']     = strtoupper($input['segundonombre']);
        $input['primerapellido']    = strtoupper($input['primerapellido']);
        $input['segundoapellido']   = strtoupper($input['segundoapellido']);
        $input['password']          = Hash::make($input['password']);
        $name                       = $input['primernombre'] . " " . $input['primerapellido'];
        $input['name']              = strtoupper($name);

        $usuario = $this->usuarioRepository->create($input);

        if($request->file('image')){
            $path = Storage::disk('public')->put('photos',$request->file('image'));
            $usuario->fill(['image'=>asset($path)])->save();
        }

        Flash::success('Usuario saved successfully.');

        return redirect(route('usuarios.index'));
    }

    /**
     * Display the specified Usuario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuario = $this->usuarioRepository->find($id);

        if (empty($usuario)) {
            Flash::error('Usuario not found');

            return redirect(route('usuarios.index'));
        }

        return view('usuarios.show')->with('usuario', $usuario);
    }

    /**
     * Show the form for editing the specified Usuario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuario = $this->usuarioRepository->find($id);

        if (empty($usuario)) {
            Flash::error('Usuario not found');

            return redirect(route('usuarios.index'));
        }

        return view('usuarios.edit')->with('usuario', $usuario);
    }

    /**
     * Update the specified Usuario in storage.
     *
     * @param int $id
     * @param UpdateUsuarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsuarioRequest $request)
    {
        $usuario = $this->usuarioRepository->find($id);

        if (empty($usuario)) {
            Flash::error('Usuario not found');

            return redirect(route('usuarios.index'));
        }

        $input = $request->all(); 
        $input['primernombre']      = strtoupper($input['primernombre']);
        $input['segundonombre']     = strtoupper($input['segundonombre']);
        $input['primerapellido']    = strtoupper($input['primerapellido']);
        $input['segundoapellido']   = strtoupper($input['segundoapellido']);
        $input['password']          = Hash::make($input['password']);
        $name                       = $input['primernombre'] . " " .$input['primerapellido'];
        $input['name']              = strtoupper($name);

        $usuario = $this->usuarioRepository->update($input, $id);

        if($request->file('image')){
            $path = Storage::disk('public')->put('photos',$request->file('image'));
            $usuario->fill(['image'=>asset($path)])->save();
        }

        Flash::success('Usuario updated successfully.');

        return redirect(route('usuarios.index'));
    }

    /**
     * Remove the specified Usuario from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuario = $this->usuarioRepository->find($id);

        if (empty($usuario)) {
            Flash::error('Usuario not found');

            return redirect(route('usuarios.index'));
        }

        $this->usuarioRepository->delete($id);

        Flash::success('Usuario deleted successfully.');

        return redirect(route('usuarios.index'));
    }

    public function ver($id)
    {
        $usuario = $this->usuarioRepository->find($id);

        if (empty($usuario)) {
            Flash::error('Usuario not found');

            //return redirect(route('usuarios.index'));
        }

        return view('usuarios.show2')->with('usuario', $usuario);
    }

    public function editar($id)
    {
        $usuario = $this->usuarioRepository->find($id);

        if (empty($usuario)) {
            Flash::error('Usuario not found');

            return redirect(route('usuarios.index'));
        }

        return view('usuarios.editar')->with('usuario', $usuario);
    }

    public function actualizar($id, UpdateUsuarioRequest $request)
    {
        $usuario = $this->usuarioRepository->find($id);

        if (empty($usuario)) {
            Flash::error('Usuario not found');

            return redirect(route('usuarios.index'));
        }

        $input = $request->all(); 
        $input['primernombre']      = strtoupper($input['primernombre']);
        $input['segundonombre']     = strtoupper($input['segundonombre']);
        $input['primerapellido']    = strtoupper($input['primerapellido']);
        $input['segundoapellido']   = strtoupper($input['segundoapellido']);
        $input['password']          = Hash::make($input['password']);
        $name                       = $input['primernombre'] . " " .$input['primerapellido'];
        $input['name']              = strtoupper($name);

        $usuario = $this->usuarioRepository->update($input, $id);

        Flash::success('Usuario updated successfully.');

        return redirect(route('usuarios.ver', ['id'=>$id]));
    }
}
