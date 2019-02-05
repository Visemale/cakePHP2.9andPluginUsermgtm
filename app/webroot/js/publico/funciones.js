$(document).ready(function(){  
    
    
    setTimeout(function(){
    $( ".cerrarModalLoginFlash" ).click();
    }, 3000);
    
    $(".cerrarModalFlashCarga").click(function(){
        $("#modalCarga").hide();
    });
    $(".inp-reg-loading").click(function(){
        
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
                        required:true,
                        min: "Por favor, introduzca un valor mayor o igual que {0}.",
                        max: "Por favor, introduzca un valor menor o igual a {0}.",
                    }     
                },
                submitHandler: function (form) {  
                    //alert('entre');
                    //return false;
                    $("#reg_usuario").attr("action",$("#url").val()+"participantes/registro_usuario");
                    $("#reg_usuario").submit();

                }

            });
        
        
        
        
    });
    
  
    
       
       
       
       $('#UserLoginForm').validate({
       });
       
});



