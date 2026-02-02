function seleeccionaNivel(op){  
    switch(op){
        case '0':
                console.log("Es administrador");
                document.getElementById("divCoordinador").style.display ="none";
                                                       
                break;
        case '1':
                console.log("Es coordinador");
                document.getElementById("divCoordinador").style.display ="none";
                                                       
                break;
        case '2':
                console.log("Es lider");
                document.getElementById("divCoordinador").style.display ="";
                                                       
                break;
        default:
                console.log("No selecciono ningun nivel");                                                                  
                break;
        }
    }