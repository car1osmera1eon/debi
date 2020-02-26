$('#fechaini').datepicker({ 
    format: 'yyyy-mm-dd',
    autoclose:true
});
$('#fechafin').datepicker({ 
    format: 'yyyy-mm-dd',
    autoclose:true
});
$('#horaini').timepicker({
    minuteStep: 5,
    showInputs: false,
    disableFocus: true
});
$('#horafin').timepicker({
    minuteStep: 5,
    showInputs: false,
    disableFocus: true
});

$("#paciente_id").select2();
$("#medico_id").select2();
$("#proc_consul").select2();
$("#consultorio_id").select2();
$("#procedimiento_id").select2();
$("#tipo_cita").select2();
$("#estado_cita").select2();
$("#clinica_id").select2();
$("#especialidad_id").select2();