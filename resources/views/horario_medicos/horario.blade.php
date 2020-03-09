<div class="col-7"><div id='dia'></div></div>
<script>
var url_horario         = "{{route('getHorarioMedico',[$medico_id])}}";
var url_update          = "{{route('actualizarHorarioMedico')}}";
var url_new             = "{{route('crearHorario', ['ndia', 'horaini'])}}";
var token = "{{ csrf_token() }}";
//alert(token);
</script>
<script src="{{ URL('js/agenda/horario_medico/horario_medico.js') }}"defer></script>