<?php

namespace App\Http\Controllers\maestros;

use App\Http\Requests\maestros\CreateM_sitioRequest;
use App\Http\Requests\maestros\UpdateM_sitioRequest;
use App\Repositories\maestros\M_sitioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Flash;
use Response;
use Session;
use App\Menu; 

class M_sitioController extends AppBaseController
{
    /** @var  M_sitioRepository */
    private $mSitioRepository;

    public function __construct(M_sitioRepository $mSitioRepo)
    {
        $this->mSitioRepository = $mSitioRepo;
    }

    /**
     * Display a listing of the M_sitio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        Menu::seleccionMenu('Conf. Pagina');
        $mSitios = $this->mSitioRepository->all();

        return view('maestros.m_sitios.index')
            ->with('mSitios', $mSitios);
    }

    /**
     * Show the form for creating a new M_sitio.
     *
     * @return Response
     */
    public function create()
    {
        return view('maestros.m_sitios.create');
    }

    /**
     * Store a newly created M_sitio in storage.
     *
     * @param CreateM_sitioRequest $request
     *
     * @return Response
     */
    public function store(CreateM_sitioRequest $request)
    {
        $input = $request->all();

        $mSitio = $this->mSitioRepository->create($input);


        if($request->file('image')){
            $path = Storage::disk('public')->put('photos',$request->file('image'));
            $mSitio->fill(['image'=>asset($path)])->save();
        }

        Flash::success('Sitio saved successfully.');

        return redirect(route('mSitios.index'));
    }

    /**
     * Display the specified M_sitio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mSitio = $this->mSitioRepository->find($id);

        if (empty($mSitio)) {
            Flash::error('Sitio not found');

            return redirect(route('mSitios.index'));
        }

        return view('maestros.m_sitios.show')->with('mSitio', $mSitio);
    }

    /**
     * Show the form for editing the specified M_sitio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mSitio = $this->mSitioRepository->find($id);

        if (empty($mSitio)) {
            Flash::error('Sitio not found');

            return redirect(route('mSitios.index'));
        }

        return view('maestros.m_sitios.edit')->with('mSitio', $mSitio);
    }

    /**
     * Update the specified M_sitio in storage.
     *
     * @param int $id
     * @param UpdateM_sitioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateM_sitioRequest $request)
    {
        $mSitio = $this->mSitioRepository->find($id);

        if (empty($mSitio)) {
            Flash::error('Sitio not found');

            return redirect(route('mSitios.index'));
        }

        $mSitio = $this->mSitioRepository->update($request->all(), $id);

        if($request->file('image')){
            $path = Storage::disk('public')->put('photos',$request->file('image'));
            $mSitio->fill(['image'=>asset($path)])->save();
        }

        Flash::success('Sitio updated successfully.');

        return redirect(route('mSitios.index'));
    }

    /**
     * Remove the specified M_sitio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mSitio = $this->mSitioRepository->find($id);

        if (empty($mSitio)) {
            Flash::error('Sitio not found');

            return redirect(route('mSitios.index'));
        }

        $this->mSitioRepository->delete($id);

        Flash::success('Sitio deleted successfully.');

        return redirect(route('mSitios.index'));
    }
}
