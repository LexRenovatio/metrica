<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Proyecto | Felipe</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    {!!Html::style('bootstrap/css/bootstrap.min.css')!!}
    {!!Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')!!}
    {!!Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')!!}
    {!!Html::style('dist/css/AdminLTE.min.css')!!}
    {!!Html::style('dist/css/skins/_all-skins.min.css')!!}
    {!!Html::style('plugins/iCheck/flat/blue.css')!!}
    {!!Html::style('plugins/morris/morris.css')!!}
    {!!Html::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css')!!}
    {!!Html::style('plugins/datepicker/datepicker3.css')!!}
    {!!Html::style('plugins/daterangepicker/daterangepicker-bs3.css')!!}
    {!!Html::style('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')!!}
    {!!Html::script('https://code.highcharts.com/highcharts.js')!!}
    
  </head>


  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="{{url()}}/home" class="logo">
          <span class="logo-mini"><b>A</b>LT</span>
          <span class="logo-lg"><b>Administracion</b></span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="img/marca.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="img/marca.png" class="img-circle" alt="User Image">
                    <p>
                      
                    <strong> </strong><br>

                      <small>Miembro Activo. 2017</small>
                    </p>
                  </li>
                  <li class="user-footer">
                    <!-- <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Ver Perfil</a>
                    </div> -->
                    <div class="pull-right">
                      <a href="{{url()}}/cerrar" class="btn btn-default btn-flat">Finalizar Sesion</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Boton del menu derecho -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <img src="img/marca.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
            <a href="#"><i class="fa fa-circle text-success"></i> </a>
              <strong></strong>
              
            </div>
          </div>
          

          <ul class="sidebar-menu">
            <li class="header">Menu</li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Roles</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{!!URL::to('/rol/create')!!}"><i class="fa fa-circle-o"></i> Agregar</a></li>
                <li><a href="{!!URL::to('/rol/')!!}"><i class="fa fa-circle-o"></i> Roles</a></li>
              </ul>
            </li>            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Usuarios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{!!URL::to('/usuario/create')!!}"><i class="fa fa-circle-o"></i> Agregar</a></li>
                <li><a href="{!!URL::to('/usuario')!!}"><i class="fa fa-circle-o"></i> Usuarios</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Burndown</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
                <li><a href="{!!URL::to('/sprint')!!}"><i class="fa fa-circle-o"></i> Burndown</a></li>
                
              </ul>
            </li>
             
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Reporte Diario</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
                <li><a href="{!!URL::to('/acuerdo/create')!!}"><i class="fa fa-circle-o"></i> Agregar Acuerdos</a></li>
                
                
                <li><a href="{!!URL::to('/acuerdo')!!}"><i class="fa fa-circle-o"></i>Consultar Acuerdos    </a></li>
                
                
                <li><a href="{!!URL::to('/riesgo/create')!!}"><i class="fa fa-circle-o"></i> Agregar Riesgos</a></li>
                
                
                <li><a href="{!!URL::to('/riesgo')!!}"><i class="fa fa-circle-o"></i>Consultar Riesgos </a></li>
                
                
                <li><a href="{!!URL::to('/impedimento/create')!!}"><i class="fa fa-circle-o"></i> Agregar Impedimentos</a></li>
                
                
                <li><a href="{!!URL::to('/impedimento')!!}"><i class="fa fa-circle-o"></i>Consultar Impedimentos </a></li>
               
              </ul>
            </li>
            
           
            
            
          </ul>
        </section>
      </aside>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Inicio
            <small>Control panel Admin</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url()}}/home"><i class="fa fa-dashboard"></i> Principal</a></li>
          </ol>
           @yield('contenido') <!-- Incorporar el contenido en la plantilla -->
        </section>  
      </div>




      <!-- Pie de pagina -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2017 <a href="">Felipe Uribe</a>.</strong> All rights reserved.
      </footer>




      <!-- Menu derecho-->
      <aside class="control-sidebar control-sidebar-dark">
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">         
          
        </ul>
        <div class="tab-content">
          <div class="tab-pane" id="control-sidebar-home-tab">

          </div>          
        </div>
      </aside>      
    </div>

    {!!Html::script('plugins/jQuery/jQuery-2.1.4.min.js')!!}
    {!!Html::script('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js')!!}
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    @section('scripts')
    @show

    {!!Html::script('bootstrap/js/bootstrap.min.js')!!}
    {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')!!}
    {!!Html::script('plugins/morris/morris.min.js')!!}
    {!!Html::script('plugins/sparkline/jquery.sparkline.min.js')!!}
    {!!Html::script('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}
    {!!Html::script('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')!!}
    {!!Html::script('plugins/knob/jquery.knob.js')!!}
    {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js')!!}
    {!!Html::script('plugins/daterangepicker/daterangepicker.js')!!}
    {!!Html::script('plugins/datepicker/bootstrap-datepicker.js')!!}
    {!!Html::script('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')!!}
    {!!Html::script('plugins/slimScroll/jquery.slimscroll.min.js')!!}
    {!!Html::script('plugins/fastclick/fastclick.min.js')!!}
    {!!Html::script('dist/js/app.min.js')!!}
    {!!Html::script('dist/js/pages/dashboard.js')!!}
    {!!Html::script('dist/js/demo.js')!!}


    
    
  </body>
</html>
