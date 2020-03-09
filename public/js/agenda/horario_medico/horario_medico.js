$.post( url_horario, { _token: token },
    function (data) {
        // alert(data);
        $('#dia').fullCalendar({
            // put your options and callbacks here
            header:{
                left:   '',
                center: '',
                right:  ''
            },
            defaultView:    'agendaWeek',
            allDaySlot:     false,
            // weekends:       false,
            contentHeight:  600,
            events:         data,   //js array
            editable:       true,
            selectable:     true,
            minTime:        "07:00:00",
            maxTime:        "22:00:00",
            // businessHours: {
            //     // days of week. an array of zero-based day of week integers (0=Sunday)
            //     dow: [ 1, 2, 3, 4, 5 ], 
            //     start: '09:00', // a start time (09am in this example)
            //     end: '20:00', // an end time (8pm in this example) 
            // },
            // selectConstraint: "businessHours",
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
                },
                function(res, status){
                    
                    if(res.estado=="ok"){
                        bootbox.alert(res.msj);
                    }else{
                        bootbox.alert(res.msj);
                        revertFunc();
                    }
                    
                  }
                ); 
            },
            select: function(startDate, endDate) {
                // bootbox.alert('selected ' + startDate.format() + ' to ' + endDate.format());
                bootbox.confirm({
                    message: "Desea agregar este dia: "+ startDate.format('dddd') + " a " + startDate.format('h:mm') +" al horario? " ,
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
                            url_crear = url_new.replace('ndia', startDate.format('h:mm')); 
                            url_crear = url_crear.replace('horaini', startDate.day());   
                            location.href = url_crear;
                        }
                        console.log('Crear agenda');
                    }
                });
            },
        })
    }
    );