$( document ).ready(function() {
    $("#medicos").select2();
    
    $('#agenda').fullCalendar({
        header:{
            left:   'today prev,next',
            center: 'title',
            right:  'agendaDay,agendaWeek,month'
        },
        defaultView:    'agendaWeek',
    });

    
});
