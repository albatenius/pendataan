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
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-purple layout-top-nav">

<div class="se-pre-con"></div>

<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo site_url(); ?>" class="navbar-brand"><b>Web</b>Pendataan</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="home_menu"><a href="<?php echo site_url(); ?>">Dashboard <!-- <span class="sr-only">(current)</span> --></a></li>
            <li class="pendataan_menu"><a href="<?php echo site_url('pendataan'); ?>">Pendataan <!-- <span class="sr-only">(current)</span> --></a></li>
          </ul>
          <!-- <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form> -->
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <!-- <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="user-image" alt="User Image"> -->
                <i class="glyphicon glyphicon-user"></i>
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <!-- <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image"> -->
                  <i class="glyphicon glyphicon-user" style="font-size: 50px; color: #fff; margin-top: 40px;"></i>

                  <p>
                    <?php echo $this->session->userdata('nama'); ?>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <!-- <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div> -->
                  <div class="pull-right">
                    <a href="<?php echo site_url('logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">

  	<?php $this->load->view($container); ?>

    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        Thanks to <a href="https://adminlte.io">Almsaeed Studio</a>
      </div>
      <strong>Copyright &copy; 2018.</strong>
    </div>
    <!-- /.container -->
  </footer>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    if("<?php echo $this->uri->segment(1); ?>" == "pendataan"){
      $('.pendataan_menu').addClass('active');
    }else{
      $('.home_menu').addClass('active');
    }
  });
</script>
<!-- ./wrapper -->
</body>
</html>
