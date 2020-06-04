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
                $('#modal-edit').modal('hide');
                bootbox.alert(data.msg);
                $('#table_diagnostico').DataTable().ajax.reload();
                // table_diagnostico.ajax.reload();
                // $('#id').val(id);   
                // $('#diagnostico').val(data.diagnostico);   
                // $("#form_odon_id").select2("val", data.plv_se_repite);  
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $('#modal-edit').modal('hide');
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
    $('#modal-edit').modal('show'); 
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
            $("#form_odon_id").select2("val", data.plv_se_repite);  
            
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            $('#modal-edit').modal('hide');
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
                        $('#modal-edit').modal('hide');
                        bootbox.alert(data.msg);
                        $('#table_diagnostico').DataTable().ajax.reload();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        $('#modal-edit').modal('hide');
                        bootbox.alert('Error get data from ajax');
                    }
                });
            }
        }
    });

    //block of code that runs when the click event triggers
}