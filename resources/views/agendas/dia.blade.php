<div class="col-7"><div id='dia'></div></div>
<script>
var url = "{{route('agendaMedico',[$medico_id])}}";
var token = "{{ csrf_token() }}";
//alert(token);
</script>
<script src="{{ URL('js/agenda/agenda.js') }}"defer></script>