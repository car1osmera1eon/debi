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


$.post( url, { _token: token },
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
        eventClick:function (calEvent,jsEvent,view) { 
            alert(calEvent.id);
        },
    })
}
);