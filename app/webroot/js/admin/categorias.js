$(document).ready(function(){
    $("#frmAddCat").validate();
    
    
    $("#inpNomCat").focusout(function(){
        if($(this).val().length > 0){
            $("#inpFriendly").val(forma_friendly($("#inpNomCat").val()));
            $(".label-friendly").addClass("active")
        }
    });
    
    $("#inpNomSubCat").focusout(function(){
        if($(this).val().length > 0){
            $("#inpFriendlySubcat").val(forma_friendly($("#inpNomSubCat").val()));
            $(".label-friendly").addClass("active")
        }
    });
});