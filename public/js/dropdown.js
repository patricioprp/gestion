$("#provincia").change(function(event){
$.get("locations/"+event.target.value+"",function(response, provincia){
  $("#localidad").empty();
  for(i=0;i<response.length;i++){
    $("#localidad").append("<option value='"+response[i].id+"'> "+response[i].name+"</option>");
  }
});
});
