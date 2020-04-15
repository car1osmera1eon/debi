<div class="col-7"><div id='dia'></div></div>
<script>
var url_agendamedico    = "{{route('agendaMedico',[$medico_id])}}";
var url_update          = "{{route('actualizarAgenda')}}";
var url_editar          = "{{route('agendas.edit', ['evento_id'])}}";
var url_new             = "{{route('crearAgenda', ['fechaini', 'fechafin'])}}";
var token = "{{ csrf_token() }}";
var valor_dia = "{{ $dia }}";
//alert(token);
</script>
<script src="{{ URL('js/agenda/agenda.js') }}"defer></script>

