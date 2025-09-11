<div class="content-side content-side-full">
    <ul class="nav-main">
        <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">Dashboard</span>
        </li>

        <li class="">
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-lock"></i><span class="sidebar-mini-hide">Usuarios</span></a>
            <ul>
                <li>
                    <a class="active" href="be_pages_dashboard.html">Crear Usuario</a>
                </li>
                <li>
                    <a href="be_pages_dashboard2.html">Consulta Usuario</a>
                </li>
            </ul>
        </li>
        
        <li class="">
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-compass"></i><span class="sidebar-mini-hide">Ubicaciones</span></a>
            <ul>
                <li > <!-- style="pointer-events: none;" -->
                    <a href="be_pages_dashboard2.html">Crear Pais</a>
                </li>
                <li>
                    <a href="be_pages_dashboard2.html">Consulta Pais</a>
                </li>
                <li>
                    <a href="be_pages_dashboard2.html">Crear Estado</a>
                </li>
                <li>
                    <a href="be_pages_dashboard2.html">Consulta Estado</a>
                </li>
                <li>
                    <a href="be_pages_dashboard2.html">Crear Municipio</a>
                </li>
                <li>
                    <a href="be_pages_dashboard2.html">Consulta Municipio</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Afiliados</span></a>
            <ul>
                <li > <!-- style="pointer-events: none;" -->
                    <a href="be_pages_dashboard2.html">Crear Afiliado</a>
                </li>
                <li>
                    <a href="be_pages_dashboard2.html">Consulta Afiliado</a>
                </li>
            </ul>
        </li>

        <?php 
        if($_SESSION['tipo']=='1')
            {
            echo "  
        <li class=''>
            <a class='nav-submenu' data-toggle='nav-submenu' href='#'><i class='si si-trophy'></i><span class='sidebar-mini-hide'>Metas</span></a>
            <ul>
                <li > <!-- style='pointer-events: none;' -->
                    <a href='be_pages_dashboard2.html'>Crear Campaña</a>
                </li>
                <li>
                    <a href='be_pages_dashboard2.html'>Consulta Avance</a>
                </li>
            </ul>
        </li>";
            }
        ?>

      
       


        
    </ul>
</div>