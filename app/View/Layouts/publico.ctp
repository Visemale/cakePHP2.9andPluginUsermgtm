<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
    <?php echo $this->Html->charset(); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
	
    <!-- Font Awesome -->
 
    
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    
    <?php echo $this->Html->css('../MDB-Free_4.5.13/css/bootstrap.min');   ?>
    <?php echo $this->Html->css('../MDB-Free_4.5.13/css/mdb.min');         ?> 
    <?php echo $this->Html->css('publico/custom');                         ?>
    <?php #echo $this->Html->css('home');                                  ?>
    <?php echo $this->Html->css('publico/'.$this->params['controller']);              ?>
    
   
    

    </head>

    <body>
    
    <?php if($this->params['controller'] != "Home" && $this->params['action'] != 'login'){ ?>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
          <div class="container">

            <!-- Brand -->
            <!-- <a class="navbar-brand">
                <strong>MDB</strong>
            </a>-->

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <!-- Left -->
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $this->webroot; ?>blog">Inicio</a>
                </li>
              </ul>

              <!-- Right -->
              <ul class="navbar-nav nav-flex-icons">
                <?php if($this->UserAuth->isLogged() && ($this->UserAuth->getGroupName()=='Admin')) { ?>
                    <li class="nav-item">
                      <a href="<?php echo $this->webroot; ?>user_dashboard" class="nav-link">
                        <i class="fas fa-tools"></i> Panel Administrativo
                      </a>
                    </li>
                <?php } ?>
                <?php if($this->UserAuth->isLogged()){ ?>
                    <li class="nav-item">
                      <a href="<?php echo $this->webroot; ?>logout" class="nav-link border border-light rounded" >
                        <i class="fas fa-sign-out-alt"></i> Cerrar Sesion
                      </a>
                    </li>
                <?php } ?>
              </ul>

            </div>

          </div>
        </nav>
        <!-- Navbar -->
    <?php } ?>
    
        <?php echo  $this->fetch('content'); ?>
    	<?php #echo $this->element('sql_dump'); ?>
    
    <?php if($this->params['controller'] != "Home" && $this->params['action'] != 'login'){ ?>
    
            <!--Footer-->
         <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">

           <!--Call to action-->
           <div class="pt-4">
             <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank"
               role="button">Download MDB
               <i class="fas fa-download ml-2"></i>
             </a>
             <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start
               free tutorial
               <i class="fas fa-graduation-cap ml-2"></i>
             </a>
           </div>
           <!--/.Call to action-->

           <hr class="my-4">

           <!-- Social icons -->
           <div class="pb-4">
             <a href="https://www.facebook.com/mdbootstrap" target="_blank">
               <i class="fab fa-facebook-f mr-3"></i>
             </a>

             <a href="https://twitter.com/MDBootstrap" target="_blank">
               <i class="fab fa-twitter mr-3"></i>
             </a>

             <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
               <i class="fab fa-youtube mr-3"></i>
             </a>

             <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
               <i class="fab fa-google-plus-g mr-3"></i>
             </a>
           <!-- Social icons -->

           <!--Copyright-->
           <div class="footer-copyright py-3">
             © 2018 Copyright:
             <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
           </div>
           <!--/.Copyright-->

         </footer>
         <!--/.Footer-->
    <?php } ?>      
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <?php echo $this->Html->script('../MDB-Free_4.5.13/js/jquery-3.3.1.min'); ?>
    <?php echo $this->Html->script('../MDB-Free_4.5.13/js/bootstrap.min');    ?>
    <?php echo $this->Html->script('../MDB-Free_4.5.13/js/mdb.min');          ?>
    <?php echo $this->Html->script('../MDB-Free_4.5.13/js/popper.min');       ?>
    
    <?php echo $this->Html->script('publico/jquery.validate'); ?>
    <?php echo $this->Html->script('/js/publico/funciones');   ?>
    <!-- script por seccion -->
    <?php # echo $this->Html->script('/js/publico/'.$this->params['controller']); ?>
    
    
    
    
    
    <!-- Initializations -->
    <script type="text/javascript">
      // Animations initialization
      new WOW().init();
      
    </script>
         
    
    </body>
</html>
