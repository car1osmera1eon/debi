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
{{-- {{dd($mPaciente)}} --}}
@include('m_pacientes.show_fields')