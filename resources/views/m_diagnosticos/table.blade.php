<div class="table-responsive">
    <table class="table" id="mDiagnosticos-table">
        <thead>
            <tr>
                <th>Diag Codigo</th>
        <th>Diag Nombre</th>
        <th>Diag Valor</th>
        <th>Lsex</th>
        <th>Linf</th>
        <th>Lsup</th>
        <th>Triv</th>
        <th>Errad</th>
        <th>N Inter</th>
        <th>Nin</th>
        <th>Ninmtobs</th>
        <th>No Cbd</th>
        <th>No Aph</th>
        <th>Fetal</th>
        <th>Capitulo</th>
        <th>Lista1</th>
        <th>Grupo1</th>
        <th>Lista5</th>
        <th>Actualizaciones Cie 10</th>
        <th>Year Modifi</th>
        <th>Year Aplicacion</th>
        <th>Prinmorta</th>
        <th>Prinmorbi</th>
        <th>Lm Morbi</th>
        <th>Lm Morta</th>
        <th>Lgbd165</th>
        <th>Lomsbeck</th>
        <th>Lgbd190</th>
        <th>Notdiaria</th>
        <th>Notsemanal</th>
        <th>Sistema Especial</th>
        <th>Birmm</th>
        <th>Poco Util</th>
        <th>Epi Morta</th>
        <th>Epi Morta M5</th>
        <th>Diag Status</th>
        <th>Diag Local</th>
        <th>Diag Edad Estado</th>
        <th>Diag Edad Ini</th>
        <th>Diag Edad Fin</th>
        <th>Diag Esta Rd</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mDiagnosticos as $mDiagnostico)
            <tr>
                <td>{{ $mDiagnostico->diag_codigo }}</td>
            <td>{{ $mDiagnostico->diag_nombre }}</td>
            <td>{{ $mDiagnostico->diag_valor }}</td>
            <td>{{ $mDiagnostico->LSex }}</td>
            <td>{{ $mDiagnostico->LInf }}</td>
            <td>{{ $mDiagnostico->LSup }}</td>
            <td>{{ $mDiagnostico->Triv }}</td>
            <td>{{ $mDiagnostico->errad }}</td>
            <td>{{ $mDiagnostico->N_inter }}</td>
            <td>{{ $mDiagnostico->Nin }}</td>
            <td>{{ $mDiagnostico->Ninmtobs }}</td>
            <td>{{ $mDiagnostico->No_CBD }}</td>
            <td>{{ $mDiagnostico->No_Aph }}</td>
            <td>{{ $mDiagnostico->FETAL }}</td>
            <td>{{ $mDiagnostico->capitulo }}</td>
            <td>{{ $mDiagnostico->Lista1 }}</td>
            <td>{{ $mDiagnostico->Grupo1 }}</td>
            <td>{{ $mDiagnostico->Lista5 }}</td>
            <td>{{ $mDiagnostico->ACTUALIZACIONES_CIE_10 }}</td>
            <td>{{ $mDiagnostico->year_modifi }}</td>
            <td>{{ $mDiagnostico->year_aplicacion }}</td>
            <td>{{ $mDiagnostico->prinmorta }}</td>
            <td>{{ $mDiagnostico->prinmorbi }}</td>
            <td>{{ $mDiagnostico->lm_morbi }}</td>
            <td>{{ $mDiagnostico->lm_morta }}</td>
            <td>{{ $mDiagnostico->lgbd165 }}</td>
            <td>{{ $mDiagnostico->lOMSBeck }}</td>
            <td>{{ $mDiagnostico->lgbd190 }}</td>
            <td>{{ $mDiagnostico->NOTDiaria }}</td>
            <td>{{ $mDiagnostico->NOTSemanal }}</td>
            <td>{{ $mDiagnostico->Sistema_Especial }}</td>
            <td>{{ $mDiagnostico->birmm }}</td>
            <td>{{ $mDiagnostico->poco_util }}</td>
            <td>{{ $mDiagnostico->epi_morta }}</td>
            <td>{{ $mDiagnostico->epi_morta_m5 }}</td>
            <td>{{ $mDiagnostico->diag_status }}</td>
            <td>{{ $mDiagnostico->diag_local }}</td>
            <td>{{ $mDiagnostico->diag_edad_estado }}</td>
            <td>{{ $mDiagnostico->diag_edad_ini }}</td>
            <td>{{ $mDiagnostico->diag_edad_fin }}</td>
            <td>{{ $mDiagnostico->diag_esta_rd }}</td>
                <td>
                    {!! Form::open(['route' => ['mDiagnosticos.destroy', $mDiagnostico->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mDiagnosticos.show', [$mDiagnostico->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('mDiagnosticos.edit', [$mDiagnostico->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
