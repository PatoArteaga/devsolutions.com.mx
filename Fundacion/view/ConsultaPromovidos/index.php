<?php
require_once("../../config/conection.php");
    if(isset($_SESSION["id_usuario"]))
        {
?>

<!doctype html>
    <head>
        <?php require_once("../MainHead/MainHead.php"); ?>   
        <title>Consulta Promovidos &amp; UI Framework DevSolutions.</title>
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
                            <h3 class="block-title" id="CPromovidos">Promovidos: <small>Consulta</small></h3>
                        </div>

                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <?php
                                            include_once("../../model/Promovido.php");
                                            $consultaPromovidos = new Promovido();
                                            $resultado = $consultaPromovidos->getPromovidos();
                                        ?>

                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="d-none d-sm-table-cell" style="width: 2%;">ID</th>
                                        <th class="d-none d-sm-table-cell" style="width: 5%;">Nombre</th>
                                        <th class="d-none d-sm-table-cell" style="width: 5%;">Telefono</th>
                                        <th class="d-none d-sm-table-cell" style="width: 5%;">Clave Elector</th>
                                        <th class="d-none d-sm-table-cell" style="width: 5%;">Municipio</th>
                                        <th class="d-none d-sm-table-cell" style="width: 5%;">Fecha de registro</th>
                                        <th class="d-none d-sm-table-cell" style="width: 5%;">Promovido</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?PHP
                                    foreach($resultado as $promovido){  
                                        echo "<tr>";
                                        echo "<td class='text-center'>" . $promovido['id_promovido'] . "</td>";
                                        echo "<td class='font-w600'>" . $promovido['nombre'] . " " . $promovido['apellido1'] . " " . $promovido['apellido2'] . "</td>";
                                        echo "<td class='d-none d-sm-table-cell'>" . $promovido['telefono'] . "</td>";
                                        echo "<td class='d-none d-sm-table-cell'>" . $promovido['clave_elector'] . "</td>";
                                        echo "<td class='d-none d-sm-table-cell'><span class='badge badge-success'>" . $promovido['municipio'] . "</span></td>";
                                        echo "<td class='d-none d-sm-table-cell'>" . date("d-m-Y", strtotime($promovido['fecha_registro'])) . "</td>";
                                        echo "<td class='d-none d-sm-table-cell'><span class='badge badge-success'>Si</span></td>";
                                        echo "</tr>";
                                    }
                                    
                                    ?>
                                    

                                    
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="font-w600">Barbara Scott</td>
                                        <td class="d-none d-sm-table-cell">4521135117</td>
                                        <td class="d-none d-sm-table-cell">CLAVE1234567890</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">Zitacuaro</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">23-02-2026</td>
                                        <td class="d-none d-sm-table-cell"><span class="badge badge-success">Si</span></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="font-w600">Barbara Scott</td>
                                        <td class="d-none d-sm-table-cell">4521135117</td>
                                        <td class="d-none d-sm-table-cell">CLAVE1234567890</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Morelia</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">23-02-2026</td>
                                        <td class="d-none d-sm-table-cell"><span class="badge badge-success">Si</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-8 ml-auto">
                                <button type="button" class="btn btn-success mr-5 mb-5">
                                    <i class="fa fa-download mr-5"></i>Descargar Excell
                                </button>
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
      <script src="consultapromovidos.js"></script>        

    </body>
</html>

<?php
}else
{
    header("Location:".Conectar::ruta()."index.php");
    exit();
}
?>