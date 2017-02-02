

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <?php if ($this->session->userdata('id_tipo_usuario') == '1') { ?>
        <h2>Bienvenido administrador</h2>    
        <li>
                <a href="#"><i class="fa fa-fw fa-dashboard"></i> <?=anchor(base_url().'index.php/login/logout_ci', 'Agregar usuario')?></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-bar-chart-o"></i> <?=anchor(base_url().'index.php/login/logout_ci', 'Mostrar usuario')?></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-table"></i> <?=anchor(base_url().'index.php/login/agre_serv', 'Agregar servicio')?>o</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-table"></i> <?=anchor(base_url().'index.php/c_cliente', 'Agregar cliente')?>o</a>
            </li>
            <li class="active">
                <a href="forms.html"><i class="fa fa-fw fa-edit"></i> <?=anchor(base_url().'/index.php/login/agre_comp', 'Agregar componente')?></a>
            </li><?php } elseif ($this->session->userdata('id_tipo_usuario') == '2') {
        ?>
            <h2>Bienvenido consultor</h2>
            <li>
                <a href="#"><i class="fa fa-fw fa-table"></i> <?=anchor(base_url().'index.php/login/agre_serv', 'Agregar servicio')?></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-table"></i> <?=anchor(base_url().'index.php/c_cliente', 'Agregar cliente')?>o</a>
            </li>
    <?php } elseif ($this->session->userdata('id_tipo_usuario') == '3') {
    ?>
            <h2>Bienvenido operador</h2>
            <li >
                <a href="#"><i class="fa fa-fw fa-edit"></i> <?=anchor(base_url().'index.php/login/agre_comp', 'Agregar componente')?></a>
            </li>
    <?php
}
?>

        <!--<li>
            <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
        </li>
        <li>
            <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="#">Dropdown Item</a>
                </li>
                <li>
                    <a href="#">Dropdown Item</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
        </li>
        <li>
            <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
        </li>-->
    </ul>
</div>
<!-- /.navbar-collapse -->
</nav>

