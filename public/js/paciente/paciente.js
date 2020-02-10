$("#codigo_provincia").change(function(event){ 
    $("#codigo_canton").empty(); 
    $("#codigo_parroquia").empty();     
    $("#codigo_parroquia").append("<option value=''>Seleccionar</option>");
    $.get("cantones/"+event.target.value+"", function(response,state){ 
        $("#codigo_canton").append("<option value=''>Seleccionar</option>");
        for(i=0; i<response.length; i++){
            $("#codigo_canton").append("<option value='"+response[i].codigo_m_canton+"'>"+response[i].nombre_m_canton+"</option>");
        }
    });
});

$("#codigo_canton").change(function(event){
    $("#codigo_parroquia").empty();  
    $.get("parroquias/"+event.target.value+"", function(response,state){ 
        $("#codigo_parroquia").append("<option value=''>Seleccionar</option>");
        for(i=0; i<response.length; i++){
            $("#codigo_parroquia").append("<option value='"+response[i].codigo_m_parroquia+"'>"+response[i].nombre_m_parroquia+"</option>");
        }
    });
});

$('#fecha_nacimiento').datepicker({ 
    format: 'yyyy-mm-dd'
});

// $("#fecha_nacimiento").datetimepicker({
//     format:'YYYY-MM-DD'
//     });