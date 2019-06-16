<!-- <div class="container"> -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Pendataan <a href="<?php echo site_url('pendataan/tambah'); ?>" class="link-add" data-toggle="tooltip" data-placement="right" title="Tambah Data"><i class="fa fa-plus-circle"></i></a>
      <!-- <small>Example 2.0</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#"><i class="fa fa-th"></i> Pendataan</a></li>
      <li class="active"><i class="fa fa-th"></i> ata Pendataan</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box box-primary">
      <div class="box-body">
        <div class="table-responsive">
          <table id="table_pendataan" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Usia</th>
              <th>Pekerjaan</th>
              <th>Alamat</th>
              <th>Pendidikan</th>
              <th>Twitter</th>
              <th>Opsi</th>
            </tr>
            </thead>
            <tbody>

            <?php $no = 1; foreach($keluarga as $k) : ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $k->nama; ?></td>
              <td><?= $k->usia; ?></td>
              <td><?= $k->pekerjaan; ?></td>
              <td><?= $k->alamat; ?></td>
              <td><?= $k->pendidikan;?></td>
              <td><?= $k->twitter;?></td>
              <td>
                <span class="view-detail" id="<?= $k->id_keluarga; ?>">
                  <a class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Detail Data"><i class="fa fa-tasks"></i></a>
                </span>

                <a href="<?php echo site_url('pendataan/edit/').$k->id_keluarga; ?>" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>

                <span class="tombol-hapus-keluarga" data-toggle="modal" data-target="#delete_confirm" data-id="<?= $k->id_keluarga; ?>">
                  <a class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash-o"></i></a>
                </span>
              </td>
            </tr>
            <?php $no++; endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
<!-- </div> -->

<div class="modal fade" id="detail_keluarga">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Keluarga&nbsp;</h4>
      </div>
      <div class="modal-body">
        
        <div class="row">
          <div class="col-md-4">
            <label>Data Diri</label>
            <table class="table">
              <tr>
                <td>Nama</td>
                <td>&nbsp; :</td>
                <td class="nama"></td>
              </tr>
              <tr>
                <td>Usia</td>
                <td>&nbsp; :</td>
                <td class="usia"></td>
              </tr>
              <tr>
                <td>Pekerjaan</td>
                <td>&nbsp; :</td>
                <td class="pekerjaan"></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>&nbsp; :</td>
                <td class="alamat"></td>
              </tr>
              <tr>
                <td>Pendidikan</td>
                <td>&nbsp; :</td>
                <td class="pendidikan"></td>
              </tr>
            </table>
          </div>
          <div class="col-md-4">
            <label>Data Ayah</label>
            <table class="table">
              <tr>
                <td>Nama Ayah</td>
                <td>&nbsp; :</td>
                <td class="nama_ayah"></td>
              </tr>
              <tr>
                <td>Usia Ayah</td>
                <td>&nbsp; :</td>
                <td class="usia_ayah"></td>
              </tr>
              <tr>
                <td>Pekerjaan Ayah</td>
                <td>&nbsp; :</td>
                <td class="pekerjaan_ayah"></td>
              </tr>
              <tr>
                <td>Alamat Ayah</td>
                <td>&nbsp; :</td>
                <td class="alamat_ayah"></td>
              </tr>
              <tr>
                <td>Pendidikan Ayah</td>
                <td>&nbsp; :</td>
                <td class="pendidikan_ayah"></td>
              </tr>
            </table>
          </div>
          <div class="col-md-4">
            <label>Data Ibu</label>
            <table class="table">
              <tr>
                <td>Nama Ibu</td>
                <td>&nbsp; :</td>
                <td class="nama_ibu"></td>
              </tr>
              <tr>
                <td>Usia Ibu</td>
                <td>&nbsp; :</td>
                <td class="usia_ibu"></td>
              </tr>
              <tr>
                <td>Pekerjaan Ibu</td>
                <td>&nbsp; :</td>
                <td class="pekerjaan_ibu"></td>
              </tr>
              <tr>
                <td>Alamat Ibu</td>
                <td>&nbsp; :</td>
                <td class="alamat_ibu"></td>
              </tr>
              <tr>
                <td>Pendidikan Ibu</td>
                <td>&nbsp; :</td>
                <td class="pendidikan_ibu"></td>
              </tr>
            </table>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <tr>
                <td width="19%">Twitter Account</td>
                <td width="1%">:</td>
                <td class="twitter"></td>
              </tr>
            </table>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <label>Data Saudara</label>
            <div class="table-responsive">
              <table id="table_saudara" class="table table-sm table-striped table-hover tabel-saudara">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Usia</th>
                  <th>Pendidikan</th>
                  <th>Pekerjaan</th>
                  <th>Alamat</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="delete_confirm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Hapus Data</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin menghapus data ini ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
        <a class="btn btn-danger" href="#" id="hapus-keluarga">Hapus</a>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script src="<?php echo base_url('assets/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#table_pendataan').DataTable();

    $(document).on('click', '.view-detail', function(e){
      e.preventDefault();
      var id = $(this).attr('id');

      $.ajax({
        type: "get",
        url: "<?php echo site_url('pendataan_controller/get_data_by_id/'); ?>"+id,
        dataType: "JSON",
        success: function(data){
          $.each(data, function (key, value) {
            $('.modal-title').append('<span class="data_keluarga">'+data[key].nama+'</span>')

            $('.nama').append('<span class="data_keluarga">'+data[key].nama+'</span>');
            $('.usia').append('<span class="data_keluarga">'+data[key].usia+'</span>');
            $('.pekerjaan').append('<span class="data_keluarga">'+data[key].pekerjaan+'</span>');
            $('.alamat').append('<span class="data_keluarga">'+data[key].pendidikan+'</span>');
            $('.pendidikan').append('<span class="data_keluarga">'+data[key].pendidikan+'</span>');
            $('.nama_ayah').append('<span class="data_keluarga">'+data[key].nama_ayah+'</span>');
            $('.usia_ayah').append('<span class="data_keluarga">'+data[key].usia_ayah+'</span>');
            $('.pekerjaan_ayah').append('<span class="data_keluarga">'+data[key].pekerjaan_ayah+'</span>');
            $('.alamat_ayah').append('<span class="data_keluarga">'+data[key].pendidikan_ayah+'</span>');
            $('.pendidikan_ayah').append('<span class="data_keluarga">'+data[key].pendidikan_ayah+'</span>');
            $('.nama_ibu').append('<span class="data_keluarga">'+data[key].nama_ibu+'</span>');
            $('.usia_ibu').append('<span class="data_keluarga">'+data[key].usia_ibu+'</span>');
            $('.pekerjaan_ibu').append('<span class="data_keluarga">'+data[key].pekerjaan_ibu+'</span>');
            $('.alamat_ibu').append('<span class="data_keluarga">'+data[key].pendidikan_ibu+'</span>');
            $('.pendidikan_ibu').append('<span class="data_keluarga">'+data[key].pendidikan_ibu+'</span>');
            $('.twitter').append('<span class="data_keluarga">'+data[key].twitter+'</span>');
          });
        }
      });

      $.ajax({
        type: "get",
        url: "<?php echo site_url('pendataan_controller/get_saudara_by_id_keluarga/'); ?>"+id,
        dataType: "JSON",
        success: function(data){
          $.each(data, function(key, value){
            $('.tabel-saudara tbody').append('<tr class="data_saudara">'+
              '<td>'+data[key].nama_saudara+'</td>'+
              '<td>'+data[key].usia_saudara+'</td>'+
              '<td>'+data[key].pendidikan_saudara+'</td>'+
              '<td>'+data[key].pekerjaan_saudara+'</td>'+
              '<td>'+data[key].alamat_saudara+'</td>'+
            '</tr>');

            $('#table_saudara').DataTable();
          });
        }
      });

      $('#detail_keluarga').modal('show');
    });

    $('#detail_keluarga').on('hidden.bs.modal', function () {
      $('.data_keluarga').remove();
      $('.data_saudara').remove();
    });

    $(document).on('click', '.tombol-hapus-keluarga', function(e){
      e.preventDefault();
      var id = $(this).data('id');
      var url = "<?php echo site_url('pendataan/hapus/'); ?>";
      $('#hapus-keluarga').attr("href",url+id);
    });

<?php if($this->session->flashdata('success_delete_data') == "Berhasil menghapus data"){ ?>
    toastr.info('Berhasil menghapus data.', 'Success')
<?php } ?>

  });
</script>