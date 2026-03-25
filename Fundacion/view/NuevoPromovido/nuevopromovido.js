 const labelPromovidos = document.getElementById("label-Promovidos");
    labelPromovidos.classList.add("open");

    const labelNP1 = document.getElementById("label-NP");
    labelNP1.classList.add("active");

function init(){
    $("#nuevoPromovido-form").on("submit", function(e){
        guardaryEditar(e);
    });
}

function guardaryEditar(e){
   console.log("ENTRO A GUARDAR");

    e.preventDefault();

   var formData = new FormData($("#nuevoPromovido-form")[0]);

    console.log("Datos enviados al servidor: ");
    console.log(Object.fromEntries(formData));


    $.ajax({
        url: "../../controller/usuario.php?op=guardar",
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
        }
    });
}
init();