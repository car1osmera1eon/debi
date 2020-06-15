<!-- Clinica Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clinica_id', 'Clinica Id:') !!}
    {!! Form::number('clinica_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Paciente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paciente_id', 'Paciente Id:') !!}
    {!! Form::number('paciente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Testimonio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('testimonio', 'Testimonio:') !!}
    {!! Form::text('testimonio', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mTestimonios.index') }}" class="btn btn-default">Cancel</a>
</div>
