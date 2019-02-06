$(document).ready(function(){  
    
    
    
    window.arrayTags = new Array();    
    var url = $('#url').val();
    $("#inpCategoria").change(function() {
        $("#inpSubcategoria option").not(':first').remove();
        
        if(this.value != ""){
            $.ajax({
               url: url + 'Categorias/get_subcategorias/' + this.value,
               type: 'GET',
               cache: false,
               dataType: 'HTML'
            }).done(function(data)
            {
                $('#inpSubcategoria').html(data);
            }).fail(function(data)
            {
                console.log(data);
            });
            
            if($("#inpCategoria option:selected").text() != "Categoria"){
                $("cat").empty().html(forma_friendly($("#inpCategoria option:selected").text())+"/");
                $("subcat").empty();
            }
            else{
                $("subcat").empty();
                $("cat").empty();
            }
        }
        
    }); 
    
    $("#inpSubcategoria").change(function() {        
        if(this.value != ""){
            if($("#inpSubcategoria option:selected").text() != "Subcategoria"){
                $("subcat").empty().html(forma_friendly($("#inpSubcategoria option:selected").text())+"/");
            }
        }
        
    }); 
    
    
    $(document).on('change', 'input[type=file]', function(e){
        var TmpPath = URL.createObjectURL(e.target.files[0]);
        $('.imgDesThumbail').attr('src', TmpPath);
        $('.minImgDes').css('display', 'block');
    });

    
    $(".btnTrashImgDes").click(function(){
        $('.minImgDes').css('display', 'none');
        $('#inpImgDes').val('');
    });
    
    $(".tagsCreate").keypress(function(e){        
        var val_item = $(this).val();
        if(e.which == 13 && val_item.length > 0 ) {
            e.preventDefault();
            window.arrayTags.push(val_item);
            var index = (window.arrayTags.length)-1;
            var html = '<div class="col-md-4 float-left ContentFor'+index+'">\
                            <button class="btn-copy-code btn btn-outline-grey btn-sm px-2 waves-effect itemTagArt">'+val_item+'</button>\
                            <i class="far fa-times-circle btnTrash" onclick="borrarTag('+index+');"></i>\
                        </div>';
            $(html).appendTo('.contentItemTags');
            var html2 = '<input type="hidden" readonly="readonly" name="tags[]" value="'+val_item+'" />';
            $(".contentFrm").after(html2);
            $('.tagsCreate').val('');
        }
    });
    
    $("#inpNomArt").focusout(function(){
        var val_item = $(this).val();
        $("#inpFriendly").val(forma_friendly(val_item));
        $("nomart").empty().html(forma_friendly(val_item));
    });
        
    $('#frmNvoArt').validate();    
    $("#frmNvoArt").removeAttr('novalidate');
    
    
    if($("#prevTag").val().length > 0){
        var response = JSON.parse($("#prevTag").val());        
        for(var i=0; response.length > i; i++){
            window.arrayTags.push(response[i]);
            var index = (window.arrayTags.length)-1;
            var html = '<div class="col-md-4 float-left ContentFor'+index+'">\
                            <button class="btn-copy-code btn btn-outline-grey btn-sm px-2 waves-effect itemTagArt">'+response[i]+'</button>\
                            <i class="far fa-times-circle btnTrash" onclick="borrarTag('+index+');"></i>\
                        </div>';
            $(html).appendTo('.contentItemTags');
            var html2 = '<input type="hidden" readonly="readonly" name="tags[]" value="'+response[i]+'" />';
            $(".contentFrm").after(html2);
            $("#prevTag").remove();
        }        
    }
    
    if($("#prevCat").val().length > 0){
        $("#inpSubcategoria option").not(':first').remove();        
        if(this.value != ""){
            $.ajax({
               url: url + 'Categorias/get_subcategorias/' + $("#prevCat").val(),
               type: 'GET',
               cache: false,
               dataType: 'HTML'
            }).done(function(data){
                $('#inpSubcategoria').html(data);
            }).fail(function(data){
                console.log(data);
            });
        }
        var item = $("#prevSubCat").val();
        $('#inpSubcategoria option[value="'+item+'"]').attr("selected", true);
        $("#prevSubCat").remove();
        $("#prevCat").remove();
    }
    
    $(".opcTrash").click(function(){
        if (window.confirm("Estas seguro que deseas eliminar el articulo?")) { 
            
        }
        else{
            return;
        }
    });
    
    
});


$(function(){
    $('textarea').froalaEditor({
        imageUploadURL: '/blog/upload_image',
        imageUploadParams: {
            id: 'my_editor'
        }
    });
});


function borrarTag(index){
    $('.ContentFor'+index).remove();  
    delete window.arrayTags[index];
    console.log(window.arrayTags);
}


$(document).ready(function(){
    $(".fr-wrapper div:first-child").remove();
});