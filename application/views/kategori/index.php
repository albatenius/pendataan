<section class="content-header">
  <h1>
    Data Kategori <div style="display: initial;" data-toggle="tooltip" data-placement="right" title="Tambah Data"><a href="" class="link-add" data-toggle="modal" data-target="#modal_tambah"><i class="fa fa-plus-circle"></i></a></div>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#"><i class="fa fa-newspaper-o"></i> Post</a></li>
    <li class="active"><i class="fa fa-wrench"></i> Data Kategori</li>
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
            <table id="kategori_table" class="table table-striped" style="font-size:13px;">
              <thead> 
                <tr>
                  <th>No.</th>
                  <th>Kategori</th>
                  <th width="10%" style="text-align: center;">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php $no=1; foreach ($kategori as $k):?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $k['kategori_nama']; ?></td>
                  <td align="right">
                    <a class="btn btn-edit" data-toggle="modal" data-target="#modal_edit" data-id="<?php echo $k['kategori_id']; ?>" data-kat="<?php echo $k['kategori_nama']; ?>"><span class="fa fa-pencil"></span></a>
                    <a class="btn btn-delete" data-toggle="modal" data-target="#modal_hapus" data-id="<?php echo $k['kategori_id']; ?>" data-kat="<?php echo $k['kategori_nama']; ?>"><span class="fa fa-trash"></span></a>
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

<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h4 class="modal-title" id="modalTambahLabel">Add Kategori</h4>
      </div>

      <form class="form-horizontal" action="<?php echo base_url('berita/kategori/simpan');?>" method="Post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="kategori" class="col-sm-4 control-label">Kategori</label>
            <div class="col-sm-7">
              <input type="text" name="kategori" class="form-control" id="kategori" placeholder="Kategori" required>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button> 
        </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h4 class="modal-title" id="modalTambahLabel">Edit Kategori</h4>
      </div>

      <form class="form-horizontal" action="<?php echo base_url('berita/kategori/update');?>" method="Post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="kategori_edit" class="col-sm-4 control-label">Kategori</label>
            <div class="col-sm-7">
              <input type="hidden" name="kode_edit" id="kode_edit" required>
              <input type="text" name="kategori_edit" class="form-control" id="kategori_edit" placeholder="Kategori" required>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button> 
        </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_hapus" tabindex="-1" role="dialog" aria-labelledby="modalHapusLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h4 class="modal-title" id="modalHapusLabel">Hapus Kategori</h4>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('berita/kategori/hapus'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <input type="hidden" name="kode_hapus" id="kode_hapus" />
        <p>Apakah anda yakin mau menghapus Kategori <b id="kategori_hapus"></b>?</p>
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
    $("#kategori_table").DataTable();

    $('.btn-edit').click(function(){
      var id = $(this).data('id');
      var kat = $(this).data('kat');

      $('#kode_edit').val(id);
      $('#kategori_edit').val(kat);
    });

    $('.btn-delete').click(function(){
      var kode = $(this).data('id');
      var nama = $(this).data('kat');

      $('#kode_hapus').val(kode);
      $('#kategori_hapus').text(nama);
    });

    <?php if($this->session->flashdata('msg') == "success"){ ?>
        toastr.success('Berhasil menambah data.', 'Success')
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