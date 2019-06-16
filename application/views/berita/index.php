<section class="content-header">
  <h1>
    Data Berita <a href="<?php echo site_url('berita/tulis'); ?>" class="link-add" data-toggle="tooltip" data-placement="right" title="Tambah Data"><i class="fa fa-plus-circle"></i></a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#"><i class="fa fa-newspaper-o"></i> Post</a></li>
    <li class="active"><i class="fa fa-list"></i> Data Berita</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <!-- <div class="box-header">
          <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"> <span class="fa fa-user-plus"> </span> Add Pengguna </a> 
        </div> -->

        <div class="box-body">
          <div class="table-responsive">
            <table id="post_table" class="table table-striped" style="font-size:13px;">
              <thead> 
                <tr>
                  <th>Gambar</th>
                  <th>Judul</th>
                  <th>Tanggal</th>
                  <th>Author</th>
                  <th>Baca</th>
                  <th>Kategori</th>
                  <th width="10%" style="text-align: center;">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($posts as $p):?>
                <tr>
                  <td><img src="<?php echo base_url('assets/image/photo/').$p['tulisan_gambar']; ?>" height="80px"></td>
                  <td><?php echo $p['tulisan_judul']; ?></td>
                  <td><?php echo $p['tulisan_tanggal']; ?></td>
                  <td><?php echo $p['nama']; ?></td>
                  <td><?php echo $p['tulisan_views']; ?></td>
                  <td><?php echo $p['kategori_nama']; ?></td>
                  <td align="right">
                    <a href="<?php echo site_url('berita/tulis/edit/').$p['tulisan_id']; ?>" class="btn"><span class="fa fa-pencil"></span></a>
                    <a class="btn btn-delete" data-toggle="modal" data-target="#modal_hapus" data-id="<?php echo $p['tulisan_id']; ?>" data-judul="<?php echo $p['tulisan_judul']; ?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
              <?php endforeach;?>
              </tbody>         
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="modal_hapus" tabindex="-1" role="dialog" aria-labelledby="modalHapusLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h4 class="modal-title" id="modalHapusLabel">Hapus Berita</h4>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('berita/tulis/hapus'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <input type="hidden" name="kode_hapus" id="kode_hapus" />
        <p>Apakah anda yakin mau menghapus Berita <b id="judul_hapus"></b>?</p>
      </div>  
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script src="<?php echo base_url('assets/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#post_table").DataTable();

    $('.btn-delete').click(function(){
      var kode = $(this).data('id');
      var judul = $(this).data('judul');

      $('#kode_hapus').val(kode);
      $('#judul_hapus').text(judul);
    });

    <?php if($this->session->flashdata('msg') == "success"){ ?>
        toastr.success('Berhasil menambah data.', 'Success')
    <?php } else if($this->session->flashdata('msg') == "warning"){ ?>
        toastr.warning('Gagal mengupload foto.', 'Warning')
    <?php } else if($this->session->flashdata('msg') == "error"){ ?>
        toastr.danger('Gagal menambah data.', 'Failed')
    <?php } else if($this->session->flashdata('msg_edit') == "success"){ ?>
        toastr.success('Berhasil mengubah data.', 'Success')
    <?php } else if($this->session->flashdata('msg_edit') == "error"){ ?>
        toastr.danger('Gagal mengubah data.', 'Failed')
    <?php } else if($this->session->flashdata('msg_delete') == "success"){ ?>
        toastr.info('Berhasil menghapus data.', 'Success')
    <?php } ?>

  });
</script>