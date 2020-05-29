<div class="col-7"><div id='dia'></div></div>
{{-- {{ $horario }} --}}
{{-- TODO :: crear un arreglo con businessHours para el js >> agenda.js --}}
<script>
var url_agendamedico    =   "{{route('agendaMedico',[$medico_id])}}";
var url_horario         =   "{{route('horarioLaboralMed',[$medico_id])}}";
var url_update          =   "{{route('actualizarAgenda')}}";
var url_editar          =   "{{route('agendas.edit', ['evento_id'])}}";
var url_new             =   "{{route('crearAgenda', ['fechaini', 'fechafin'])}}";
var token               =   "{{ csrf_token() }}";
var valor_dia           =   "{{ $dia }}"; 
var businessHours       =   {{$string}}; 
var presentacion        =   "{{ $tipo }}";

</script>
<script src="{{ URL('js/agenda/agenda.js') }}"defer></script>

