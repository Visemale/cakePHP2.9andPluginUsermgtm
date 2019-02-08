<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">


    
    <?php echo $this->Html->css('../MDB-Free_4.5.13/css/bootstrap.min');   ?>
    <?php  echo $this->Html->css('../MDB-Free_4.5.13/css/mdb.min');         ?>
    <?php echo $this->Html->css('admin/custom');         ?>
    <?php echo $this->Html->css('admin/'.$this->params['controller']); ?>
    <?php if($this->params['controller'] == "blog"){ ?>
        <link href="/js/admin/WYSIWYG_editor_froala/lib/editor/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <?php } ?>
    
   
</head>

<body class="fixed-sn pink-skin" id="content">
    
    <!--Double navigation-->
    <header>
        <input type="hidden" id="url" value="<?php echo $this->webroot; ?>" readonly="readonly" />
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">
                <!-- Logo -->
                <li>
                    <div class="logo-wrapper waves-light">
                        <a><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center"></a>
                    </div>
                </li>
                <!--/. Logo -->
                <!--Social-->
<!--                <li>
                    <ul class="social">
                        <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
                        <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
                        <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus-g"> </i></a></li>
                        <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
                    </ul>
                </li>-->
                <!--/Social-->
                <!--Search Form-->
                <li>
                    <form class="search-form" role="search">
                        <div class="form-group md-form mt-0 pt-1 waves-light">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                    
                </li>
                <!--/.Search Form-->
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="fas fa-users"></i> Usuarios<i class="fas fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="<?php echo $this->webroot; ?>allUsers" class="waves-effect">Todas los Usuarios</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $this->webroot; ?>addUser" class="waves-effect">Nuevo Usuario</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-cogs"></i> Sistema<i class="fas fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#" class="waves-effect">Todos los Roles</a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Nuevo Rol</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $this->webroot; ?>permissions" class="waves-effect">Permisos del sistema</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="fas fa-user-alt"></i> Perfil<i class="fas fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#" class="waves-effect">Mis Datos</a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Cambiar Contrasena</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="far fa-envelope"></i> Mensajes y comentarios
                            </a>                            
                        </li>
                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <?php if(isset($Breadcrums)){ ?>
        <nav>
            <ol class="breadcrumb">
                <?php foreach ($Breadcrums as $key => $value) { 
                    if($value[1] == ""){
                ?>
                <li class="active"><em>&nbsp;/ <?php echo $value[0]; ?></em></li>
                <?php }else{ ?>
                        <li>&nbsp;/&nbsp;<?php echo $this->Html->link($value[0],$value[1],array()); ?></li>
                <?php }

                } ?>
            </ol>
        </nav>
    <?php } ?>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $this->webroot;?>blog"><i class="far fa-eye"></i> <span class="clearfix d-none d-sm-inline-block">Ir al Blog</span></a>
                </li>
<!--                <li class="nav-item">
                    <a class="nav-link"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
                </li>-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i><?php #echo h($user['User']['name']); ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Mi Cuenta</a>
                        <a class="dropdown-item" href="<?php echo $this->webroot; ?>logout">Cerrar Sesion</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->
    
    <!--Main layout-->
    <main>
        
        <div class="container-fluid text-center">

            
            <?php echo $this->fetch('content'); ?>
            
            
        
        </div> 
        
<!--        Modal Confirmation
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalConfirmDelete">
            Launch modal
        </button>-->

        <!--Modal: modalConfirmDelete-->
<!--        <div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
            Content
            <div class="modal-content text-center">
              Header
              <div class="modal-header d-flex justify-content-center">
                  <p class="heading">&iquest;Deseas cambiar el status&quest;</p>
              </div>
              Body
              <div class="modal-body">
                <i class="fas fa-exclamation fa-4x animated rotateIn"></i>
              </div>
              Footer
              <div class="modal-footer flex-center">
                <a class="btn  btn-outline-danger">Si</a>
                <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
              </div>
            </div>
            /.Content
          </div>
        </div>-->
        <!--End Modal Confirmation-->
        
    </main>
    <!--/Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center text-md-left pt-4">
        
<!--        <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
            Content
            <div class="modal-content text-center">
              Header
              <div class="modal-header d-flex justify-content-center">
                  <p class="heading">¿Deseas cambiar el status?</p>
              </div>
              Body
              <div class="modal-body">
                <i class="fas fa-exclamation fa-4x animated rotateIn"></i>
              </div>
              Footer
              <div class="modal-footer flex-center">
                <a class="btn  btn-outline-danger waves-effect waves-light">Si</a>
                <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
              </div>
            </div>
            /.Content
          </div>-->
        
        <?php echo $this->Session->flash(); ?>

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3">
                    <h5 class="text-uppercase font-weight-bold mb-4">Footer Content</h5>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div>
                <!--/.First column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Second column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Third column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Fourth column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Call to action-->
        <div class="call-to-action text-center my-4">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                    <h5>Register for free</h5>
                </li>
                <li class="list-inline-item"><a href="" class="btn btn-primary">Sign up!</a></li>
            </ul>
        </div>
        <!--/.Call to action-->

        <hr>

        

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                &reg; 2018 Todos los Derechos Reservados
            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <?php echo $this->Html->script('../MDB-Free_4.5.13/js/jquery-3.3.1.min'); ?>
    <?php echo $this->Html->script('../MDB-Free_4.5.13/js/popper.min');       ?>
    <?php echo $this->Html->script('../MDB-Free_4.5.13/js/bootstrap.min');    ?>
    <?php echo $this->Html->script('../MDB-Free_4.5.13/js/mdb.min');          ?>
    
    <?php echo $this->Html->script('publico/jquery.validate'); ?>
    <?php echo $this->Html->script('/js/admin/funciones'); ?>
    <!-- script por seccion -->
    <?php echo $this->Html->script('/js/admin/'.$this->params['controller']); ?>    
    
    <?php if($this->params['controller'] == "blog"){ ?>
        <script type="text/javascript" src="/js/admin/WYSIWYG_editor_froala/lib/editor/js/froala_editor.pkgd.min.js"></script>    
    <?php } ?>
    
    <script>

        // SideNav Initialization
        $(".button-collapse").sideNav();
        
        new WOW().init();
    
    </script>

</body>

</html>
