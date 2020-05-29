<div class="col-7"><div id='dia'></div></div>
<script>
var medico_id           = "{{ $medico_id }}";
var url_horario         = "{{route('getHorarioMedico',[$medico_id])}}";
var url_update          = "{{route('actualizarHorarioMedico')}}";
var url_validacion      = "{{route('validaAgregarHorarioMedico')}}";
var url_validacion2     = "{{route('validaAgregarHorarioMedico2')}}";
var url_new             = "{{route('crearHorario', ['medico_id', 'ndia', 'horaini'])}}";
var url_editar          = "{{route('horarioMedicos.edit', ['evento_id'])}}";
var token               = "{{ csrf_token() }}";
//alert(token);
</script>
<script src="{{ URL('js/agenda/horario_medico/horario_medico.js') }}"defer></script>