<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Web Pendataan</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/image/logo/logo.png'); ?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/Ionicons/css/ionicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/toastr/toastr.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/select2/dist/css/select2.min.css'); ?>">  

  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script src="<?php echo base_url('assets/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/fastclick/lib/fastclick.js'); ?>"></script>
  <script src="<?php echo base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>

  <style type="text/css">
    .link-add{ font-size: 20px; }
    .link-add i{ color: #1e88e5; }
    .link-add:hover i{ color: #0d47a1; }

    .se-pre-con {
      display: none;
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url("<?php echo base_url('assets/image/logo/Preloader_2.gif') ?>") center no-repeat #fff;
    }

    .form-saudara .form-control{ margin: 10px 10px 10px 0px; }
    .form-saudara hr{ margin: 5px; }
    .add-form-saudara{ margin-left: 5px; }
    .remove-form-saudara, .remove-form-saudara-new{ color: #b71c1c; }
    .remove-form-saudara:hover, .remove-form-saudara-new:hover{ color: #e53935; }

    .table-responsive{ border: none; }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>W</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Web</b>Pendataan</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
              <img src="<?php echo site_url('assets/image/photo/') . $this->session->userdata('user_photo'); ?>" class="user-image">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
                <!-- <i class="glyphicon glyphicon-user" style="font-size: 60px; color: #fff; margin-top: 40px;"></i> -->
                <div style="height: 155px; width: 155px; /*display: contents;*/ overflow: hidden; border-radius: 50%; margin: 0px auto;">
                  <img src="<?php echo site_url('assets/image/photo/') . $this->session->userdata('user_photo'); ?>" width="100%">
                </div>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <h6 style="font-size: 16px; font-weight: 700;"><?php echo $this->session->userdata('nama'); ?></h6>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <div style="height: 50px; width: 50px; text-align: center; overflow: hidden; border-radius: 50%;">
            <img src="<?php echo site_url('assets/image/photo/') . $this->session->userdata('user_photo'); ?>" width="100%">
          </div>
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
          <!-- <i class="glyphicon glyphicon-user" class="img-circle" style="color: #fff; font-size: 25px; margin-top: 10px; margin-left: 10px;"></i> -->
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="home_menu">
          <a href="<?php echo site_url(); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="pendataan_menu">
          <a href="<?php echo site_url('pendataan'); ?>">
            <i class="fa fa-th"></i> <span>Pendataan</span>
          </a>
        </li>
        <li class="pengguna_menu">
          <a href="<?php echo site_url('pengguna'); ?>">
            <i class="fa fa-users"></i> <span>Pengguna</span>
          </a>
        </li>
        <li class="agenda_menu">
          <a href="<?php echo site_url('agenda'); ?>">
            <i class="fa fa-calendar"></i> <span>Agenda</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i><span>Post</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
              <li id="tulis_post_menu"><a href="<?php echo base_url('berita/tulis'); ?>"><i class="fa fa-thumb-tack"></i> Add New</a></li>
              <li id="post_menu"><a href="<?php echo base_url('berita'); ?>"><i class="fa fa-list"></i> Post Lists</a></li>
              <li id="kategori_menu"><a href="<?php echo site_url('berita/kategori'); ?>"><i class="fa fa-wrench"></i> Kategori</a></li>
            </ul>
         </li>
         <li>
            <a href="<?php echo base_url('logout'); ?>">
              <i class="fa fa-sign-out"></i><span>Sign Out</span>
            </a>
         </li> 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <?php $this->load->view($container); ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Thanks to <a href="https://adminlte.io">Almsaeed Studio</a>
    </div>
    <strong>Copyright &copy; 2018.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script>
  $(document).ready(function(){
    $('.breadcrumb a').click(function(e){ e.preventDefault(); });

    $('.sidebar-menu').tree();

    var segment_1 = "<?php echo $this->uri->segment(1); ?>";
    var segment_2 = "<?php echo $this->uri->segment(2); ?>";

    if(segment_1 == "pendataan"){
      $('.pendataan_menu').addClass('active');
    }else if(segment_1 == "pengguna"){
      $('.pengguna_menu').addClass('active');
    }else if(segment_1 == "agenda"){
      $('.agenda_menu').addClass('active');
    }else if(segment_1 == "berita" && segment_2 == ""){
      $('.treeview').addClass('active').addClass('menu-open');
      $('#post_menu').addClass('active');
    }else if(segment_1 == "berita" && segment_2 == "tulis"){
      $('.treeview').addClass('active').addClass('menu-open');
      $('#tulis_post_menu').addClass('active');
    }else if(segment_1 == "berita" && segment_2 == "kategori"){
      $('.treeview').addClass('active').addClass('menu-open');
      $('#kategori_menu').addClass('active');
    }else{
      $('.home_menu').addClass('active');
    }
  });
</script>
</body>
</html>
