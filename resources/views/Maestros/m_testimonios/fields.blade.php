<!-- Clinica Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('clinica_id', 'Clinica Id:') !!}
    {!! Form::number('clinica_id', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Paciente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paciente_id', 'Paciente:') !!}
    {!! Form::select('paciente_id',$pacientes,  null,['class' => 'form-control']) !!}
</div>

<!-- Testimonio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('testimonio', 'Testimonio:') !!}
    {!! Form::textarea('testimonio', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Imagen / Foto:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-9">
        <span class="pull-left btn btn-primary btn-file">
        Archivo... {!! Form::file('image', null, ['class' => 'form-control']) !!}
        </span>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mTestimonios.index') }}" class="btn btn-default">Cancel</a>
</div>

<script type="text/javascript" src="{{ URL('js/testimonio/testimonio.js') }}"  defer="defer"></script>