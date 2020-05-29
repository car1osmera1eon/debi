<!--Stacked Tabs Left-->
<!--===================================================-->
<div class="tab-base tab-stacked-left">

    <!--Nav tabs-->
    <ul class="nav nav-tabs">
        <li class="active">
            <a data-toggle="tab" href="#demo-stk-lft-tab-1">Datos Personales</a>
        </li>
        <li>
            <a data-toggle="tab" href="#demo-stk-lft-tab-2">Motivo Consulta</a>
        </li>
        <li>
            <a data-toggle="tab" href="#demo-stk-lft-tab-3">Enf Problema Actual</a>
        </li>
        <li>
            <a data-toggle="tab" href="#demo-stk-lft-tab-4">Antecedentes Personales</a>
        </li>
        <li>
            <a data-toggle="tab" href="#demo-stk-lft-tab-5">Signos Vitales</a>
        </li>
        <li>
            <a data-toggle="tab" href="#demo-stk-lft-tab-6">Examen del Sistema Estomatognático</a>
        </li>
        <li>
            <a data-toggle="tab" href="#demo-stk-lft-tab-7">Odontograma</a>
        </li>
        <li>
            <a data-toggle="tab" href="#demo-stk-lft-tab-8">Indicadores de Salud Bucal</a>
        </li>
        <li>
            <a data-toggle="tab" href="#demo-stk-lft-tab-9">Diagnostico Presuntivo</a>
        </li>
        <li>
            <a data-toggle="tab" href="#demo-stk-lft-tab-10">Diagnostico Definitivo</a>
        </li>
        <li>
            <a data-toggle="tab" href="#demo-stk-lft-tab-10">Tratamiento</a>
        </li>
    </ul>

    <!--Tabs Content-->
    <div class="tab-content">
        <div id="demo-stk-lft-tab-1" class="tab-pane fade active in">
           @include('from_odonts.fields.datospersonales')
        </div>
        <div id="demo-stk-lft-tab-2" class="tab-pane fade">
            @include('from_odonts.fields.motivoconsulta')
        </div>
        <div id="demo-stk-lft-tab-3" class="tab-pane fade">
            @include('from_odonts.fields.problemaactual')
        </div>
        <div id="demo-stk-lft-tab-4" class="tab-pane fade">
            @include('from_odonts.fields.antecedentespersonales')
        </div>
        <div id="demo-stk-lft-tab-5" class="tab-pane fade">
            @include('from_odonts.fields.signosvitales')
        </div>
        <div id="demo-stk-lft-tab-6" class="tab-pane fade">
            @include('from_odonts.fields.examen')
        </div>
        <div id="demo-stk-lft-tab-7" class="tab-pane fade">
            @include('from_odonts.fields.odontograma')
        </div>
        <div id="demo-stk-lft-tab-8" class="tab-pane fade">
            @include('from_odonts.fields.indicadores')
        </div>
        <div id="demo-stk-lft-tab-9" class="tab-pane fade">
            @include('from_odonts.fields.diagnostico2')
        </div>
        <div id="demo-stk-lft-tab-10" class="tab-pane fade">
            @include('from_odonts.fields.diagnostico2')
        </div>
        <div id="demo-stk-lft-tab-10" class="tab-pane fade">
            @include('from_odonts.fields.tratamiento')
        </div>
    </div>
</div>
<!--===================================================-->
<!--End Stacked Tabs Left-->

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('fromOdonts.index') }}" class="btn btn-default">Cancel</a>
</div>
<script type="text/javascript" src="{{ URL('js/formularios/odontologia.js') }}"  defer="defer"></script>
