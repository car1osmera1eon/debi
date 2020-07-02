$(document).ready(function () {
    $("#medico_id").select2();

    // $("#medico_id").select2("val", medico_id); 
    // $('#medico_id').val(medico_id);
    // $('#medico_id').select2().trigger('change');

    $.post(url_agendamedico, {
            _token: token
        },
        function (data) {
            $('#agenda').fullCalendar({
                header: {
                    left: 'today prev,next',
                    center: 'title',
                    right: ''
                },
                defaultView: presentacion,
                validRange: {
                    start: '2020-06-25'
                },
                contentHeight: 600,
                selectable: true,
                events: data,
                minTime: inicio_atencion,
                maxTime: fin_atencion,
                businessHours: businessHours,
                select: function (startDate, endDate) {
                    if (startDate.isBefore(moment())) {
                        alert("No se puede crear eventos en el pasado.");
                        return;
                    } else {
                        url_crear = url_new.replace('fechaini', startDate.format());
                        url_crear = url_crear.replace('fechafin', endDate.format());
                        location.href = url_crear;
                    }
                },

            });
        }
    );




});

function cambioMedico() {
    // alert("Eso es papi");
    var view = $('#agenda').fullCalendar('getView');
    $('#presentacion').val(view.name);
    // alert(view.name);
    $("#frmagenda").submit();
}
