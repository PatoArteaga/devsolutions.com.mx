<?PHP

require_once("../config/conection.php");
require_once("../model/Promovido.php");

$promovido=new Promovido();

switch($_GET["op"]){

    case "guardar":
                $datos=$promovido->getPromovidos($_POST["txtClaveElector"]);
                if(is_array($datos) and count($datos)==0){

                    if(ISSET($_POST["txtTelefono"]) && !empty($_POST["txtTelefono"])){
                        $telefono = $_POST["txtTelefono"];
                    } else {
                        $telefono = NULL; // O puedes asignar un valor predeterminado si lo prefieres

                    }

                    if(ISSET($_POST["txtDv"]) && !empty($_POST["txtDv"])){
                        $dv = $_POST["txtDv"];
                    } else {
                        $dv = NULL; // O puedes asignar un valor predeterminado si lo prefieres

                    }

                    if(ISSET($_POST["txtAbierto"]) && !empty($_POST["txtAbierto"])){
                        $abierto = $_POST["txtAbierto"];
                    } else {
                        $abierto = NULL; // O puedes asignar un valor predeterminado si lo prefieres

                    }

                    if(ISSET($_POST["txtFoto1"]) && !empty($_POST["txtFoto1"])){
                        $foto1 = $_POST["txtFoto1"];
                    } else {
                        $foto1 = NULL; // O puedes asignar un valor predeterminado si lo prefieres

                    }

                    if(ISSET($_POST["txtFoto2"]) && !empty($_POST["txtFoto2"])){
                        $foto2 = $_POST["txtFoto2"];
                    } else {
                        $foto2 = NULL; // O puedes asignar un valor predeterminado si lo prefieres

                    }

                    if(ISSET($_POST["txtFoto3"]) && !empty($_POST["txtFoto3"])){
                        $foto3 = $_POST["txtFoto3"];
                    } else {
                        $foto3 = NULL; // O puedes asignar un valor predeterminado si lo prefieres

                    }
                    
                    // Validar y asignar valores para comentarios, id_coordinador, id_lider, capturo, aplica_meta, fecha_registro y estatus
                    if(ISSET($_POST["txtComentarios"]) && !empty($_POST["txtComentarios"])){
                        $comentarios = $_POST["txtComentarios"];
                    } else {
                        $comentarios = NULL; // O puedes asignar un valor predeterminado si lo prefieres

                    }

                    

                    if(ISSET($_POST["txtIdCoordinador"]) && !empty($_POST["txtIdCoordinador"])){
                        $id_coordinador = $_POST["txtIdCoordinador"];
                    } else {
                        $id_coordinador = NULL; // O puedes asignar un valor predeterminado si lo prefieres

                    }
                    if(ISSET($_POST["txtIdLider"]) && !empty($_POST["txtIdLider"])){
                        $id_lider = $_POST["txtIdLider"];
                    } else {
                        $id_lider = NULL; // O puedes asignar un valor predeterminado si lo prefieres

                    }
                    if(ISSET($_POST["txtCapturo"]) && !empty($_POST["txtCapturo"])){
                        $capturo = $_POST["txtCapturo"];
                    } else {
                        $capturo = NULL; // O puedes asignar un valor predeterminado si lo prefieres

                    }
                    if(ISSET($_POST["txtAplicaMeta"]) && !empty($_POST["txtAplicaMeta"])){
                        $aplica_meta = $_POST["txtAplicaMeta"];
                    } else {
                        $aplica_meta = NULL; // O puedes asignar un valor predeterminado si lo prefieres

                    }
                    if(ISSET($_POST["txtFechaRegistro"]) && !empty($_POST["txtFechaRegistro"])){
                        $fecha_registro = $_POST["txtFechaRegistro"];
                    } else {
                        $fecha_registro = NULL; // O puedes asignar un valor predeterminado si lo prefieres

                    }
                    if(ISSET($_POST["txtEstatus"]) && !empty($_POST["txtEstatus"])){
                        $estatus = $_POST["txtEstatus"];
                    } else {
                        $estatus = 0; // O puedes asignar un valor predeterminado si lo prefieres

                    }




                break;
            






}