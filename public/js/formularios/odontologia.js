$(document).on('nifty.ready', function() {


    $("#paciente_id").select2();

    // SUMMERNOTE
    // =================================================================
    // Require Summernote
    // http://hackerwins.github.io/summernote/
    // =================================================================
    $('#motivo_consulta, #enfer_probl_actual, #ap_alergia_antibiotico, #ap_alergia_anestecia, #ap_enf_cardiaca, #ap_otros, #ese_labios, #ese_mejilla').summernote({
        height : '230px'
    });

    $('#ese_maxilar_superior, #ese_maxilar_inferior, #ese_lengua, #ese_paladar, #ese_piso, #ese_orofaringe, #ese_carrillos, #ese_gland_salivales, #ese_oro_faringe, #ese_atm, #ese_ganglios').summernote({
        height : '230px'
    });



    // SUMMERNOTE AIR-MODE
    // =================================================================
    // Require Summernote
    // http://hackerwins.github.io/summernote/
    // =================================================================
    $('#demo-summernote-airmode').summernote({
        airMode: true
    });





    // SUMMERNOTE CLICK TO EDIT
    // =================================================================
    // Require Summernote
    // http://hackerwins.github.io/summernote/
    // =================================================================
    $('#demo-edit-text').on('click', function(){
        $('#demo-summernote-edit').summernote({focus: true});
    });


    $('#demo-save-text').on('click', function(){
        $('#demo-summernote-edit').summernote('destroy');
    });

});