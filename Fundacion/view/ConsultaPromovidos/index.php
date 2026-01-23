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
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Nombre</th>
                                        <th class="d-none d-sm-table-cell">email</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Afiliado</th>
                                        <th class="text-center" style="width: 15%;">Promovido</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="font-w600">Barbara Scott</td>
                                        <td class="d-none d-sm-table-cell">customer1@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Disabled</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="font-w600">Laura Carr</td>
                                        <td class="d-none d-sm-table-cell">customer2@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">VIP</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="font-w600">Melissa Rice</td>
                                        <td class="d-none d-sm-table-cell">customer3@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info">Business</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="font-w600">Susan Day</td>
                                        <td class="d-none d-sm-table-cell">customer4@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info">Business</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="font-w600">Sara Fields</td>
                                        <td class="d-none d-sm-table-cell">customer5@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-warning">Trial</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td class="font-w600">Carl Wells</td>
                                        <td class="d-none d-sm-table-cell">customer6@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info">Business</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td class="font-w600">Lori Moore</td>
                                        <td class="d-none d-sm-table-cell">customer7@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-warning">Trial</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">8</td>
                                        <td class="font-w600">Jeffrey Shaw</td>
                                        <td class="d-none d-sm-table-cell">customer8@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Disabled</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">9</td>
                                        <td class="font-w600">Scott Young</td>
                                        <td class="d-none d-sm-table-cell">customer9@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Disabled</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">10</td>
                                        <td class="font-w600">Sara Fields</td>
                                        <td class="d-none d-sm-table-cell">customer10@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-warning">Trial</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">11</td>
                                        <td class="font-w600">Carol White</td>
                                        <td class="d-none d-sm-table-cell">customer11@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Disabled</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">12</td>
                                        <td class="font-w600">Brian Cruz</td>
                                        <td class="d-none d-sm-table-cell">customer12@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-primary">Personal</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">13</td>
                                        <td class="font-w600">Albert Ray</td>
                                        <td class="d-none d-sm-table-cell">customer13@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Disabled</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">14</td>
                                        <td class="font-w600">Lori Grant</td>
                                        <td class="d-none d-sm-table-cell">customer14@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info">Business</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">15</td>
                                        <td class="font-w600">Danielle Jones</td>
                                        <td class="d-none d-sm-table-cell">customer15@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">VIP</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">16</td>
                                        <td class="font-w600">Carol Ray</td>
                                        <td class="d-none d-sm-table-cell">customer16@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info">Business</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">17</td>
                                        <td class="font-w600">Judy Ford</td>
                                        <td class="d-none d-sm-table-cell">customer17@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info">Business</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">18</td>
                                        <td class="font-w600">David Fuller</td>
                                        <td class="d-none d-sm-table-cell">customer18@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-primary">Personal</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">19</td>
                                        <td class="font-w600">Lori Moore</td>
                                        <td class="d-none d-sm-table-cell">customer19@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-warning">Trial</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">20</td>
                                        <td class="font-w600">Helen Jacobs</td>
                                        <td class="d-none d-sm-table-cell">customer20@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Disabled</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
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