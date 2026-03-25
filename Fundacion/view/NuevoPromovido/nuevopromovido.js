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







}


init();