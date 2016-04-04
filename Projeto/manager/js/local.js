var path_counter = 0;
/*Recuperando diretórios salvos no servidor*/
$("document").ready(function(){
  $('#alert').hide();
  var url = "util/srcdirs.php";
  $.get(url, function(dirList){
    dirList.forEach(function(dir){
      path_counter++;
      //$('#folders').append('<input type="checkbox" name="dirs[]" value="'+dir+'">'+dir+'<br>');
      $('#folders').append('<div id="'+path_counter+'" class="input-group">'+
                              '<span class="input-group-addon" id="basic-addon1">'+
                                '<input type="checkbox" name="dirs[]" value="'+dir+'">'+
                              '</span>'+
                              '<input class="form-control" type="text" value="'+dir+'" readonly>'+
                              '<span class="input-group-btn">'+
                                '<button onclick="removepath('+path_counter+')" class="btn btn-default" type="button">'+
                                  '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>'+
                                '</button>'+
                              '</span>'+
                            '</div>');
    })
  });
});
/*Adicionando diretórios*/
$('#addpath').click(function(){
  var newpath = $('#newpath').val();
  $.get("util/checkpath.php?path="+newpath, function(exists){
    if(exists){
      $('#alert').hide();
      path_counter++;
      //$('#folders').append('<input type="checkbox" checked name="dirs[]" value="'+newpath+'">'+newpath+'<br>');
      $('#folders').append('<div id="'+path_counter+'" class="input-group">'+
                              '<span class="input-group-addon" id="basic-addon1">'+
                                '<input type="checkbox" checked name="dirs[]" value="'+newpath+'">'+
                              '</span>'+
                              '<input class="form-control" type="text" value="'+newpath+'" readonly>'+
                              '<span class="input-group-btn">'+
                                '<button onclick="removepath('+path_counter+')" class="btn btn-default" type="button">'+
                                  '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>'+
                                '</button>'+
                              '</span>'+
                            '</div>');
      $('#newpath').val('');
      $('#newpath').focus();
    }else {
      $('#alert').show();
      $('#newpath').focus();
    }
  });
});
/*Remover diretório*/
function removepath(opt){
  var opt = "#"+opt;
  $(opt).remove();
  path_counter--;
};
function removeAllPaths(){
  while(path_counter){
    var eid = "#"+path_counter;
    $(eid).remove();
    path_counter--;
  }
};
