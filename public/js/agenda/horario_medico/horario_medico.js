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
            eventDrop: function(event, delta, revertFunc){
                // alert(event.title + " " + event.start.format() );
                // alert(url_update); return; 

                //////////////////////////////
                $.post(url_validacion2,
                    {
                        id: event.id,
                        ndia: event.start.day(), 
                        medico_id: medico_id,
                        _token: token
                    },
                    function(res, status){
                        
                        if(res.estado=="ok"){
                            // bootbox.alert(res.msj);
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
                                        alert();
                                        revertFunc();
                                    }
                                    
                                }
                            ); 
                        }else{
                            bootbox.alert(res.msj); 
                            revertFunc();
                            return;
                        }
                        
                      }
                ); 
                //////////////////////////////

                
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
            eventRender: function(event, element) {
                element.bind('dblclick', function() {  
                    url_editar = url_editar.replace('evento_id', event.id); 
                    // alert(url_editar);
                    location.href = url_editar;
                });
             },
            select: function(startDate, endDate) {
                // bootbox.alert('selected ' + startDate.format() + ' to ' + endDate.format());

                $.post(url_validacion,
                    {
                        id: event.id,
                        ndia: startDate.day(), 
                        medico_id: medico_id,
                        _token: token
                    },
                    function(res, status){
                        
                        if(res.estado=="ok"){
                            // bootbox.alert(res.msj);
                            bootbox.confirm({
                                message: "Desea agregar este dia: "+ startDate.format('dddd') + " a " + startDate.format('H:mm') +" al horario? " ,
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
                                        url_crear = url_new.replace('ndia', startDate.day()); 
                                        url_crear = url_crear.replace('horaini', startDate.format('H:mm'));   
                                        url_crear = url_crear.replace('medico_id', medico_id);   
                                        location.href = url_crear;
                                    }
                                    console.log('Crear agenda');
                                }
                            });

                        }else{
                            bootbox.alert(res.msj); 
                            return;
                        }
                        
                      }
                ); 

                

            },
        })
    }
    );