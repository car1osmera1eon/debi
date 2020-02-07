$("#modulo_id").change(function(event){
    $("#submodulo_id").empty(); 
    
    $.get("submodulos/"+event.target.value+"", function(response,state){
        //console.log(response);
        //$('#submodulo_id').attr("placeholder", "Seleccionar");
        $("#submodulo_id").append("<option value=''>Seleccionar</option>");
        for(i=0; i<response.length; i++){
            $("#submodulo_id").append("<option value='"+response[i].id+"'>"+response[i].nom_submodulo+"</option>");
        }
    });
});

$("#submodulo_id").change(function(event){
    $("#submodulo2_id").empty(); 
    
    $.get("submodulos2/"+event.target.value+"", function(response,state){
        //console.log(response);
        //$('#submodulo_id').attr("placeholder", "Seleccionar");
        $("#submodulo2_id").append("<option value=''>Seleccionar</option>");
        for(i=0; i<response.length; i++){
            $("#submodulo2_id").append("<option value='"+response[i].id+"'>"+response[i].nom_submodulo2+"</option>");
        }
    });
});