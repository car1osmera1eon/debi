<?php

namespace App\Http\Controllers\formularios;

use Illuminate\Support\Facades\Auth; 
use App\Http\Requests\formularios\CreateFromOdontRequest;
use App\Http\Requests\formularios\UpdateFromOdontRequest;
use App\Repositories\formularios\FromOdontRepository;

use App\Repositories\M_pacienteRepository;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Menu; 
use App\Models\maestros\M_paciente; 
use App\Models\maestros\FormOdonDiagPaci; 
use App\Models\maestros\FromOdonTipoDiag;
use App\Models\maestros\FormOdonDiagPreDef;

class FromOdontController extends AppBaseController
{
    /** @var  FromOdontRepository */
    private $fromOdontRepository;
    private $mPacienteRepository;

    public function __construct(FromOdontRepository $fromOdontRepo, M_pacienteRepository $mPacienteRepo)
    {
        $this->fromOdontRepository = $fromOdontRepo;
        $this->mPacienteRepository = $mPacienteRepo;
    }

    /**
     * Display a listing of the FromOdont.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        Menu::seleccionMenu('Odontología ', 'Consulta');
        $fromOdonts = $this->fromOdontRepository->all();

        return view('from_odonts.index')
            ->with('fromOdonts', $fromOdonts);
    }

    public function formOdontPaciente($paciente_id)
    {

        $fromOdonts = $this->fromOdontRepository->all(['paciente_id'=>$paciente_id]);

        return view('from_odonts.index')
            ->with('fromOdonts', $fromOdonts);
    }

    /**
     * Show the form for creating a new FromOdont.
     *
     * @return Response
     */
    public function create()
    {
        return view('from_odonts.create');
    }

    /**
     * Store a newly created FromOdont in storage.
     *
     * @param CreateFromOdontRequest $request
     *
     * @return Response
     */
    public function store(CreateFromOdontRequest $request)
    {
        $input = $request->all();

        $fromOdont = $this->fromOdontRepository->create($input);

        Flash::success('From Odont saved successfully.');

        return redirect(route('fromOdonts.index'));
    }

    /**
     * Display the specified FromOdont.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fromOdont = $this->fromOdontRepository->find($id);

        if (empty($fromOdont)) {
            Flash::error('From Odont not found');

            return redirect(route('fromOdonts.index'));
        }

        return view('from_odonts.show')->with('fromOdont', $fromOdont);
    }

    /**
     * Show the form for editing the specified FromOdont.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fromOdont      = $this->fromOdontRepository->find($id);
        $pacientes      = "";
        $pacientesall   = M_paciente::where('id','=',$fromOdont->paciente_id)->get();
        // $tipoDiag       = FromOdonTipoDiag::where('estado','=',1)->select('','')->get();
        $tipoDiag       = FromOdonTipoDiag::pluck('tipo_diagnostico','id');
        foreach($pacientesall as $pac){
            $paciente[$pac->id]         = $pac->primernombre . " " . $pac->primerapellido; 
            $pacientes  = $paciente;
        } 

        $mPaciente      = $this->mPacienteRepository->find($fromOdont->paciente_id);
        // dd($mPaciente);
        if (empty($fromOdont)) {
            Flash::error('Form Odontologia not found');

            return redirect(route('fromOdonts.index'));
        }

        return view('from_odonts.edit', compact('fromOdont','pacientes','mPaciente','tipoDiag'));
    }

    /**
     * Update the specified FromOdont in storage.
     *
     * @param int $id
     * @param UpdateFromOdontRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFromOdontRequest $request)
    {
        $fromOdont = $this->fromOdontRepository->find($id);

        if (empty($fromOdont)) {
            Flash::error('From Odont not found');

            return redirect(route('fromOdonts.index'));
        }

        $fromOdont = $this->fromOdontRepository->update($request->all(), $id);

        Flash::success('From Odont updated successfully.');

        return redirect(route('fromOdonts.index'));
    }

    /**
     * Remove the specified FromOdont from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fromOdont = $this->fromOdontRepository->find($id);

        if (empty($fromOdont)) {
            Flash::error('From Odont not found');

            return redirect(route('fromOdonts.index'));
        }

        $this->fromOdontRepository->delete($id);

        Flash::success('From Odont deleted successfully.');

        return redirect(route('fromOdonts.index'));
    }

    public function getDiagnosticosPaciente($paciente_id){

        return $diagnosticos    =   datatables()
                                ->of(FormOdonDiagPaci::query(['paciente_id'=>$paciente_id, 'deleted_at is null'=>null])->get())
                                ->addColumn('tipo', function($data){
                                    $tipo = $data->tipoDiag->tipo_diagnostico;
                                    return $tipo;
                                    }
                                )
                                ->addColumn('action', function($data){
                                    $button = "<button type='button'
                                    class= 'btn btn-primary btn-icon' onclick='editar($data->id)'><i class='pli-edit'></i></button>&nbsp;";
                                    $button .= "<button type='button'
                                    class= 'btn btn-danger btn-icon' onclick='eliminar($data->id)'><i class='pli-trash'></i></button>";
                                    return $button;
                                    }
                                )
                                ->rawColumns(['action'])
                                ->make(true);
    }

    public function diagosticoxId($id){
        $diag      = FormOdonDiagPaci::where('id', '=', $id)->first();
        // dd($diagPaci);
        return response()->json($diag);
    }

    public function guardarDiagnostico(Request $request){
        // dd($request['id']);
        $input['form_odon_id']      =   $request['form_odon_id'];   
        $input['tipo_diag_id']      =   $request['tipo_diag_id'];   
        $input['diagnostico']       =   $request['diagnostico'];   
        $input['paciente_id']       =   $request['paciente_id'];   
        $input['usuariocrea_id']    =   Auth::user()->id;
        $input['usuariomod_id']     =   Auth::user()->id;

        FormOdonDiagPaci::insert($input);
        $resp['msg']    = "Registro ingresado con éxito";
        return response()->json($resp);
    }

    public function actualizarDiagnostico(Request $request){
        // dd($request['id']);
        $input['tipo_diag_id']  =  $request['tipo_diag_id'];   
        $input['diagnostico']   =  $request['diagnostico'];   

        FormOdonDiagPaci::where('id', $request->id)
            ->update($input);
        $resp['msg']    = "Registro actualizado con éxito";
        return response()->json($resp);
    }

    public function eliminarDiagnostico(Request $request){
        // dd($request['id']);
        $input['deleted_at']  =  date('Y-m-d H:i:s');     

        FormOdonDiagPaci::where('id', $request->id)
            ->update($input);
        $resp['msg']    = "Registro ha sido eliminado con éxito";
        return response()->json($resp);
    }

    public function getDiagnosticosPacientePreDef($paciente_id){

        return $diagnosticos    =   datatables()
                                ->of(FormOdonDiagPreDef::query(['paciente_id'=>$paciente_id, 'deleted_at is null'=>null])->get())
                                ->addColumn('tipo', function($data){
                                    if($data->tipo==1){ $tipo = 'Presuntivo';}
                                    if($data->tipo==2){ $tipo = 'Definitivo';}
                                    return $tipo;
                                    }
                                )
                                ->addColumn('diag_codigo', function($data){
                                    $diag_codigo = $data->diagnostico->diag_codigo;
                                    return $diag_codigo;
                                    }
                                )
                                ->addColumn('diag_nombre', function($data){
                                    $diag_nombre = $data->diagnostico->diag_nombre;
                                    return $diag_nombre;
                                    }
                                )
                                ->addColumn('action', function($data){
                                    $button = "<button type='button'
                                    class= 'btn btn-primary btn-icon' onclick='editar_d2($data->id)'><i class='pli-edit'></i></button>&nbsp;";
                                    $button .= "<button type='button'
                                    class= 'btn btn-danger btn-icon' onclick='eliminar_d2($data->id)'><i class='pli-trash'></i></button>";
                                    return $button;
                                    }
                                )
                                ->rawColumns(['action'])
                                ->make(true);
    }

    public function diagosticopredefxId($id){
        $diag      = FormOdonDiagPreDef::where('id', '=', $id)->first();
        // dd($diagPaci);
        return response()->json($diag);
    }
}
