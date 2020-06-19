$( document ).ready(function() {
    $("#medico_id").select2();

    // $("#medico_id").select2("val", medico_id); 
    // $('#medico_id').val(medico_id);
    // $('#medico_id').select2().trigger('change');

    $.post( url_agendamedico, { _token: token },
        function (data) {
        $('#agenda').fullCalendar({
            header:{
                left:   'today prev,next',
                center: 'title',
                right:  'agendaDay,agendaWeek,month'
            },
            defaultView:    presentacion,
            contentHeight:  600,
            events:         data,
            minTime:        inicio_atencion,
            maxTime:        fin_atencion,
        });
    }
    );

    

    
});

function cambioMedico(){
    // alert("Eso es papi");
    var view = $('#agenda').fullCalendar('getView');
    $('#presentacion').val(view.name);
    // alert(view.name);
    $( "#frmagenda" ).submit();
}