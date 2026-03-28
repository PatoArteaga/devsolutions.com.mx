 const labelPromovidos = document.getElementById("label-Promovidos");
    labelPromovidos.classList.add("open");

    const labelNP1 = document.getElementById("label-NP");
    labelNP1.classList.add("active");

    $id_usuario = document.getElementById("id_usuario").value;

    function init(){
    $("#nuevoPromovido-form").on("submit", function(e){
        guardaryEditar(e);
    });
}

function guardaryEditar(e){
   console.log("ENTRO A GUARDAR");
   console.log("ID del usuario: " + $id_usuario);

    e.preventDefault();

   var formData = new FormData($("#nuevoPromovido-form")[0]);

    console.log("Datos enviados al servidor: ");
    console.log(Object.fromEntries(formData));


    $.ajax({
        url: "../../controller/promovido.php?op=guardar",
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

            if(datos == "clave"){
                Swal.fire({
                    title: "Administrador",
                    text: "Error: La clave de elector ya existe",
                    icon: "error",
                    confirmButtonText: "ok",
                    });
                    datos="";
                }
            else{
                Swal.fire({
                    title: "Administrador",
                    text: "Registro exitoso!!",
                    icon: "success",
                    confirmButtonText: "ok",
                    }).then((result) => {
                        if (result.isConfirmed) {
                        window.location.href = "../NuevoPromovido/";
                        }
                    });
                }
            $("#nuevoPromovido-form")[0].reset();
        }
    });
}


init();