<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $this->Html->charset(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">

        <title>AutoBar - <?php echo $this->fetch('title'); ?></title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <section id="container" >
            <!-- **********************************************************************************************************************************************************
            TOP BAR CONTENT & NOTIFICATIONS
            *********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="#" class="logo"><b>AutoBar</b></a>
                <!--logo end-->
                
            </header>
            <!--header end-->

            <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">


		
                        <li class="sub-menu"><?php echo $this->Html->link(__('Contas Mesas'), array('action' => 'index')); ?></li>
                        <li class="sub-menu"><?php echo $this->Html->link(__('Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?> </li>
                        <li class="sub-menu"><?php echo $this->Html->link(__('Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
                        <li class="sub-menu"><?php echo $this->Html->link(__('Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>

                        <li class="sub-menu"><?php echo $this->Html->link(__('Status Contas Mesas'), array('controller' => 'status_conta_mesas', 'action' => 'index')); ?> </li>
                        <li class="sub-menu"><?php echo $this->Html->link(__('Status Mesas'), array('controller' => 'status_mesas', 'action' => 'index')); ?> </li>
                        <li class="sub-menu"><?php echo $this->Html->link(__('Status Pedidos'), array('controller' => 'status_pedidos', 'action' => 'index')); ?> </li>
                
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->

            <!-- **********************************************************************************************************************************************************
            MAIN CONTENT
            *********************************************************************************************************************************************************** -->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper site-min-height">
                    
                    
                        <?php echo $this->Session->flash(); ?>
                        <?php echo $this->fetch('content'); ?>
                    

                </section><! --/wrapper -->
            </section><!-- /MAIN CONTENT -->

            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    <p><?php echo $this->element('sql_dump'); ?></p>
                    <a href="blank.html#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="js/jquery.ui.touch-punch.min.js"></script>
        <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>


        <!--common script for all pages-->
        <script src="js/common-scripts.js"></script>

        <!--script for this page-->

        <script>
            //custom select box

            $(function () {
                $('select.styled').customSelect();
            });

        </script>

    </body>
</html>