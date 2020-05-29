
<!-- Paciente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paciente_id', 'Paciente:', ['class' => 'text-bold']) !!}
    {!! Form::select('paciente_id', $pacientes, null, ['class' => 'form-control', 'readonly' =>'readonly']) !!}
</div>

<!-- Agenda Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agenda_id', 'Agenda Id:', ['class' => 'text-bold']) !!}
    {!! Form::number('agenda_id', null, ['class' => 'form-control', 'readonly' =>'readonly']) !!}
</div>

<!-- Motivo Consulta Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('motivo_consulta', 'Motivo Consulta:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('motivo_consulta', null, ['class' => 'form-control','id'=>'motivo_consulta']) !!}
</div>

<!-- Enfer Probl Actual Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('enfer_probl_actual', 'Enfermedad o Problema Actual:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('enfer_probl_actual', null, ['class' => 'form-control','id'=>'enfer_probl_actual']) !!}
</div>

<!-- Ap Alergia Antibiotico Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ap_alergia_antibiotico', 'Alergia Antibiotico:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ap_alergia_antibiotico', null, ['class' => 'form-control','id'=>'ap_alergia_antibiotico']) !!}
</div>

<!-- Ap Alergia Anestecia Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ap_alergia_anestecia', 'Alergia Anestecia:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ap_alergia_anestecia', null, ['class' => 'form-control','id'=>'ap_alergia_anestecia']) !!}
</div>

<!-- Ap Vih Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ap_vih', 'Vih:', ['class' => 'text-bold']) !!}
    {!! Form::text('ap_vih', null, ['class' => 'form-control']) !!}
</div>

<!-- Ap Tuberculosis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ap_tuberculosis', 'Tuberculosis:', ['class' => 'text-bold']) !!}
    {!! Form::text('ap_tuberculosis', null, ['class' => 'form-control']) !!}
</div>

<!-- Ap Asma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ap_asma', 'Asma:', ['class' => 'text-bold']) !!}
    {!! Form::text('ap_asma', null, ['class' => 'form-control']) !!}
</div>

<!-- Ap Diabetes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ap_diabetes', 'Diabetes:', ['class' => 'text-bold']) !!}
    {!! Form::text('ap_diabetes', null, ['class' => 'form-control']) !!}
</div>

<!-- Ap Hipertension Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ap_hipertension', 'Hipertension:', ['class' => 'text-bold']) !!}
    {!! Form::text('ap_hipertension', null, ['class' => 'form-control']) !!}
</div>

<!-- Ap Enf Cardiaca Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ap_enf_cardiaca', 'Enfermedad Cardiaca:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ap_enf_cardiaca', null, ['class' => 'form-control','id'=>'ap_enf_cardiaca']) !!}
</div>

<!-- Ap Otros Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ap_otros', 'Otros:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ap_otros', null, ['class' => 'form-control','id'=>'ap_otros']) !!}
</div>

<!-- Sv Presion Arterial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sv_presion_arterial', 'Presion Arterial:', ['class' => 'text-bold']) !!}
    {!! Form::text('sv_presion_arterial', null, ['class' => 'form-control']) !!}
</div>

<!-- Sv Frecuencia Cardiaca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sv_frecuencia_cardiaca', 'Frecuencia Cardiaca:', ['class' => 'text-bold']) !!}
    {!! Form::text('sv_frecuencia_cardiaca', null, ['class' => 'form-control']) !!}
</div>

<!-- Sv Temperatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sv_temperatura', 'Temperatura:', ['class' => 'text-bold']) !!}
    {!! Form::text('sv_temperatura', null, ['class' => 'form-control']) !!}
</div>

<!-- Sv Frecuencia Respiratoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sv_frecuencia_respiratoria', 'Frecuencia Respiratoria:', ['class' => 'text-bold']) !!}
    {!! Form::text('sv_frecuencia_respiratoria', null, ['class' => 'form-control']) !!}
</div>

<!-- Ese Labios Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ese_labios', 'Labios:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ese_labios', null, ['class' => 'form-control','id'=>'ese_labios']) !!}
</div>

<!-- Ese Mejilla Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ese_mejilla', 'Mejilla:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ese_mejilla', null, ['class' => 'form-control','id'=>'ese_mejilla']) !!}
</div>

<!-- Ese Maxilar Superior Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ese_maxilar_superior', 'Maxilar Superior:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ese_maxilar_superior', null, ['class' => 'form-control','id'=>'ese_maxilar_superior']) !!}
</div>

<!-- Ese Maxilar Inferior Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ese_maxilar_inferior', 'Maxilar Inferior:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ese_maxilar_inferior', null, ['class' => 'form-control','id'=>'ese_maxilar_inferior']) !!}
</div>

<!-- Ese Lengua Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ese_lengua', 'Lengua:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ese_lengua', null, ['class' => 'form-control','id'=>'ese_lengua']) !!}
</div>

<!-- Ese Paladar Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ese_paladar', 'Paladar:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ese_paladar', null, ['class' => 'form-control','id'=>'ese_paladar']) !!}
</div>

<!-- Ese Piso Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ese_piso', 'Piso:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ese_piso', null, ['class' => 'form-control','id'=>'ese_piso']) !!}
</div>

<!-- Ese Orofaringe Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ese_orofaringe', 'Orofaringe:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ese_orofaringe', null, ['class' => 'form-control','id'=>'ese_orofaringe']) !!}
</div>

<!-- Ese Carrillos Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ese_carrillos', 'Carrillos:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ese_carrillos', null, ['class' => 'form-control','id'=>'ese_carrillos']) !!}
</div>

<!-- Ese Gland Salivales Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ese_gland_salivales', 'Gland Salivales:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ese_gland_salivales', null, ['class' => 'form-control','id'=>'ese_gland_salivales']) !!}
</div>

<!-- Ese Oro Faringe Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ese_oro_faringe', 'Oro Faringe:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ese_oro_faringe', null, ['class' => 'form-control','id'=>'ese_oro_faringe']) !!}
</div>

<!-- Ese Atm Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ese_atm', 'Atm:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ese_atm', null, ['class' => 'form-control','id'=>'ese_atm']) !!}
</div>

<!-- Ese Ganglios Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ese_ganglios', 'Ganglios:', ['class' => 'text-bold']) !!}
    {!! Form::textarea('ese_ganglios', null, ['class' => 'form-control','id'=>'ese_ganglios']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('fromOdonts.index') }}" class="btn btn-default">Cancel</a>
</div>
<script type="text/javascript" src="{{ URL('js/formularios/odontologia.js') }}"  defer="defer"></script>
