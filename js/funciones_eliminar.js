function validar(url){
    let eliminar = confirm("Realmente deseas ELIMINAR este registro?");
    if(eliminar == true){
        window.location = url;
    }
}