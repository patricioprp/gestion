$("#provincia").change(function(event){
$.get("locations/"+event.target.value+"",function(response, provincia){
  $("#localidad").empty();
  for(i=0;i<response.length;i++){
    $("#localidad").append("<option value='"+response[i].id+"'> "+response[i].name+"</option>");
  }
});
});
$("#nacion").change(function(event){
$.get("provinces/"+event.target.value+"",function(response, nacion){
  $("#provincia").empty();
  for(i=0;i<response.length;i++){
    $("#provincia").append("<option value='"+response[i].id+"'> "+response[i].name+"</option>");
  }
});
});
