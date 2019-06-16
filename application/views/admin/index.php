<section class="content-header">

  <h1>
    Data Pengguna <div style="display: initial;" data-toggle="tooltip" data-placement="right" title="Tambah Data"><a href="" class="link-add" data-toggle="modal" data-target="#modal_tambah"><i class="fa fa-plus-circle"></i></a></div>
    <!-- <small>Example 2.0</small> -->
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#"><i class="fa fa-users"></i> Pengguna</a></li>
    <li class="active"><i class="fa fa-users"></i> Data Pengguna</li>
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
            <table id="penggunna_table" class="table table-striped" style="font-size:13px;">
              <thead> 
                <tr>
                  <th>Photo</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Jenis Kelamin</th>
                  <th>Password</th>
                  <th>Kontak</th>
                  <th>Level</th>
                  <th width="15%" style="text-align: center;">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($users as $u):?>
                <tr>
                  <td><div style="width: 80px; height: 80px; overflow: hidden; border-radius: 50%;"><img src="<?php echo site_url('assets/image/photo/') . $u['photo']; ?>" width="80px"></div></td>
                  <td><?php echo $u['nama']; ?></td>
                  <td><?php echo $u['email']; ?></td>
                  <td><?php echo $u['jenkel']; ?></td>
                  <td><?php echo $u['password']; ?></td>
                  <td><?php echo $u['no_hp']; ?></td>
                  <td><?php echo $u['level']; ?></td>
                  <td align="right">
                    <a class="btn btn-edit" data-toggle="modal" data-target="#model_edit"
                      data-id="<?php echo $u['id_user']; ?>"
                      data-nama="<?php echo $u['nama']; ?>"
                      data-email="<?php echo $u['email']; ?>"
                      data-jenkel="<?php echo $u['jenkel']; ?>"
                      data-username="<?php echo $u['username']; ?>"
                      data-pass="<?php echo $u['password']; ?>"
                      data-nohp="<?php echo $u['no_hp']; ?>"
                      data-level="<?php echo $u['level']; ?>"
                    ><span class="fa fa-pencil"></span></a>
                    <a class="btn" href="<?php echo base_url('pengguna/reset_password/') . $u['id_user'];?>"><span class="fa fa-refresh"></span></a>
                    <a class="btn btn-delete" data-toggle="modal" data-target="#modal_hapus" data-id="<?php echo $u['id_user']; ?>" data-nama="<?php echo $u['nama']; ?>"><span class="fa fa-trash"></span></a>
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
        <h4 class="modal-title" id="modalTambahLabel">Tambah Pengguna</h4>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('pengguna/simpan')?>" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
          <label for="nama" class="col-sm-4 control-label">Nama</label>
          <div class="col-sm-7">
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="col-sm-4 control-label">Email</label>
          <div class="col-sm-7">
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-4 control-label">Jenis kelamin</label>
          <div class="col-sm-7">
            <div class="radio radio-info radio-inline">
              <input type="radio" id="laki_laki" value="Laki-laki" name="jenkel">
              <label for="laki_laki">Laki-laki</label>
            </div>
            <div class="radio radio-info radio-inline">
              <input type="radio" id="perempuan" value="Perempuan" name="jenkel">
              <label for="perempuan">Perempuan</label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="username" class="col-sm-4 control-label">Username</label>
          <div class="col-sm-7">
            <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
          </div>
        </div>

        <div class="form-group">
          <label for="password" class="col-sm-4 control-label">Password</label>
          <div class="col-sm-7">
            <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
          </div>
        </div>

        <div class="form-group">
          <label for="konfirm" class="col-sm-4 control-label">Ulangi Password</label>
          <div class="col-sm-7">
            <input type="password" name="konfirm" class="form-control" id="konfirm" placeholder="Ulangi Password" required>
          </div>
        </div>

        <div class="form-group">
          <label for="nohp" class="col-sm-4 control-label">Kontak Person</label>
          <div class="col-sm-7">
            <input type="text" name="nohp" class="form-control" id="nohp" placeholder="Kontak Person" required>
          </div>
        </div>

        <div class="form-group">
          <label for="level" class="col-sm-4 control-label">Level</label>
          <div class="col-sm-7">
            <select class="form-control" id="level" name="level" required>
              <option value="admin">Administrator</option>
              <option value="author">Author</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="file" class="col-sm-4 control-label">Photo</label>
          <div class="col-sm-7">
            <input type="file" id="file" name="photoprofile"/>
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

<div class="modal fade" id="model_edit" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalEditLabel">Edit Pengguna</h4>
      </div>

      <form class="form-horizontal" action="<?php echo base_url('pengguna/update'); ?>" method="post" enctype="multipart/form-data">

        <div class="modal-body">

          <div class="form-group">
            <label for="nama_edit" class="col-sm-4 control-label">Nama</label>
            <div class="col-sm-7">
              <input type="hidden" name="kode" id="kode_edit"/>
              <input type="text" name="nama_edit" class="form-control" id="nama_edit" placeholder="Nama Lengkap" required>
            </div>
          </div>

          <div class="form-group">
            <label for="email_edit" class="col-sm-4 control-label">Email</label>
            <div class="col-sm-7">
              <input type="email" name="email_edit" class="form-control" id="email_edit" placeholder="Email" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label">Jenis Kelamin</label>
            <div class="col-sm-7">
              <div class="radio radio-info radio-inline">
                <input type="radio" id="laki_laki_edit" value="Laki-laki" name="jenkel_edit">
                <label for="laki_laki_edit">Laki-laki</label>
              </div>
              <div class="radio radio-info radio-inline">
                <input type="radio" id="perempuan_edit" value="Perempuan" name="jenkel_edit">
                <label for="perempuan_edit">Perempuan</label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="username_edit" class="col-sm-4 control-label">Username</label>
            <div class="col-sm-7">
              <input type="text" name="username_edit" class="form-control" id="username_edit" placeholder="Username" required>
            </div>
          </div>

          <div class="form-group">
            <label for="password_edit" class="col-sm-4 control-label">Password</label>
            <div class="col-sm-7">
              <input type="hidden" name="old_password" class="form-control" id="old_password">
              <input type="password" name="password_edit" class="form-control" id="password_edit" placeholder="Password baru">
            </div>
          </div> 

          <div class="form-group">
            <label for="konfirm_edit" class="col-sm-4 control-label">Ulangi Password</label>
            <div class="col-sm-7">
              <input type="password" name="konfirm_edit" class="form-control" id="konfirm_edit" placeholder="Ulangi Password">
            </div>
          </div>

          <div class="form-group">
            <label for="no_hp_edit" class="col-sm-4 control-label">Kontak Person</label>
            <div class="col-sm-7">
              <input type="text" name="nohp_edit" class="form-control" id="no_hp_edit" placeholder="Kontak Person" required>
            </div>
          </div>

          <div class="form-group">
            <label for="level_edit" class="col-sm-4 control-label">Level</label>
            <div class="col-sm-7">
              <select class="form-control" name="level_edit" id="level_edit" required>
              <option value="admin">Administrator</option>    
              <option value="author">Author</option>      
            </select>
            </div>
          </div>

          <div class="form-group">
            <label for="file_edit" class="col-sm-4 control-label">Photo</label>
            <div class="col-sm-7">
              <input type="file" id="file_edit" name="photoprofile_edit" />
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
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
        <h4 class="modal-title" id="modalHapusLabel">Hapus Pengguna</h4>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('pengguna/hapus'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <input type="hidden" name="kode_hapus" id="kode_hapus" />
        <p>Apakah anda yakin mau menghapus pengguna <b id="nama_hapus"></b>?</p>
      </div>  
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_reset_password" tabindex="-1" role="dialog" aria-labelledby="modelaResetPasswordLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h4 class="modal-title" id="modelaResetPasswordLabel">Reset Password</h4>
      </div>

      <div class="modal-body">
        <table>
          <tr>
            <th style="width: 120px;">Username</th>
            <th>:</th>
            <th><?php echo $this->session->flashdata('uname');?></th>
          </tr>
          <tr>
            <th style="width: 120px;">Password Baru</th>
            <th>:</th>
            <th><?php echo $this->session->flashdata('upass');?></th>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<script src="<?php echo base_url('assets/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#penggunna_table").DataTable();

    $('.btn-edit').click(function(){
      $('#level_edit option').attr('selected', false);

      var id = $(this).data('id');
      var nama = $(this).data('nama');
      var email = $(this).data('email');
      var jenkel = $(this).data('jenkel');
      var username = $(this).data('username');
      var pass = $(this).data('pass');
      var nohp = $(this).data('nohp');
      var level = $(this).data('level');

      $('#kode_edit').val(id);
      $('#nama_edit').val(nama);
      $('#email_edit').val(email);
      $('input[name="jenkel_edit"][value="'+jenkel+'"]').prop('checked', true);
      $('#username_edit').val(username);
      $('#old_password').val(pass);
      $('#no_hp_edit').val(nohp);
      $('#level_edit option[value="'+level+'"]').attr('selected', true);
    });

    $('.btn-delete').click(function(){
      var kode = $(this).data('id');
      var nama = $(this).data('nama');

      $('#kode_hapus').val(kode);
      $('#nama_hapus').text(nama);
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
    <?php } else if($this->session->flashdata('msg_reset_pass') == "show-modal"){ ?>
        $('#modal_reset_password').modal('show');
    <?php } ?>

  });
</script>