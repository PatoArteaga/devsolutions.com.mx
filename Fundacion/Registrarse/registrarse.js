

// JavaScript Document
//Función que se ejecuta al inicio
function init(){
    $("#usuario-form").on("submit", function(e){
        guardaryEditar(e);
    });
}


function guardaryEditar(e){
    console.log("ENTRO A GUARDAR");
    // Evitar que se recargue la página al enviar el formulario
    e.preventDefault();

    // Obtener los datos del formulario
    var formData = new FormData($("#usuario-form")[0]);

   // Enviar los datos al servidor mediante AJAX
    $.ajax({
        url: "../controller/usuario.php?op=guardar",
        type: "post",
        data: formData,
        contentType: false,
        processData: false,
        // Manejar la respuesta del servidor
        // Mostrar la respuesta en la consola del navegador
    success: function(datos){
        console.log(datos);
        
        // Mostrar SweetAlert2 después de guardar el usuario
        Swal.fire({
        title: "Administrador",
        text: "Registro exitoso, ahora puedes iniciar sesión",
        icon: "success",
        confirmButtonText: "ok",
        }).then((result) => {
            if (result.isConfirmed) {
            window.location.href = "../index.php";
        }
        });
        
        // Limpiar el formulario después de guardar
        $("#usuario-form")[0].reset();
    }
    });
}
    
init();