<?php
require_once("../../config/conection.php");
    if(isset($_SESSION["id_usuario"]))
        {
    ?>

<!doctype html>

    <head>
        <?php require_once("../MainHead/MainHead.php"); ?>        
        <title>Sistema de Captura &amp; UI Framework DevSolutions.</title>
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
                <!-- Hero -->
  <!--               <div class="bg-image bg-image-bottom" style="background-image: url('assets/img/photos/photo34@2x.jpg');">
                    <div class="bg-primary-dark-op">
                        <div class="content content-top text-center overflow-hidden">
                            <div class="pt-50 pb-20">
                                <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Dashboard</h1>
                                <h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear" data-class="animated fadeInUp">Welcome to your custom panel!</h2>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- END Hero -->

                <!-- Page Content -->             
                <div class="content">
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #1 -->
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-pop text-right bg-primary" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-bar-chart fa-3x text-primary-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="3250">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Promovidos</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-pop text-right bg-earth" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-trophy fa-3x text-earth-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-white"><span data-toggle="countTo" data-speed="1000" data-to="3">0</span></div>
                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Metas Logradas</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-pop text-right bg-elegance" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-envelope-letter fa-3x text-elegance-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="260">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Messages</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-pop text-right bg-corporate" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-fire fa-3x text-corporate-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="4252">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Online</div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #1 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #2 -->
                        
                        <!-- END Row #2 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #3 -->
                        <div class="col-md-6">
                            <a class="block" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <i class="si si-game-controller fa-2x text-body-bg-dark"></i>
                                    <div class="row pt-10 pb-30 text-center">
                                        <div class="col-6 border-r">
                                            <div class="font-size-h3 font-w600">190</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Games</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="font-size-h3 font-w600">870</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Subscriptions</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="block" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="text-right">
                                        <i class="si si-wallet fa-2x text-body-bg-dark"></i>
                                    </div>
                                    <div class="row pt-10 pb-30 text-center">
                                        <div class="col-6 border-r">
                                            <div class="font-size-h3 font-w600">$840</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Today</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="font-size-h3 font-w600">$4,490</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Last Week</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #3 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #4 -->
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="si si-earphones fa-3x text-success"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">4.8k Songs</div>
                                        <div class="text-muted">Your library is growing!</div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                                                <i class="fa fa-shopping-bag mr-5"></i> Get more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="si si-diamond fa-3x text-warning"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">7580 Points</div>
                                        <div class="text-muted">Nice, you are doing great!</div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-warning" href="javascript:void(0)">
                                                <i class="fa fa-check mr-5"></i> Redeem them now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="si si-grid fa-3x text-info"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">2 Grid Servers</div>
                                        <div class="text-muted">Currently active.</div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-info" href="javascript:void(0)">
                                                <i class="fa fa-plus mr-5"></i> Add More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Row #4 -->
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- Termina Contenido principal -->
             
            <!-- Footer -->
            <?php require_once("../MainFooter/MainFooter.php"); ?>
            <!-- Termina Footer -->

        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
      <?php require_once("../MainJs/MainJs.php"); ?>

    </body>
</html>

<?php
}else
{
    header("Location:".Conectar::ruta()."index.php");
    exit();
}
?>