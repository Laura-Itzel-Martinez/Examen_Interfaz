

function eliminarArchivo(){
    swal({
        title: "Estas seguro de eliminar este archivo?",
        text: "Una vez eliminada, no podra recuperarse el archivo!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            
        } 
    });
}