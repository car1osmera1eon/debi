<!-- Clinica Id Field -->
<div class="form-group">
    {!! Form::label('clinica_id', 'Clinica Id:') !!}
    <p>{{ $mTestimonio->clinica_id }}</p>
</div>

<!-- Paciente Id Field -->
<div class="form-group">
    {!! Form::label('paciente_id', 'Paciente Id:') !!}
    <p>{{ $mTestimonio->paciente_id }}</p>
</div>

<!-- Testimonio Field -->
<div class="form-group">
    {!! Form::label('testimonio', 'Testimonio:') !!}
    <p>{{ $mTestimonio->testimonio }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $mTestimonio->image }}</p>
</div>

