{{-- <!-- Clinica Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clinica_id', 'Clinica Id:') !!}
    {!! Form::number('clinica_id', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Nombre Sitio Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('nombre_sitio', 'Nombre Sitio:') !!}
    {!! Form::text('nombre_sitio', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Mision Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mision', 'Mision:') !!}
    {!! Form::textarea('mision', null, ['class' => 'form-control']) !!}
</div>

<!-- Vision Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vision', 'Vision:') !!}
    {!! Form::textarea('vision', null, ['class' => 'form-control']) !!}
</div>

<!-- Quienes Somos Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('quienes_somos', 'Quienes Somos:') !!}
    {!! Form::textarea('quienes_somos', null, ['class' => 'form-control']) !!}
</div>

<!-- Facebook Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook', 'Facebook:') !!}
    {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
</div>

<!-- Twitter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twitter', 'Twitter:') !!}
    {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
</div>

<!-- Instagram Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instagram', 'Instagram:') !!}
    {!! Form::text('instagram', null, ['class' => 'form-control']) !!}
</div>

<!-- Telegram Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telegram', 'Telegram:') !!}
    {!! Form::text('telegram', null, ['class' => 'form-control']) !!}
</div>

<!-- Whatsapp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('whatsapp', 'Whatsapp:') !!}
    {!! Form::text('whatsapp', null, ['class' => 'form-control']) !!}
</div>

<!-- Banner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Imagen:') !!}
    {!! Form::file('image') !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mSitios.index') }}" class="btn btn-default">Cancel</a>
</div>
