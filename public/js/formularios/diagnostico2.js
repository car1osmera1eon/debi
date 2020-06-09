$( document ).ready(function() {

    $("#form_odon_id").select2();

    console.log( url_diagnosticos );
    $('#table_diagnostico_pre_def').DataTable({
        "processing":   true,
        "serverSide":   true,
        "ajax":         url_diagpredef,
        "paging":       false,
        "searching":    false,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        "columns":      [
            { data:     'id'},
            { data:     'tipo'},
            { data:     'diag_codigo'},
            { data:     'diag_nombre'},
            { 
                data:     'action',
                orderable:  false
            },
        ] 
    });

    $('#btn_actualizar_d2').click(function(){
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
                $('#modal-edit-d2').modal('hide');
                bootbox.alert(data.msg);
                $('#table_diagnostico_pre_def').DataTable().ajax.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $('#modal-edit-d2').modal('hide');
                bootbox.alert('Error get data from ajax');
            }
        });
    });



});

function reload_table_diagnostico_pre_def()
{
    $('#table_diagnostico_pre_def').DataTable().ajax.reload(); //reload datatable ajax
}

function editar_d2(id){
    $('#modal-edit-d2').modal('show'); 
    url_diagpredefxid = url_diagpredefxid.replace('id', id);


    $.ajax({
        url : url_diagpredefxid,
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
            $('#modal-edit-d2').modal('hide');
            bootbox.alert('Error get data from ajax');
        }
    });

}

function eliminar_d2(id){
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
                        $('#modal-edit-d2').modal('hide');
                        bootbox.alert(data.msg);
                        $('#table_diagnostico_pre_def').DataTable().ajax.reload();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        $('#modal-edit-d2').modal('hide');
                        bootbox.alert('Error get data from ajax');
                    }
                });
            }
        }
    });

    //block of code that runs when the click event triggers
}