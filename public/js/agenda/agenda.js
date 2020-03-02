// $('#dia').fullCalendar({
//     header:{
//         left:   'today prev,next',
//         center: 'title',
//         right:  'agendaWeek,agendaDay'
//     },
//     defaultView: 'agenda',
//     contentHeight: 600,
// });


// $(document).ready(function () {
    
//     $.ajax({
//         method: "POST",
//         url: url,
//         data: { _token: token,  }
//         }).done(function( data ) { console.log(data);
//             $('#dia').fullCalendar({
//                 // put your options and callbacks here
//                 header:{
//                     left:   'today prev,next',
//                     center: 'title',
//                     right:  'agendaWeek,agendaDay'
//                 },
//                 defaultView: 'agenda',
//                 contentHeight: 600,
//                 events: data,
//             })
//     });

// });

$.post( url_agendamedico, { _token: token },
function (data) {
    // alert(data);
    $('#dia').fullCalendar({
        // put your options and callbacks here
        header:{
            left:   'today prev,next',
            center: 'title',
            right:  'agendaWeek,agendaDay'
        },
        defaultView:    'agenda',
        contentHeight:  600,
        events:         data,   //js array
        editable:       true,
        selectable:     true,
        minTime:        "08:00:00",
        maxTime:        "22:00:00",
        businessHours: {
            // days of week. an array of zero-based day of week integers (0=Sunday)
            dow: [ 1, 2, 3, 4, 5 ], 
            start: '09:00', // a start time (09am in this example)
            end: '20:00', // an end time (8pm in this example) 
        },
        selectConstraint: "businessHours",
        eventClick: function (calEvent,jsEvent,view) { 
            alert(calEvent.id);
        },
        eventDrop: function(event, delta, revertFunc){
            // alert(event.title + " " + event.start.format() );
            // alert(url_update); return; 
            $.post(url_update,
            {
                id: event.id,
                fechaini: event.start.format(),
                fechafin: event.end.format(),
                _token: token
            }
            ); 
        },
        select: function(startDate, endDate) {
            // bootbox.alert('selected ' + startDate.format() + ' to ' + endDate.format());
            bootbox.confirm({
                message: "Desea agendar en el horario "+ startDate.format(),
                buttons: {
                    confirm: {
                        label: 'Si',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if(result){
                        url_crear = url_new.replace('fechaini', startDate.format()); 
                        url_crear = url_crear.replace('fechafin', endDate.format());   
                        location.href = url_crear;
                    }
                    console.log('Crear agenda');
                }
            });
        },
    })
}
);