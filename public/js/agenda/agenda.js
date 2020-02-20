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
        defaultView: 'agenda',
        contentHeight: 600,
        events: data,
        editable: true,
        selectable: true,
        // eventClick: function (calEvent,jsEvent,view) { 
        //     alert(calEvent.id);
        // },
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
            alert('selected ' + startDate.format() + ' to ' + endDate.format());
        },
    })
}
);