
 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Administrador</p>
              <a href="#"><i class="fa fa-circle text-success"></i>Admin</a>
            </div>
          </div> 
         
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree" >            
            <?php
              if($seccion == "dashboard"){
                echo '<li class="active">';
              }
              else{
                echo '<li>';
              }
              echo '<a href="/home">';
              echo '<i class="fa fa-dashboard"></i> <span class="span_li">Dashboard</span>';
              echo '</a>';
              echo '</li>';
              

              if($seccion == "roles"){
                echo '<li class="active">';
              }
              else{
                echo '<li>';
              }
              echo '<a href="/roles">';
              echo '<i class="fa fa-user"></i> <span class="span_li">Roles</span>';
              echo '</a>';
              

              if($seccion == "usuarios"){
                echo '<li class="active">';
              }
              else{
                echo '<li>';
              }
              echo '<a href="/usuarios">';
              echo '<i class="fa fa-user"></i> <span class="span_li">Usuarios</span>';
              echo '</a>';
              echo '</li>';
              

              if($seccion == "lista_camaras"){
                echo '<li class="active">';
              }
              else{
                echo '<li>';
              }
              echo '<a href="/camaras_ip">';
              echo '<i class="fa fa-camera"></i> <span class="span_li">Camaras Ip</span>';
              echo '</a>';
              echo '</li>';
              
              
              if($seccion == "analisis"){
                echo '<li class="active">';
              }
              else{
                echo '<li>';
              }
              echo '<a href="/analisis">';
              echo '<i class="fa fa-table"></i> <span class="span_li">Analisis de videostream</span> ';
              echo '</a>';
              echo '</li>';
            ?>              
            
          </ul>
        </section>
        <!-- /.sidebar -->


      </aside>
