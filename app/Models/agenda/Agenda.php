<?php

namespace App\Models\agenda;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Repositories\agenda\AgendaRepository;

/**
 * Class Agenda
 * @package App\Models
 * @version February 17, 2020, 10:16 am -05
 *
 * @property \App\Models\MClinica clinica
 * @property \App\Models\MConsultorio consultorio
 * @property \App\Models\MMedico medico
 * @property \App\Models\Especialidad especialidad
 * @property \App\Models\MProcedimiento procedimiento
 * @property \App\Models\User usuarioconfirma
 * @property \App\Models\User usuariocrea
 * @property \App\Models\User usuariomod
 * @property string|\Carbon\Carbon fechaini
 * @property string|\Carbon\Carbon fechafin
 * @property integer paciente_id
 * @property integer medico_id
 * @property boolean proc_consul
 * @property integer consultorio_id
 * @property integer procedimiento_id
 * @property boolean tipo_cita
 * @property boolean estado_cita
 * @property integer clinica_id
 * @property integer reagenda_id
 * @property string observaciones
 * @property integer usuarioconfirma_id
 * @property integer especialidad_id
 * @property integer seguro_id
 * @property boolean estado
 * @property integer usuariocrea_id
 * @property integer usuariomod_id
 * @property string ip_creacion
 * @property string ip_modificacion
 * @property string observacion_proc
 * @property string diagnostico_proc
 */
class Agenda extends Model
{
    use SoftDeletes;

    public $table = 'p_agenda';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fechaini',
        'horaini',
        'fechafin',
        'horafin',
        'paciente_id',
        'medico_id',
        'proc_consul',
        'consultorio_id',
        'procedimiento_id',
        'tipo_cita',
        'estado_cita',
        'clinica_id',
        'reagenda_id',
        'observaciones',
        'usuarioconfirma_id',
        'especialidad_id',
        'seguro_id',
        'estado',
        'usuariocrea_id',
        'usuariomod_id',
        'ip_creacion',
        'ip_modificacion',
        'observacion_proc',
        'diagnostico_proc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fechaini' => 'date',
        'horaini' => 'string',
        'fechafin' => 'date',
        'horafin' => 'string',
        'paciente_id' => 'integer',
        'medico_id' => 'integer',
        'proc_consul' => 'boolean',
        'consultorio_id' => 'integer',
        'procedimiento_id' => 'integer',
        'tipo_cita' => 'boolean',
        'estado_cita' => 'boolean',
        'clinica_id' => 'integer',
        'reagenda_id' => 'integer',
        'observaciones' => 'string',
        'usuarioconfirma_id' => 'integer',
        'especialidad_id' => 'integer',
        'seguro_id' => 'integer',
        'estado' => 'boolean',
        'usuariocrea_id' => 'integer',
        'usuariomod_id' => 'integer',
        'ip_creacion' => 'string',
        'ip_modificacion' => 'string',
        'observacion_proc' => 'string',
        'diagnostico_proc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fechaini' => 'required',
        'horaini' => 'required',
        'fechafin' => 'required',
        'horafin' => 'required',
        'paciente_id' => 'required',
        'medico_id' => 'required',
        'consultorio_id' => 'required',
        'clinica_id' => 'required',
        'estado' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function paciente()
    {
        return $this->belongsTo(\App\Models\maestros\M_paciente::class, 'paciente_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function clinica()
    {
        return $this->belongsTo(\App\Models\maestros\M_clinica::class, 'clinica_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function consultorio()
    {
        return $this->belongsTo(\App\Models\maestros\M_consultorio::class, 'consultorio_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function medico()
    {
        return $this->belongsTo(\App\Models\maestros\M_medico::class, 'medico_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function especialidad()
    {
        return $this->belongsTo(\App\Models\maestros\Especialidad::class, 'especialidad_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function procedimiento()
    {
        return $this->belongsTo(\App\Models\maestros\M_procedimiento::class, 'procedimiento_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuarioconfirma()
    {
        return $this->belongsTo(\App\User::class, 'usuarioconfirma_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuariocrea()
    {
        return $this->belongsTo(\App\User::class, 'usuariocrea_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuariomod()
    {
        return $this->belongsTo(\App\User::class, 'usuariomod_id');
    }

    public function agendaMedico($id,$desde="",$hasta=""){ 
        if($desde==""){$desde=date('Y')."01-01";}
        if($hasta==""){$hasta=date('Y')."12-31";}
        $data       = array();    $evento = array();
        $agenda     = $this->agendaRepository->all(['medico_id'=>$id, 'fechaini'=>$desde, 'fechafin'=>$hasta]); 
        
        foreach($agenda as $row){
            $evento['id']     = $row->id;             
            $evento['title']  = "Procedimiento: ".$row->procedimiento->nombre.", Paciente: ".$row->paciente->primernombre." ".$row->paciente->primerapellido;     
            $evento['start']  = date('Y-m-d',strtotime($row->fechaini)).' '.$row->horaini;       
            $evento['end']    = date('Y-m-d',strtotime($row->fechafin)).' '.$row->horafin;  
            // $evento['url']    = route('agendas.edit',[$row->id]);  
            
            $data[] = $evento;    
        }
        // if($desde!=""){
        //     $evento['title']        = "No Disponible";
        //     $evento['start']        = date('Y')."01-01";
        //     $evento['end']          = $desde;
        //     $evento['rendering']    = 'background';
        //     $evento['end']          = '#ff9f89';
        // }
        // $data[] = $evento;


        return response()->json($data); 
    }

    public static function horarioLaboralMedico($id){
       $bussinesHour = array();
        $horario    = HorarioMedico::where('medico_id', '=', $id)
        ->where('tipo', '=', 1)
        ->select()
        ->get();
        
        $string = "[";
        foreach($horario as $row){
            $string .= "{";
            $string .= "dow: [$row->ndia], "; 
            $string .= "start: `$row->horaini`, "; 
            $string .= "end:  `$row->horafin` "; 
            $string .= "},";
        } 
        $string .= "]"; 
        return $string;
    }

}
