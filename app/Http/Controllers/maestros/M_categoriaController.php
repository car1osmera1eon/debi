<?php

namespace App\Http\Controllers\maestros;

use App\Http\Requests\maestros\CreateM_categoriaRequest;
use App\Http\Requests\maestros\UpdateM_categoriaRequest;
use App\Repositories\maestros\M_categoriaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class M_categoriaController extends AppBaseController
{
    /** @var  M_categoriaRepository */
    private $mCategoriaRepository;

    public function __construct(M_categoriaRepository $mCategoriaRepo)
    {
        $this->mCategoriaRepository = $mCategoriaRepo;
    }

    /**
     * Display a listing of the M_categoria.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mCategorias = $this->mCategoriaRepository->all();

        return view('m_categorias.index')
            ->with('mCategorias', $mCategorias);
    }

    /**
     * Show the form for creating a new M_categoria.
     *
     * @return Response
     */
    public function create()
    {
        return view('m_categorias.create');
    }

    /**
     * Store a newly created M_categoria in storage.
     *
     * @param CreateM_categoriaRequest $request
     *
     * @return Response
     */
    public function store(CreateM_categoriaRequest $request)
    {
        $input = $request->all();

        $mCategoria = $this->mCategoriaRepository->create($input);

        Flash::success('M Categoria saved successfully.');

        return redirect(route('mCategorias.index'));
    }

    /**
     * Display the specified M_categoria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mCategoria = $this->mCategoriaRepository->find($id);

        if (empty($mCategoria)) {
            Flash::error('M Categoria not found');

            return redirect(route('mCategorias.index'));
        }

        return view('m_categorias.show')->with('mCategoria', $mCategoria);
    }

    /**
     * Show the form for editing the specified M_categoria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mCategoria = $this->mCategoriaRepository->find($id);

        if (empty($mCategoria)) {
            Flash::error('M Categoria not found');

            return redirect(route('mCategorias.index'));
        }

        return view('m_categorias.edit')->with('mCategoria', $mCategoria);
    }

    /**
     * Update the specified M_categoria in storage.
     *
     * @param int $id
     * @param UpdateM_categoriaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateM_categoriaRequest $request)
    {
        $mCategoria = $this->mCategoriaRepository->find($id);

        if (empty($mCategoria)) {
            Flash::error('M Categoria not found');

            return redirect(route('mCategorias.index'));
        }

        $mCategoria = $this->mCategoriaRepository->update($request->all(), $id);

        Flash::success('M Categoria updated successfully.');

        return redirect(route('mCategorias.index'));
    }

    /**
     * Remove the specified M_categoria from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mCategoria = $this->mCategoriaRepository->find($id);

        if (empty($mCategoria)) {
            Flash::error('M Categoria not found');

            return redirect(route('mCategorias.index'));
        }

        $this->mCategoriaRepository->delete($id);

        Flash::success('M Categoria deleted successfully.');

        return redirect(route('mCategorias.index'));
    }
}
