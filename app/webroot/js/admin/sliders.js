$(document).ready(function(){
  $(function() {
    $( "#sortable" ).sortable({
      revert: true
    });
    
  });
  
  $("#ordenable").sortable({
   placeholder: "ui-state-highlight" 
});
$("#ordenable").sortable({ 
   placeholder: "ui-state-highlight", 
   update: function(){ 
      var ordenElementos = $(this).sortable("toArray").toString(); 
      $.get("cambia_orden.php",{nuevo_orden: ordenElementos},function (respuesta){ 
         alert(respuesta); 
      }); 
   } 
});

  $( "#sortable" ).sortable({
    update: function(event, ui) {
        $(".ajax-loader").show();
            var orden = $(this).sortable('toArray').toString();
            //alert(orden);
            $("#inpOrder").val(orden);
    }
});
  
  $(".opc-multiple").click(function(){
      $(".inp-miltuple-hidden").click();
      $(".msg-gral").empty();
  });
  
  $(".opc-upload-slider").click(function(){
      var for_item = $(this).attr("for");
      $("#file_slider_"+for_item).click();
  });
  
    $("#file").on("change", function(){
        var archivos = document.getElementById('file').files;
        var navegador = window.URL || window.webkitURL;
        /* Recorrer los archivos */
        var errores = 0;
        for(var x=0; x<archivos.length; x++){
            /* Validar tamaño y tipo de archivo */
            var aux_count = x + 1;
            var size = archivos[x].size;
            var type = archivos[x].type;
            var name = archivos[x].name;
            if (size > 2000*800){
                errores ++;
                $(".msg-previa-"+aux_count).append("<div class='alert alert-danger' role='alert'>El archivo "+name+" supera el máximo permitido 1MB</div>");
            }
            else if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png' && type != 'image/gif'){
                errores ++;
                $(".msg-previa-"+aux_count).append("<div class='alert alert-danger' role='alert'>El archivo "+name+" no es del tipo de imagen permitida.</div>");
            }
            else{
                var objeto_url = navegador.createObjectURL(archivos[x]);                 
                $("#preview-slide-"+aux_count).attr("src", objeto_url);
                $(".opc-upload-slider"+aux_count).hide();
            }
        }

        if(errores < 4){
//            $("#content-carga-mult").hide();
//            $("#content-cancel-mult").html('<span class="opc-add-image opc-clean-multiple"><i class="glyphicon glyphicon-erase"></i>&nbsp;Cancelar todas las imágenes seleccionadas</span>')
        }
    });

    $(".inp-ind-hidden").on("change", function(){
        /* Limpiar vista previa */
        var id_item = $(this).attr("id");
        var for_item = $(this).attr("for");
        var archivos = document.getElementById(id_item).files;
        var navegador = window.URL || window.webkitURL;
        /* Recorrer los archivos */
        var errores = 0;
        
        /* Validar tamaño y tipo de archivo */
        var size = archivos[0].size;
        var type = archivos[0].type;
        var name = archivos[0].name;
        if (size > 2000*800){
            errores ++;
            $(".msg-previa-"+for_item).append("<div class='alert alert-danger' role='alert'>El archivo "+name+" supera el máximo permitido 1MB</div>");
        }
        else if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png' && type != 'image/gif'){
            errores ++;
            $(".msg-previa-"+for_item).append("<div class='alert alert-danger' role='alert'>El archivo "+name+" no es del tipo de imagen permitida.</div>");
        }
        else{
            var objeto_url = navegador.createObjectURL(archivos[0]);                 
            $("#preview-slide-"+for_item).attr("src", objeto_url);
            
        }
            
        if(errores == 0){
            $(".opc-upload-slider"+for_item).hide();
        }
        
    });  
});