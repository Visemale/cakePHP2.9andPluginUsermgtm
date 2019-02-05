function forma_friendly(nombre){
    // reemplaza espacios en blanco por guion bajo{
    var contenido=""
    for (var i = 0; i < nombre.length; i ++){
        contenido += (nombre.charAt(i) == " ") ? "_" : nombre.charAt(i);
    }//fin del for
        

    //sanea caracteres
    var r=contenido.toLowerCase();
    r = r.replace(new RegExp(/\s/g),"_");
    r = r.replace(new RegExp(/[àáâãäå]/g),"a");
    r = r.replace(new RegExp(/[èéêë]/g),"e");
    r = r.replace(new RegExp(/[ìíîï]/g),"i");
    r = r.replace(new RegExp(/ñ/g),"n");                
    r = r.replace(new RegExp(/[òóôõö]/g),"o");
    r = r.replace(new RegExp(/[ùúûü]/g),"u");
    r = r.replace(new RegExp(/[!@#$%^&*()-=+{}\[\]:;"'?\/>.<,\\|~`]/g),"");
    return r;
}