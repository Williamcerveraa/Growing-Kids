function validar(url){
    let eliminar = confirm("Realmente deseas ELIMINAR este registro?");
    if(eliminar == true){
        window.location = url;
    }
}

function eliminar(url){
    Swal.fire({
        title: "¿Estás seguro que deseas eliminar este registro?",
        text: "Después de borrarlo no podrás recuperarlo, sin una copia de seguridad!",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, Eliminar!",
        allowOutsideClick : false
      }).then((result) => {
        if (result.isConfirmed) {
           // document.location="eliminar_alumnos.php?id_alumno="+url;
           window.location = url;
           Swal.fire({
            title: "Registro eliminado!",
            text: "Tu registro ha sido eliminado de manera éxitosa!",
            icon: "success",
            timer: 4500,
          });
        }
        
      });
}