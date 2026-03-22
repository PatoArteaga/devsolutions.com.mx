

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
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){ 
            // Manejar la respuesta del servidor
            // Mostrar la respuesta en la consola del navegador
            console.log("Datos enviados al servidor: ");
            console.log(Object.fromEntries(formData));
            console.log("Respuesta del backend: Error (" + datos + ")");

            if(datos == "pass"){
                Swal.fire({
                    title: "Administrador",
                    text: "Error: Las contraseñas no coinciden",
                    icon: "error",
                    confirmButtonText: "ok",
                    });
                }
            else if(datos == "mail"){  
                Swal.fire({
                    title: "Administrador",
                    text: "Error: El correo electrónico ya está registrado",
                    icon: "error",
                    confirmButtonText: "ok",
                    });
                }
            else{
                Swal.fire({
                    title: "Administrador",
                    text: "Registro exitoso, porfavor espera autorizacion de una administrador para iniciar sesión",
                    icon: "success",
                    confirmButtonText: "ok",
                    }).then((result) => {
                        if (result.isConfirmed) {
                        window.location.href = "../";
                        }
                    });
                }
            $("#usuario-form")[0].reset();
        }
    });
}
    
init();