$("#medico_id").select2(); 
$("#tipo").select2(); 
$('#horaini').timepicker({ 
    timeFormat: 'HH:mm',
    showMeridian: false,
    interval: 15, // 15 minutes
    disableFocus: true
});
$('#horafin').timepicker({
    timeFormat: 'HH:mm',
    showMeridian: false,
    interval: 15, // 15 minutes
    disableFocus: true
});