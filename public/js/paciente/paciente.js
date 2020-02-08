$("#codigo_provincia").change(function(event){ 
    $("#codigo_canton").empty(); 
    $.get("cantones/"+event.target.value+"", function(response,state){ 
        $("#codigo_canton").append("<option value=''>Seleccionar</option>");
        for(i=0; i<response.length; i++){
            $("#codigo_canton").append("<option value='"+response[i].codigo_m_canton+"'>"+response[i].nombre_m_canton+"</option>");
        }
    });
});

// $("#submodulo_id").change(function(event){
//     $("#submodulo2_id").empty();  
//     $.get("submodulos2/"+event.target.value+"", function(response,state){ 
//         $("#submodulo2_id").append("<option value=''>Seleccionar</option>");
//         for(i=0; i<response.length; i++){
//             $("#submodulo2_id").append("<option value='"+response[i].id+"'>"+response[i].nom_submodulo2+"</option>");
//         }
//     });
// });