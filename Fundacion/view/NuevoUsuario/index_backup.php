<?php
require_once("../../config/conection.php");
    if(isset($_SESSION["id_usuario"]) and $_SESSION["nivel"] < 1)
        {
?>


<!doctype html>
    <head>
        <?php require_once("../MainHead/MainHead.php"); ?>        
        <title>Nuevo Usuario &amp; UI Framework DevSolutions.</title>
    </head>
    
    <body>
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
            <!-- Side Overlay-->
            <?php require_once("../AsideOverly/AsideOverly.php"); ?>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
            <?php require_once("../MainSidebar/MainSidebar.php"); ?>
            <!-- END Sidebar -->

            <!-- Header -->
            <?php require_once("../MainHeader/MainHeader.php"); ?>        
            <!-- END Header -->

            <!-- Contenido principal -->
            <main id="main-container">
                <div class="content">
                    
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title" id="NUsuarios" >Usuarios: <small>Nuevo</small></h3>
                        </div>
                        <div class="block-header block-header-default">
                            <!-- <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div> -->
                        </div>

                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-6">
                                    <!-- jQuery Validation (.js-validation-bootstrap class is initialized in js/pages/be_forms_validation.js) -->
                                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-validation-bootstrap" action="" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Nombre de Usuario <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Introduce tu nombre de usuario..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Introduce tu email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Introduce tu contraseña..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Confirma Password <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="Confirma tu contraseña..">
                                            </div>
                                        </div>
                                        
                                       <!--  <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-select2">Nivel de Usuario <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <select class="js-select2 form-control" id="select_principal"         name="select_principal" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option>
                                                    
                                                    <option value="0">0-Administrador</option>
                                                    <option value="1">1-Coordinador</option>
                                                    <option value="2">2-Lider</option>
                                                </select>
                                            </div>
                                        </div> -->

                                        <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="categoria">Nivel de Usuario:</label>
                                        <select id="categoria" onchange="cargarOpciones()">
                                        <!-- <select id="nivel" name="nivel" onchange="cargarOpciones()">  -->
                                            <option value="">Seleccione...</option>
                                            <option value="0">0-Administrador</option>
                                            <option value="1">1-Coordinador</option>
                                            <option value="2">2-Lider</option>
                                        </select>
                                        </div>


                                        <label for="items">Items:</label>
                                        <select id="items">
                                            <option value="">Seleccione categoría...</option>
                                        </select>
                                        

                                  
    

                                        
                                        
                                        
                                     

                                        


                                        <?php
                                        $seleccionado = 2;

                                        switch ($seleccionado) {
                                            case 0:
                                                echo"Seleccionaste Administrador";
                                                break;
                                            case 1:
                                                
                                                break;
                                            /*case 2:
                                                echo"Seleccionaste Lider";
                                                include_once("../../model/Cordinador.php");
                                                $consultaCoordinadores = new Coordinadores();
                                                $resultado = $consultaCoordinadores->getCoordinadores();                                        
                                                // Mostrar select de Coordinadores
                                                echo"<div class='form-group row'>
                                                <label class='col-lg-4 col-form-label' for='items'>Adscrito con el Coordinador</label>
                                                <select id='items'>
                                                <option value=''>Seleccione Cordinador...</option>";

                                                foreach($resultado as $row){
                                                 echo '<option value="'.$row["id_usuario"].'">'.$row["nombre"].' '.$row["apellido"].'</option>';
                                                    }
                                                echo "</select>
                                                </div>"; 
                                               
                                                break;*/

                                            default:
                                                // Código para ninguna opción seleccionada
                                                break;
                                        }
                                        ?>    

                                        <script>
                                            function cargarOpciones() {
                                                

                                                // Datos simulados (en producción se haría con AJAX/PHP)
                                                const datos = {
                                                    0: ["Manzana", "Plátano", "Naranja"],
                                                    1: ["Lechuga", "Zanahoria", "Brócoli"],
                                                    2: ["Cebolla", "Pimiento", "Ajo"]
                                                };

                                                const categoria = document.getElementById("categoria").value;
                                                const itemsSelect = document.getElementById("items");
                                                
                                                // Limpiar opciones anteriores
                                                itemsSelect.innerHTML = '<option value="">Seleccione...</option>';

                                                if (categoria in datos) {
                                                    datos[categoria].forEach(function(item) {
                                                        let option = document.createElement("option");
                                                        option.value = item.toLowerCase();
                                                        option.text = item;
                                                        itemsSelect.add(option);
                                                    });
                                                }
                                            }

                                            function cargaLideres() { 
                                                

                                                
                                                
                                            }

                                        </script>


                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Comentarios <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder="Escribe aqui tus comentarios."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-phoneus">Telefono (Celular) <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-phoneus" name="val-phoneus" placeholder="715 134 ....">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-alt-primary">Registrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>



                    
                </div>
            </main>
            <!-- Termina Contenido principal -->
             
            <!-- Footer -->
            <?php require_once("../MainFooter/MainFooter.php"); ?>
            <!-- Termina Footer -->

        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
      <?php require_once("../MainJs/MainJs.php"); ?>
      <script src="nuevousuario.js"></script>

    </body>
</html>

<?php
}else
{
    header("Location:".Conectar::ruta()."index.php");
    exit();
}
?>