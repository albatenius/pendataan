<!-- <div class="container"> -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $this->session->flashdata('form_type'); ?>
      <!-- <small>Example 2.0</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#"><i class="fa fa-th"></i> Pendataan</a></li>
      <li class="active"><i class="fa fa-th"></i> Tambah Data</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box box-info">
      <div class="box-body">

              <div class="box-body">
                <form id="first" method="post">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Data Diri</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda">
                      </div>
                      <div class="form-group">
                        <input type="number" class="form-control" id="usia" name="usia" placeholder="Masukkan Usia Anda">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan Pekerjaan Anda">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Anda">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Pendidikan terkhir anda">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Data Ayah</label>
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama Ayah Anda">
                      </div>
                      <div class="form-group">
                        <input type="number" class="form-control" id="usia_ayah" name="usia_ayah" placeholder="Masukkan Usia Ayah Anda">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah Anda">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="alamat_ayah" name="alamat_ayah" placeholder="Masukkan Alamat Ayah Anda">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" placeholder="Pendidikan terkhir Ayah anda">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Data Ibu</label>
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu Anda">
                      </div>
                      <div class="form-group">
                        <input type="number" class="form-control" id="usia_ibu" name="usia_ibu" placeholder="Masukkan Usia Ibu Anda">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu Anda">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="alamat_ibu" name="alamat_ibu" placeholder="Masukkan Alamat Ibu Anda">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" placeholder="Pendidikan terkhir Ibu anda">
                      </div>
                    </div>
                  </div>

                  <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-12 form-twiter">
                      <label>Twitter Acount</label>
                      <input class="form-control" placeholder="Twitter Acount" name="twitter" id="twitter">
                    </div>
                  </div>

                </form>

                <?php if($this->session->flashdata('form_type') == "Tambah Data"){ ?>
                <form id="second" method="post">
                  <div class="row">
                    <div class="col-md-12 form-saudara">
                      <label>Data Saudara</label><a href="#" class="add-form-saudara" data-toggle="tooltip" data-placement="right" title="Tambah form saudara"><i class="fa fa-plus"></i></a>
                    </div>
                  </div>
                </form>
                <?php } else if($this->session->flashdata('form_type') == "Edit Data"){ ?>
                <div class="row">
                  <div class="col-md-12 form-saudara">
                    <label>Data Saudara</label><a href="#" class="add-form-saudara" data-toggle="tooltip" data-placement="right" title="Tambah form saudara"><i class="fa fa-plus"></i></a>
                    <form id="second" method="post">
                    </form>
                  </div>
                </div>
                <?php } ?>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <?php if($this->session->flashdata('form_type') == "Tambah Data"){ ?>
                  <button type="submit" class="btn btn-primary" id="tambah">Tambah</button>
                <?php } else if($this->session->flashdata('form_type') == "Edit Data"){ ?>
                  <button type="submit" class="btn btn-primary" id="edit">Simpan</button>
                <?php } ?>
              </div>

      </div>
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
<!-- </div> -->

<script src="<?php echo base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>
<script type="text/javascript">
  $(document).ready(function(){

<?php if($this->session->flashdata('form_type') == "Tambah Data"){ ?>

    $('.form-saudara')
      .append('<div class="form-inline">'+
        '<input type="hidden" class="form-control id_keluarga" name="id_keluarga[]">'+
        '<input type="text" class="form-control nama_saudara" name="nama_saudara[]" placeholder="Nama Saudara Anda">'+
        '<input type="number" class="form-control usia_saudara" name="usia_saudara[]" placeholder="Usia Saudara Anda">'+
        '<input type="text" class="form-control pekerjaan_saudara" name="pekerjaan_saudara[]" placeholder="Pekerjaan Saudara Anda">'+
        '<input type="text" class="form-control alamat_saudara" name="alamat_saudara[]" placeholder="Alamat Saudara Anda">'+
        '<input type="text" class="form-control pendidikan_saudara" name="pendidikan_saudara[]" placeholder="Pendidikan Terakhir"><hr>'+
      '</div>');

    $('.add-form-saudara').click(function(e){
      e.preventDefault();

      $('.form-saudara')
        .append('<div class="form-inline">'+
          '<input type="hidden" class="form-control id_keluarga" name="id_keluarga[]">'+
          '<input type="text" class="form-control nama_saudara" name="nama_saudara[]" placeholder="Nama Saudara Anda">'+
          '<input type="number" class="form-control usia_saudara" name="usia_saudara[]" placeholder="Usia Saudara Anda">'+
          '<input type="text" class="form-control pekerjaan_saudara" name="pekerjaan_saudara[]" placeholder="Pekerjaan Saudara Anda">'+
          '<input type="text" class="form-control alamat_saudara" name="alamat_saudara[]" placeholder="Alamat Saudara Anda">'+
          '<input type="text" class="form-control pendidikan_saudara" name="pendidikan_saudara[]" placeholder="Pendidikan Terakhir">'+
          '<a href="#" class="remove-form-saudara"><i class="fa fa-times"></i></a><hr>'+
        '</div>');
      
    });

    $(document).on('click','.remove-form-saudara',function(e){
      e.preventDefault();
      $(this).parent().remove();
    });

    $(document).on('click','#tambah',function(e){
      e.preventDefault();

      var isiFirst = new FormData();
      var datafirst = $('#first').serializeArray();

      $.each(datafirst, function(key, input){
        isiFirst.append(input.name, input.value);
      });

      $.ajax({
        type: "post",
        url: "<?php echo site_url('pendataan/tambah_keluarga'); ?>",
        dataType: "json",
        data: isiFirst,
        contentType: false,
        processData: false,
        beforeSend: function(){
            $(".se-pre-con").fadeIn();
        },
        success: function(){

          $.ajax({
            type: "get",
            url: "<?php echo site_url('pendataan_controller/get_last_id'); ?>",
            dataType: "json",
            success: function(data){
              $.each(data, function(key, value){
                var id_keluarga = data[key].last_id;
                $('.id_keluarga').val(id_keluarga);

                  var isiSecond = new FormData();
                  var datasecond = $('#second').serializeArray();
                  $.each(datasecond, function(key, input){
                    isiSecond.append(input.name, input.value);
                  });

                  if($('.nama_saudara').val() != ""){
                    $.ajax({
                      type: "post",
                      url: "<?php echo site_url('pendataan/tambah_saudara'); ?>",
                      dataType: "json",
                      data: isiSecond,
                      contentType: false,
                      processData: false,
                      success: function(data){
                        toastr.info('Berhasil menambah data.', 'Success')
                        setInterval(function(){ $(".se-pre-con").fadeOut(); }, 3000);
                        window.location.href="<?php echo site_url('pendataan') ?>";
                      },
                      error: function(){
                        $(".se-pre-con").fadeOut();
                        toastr.error('gagal menambah data.', 'Error')
                      }
                    });
                  }else{
                    toastr.info('Berhasil menambah data.', 'Success')
                    setInterval(function(){ $(".se-pre-con").fadeOut(); }, 3000);
                    window.location.href="<?php echo site_url('pendataan') ?>";
                  }

              });
            },
            error: function(){
              $(".se-pre-con").fadeOut();
              toastr.error('gagal menambah data.', 'Error')
            }
          });
        }
      });
      
    });

<?php } else if($this->session->flashdata('form_type') == "Edit Data"){ ?>

      $.ajax({
        type: "get",
        url: "<?php echo site_url('pendataan_controller/get_data_by_id/'); ?>"+<?php echo $this->uri->segment(3); ?>,
        dataType: "JSON",
        success: function(data){
          $.each(data, function (key, value) {
            $('#id_keluarga').val(data[key].id_keluarga);

            $('#nama').val(data[key].nama);
            $('#usia').val(data[key].usia);
            $('#pekerjaan').val(data[key].pekerjaan);
            $('#alamat').val(data[key].alamat);
            $('#pendidikan').val(data[key].pendidikan);

            $('#nama_ayah').val(data[key].nama_ayah);
            $('#usia_ayah').val(data[key].usia_ayah);
            $('#pekerjaan_ayah').val(data[key].pekerjaan_ayah);
            $('#alamat_ayah').val(data[key].alamat_ayah);
            $('#pendidikan_ayah').val(data[key].pendidikan_ayah);

            $('#nama_ibu').val(data[key].nama_ibu);
            $('#usia_ibu').val(data[key].usia_ibu);
            $('#pekerjaan_ibu').val(data[key].pekerjaan_ibu);
            $('#alamat_ibu').val(data[key].alamat_ibu);
            $('#pendidikan_ibu').val(data[key].pendidikan_ibu);

            $('#twitter').val(data[key].twitter);
          });
        }
      });

      $.ajax({
        type: "get",
        url: "<?php echo site_url('pendataan_controller/get_saudara_by_id_keluarga/'); ?>"+<?php echo $this->uri->segment(3); ?>,
        dataType: "JSON",
        success: function(data){
          $.each(data, function (key, value) {
            $('.form-saudara').append('<div class="form-inline">'+
              '<input type="hidden" class="form-control id_saudara" name="id_saudara" value="'+data[key].id_saudara+'">'+
              '<input type="text" class="form-control nama_saudara" name="nama_saudara" placeholder="Nama Saudara Anda" value="'+data[key].nama_saudara+'">'+
              '<input type="number" class="form-control usia_saudara" name="usia_saudara" placeholder="Usia Saudara Anda" value="'+data[key].usia_saudara+'">'+
              '<input type="text" class="form-control pekerjaan_saudara" name="pekerjaan_saudara" placeholder="Pekerjaan Saudara Anda" value="'+data[key].pekerjaan_saudara+'">'+
              '<input type="text" class="form-control alamat_saudara" name="alamat_saudara" placeholder="Alamat Saudara Anda" value="'+data[key].alamat_saudara+'">'+
              '<input type="text" class="form-control pendidikan_saudara" name="pendidikan_saudara" placeholder="Pendidikan Terakhir" value="'+data[key].pendidikan_saudara+'">'+
              '<a href="#" class="remove-form-saudara"><i class="fa fa-times"></i></a>'+
            '<hr></div>');
          });
        }
      });

      $(document).on('click', '.remove-form-saudara', function(e){
        e.preventDefault();

        var id = $(this).parent().find('.id_saudara').val();
        $.ajax({
          type: "post",
          url: "<?php echo site_url('pendataan/hapus_saudara/') ?>"+id,
          // dataType: "json",
          beforeSend: function(){
              $(".se-pre-con").fadeIn();
          },
          success: function(){
            toastr.info('Berhasil menghapus data.', 'Sukses')
            $(".se-pre-con").fadeOut();
            // $('#detail_list_field .form-inline').remove();
          },
          error: function(){
            $(".se-pre-con").fadeOut();
            toastr.error('Error menghapus data.', 'Error')
          }
        });
        $(this).parent().remove();
      });

      $('.add-form-saudara').click(function(e){
        e.preventDefault();

        $('#second')
          .append('<div class="form-inline">'+
            '<input type="hidden" class="form-control id_keluarga" name="id_keluarga[]" value="'+<?php echo $this->uri->segment(3); ?>+'">'+
            '<input type="text" class="form-control nama_saudara" name="nama_saudara[]" placeholder="Nama Saudara Anda">'+
            '<input type="number" class="form-control usia_saudara" name="usia_saudara[]" placeholder="Usia Saudara Anda">'+
            '<input type="text" class="form-control pekerjaan_saudara" name="pekerjaan_saudara[]" placeholder="Pekerjaan Saudara Anda">'+
            '<input type="text" class="form-control alamat_saudara" name="alamat_saudara[]" placeholder="Alamat Saudara Anda">'+
            '<input type="text" class="form-control pendidikan_saudara" name="pendidikan_saudara[]" placeholder="Pendidikan Terakhir">'+
            '<a href="#" class="remove-form-saudara-new"><i class="fa fa-times"></i></a><hr>'+
          '</div>');
        
      });

      $(document).on('click','.remove-form-saudara-new',function(e){
        e.preventDefault();
        $(this).parent().remove();
      });

      $(document).on('click','#edit',function(e){
        e.preventDefault();

        var isiFirst = new FormData();
        var datafirst = $('#first').serializeArray();

        $.each(datafirst, function(key, input){
          isiFirst.append(input.name, input.value);
        });

        $.ajax({
          type: "post",
          url: "<?php echo site_url('pendataan/update_keluarga/'); ?>"+<?php echo $this->uri->segment(3); ?>,
          dataType: "json",
          data: isiFirst,
          contentType: false,
          processData: false,
          beforeSend: function(){
            $(".se-pre-con").fadeIn();
          },
          success: function(){

            var isiSecond = new FormData();
            var datasecond = $('#second').serializeArray();

            $.each(datasecond, function(key, input){
              isiSecond.append(input.name, input.value);
            });

            if(datasecond.length != 0){

              $.ajax({
                type: "post",
                url: "<?php echo site_url('pendataan/tambah_saudara'); ?>",
                dataType: "json",
                data: isiSecond,
                contentType: false,
                processData: false,
                beforeSend: function(){
                  $(".se-pre-con").fadeIn();
                },
                success: function(data){
                  toastr.info('Berhasil memperbaharui data.', 'Success')
                  setInterval(function(){ $(".se-pre-con").fadeOut(); }, 3000);
                  window.location.href="<?php echo site_url('pendataan') ?>";
                },
                error: function(){
                  $(".se-pre-con").fadeOut();
                  toastr.error('gagal menambah data.', 'Error')
                }
              });

            }else{
              toastr.info('Berhasil memperbaharui data.', 'Success')
              setInterval(function(){ $(".se-pre-con").fadeOut(); }, 3000);
              window.location.href="<?php echo site_url('pendataan') ?>";
            }

          }
        });
      });

      $(document).on('change', '.form-saudara input[type=text]', function(e){
        e.preventDefault();
        var id = $(this).parent().find('.id_saudara').val();
        var name_field = $(this).attr('name');
        var isi = $(this).val();
        var data = { [name_field] : isi};

        $.ajax({
          type: "post",
          url: "<?php echo site_url('pendataan/update_saudara/'); ?>"+id,
          dataType: "JSON",
          data: data,
          beforeSend: function(){
            $(".se-pre-con").fadeIn();
          },
          success: function(result){
            toastr.info('Berhasil memperbaharui data.', 'Sukses')
            $(".se-pre-con").fadeOut();
          },
          error: function(){
            toastr.error('Error meng-update data.', 'Error')
            $(".se-pre-con").fadeOut();
          }
        });
      });

      $(document).on('change', '.form-saudara input[type=number]', function(e){
        e.preventDefault();
        var id = $(this).parent().find('.id_saudara').val();
        var name_field = $(this).attr('name');
        var isi = $(this).val();
        var data = { [name_field] : isi};

        $.ajax({
          type: "post",
          url: "<?php echo site_url('pendataan/update_saudara/'); ?>"+id,
          dataType: "JSON",
          data: data,
          beforeSend: function(){
            $(".se-pre-con").fadeIn();
          },
          success: function(result){
            toastr.info('Berhasil memperbaharui data.', 'Sukses')
            $(".se-pre-con").fadeOut();
          },
          error: function(){
            toastr.error('Error meng-update data.', 'Error')
            $(".se-pre-con").fadeOut();
          }
        });
      });

<?php } ?>

  });
</script>