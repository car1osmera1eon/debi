<div class="col-7"><div id='dia'></div></div>
<script>
var url_agendamedico    = "{{route('agendaMedico',[$medico_id])}}";
var url_update          = "{{route('actualizarAgenda')}}";
var token = "{{ csrf_token() }}";
//alert(token);
</script>
<script src="{{ URL('js/agenda/agenda.js') }}"defer></script>