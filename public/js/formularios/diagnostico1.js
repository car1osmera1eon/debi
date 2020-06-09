$( document ).ready(function() {

    $("#form_odon_id").select2();

    console.log( url_diagnosticos );
    $('#table_diagnostico').DataTable({
        "processing":   true,
        "serverSide":   true,
        "ajax":         url_diagnosticos,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        "paging":       false,
        "searching":    false,
        "columns":      [
            { data:     'id'},
            { data:     'tipo'},
            { data:     'diagnostico'},
            { 
                data:     'action',
                orderable:  false
            },
        ] 
    });

    $('#btn_actualizar').click(function(){
        //block of code that runs when the click event triggers
        $.ajax({
            url : url_actualizar,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            data: {
                id: $('#id').val(),
                tipo_diag_id: $('#tipo_diag_id').val(),
                diagnostico: $('#diagnostico').val(),
            },
            dataType: "JSON",
            contentType: "application/x-www-form-urlencoded; charset:ISO-8859-1",
            success: function(data)
            { 
                $('#modal-edit-d1').modal('hide');
                bootbox.alert(data.msg);
                $('#table_diagnostico').DataTable().ajax.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $('#modal-edit-d1').modal('hide');
                bootbox.alert('Error get data from ajax');
            }
        });
    });


    $('#btn_d1_agregar').click(function(){
        var paciente_id = $('#paciente_id').val()
        $('#form-add')[0].reset();
        $('#add_paciente_id').val(paciente_id);
        $('#modal-agregar-d1').modal('show');
        
    });
   
    $('#btn_agregar').click(function(){
        $.ajax({
            url : url_guardar,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            data: {
                form_odon_id:   $('#id').val(),
                paciente_id:    $('#add_paciente_id').val(),
                tipo_diag_id:   $('#add_tipo_diag_id').val(),
                diagnostico:    $('#add_diagnostico').val(),
            },
            dataType: "JSON",
            contentType: "application/x-www-form-urlencoded; charset:ISO-8859-1",
            success: function(data)
            { 
                $('#modal-agregar-d1').modal('hide');
                bootbox.alert(data.msg);
                $('#table_diagnostico').DataTable().ajax.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $('#modal-agregar-d1').modal('hide');
                bootbox.alert('Error get data from ajax');
            }
        });
    });


});

function reload_table_diagnostico()
{
    $('#table_diagnostico').DataTable().ajax.reload(); //reload datatable ajax
}

function editar(id){ 
    $('#modal-edit-d1').modal('show'); 
    url_diagpaci = url_diagpaci.replace('id', id);

    $.ajax({
        url : url_diagpaci,
        type: "POST",
        data: { _token: token },
        dataType: "JSON",
        contentType:"application/x-www-form-urlencoded; charset:ISO-8859-1",
        success: function(data)
        { 
            $('#id').val(id);   
            $('#diagnostico').val(data.diagnostico);   
            $("#form_odon_id").select2("val", data.form_odon_id);  
            
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            $('#modal-edit-d1').modal('hide');
            bootbox.alert('Error get data from ajax');
        }
    });

}

function eliminar(id){
    bootbox.confirm({
        message: "Esta seguro que desea eliminar el registro?",
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
            // console.log('This was logged in the callback: ' + result);
            if(result){
                $.ajax({
                    url : url_eliminar,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    data: {
                        id: id,
                    },
                    dataType: "JSON",
                    contentType: "application/x-www-form-urlencoded; charset:ISO-8859-1",
                    success: function(data)
                    { 
                        $('#modal-edit-d1').modal('hide');
                        bootbox.alert(data.msg);
                        $('#table_diagnostico').DataTable().ajax.reload();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        $('#modal-edit-d1').modal('hide');
                        bootbox.alert('Error get data from ajax');
                    }
                });
            }
        }
    });

   

    function agregar(){

        $.ajax({
            url : url_guardar,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            data: {
                form_odon_id:   $('#id').val(),
                paciente_id:    $('#add_paciente_id').val(),
                tipo_diag_id:   $('#add_tipo_diag_id').val(),
                diagnostico:    $('#add_diagnostico').val(),
            },
            dataType: "JSON",
            contentType: "application/x-www-form-urlencoded; charset:ISO-8859-1",
            success: function(data)
            { 
                $('#modal-edit-d1').modal('hide');
                bootbox.alert(data.msg);
                $('#table_diagnostico').DataTable().ajax.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $('#modal-edit-d1').modal('hide');
                bootbox.alert('Error get data from ajax');
            }
        });
    }

}