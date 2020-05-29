$.post( url_agendamedico, { _token: token },
function (data) {
    // alert(data);
    $('#dia').fullCalendar({
        // put your options and callbacks here
        defaultDate: valor_dia,
        header:{
            left:   'today prev,next',
            center: 'title',
            right:  'agendaDay,agendaWeek,month'
        },
        defaultView:    presentacion,
        contentHeight:  600,
        events:         data,   //js array
        editable:       true,
        selectable:     true,
        minTime:        "08:00:00",
        maxTime:        "22:00:00",
        // businessHours: [ // specify an array instead
        //     {
        //       dow: [ 1, 2, 3, 4, 5 ], 
        //       start: '08:00',
        //       end: '13:00'
        //     },
        //     {
        //       dow: [ 1, 2, 3, 4, 5 ],
        //       start: '14:00',
        //       end: '19:00'
        //     }
        //   ],
        // businessHours: bh,
        businessHours: businessHours,
        selectConstraint: "businessHours",
        eventRender: function(event, element) {
            element.bind('dblclick', function() { 
               url_editar = url_editar.replace('evento_id', event.id); 
               location.href = url_editar;
            });
         },
        eventDrop: function(event, delta, revertFunc){ 
            $.post(url_update,
            {
                id: event.id,
                fechaini: event.start.format(),
                fechafin: event.end.format(),
                _token: token
            }
            ); 
        },
        eventResize: function(event, delta, revertFunc){  
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
                message: "Desea agendar en el horario: "+ startDate.format(),
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
                        if(startDate.isBefore(moment())) { 
                            bootbox.alert({message: "No se puede crear eventos en el pasado.", backdrop: true});
                        }else{
                            url_crear = url_new.replace('fechaini', startDate.format()); 
                            url_crear = url_crear.replace('fechafin', endDate.format()); 
                            location.href = url_crear;
                        } 
                    }
                    console.log('Crear agenda');
                }
            });
        },
    })
}
);