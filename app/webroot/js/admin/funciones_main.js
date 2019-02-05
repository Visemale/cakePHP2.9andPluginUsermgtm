$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});



$(document).ready(function() {
    var initEditor = function() {
        $("#FrmActionPacientes textarea").sceditor({
                plugins: 'bbcode',
                style: $("#url").val()+"js/admin/SCEditor/minified/jquery.sceditor.default.min.css",
                theme:"square",
                // Option 2
                toolbar: "bold,italic,underline|left,center,right,justify,font,size,color|bulletlist,orderedlist,table,code|image,email,link|emoticon,youtube,date,time,ltr,rtl,maximize,source",
 
	// Option 3
	locale: "no-NB"
        });
    };

    $("#theme").change(function() {
        var theme = $("#url").val()+"js/admin/SCEditor/minified/themes/" + $(this).val() + ".min.css";

        $("textarea").sceditor("instance").destroy();
        $("link:first").remove();
        $("#theme-style").remove();

        loadCSS(theme, initEditor);
    });

    initEditor();
});




function ModalAdvertensia(mensaje,auto){
    $("#msgAdvertensia").empty();
    $("#msgAdvertensiaModal").html(mensaje);
    $('#ModalAdvertencia').modal('toggle');
    if(auto == 1){
        setTimeout(function(){
          $("#msgAdvertensiaModal").empty();
          $('#ModalAdvertencia').modal('hide');
        }, 4000);
    }     
}