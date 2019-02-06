$(document).ready(function(){
    
    $("#datepickerIni").datepicker();
    $("#datepickerFin").datepicker();
    
    $("#btn_reset").click(function(){
        $('#frmFiltrosParticipantes')[0].reset();
        $("#datepickerIni").val('');
        $("#datepickerFin").val('');
    });
    
});