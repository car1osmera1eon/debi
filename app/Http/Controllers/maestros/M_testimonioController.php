<?php

namespace App\Http\Controllers\Maestros;

use App\Http\Requests\Maestros\CreateM_testimonioRequest;
use App\Http\Requests\Maestros\UpdateM_testimonioRequest;
use App\Repositories\Maestros\M_testimonioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Flash;
use Response;
use App\Menu; 
use App\Models\maestros\M_paciente; 

class M_testimonioController extends AppBaseController
{
    /** @var  M_testimonioRepository */
    private $mTestimonioRepository;

    public function __construct(M_testimonioRepository $mTestimonioRepo)
    {
        $this->mTestimonioRepository = $mTestimonioRepo;
    }

    /**
     * Display a listing of the M_testimonio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        Menu::seleccionMenu('Testimonios');
        $mTestimonios = $this->mTestimonioRepository->all();

        return view('maestros.m_testimonios.index')
            ->with('mTestimonios', $mTestimonios);
    }

    /**
     * Show the form for creating a new M_testimonio.
     *
     * @return Response
     */
    public function create()
    {
        $pacientes      = array(); 
        $pacientesall   = M_paciente::all();
        foreach($pacientesall as $pac){
            $paciente[$pac->id]         = $pac->primernombre . " " . $pac->primerapellido; 
            $pacientes  = $paciente;
        }  
        return view('maestros.m_testimonios.create',compact('pacientes'));
    }

    /**
     * Store a newly created M_testimonio in storage.
     *
     * @param CreateM_testimonioRequest $request
     *
     * @return Response
     */
    public function store(CreateM_testimonioRequest $request)
    {
        $input = $request->all();

        $input['clinica_id']    = 1;

        $mTestimonio = $this->mTestimonioRepository->create($input);

        if($request->file('image')){
            $path = Storage::disk('public')->put('photos',$request->file('image'));
            $mTestimonio->fill(['image'=>asset($path)])->save();
        }

        Flash::success('M Testimonio saved successfully.');

        return redirect(route('mTestimonios.index'));
    }

    /**
     * Display the specified M_testimonio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mTestimonio = $this->mTestimonioRepository->find($id);

        if (empty($mTestimonio)) {
            Flash::error('M Testimonio not found');

            return redirect(route('mTestimonios.index'));
        }

        return view('maestros.m_testimonios.show')->with('mTestimonio', $mTestimonio);
    }

    /**
     * Show the form for editing the specified M_testimonio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mTestimonio = $this->mTestimonioRepository->find($id);

        $pacientes      = array(); 
        $pacientesall   = M_paciente::all();
        foreach($pacientesall as $pac){
            $paciente[$pac->id]         = $pac->primernombre . " " . $pac->primerapellido; 
            $pacientes  = $paciente;
        }  

        if (empty($mTestimonio)) {
            Flash::error('M Testimonio not found');

            return redirect(route('mTestimonios.index'));
        }

        return view('maestros.m_testimonios.edit', compact('mTestimonio', 'pacientes'));
    }

    /**
     * Update the specified M_testimonio in storage.
     *
     * @param int $id
     * @param UpdateM_testimonioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateM_testimonioRequest $request)
    {
        $mTestimonio = $this->mTestimonioRepository->find($id);

        if (empty($mTestimonio)) {
            Flash::error('M Testimonio not found');

            return redirect(route('mTestimonios.index'));
        }

        $mTestimonio = $this->mTestimonioRepository->update($request->all(), $id);

        if($request->file('image')){
            $path = Storage::disk('public')->put('photos',$request->file('image'));
            $mTestimonio->fill(['image'=>asset($path)])->save();
        }

        Flash::success('M Testimonio updated successfully.');

        return redirect(route('mTestimonios.index'));
    }

    /**
     * Remove the specified M_testimonio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mTestimonio = $this->mTestimonioRepository->find($id);

        if (empty($mTestimonio)) {
            Flash::error('M Testimonio not found');

            return redirect(route('mTestimonios.index'));
        }

        $this->mTestimonioRepository->delete($id);

        Flash::success('M Testimonio deleted successfully.');

        return redirect(route('mTestimonios.index'));
    }
}
