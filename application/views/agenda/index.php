<section class="content-header">
  <h1>
    Data Agenda <div style="display: initial;" data-toggle="tooltip" data-placement="right" title="Tambah Data"><a href="" class="link-add" data-toggle="modal" data-target="#modal_tambah"><i class="fa fa-plus-circle"></i></a></div>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#"><i class="fa fa-calendar"></i> Agenda</a></li>
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
            <table id="agenda_table" class="table table-striped" style="font-size:13px;">
              <thead> 
                <tr>
                  <th>No.</th>
                  <th>Agenda</th>
                  <th>Mulai</th>
                  <th>Selesai</th>
                  <th>Tempat</th>
                  <th>Waktu</th>
                  <th>keterangan</th>
                  <th width="10%" style="text-align: center;">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php $no=1; foreach ($agenda as $a):?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $a['nama_agenda']; ?></td>
                  <td><?php echo $a['mulai']; ?></td>
                  <td><?php echo $a['selesai']; ?></td>
                  <td><?php echo $a['tempat']; ?></td>
                  <td><?php echo $a['waktu']; ?></td>
                  <td><?php echo $a['keterangan']; ?></td>
                  <td align="right">
                    <a class="btn btn-edit" data-toggle="modal" data-target="#modal_edit"
                      data-id="<?php echo $a['id_agenda']; ?>"
                      data-agenda="<?php echo $a['nama_agenda']; ?>"
                      data-deskripsi="<?php echo $a['deskripsi']; ?>"
                      data-mulai="<?php echo $a['mulai']; ?>"
                      data-selesai="<?php echo $a['selesai']; ?>"
                      data-tempat="<?php echo $a['tempat']; ?>"
                      data-waktu="<?php echo $a['waktu']; ?>"
                      data-keterangan="<?php echo $a['keterangan']; ?>"
                    ><span class="fa fa-pencil"></span></a>
                    <a class="btn btn-delete" data-toggle="modal" data-target="#modal_hapus" data-id="<?php echo $a['id_agenda']; ?>" data-agenda="<?php echo $a['nama_agenda']; ?>"><span class="fa fa-trash"></span></a>
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
        <h4 class="modal-title" id="modalTambahLabel">Add Agenda</h4>
      </div>

      <form class="form-horizontal" action="<?php echo base_url('agenda/simpan');?>" method="Post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="form-group">
            <label for="agenda" class="col-sm-4 control-label">Nama Agenda</label>
            <div class="col-sm-7">
              <input type="text" name="agenda" class="form-control" id="agenda" placeholder="Nama Agenda" required>
            </div>
          </div>

          <div class="form-group">
            <label for="deskripsi" class="col-sm-4 control-label">Deskripsi</label>
            <div class="col-sm-7">
              <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi . . ." required></textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="mulai" class="col-sm-4 control-label">Mulai</label>
            <div class="col-sm-7">

              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="mulai" class="form-control pull-right" id="mulai" required>
              </div>

            </div>
          </div>

          <div class="form-group">
            <label for="selesai" class="col-sm-4 control-label">Selesai</label>
            <div class="col-sm-7">

              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="selesai" class="form-control pull-right" id="selesai" required>
              </div>

            </div>
          </div>

          <div class="form-group">
            <label for="tempat" class="col-sm-4 control-label">Tempat</label>
            <div class="col-sm-7">
              <input type="text" name="tempat" class="form-control" id="tempat" placeholder="Tempat" required>
            </div>
          </div>

          <div class="form-group">
            <label for="waktu" class="col-sm-4 control-label">Waktu</label>
            <div class="col-sm-7">
              <input type="text" name="waktu" class="form-control" id="waktu" placeholder="Contoh : 10:30 - 11:00 WIB" required>
            </div>
          </div>

          <div class="form-group">
            <label for="keterangan" class="col-sm-4 control-label">Keterangan</label>
            <div class="col-sm-7">
              <!-- <input type="text" name="kategori" class="form-control" id="kategori" placeholder="Kategori" required> -->
              <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan . . ." required></textarea>
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
        <h4 class="modal-title" id="modalTambahLabel">Edit Agenda</h4>
      </div>

      <form class="form-horizontal" action="<?php echo base_url('agenda/update');?>" method="Post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="agenda_edit" class="col-sm-4 control-label">Nama Agenda</label>
            <div class="col-sm-7">
              <input type="hidden" name="kode_edit" class="form-control" id="kode_edit" placeholder="Nama Agenda" required>
              <input type="text" name="agenda_edit" class="form-control" id="agenda_edit" placeholder="Nama Agenda" required>
            </div>
          </div>

          <div class="form-group">
            <label for="deskripsi_edit" class="col-sm-4 control-label">Deskripsi</label>
            <div class="col-sm-7">
              <textarea name="deskripsi_edit" id="deskripsi_edit" class="form-control" placeholder="Deskripsi . . ." required></textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="mulai_edit" class="col-sm-4 control-label">Mulai</label>
            <div class="col-sm-7">

              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="mulai_edit" class="form-control pull-right" id="mulai_edit" required>
              </div>

            </div>
          </div>

          <div class="form-group">
            <label for="selesai_edit" class="col-sm-4 control-label">Selesai</label>
            <div class="col-sm-7">

              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="selesai_edit" class="form-control pull-right" id="selesai_edit" required>
              </div>

            </div>
          </div>

          <div class="form-group">
            <label for="tempat_edit" class="col-sm-4 control-label">Tempat</label>
            <div class="col-sm-7">
              <input type="text" name="tempat_edit" class="form-control" id="tempat_edit" placeholder="Tempat_edit" required>
            </div>
          </div>

          <div class="form-group">
            <label for="waktu_edit" class="col-sm-4 control-label">Waktu</label>
            <div class="col-sm-7">
              <input type="text" name="waktu_edit" class="form-control" id="waktu_edit" placeholder="Contoh : 10:30 - 11:00 WIB" required>
            </div>
          </div>

          <div class="form-group">
            <label for="keterangan_edit" class="col-sm-4 control-label">Keterangan</label>
            <div class="col-sm-7">
              <!-- <input type="text" name="kategori" class="form-control" id="kategori" placeholder="Kategori" required> -->
              <textarea name="keterangan_edit" id="keterangan_edit" class="form-control" placeholder="Keterangan . . ." required></textarea>
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
      <form class="form-horizontal" action="<?php echo base_url('agenda/hapus'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <input type="hidden" name="kode_hapus" id="kode_hapus" />
        <p>Apakah anda yakin mau menghapus Kategori <b id="agenda_hapus"></b>?</p>
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
<script src="<?php echo base_url('assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#agenda_table").DataTable();

    $('#mulai').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });

    $('#selesai').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });

    $('#mulai_edit').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });

    $('#selesai_edit').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });

    $('.btn-edit').click(function(){
      var id = $(this).data('id');
      var agenda = $(this).data('agenda');
      var deskripsi = $(this).data('deskripsi');
      var mulai = $(this).data('mulai');
      var selesai = $(this).data('selesai');
      var tempat = $(this).data('tempat');
      var waktu = $(this).data('waktu');
      var keterangan = $(this).data('keterangan');

      $('#kode_edit').val(id);
      $('#agenda_edit').val(agenda);
      $('#deskripsi_edit').val(deskripsi);
      $('#mulai_edit').val(mulai);
      $('#selesai_edit').val(selesai);
      $('#tempat_edit').val(tempat);
      $('#waktu_edit').val(waktu);
      $('#keterangan_edit').val(keterangan);
    });

    $('.btn-delete').click(function(){
      var kode = $(this).data('id');
      var agenda = $(this).data('agenda');

      $('#kode_hapus').val(kode);
      $('#agenda_hapus').text(agenda);
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