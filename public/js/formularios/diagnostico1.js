$( document ).ready(function() {
    console.log( url_diagnosticos );
    $('#table_diagnostico').DataTable({
        "processing":   true,
        "serverSide":   true,
        "ajax":         url_diagnosticos,
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


});

function editar(id){
    $('#modal-edit').modal('show'); 
}