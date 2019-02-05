$(document).ready(function(){  
    
    setTimeout(function(){
    $( ".cerrarModalLoginFlash" ).click();
    }, 3000);
    
    $(".cerrarModalLoginFlash").click(function(){
        $("#modalLoginFlash").hide();
    });
    
    $("#reg_usuario").validate({
                rules: {
                        passw1: { required: true, minlength: 8, maxlength: 12 },
                        passw2: { required: true, minlength: 8, maxlength: 12, equalTo: "#passw1" },
                        edad:{required: true, min: 13, max: 65 }
                },
                messages: {
                    passw1: {
                        minlength: "La contraseña no puede tener menos de {0} caracteres",
                        maxlength: "La contraseña no puede tener más de {0} caracteres",
                    },
                    passw2: {
                        minlength: "La contraseña no puede tener menos de {0} caracteres",
                        maxlength: "La contraseña no puede tener más de {0} caracteres",
                        equalTo: "Las contraseñas no coinciden",
                    },
                    edad: {
                       
                        min: "Por favor, introduzca un valor mayor o igual que {0}.",
                        max: "Por favor, introduzca un valor menor o igual a {0}.",
                    }     
                }

            });
            
       $('#reg_correo').blur(function(){
        if($(this).val() !== "")
        {
            $.ajax({
            type: "GET",
            url: $("#url").val()+"Participantes/get_coreo/"+$(this).val(),
            dataType:"html",
            success:function(data){
                if(data == 0)
                    var msg = "Usuario ya existente."
                else
                    var msg = "Disponible";

                var html ='<div id="Error" class="help-text help-text'+data+'" >'+msg+'</div>';
                $("#usr_error").html(html);
                }
            });
        }else{
            $("#usr_error").empty();
        }
    });
    
    $('#como_entero').change(function(){
        
        var valor=$('#como_entero').val();
        
            if(valor==='Unidad_Movil'){
                $('#unidadm').css('display','block');
            }else{
                $('#unidadm').css('display','none');
            }
        
       
        
    });
    
    
    $("#reg_metas").validate();
    
    $('#tipo_producto').change(function(){
        var valor = $('#tipo_producto').val();
        if(valor=='individual'){
                $('#producto_tipo').css('display','block');
           }else{
               $('#producto_tipo').css('display','none');
           }
       
    });
    
     $('#selectprod').change(function(){
        var valor = $('#selectprod').val();
        if(valor=='individual'){
                $('#productoinput').css('display','block');
           }else{
               $('#productoinput').css('display','none');
           }
       
    });
        
            
    
    
    
});  

function maximaLongitud(campo, maxlong, elemento){
    var out_value;
    var total;
    var texto = document.getElementById(campo).value;

    if (texto.length > maxlong)
    {
		in_value = texto;

		out_value = in_value.substring(0,maxlong);

		texto = out_value;



                document.getElementById(elemento).innerHTML = '0';

                document.getElementById(campo).value = texto;

		return false;
    }

    total = maxlong - texto.length;

    document.getElementById(elemento).innerHTML = total;


    var value= (texto.length * 100 / maxlong);



    if(total < 20)
    {
        document.getElementById(elemento).className='contador_min';


    }
    else
    {
        document.getElementById(elemento).className='contador';


    }

    return true;
}

