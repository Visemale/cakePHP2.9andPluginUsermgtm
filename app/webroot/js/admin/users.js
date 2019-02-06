$(document).ready(function(){
    $( "#frmEditPass" ).validate({
        rules: {
            inpConfirPass: {
                equalTo: "#inpPass"
            }
        }
    });
    
    $("#frmAddUser").validate({
        rules: {
            inpConfirPass: {
                equalTo: "#inpPass"
            }
        }
    });
    
    
    $('.btnGenerarContra').click(function(e){
        e.preventDefault();
        var contra = makeid();
        $("#inpPass").val(contra).focus();
        $("#inpConfirPass").val(contra).focus();
        document.getElementById("inpPass").type = "text";
    });
    
    $('.eyePass').click(function(){
        var x = document.getElementById("inpPass");
        if (x.type === "password") {
          x.type = "text";
          
        } else {
          x.type = "password";
        }
    });
});


function makeid() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%&*()-_=+?/{}[]";

  for (var i = 0; i < 9; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}
