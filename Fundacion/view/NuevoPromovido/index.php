<?php
require_once("../../config/conection.php");
    if(isset($_SESSION["id_usuario"]))
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
                            <h3 class="block-title" id="NUsuarios" >Promovido: <small>Nuevo</small></h3>
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
                                    <form class="js-validation-bootstrap" action="" method="post" id="nuevoPromovido-form" enctype="multipart/form-data">
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="txtNombre">Nombre:  <span class="text-danger">*</span></label >
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Introduce tu nombre de usuario.." required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="txtApellido1">Apellido paterno: <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="txtApellido1" name="txtApellido1" placeholder="Introduce tu primer apellido.." required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="txtApellido2"> Apellido materno: <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="txtApellido2" name="txtApellido2" placeholder="Introduce tu segundo apellido.." required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="txtTelefono">Telefono (Celular): <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="715 134 ...." required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="txtClaveElector">Clave de elector: <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="txtClaveElector" name="txtClaveElector" placeholder="Introduce tu clave de elector.." required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="txtCalle">Calle: <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="txtCalle" name="txtCalle" placeholder="Introduce tu calle.." required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="txtNumero">Numero (Int/Ext): <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="txtNumero" name="txtNumero" placeholder="Introduce tu numero.." required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="txtColonia">Colonia: <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="txtColonia" name="txtColonia" placeholder="Introduce tu colonia.." required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="txtCp">CP: <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="txtCp" name="txtCp" placeholder="Introduce tu codigo postal..">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="txtMunicipio">Delegación/Municipio: <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="txtMunicipio" name="txtMunicipio" placeholder="Introduce tu delegación/municipio.." required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="txtSeccionElectoral">Sección electoral: <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="txtSeccionElectoral" name="txtSeccionElectoral" placeholder="Introduce tu sección electoral.." required>
                                            </div>
                                        </div>

                                        <div class="form-group row" id="divCoordinador" style="">
                                            <label class="col-lg-4 col-form-label" for="txtDv">Seleecciona: <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control valid" id="txtDv" name="txtDv" aria-describedby="txtDv-error" aria-invalid="false">
                                                    <option value="0" >N/A</option>
                                                    <option value="1" >DV</option>
                                                    <option value="2" >MOV</option>
                                                    <option value="3" >Cómite</option>
                                                </select>
                                            </div>
                                        </div>

                                        

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="txtComentarios">Comentarios <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="txtComentarios" name="txtComentarios" rows="5" placeholder="Escribe aqui tus comentarios."></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="txtFoto1">Subir Ine<span class="text-danger">*</span></label>
                                            
                                            <div class="col-lg-8">
                                                <!-- <label for="formFile" class="form-label">Seleccionar</label> -->
                                                <!-- <input class="form-control" type="file" id="formFile" name="imagen" capture="camera" accept="image/*"> -->
                                                <input type="file" class="" name="nuevaFoto">
                                               <!--  <button type="submit" class="btn btn-primary">Subir Imagen</button> -->      
                                            </div>                                            
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="txtFoto2">Subir Ine reverso<span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <!-- <label for="formFile" class="form-label">Seleccionar</label> -->
                                                <!-- <input class="form-control" type="file" id="formFile" name="imagen" capture="camera" accept="image/*"> -->
                                                <input type="file" class="nuevaFoto" name="nuevaFoto2">
                                               <!--  <button type="submit" class="btn btn-primary">Subir Imagen</button> -->      
                                            </div>                                            
                                        </div>

                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="txtComprobante">Subir Comprobante de Doomicilio<span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <!-- <label for="formFile" class="form-label">Seleccionar</label> -->
                                                <!-- <input class="form-control" type="file" id="formFile" name="imagen" capture="camera" accept="image/*"> -->
                                                <input type="file" class="" name="nuevaComprobante">
                                               <!--  <button type="submit" class="btn btn-primary">Subir Imagen</button> -->      
                                            </div>                                            
                                        </div>

                                        
                                        <input type="hidden" id="txtIdCoordinador" name="txtIdCoordinador" class="form-control" value=<?php echo $_SESSION["id_usuario"]?>>
                                        <input type="hidden" id="txtIdLider" name="txtIdLider" class="form-control" value=<?php echo $_SESSION["id_usuario"]?>>
                                        <input type="hidden" id="txtIdCapturo" name="txtIdCapturo" class="form-control" value=<?php echo $_SESSION["id_usuario"]?>>


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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php require_once("../MainJs/MainJs.php"); ?>
    <script src="nuevopromovido.js"></script>

    </body>
</html>

<?php
}else
{
    header("Location:".Conectar::ruta()."index.php");
    exit();
}
?>