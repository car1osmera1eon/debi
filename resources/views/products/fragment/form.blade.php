<div class="form-group">
    {!! Form::label('name', 'Nombre del producto') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('short', 'Descripcion del producto') !!}
    {!! Form::text('short', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('ENVIAR', ['class'=>'form-control']) !!}
</div>