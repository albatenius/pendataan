<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/image/logo/logo.png'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Ionicons/css/ionicons.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/toastr/toastr.min.css'); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    body, .login-page{
      background: -moz-linear-gradient(-45deg,  #90caf9  0%, #0d47a1 100%); /* FF3.6+ */
      background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#1e88e5 ), color-stop(100%,#0d47a1)); /* Chrome,Safari4+ */
      background: -webkit-linear-gradient(-45deg,  #90caf9  0%,#0d47a1 100%); /* Chrome10+,Safari5.1+ */
      background: -o-linear-gradient(-45deg,  #90caf9  0%,#0d47a1 100%); /* Opera 11.10+ */
      background: -ms-linear-gradient(-45deg,  #90caf9  0%,#0d47a1 100%); /* IE10+ */
      background: linear-gradient(135deg,  #90caf9  0%,#0d47a1 100%); /* W3C */
    }
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
  </style>
</head>
<body class="hold-transition login-page">
<div class="se-pre-con"></div>
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url(); ?>" style="color: #fff;">
      <img src="<?php echo site_url('assets/image/logo/logo_poliban.png'); ?>" width="150px" style="margin-bottom: 10px;"><br>
      <b>Web</b>Pendataan
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">silakan login terlebih dahulu</p>

    <form method="post" id="form_login">
      <div class="form-group has-feedback">
        <input type="text" id="username" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <!-- <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div> -->
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>
<script>
  $(document).ready(function () {
    $('#form_login').on('submit',function(e){
      e.preventDefault();

      if($('#username').val()==""||$('#password').val==""){
        toastr.warning('Maaf, terdapar form kosong.', 'Gagal')
      }else{
        $.ajax({
          url: "<?php echo site_url('login/login_action'); ?>",
          dataType: "JSON",
          type: "POST",
          data: new FormData(this),
          processData: false,
          contentType: false,
          cache: false,
          async: false,
          beforeSend: function(){
              $(".se-pre-con").fadeIn();
          },
          success: function(result){
            if(result.status=="success"){
              toastr.success('Terimakasih, Anda berhasil login.', 'Berhasil')
              $(".se-pre-con").fadeOut();
              window.location.href="<?php echo site_url() ?>";
            }else if(result.status=="fail"){
              toastr.error('Maaf, username atau password yang anda masukan salah.', 'Gagal')
              $(".se-pre-con").fadeOut();
            }
          },
          error:function(){
              $(".se-pre-con").fadeOut();
              toastr.error('Maaf, Terjadi error silahkan hubungi admin.', 'Gagal')
          }
        });
      }
    });
  });
</script>
</body>
</html>
