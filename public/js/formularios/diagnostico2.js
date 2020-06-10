$( document ).ready(function() {

    $("#md2_tipo").select2({
        dropdownParent: $('#modal-edit-d2')
    });

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

    $('#btn_d2_agregar').click(function(){
        var paciente_id = $('#paciente_id').val()
        $('#form-add')[0].reset();
        $('#md2_paciente_id').val(paciente_id);
        $('#modal-agregar-d2').modal('show');
    });

    $('#md2_btn_actualizar').click(function(){
        //block of code that runs when the click event triggers
        $.ajax({
            url : url_actualizarpredef,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            data: {
                id:             $('#md2_id').val(),
                tipo:           $('#md2_tipo').val(),
                cie10:          $('#md2_cie10').val(),
                observacion:    $('#md2_observacioncie10').val(),
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


    $('#md2_cie10').on('keyup',function() {
        // the text typed in the input field is assigned to a variable 
        var query   = $(this).val();
        // call to an ajax function
        if(query!=""){
            $.ajax({
                // assign a controller function to perform search action - route name is search
                url:    url_autocomplecie10,
                // since we are getting data methos is assigned as GET
                type:   "GET",
                // data are sent the server
                data:   {'cie10':query},
                // if search is succcessfully done, this callback function is called
                success:function (data) {
                    // print the search results in the div called cie10_list(id)
                    $('#md2_cie10_list').html(data);
                }
            })
            // end of ajax call
        }
        
    });

    $(document).on('click', 'li', function(){
        // declare the value in the input field to a variable
        var value = $(this).text();
        // assign the value to the search box
        $('#md2_cie10').val(value);
        // after click is done, search results segment is made empty
        $('#md2_cie10_list').html("");
    });



});





function reload_table_diagnostico_pre_def()
{
    $('#table_diagnostico_pre_def').DataTable().ajax.reload(); //reload datatable ajax
}

function editar_d2(id){
    $('#form-md2-edit')[0].reset();
    $('#modal-edit-d2').modal('show'); 
    url_diagpredefxid = url_diagpredefxid.replace('id', id);
    // alert(url_diagpredefxid);
    $.ajax({
        url : url_diagpredefxid,
        type: "POST",
        data: { _token: token },
        dataType: "JSON",
        contentType:"application/x-www-form-urlencoded; charset:ISO-8859-1",
        success: function(data)
        { 
            $('#md2_id').val(id);   
            $('#md2_paciente_id').val(data.paciente_id);   
            $('#md2_cie10').val(data.cod_cie10+'|'+data.cie10);   
            $('#md2_observacioncie10').val(data.observacion);   
            $("#md2_tipo").select2("val", data.tipo);  
            // $('#md2_cie10').val(data.cod_cie10 + " " + data.cie10);  
            
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