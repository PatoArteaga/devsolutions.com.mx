<?php
require_once("../../config/conection.php");
    if(isset($_SESSION["id_usuario"]))
        {
?>

<!doctype html>
    <head>
        <?php require_once("../MainHead/MainHead.php"); ?>   
        <title>Consulta Usuario &amp; UI Framework DevSolutions.</title>
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
            <?php require_once("../MainSidebar/MainSidebar.php"); 
  /*         $dom = new DOMDocument();
            $link = $dom->getElementById('label-NU')->item(1);

            if ($link) {
                $link->setAttribute("class", "active"); 
                }

            
            $link->saveHTML();
          //  echo $link;*/
            ?>
            <!-- END Sidebar -->

            <!-- Header -->
            <?php require_once("../MainHeader/MainHeader.php"); ?>        
            <!-- END Header -->

            <!-- Contenido principal -->
           <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #1 -->
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-bag fa-2x text-primary-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="2500" data-to="1500">1000</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Promovidos</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-wallet fa-2x text-earth-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-earth">$<span data-toggle="countTo" data-speed="1000" data-to="30">0</span></div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Secciones</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-envelope-open fa-2x text-elegance-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-elegance" data-toggle="countTo" data-speed="1000" data-to="15">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Messages</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-users fa-2x text-pulse"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-pulse" data-toggle="countTo" data-speed="1000" data-to="4252">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Online</div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #1 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #2 -->
                        <div class="col-md-6">
                            <div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default border-b">
                                    <h3 class="block-title">
                                        Sales <small>This week</small>
                                    </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="pull-all pt-50">
                                        <!-- Lines Chart Container -->
                                        <canvas class="js-chartjs-dashboard-lines"></canvas>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="row items-push text-center">
                                        <div class="col-6 col-sm-4">
                                            <div class="font-w600 text-success">
                                                <i class="fa fa-caret-up"></i> +16%
                                            </div>
                                            <div class="font-size-h4 font-w600">720</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <div class="font-w600 text-danger">
                                                <i class="fa fa-caret-down"></i> -3%
                                            </div>
                                            <div class="font-size-h4 font-w600">160</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="font-w600 text-success">
                                                <i class="fa fa-caret-up"></i> +9%
                                            </div>
                                            <div class="font-size-h4 font-w600">24.3</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Average</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default border-b">
                                    <h3 class="block-title">
                                        Earnings <small>This week</small>
                                    </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="pull-all pt-50">
                                        <!-- Lines Chart Container -->
                                        <canvas class="js-chartjs-dashboard-lines2"></canvas>
                                    </div>
                                </div>
                                <div class="block-content bg-white">
                                    <div class="row items-push text-center">
                                        <div class="col-6 col-sm-4">
                                            <div class="font-w600 text-success">
                                                <i class="fa fa-caret-up"></i> +4%
                                            </div>
                                            <div class="font-size-h4 font-w600">$ 6,540</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <div class="font-w600 text-danger">
                                                <i class="fa fa-caret-down"></i> -7%
                                            </div>
                                            <div class="font-size-h4 font-w600">$ 1,525</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="font-w600 text-success">
                                                <i class="fa fa-caret-up"></i> +35%
                                            </div>
                                            <div class="font-size-h4 font-w600">$ 9,352</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Balance</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Row #2 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #3 -->
                        <div class="col-md-6">
                            <div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default border-b">
                                    <h3 class="block-title">Latest Orders</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 100px;">ID</th>
                                                <th>Status</th>
                                                <th class="d-none d-sm-table-cell">Customer</th>
                                                <th class="text-right">Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1851</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Jeffrey Shaw</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$191</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1850</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-danger">Canceled</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Lori Grant</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$991</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1849</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-danger">Canceled</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Ralph Murray</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$559</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1848</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-danger">Canceled</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Thomas Riley</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$329</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1847</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-info">Processing</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Jack Greene</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$385</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1846</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-warning">Pending</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Jeffrey Shaw</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$363</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1845</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Sara Fields</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$346</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1844</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-info">Processing</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Adam McCoy</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$868</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1843</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-danger">Canceled</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Danielle Jones</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$214</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1842</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Judy Ford</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$719</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default border-b">
                                    <h3 class="block-title">Top Products</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                            <tr>
                                                <th class="d-none d-sm-table-cell" style="width: 100px;">ID</th>
                                                <th>Product</th>
                                                <th class="text-center">Orders</th>
                                                <th class="d-none d-sm-table-cell text-center">Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.258</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Dark Souls III</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">912</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.198</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Bioshock Collection</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">895</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.852</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Alien Isolation</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">820</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.741</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Bloodborne</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">793</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.985</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Forza Motorsport 7</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">782</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.056</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Fifa 18</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">776</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.036</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Gears of War 4</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">680</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.682</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Minecraft</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">670</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.478</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Dishonored 2</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">640</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.952</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Gran Turismo Sport</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">630</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END Row #3 -->
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
      <script src="consultametas.js"></script>

       <!-- Page JS Plugins -->
      <script src="../../public/assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

      <!-- Page JS Code -->
        <script src="../../public/assets/js/pages/be_pages_dashboard.js"></script>
      

 <script></script>


    </body>
</html>

<?php
}else
{
    header("Location:".Conectar::ruta()."index.php");
    exit();
}
?>