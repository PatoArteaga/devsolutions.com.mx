<?php
    session_start(); 
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
                                    <form class="js-validation-bootstrap" action="../Home" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Nombre:  <span class="text-danger">*</span></label >
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="val-nombre" placeholder="Introduce tu nombre de usuario.." required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Primer Apellido <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="val-apeññido1" placeholder="Introduce tu nombre de usuario..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Segundo Apellido <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="val-apellido2" placeholder="Introduce tu nombre de usuario..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Dirección <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-Direccion" name="val-Direccion" placeholder="Introduce tu dirección..">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-phoneus">Telefono (Celular) <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-phoneus" name="val-phoneus" placeholder="715 134 ...." required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Introduce tu email..">
                                            </div>
                                        </div>

                                        

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Comentarios <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder="Escribe aqui tus comentarios."></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Subir Ine<span class="text-danger">*</span></label>
                                            
                                            <div class="col-lg-8">
                                                <!-- <label for="formFile" class="form-label">Seleccionar</label> -->
                                                <!-- <input class="form-control" type="file" id="formFile" name="imagen" capture="camera" accept="image/*"> -->
                                                <input type="file" class="" name="nuevaFoto">
                                               <!--  <button type="submit" class="btn btn-primary">Subir Imagen</button> -->      
                                            </div>                                            
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Subir Ine reverso<span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <!-- <label for="formFile" class="form-label">Seleccionar</label> -->
                                                <!-- <input class="form-control" type="file" id="formFile" name="imagen" capture="camera" accept="image/*"> -->
                                                <input type="file" class="nuevaFoto" name="nuevaFoto2">
                                               <!--  <button type="submit" class="btn btn-primary">Subir Imagen</button> -->      
                                            </div>                                            
                                        </div>



                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Subir Comprobante de Doomicilio<span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <!-- <label for="formFile" class="form-label">Seleccionar</label> -->
                                                <!-- <input class="form-control" type="file" id="formFile" name="imagen" capture="camera" accept="image/*"> -->
                                                <input type="file" class="" name="nuevaComprobante">
                                               <!--  <button type="submit" class="btn btn-primary">Subir Imagen</button> -->      
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
      <script src="nuevopromovido.js"></script>

    </body>
</html>