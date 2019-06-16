<section class="content-header">
  <h1>
    Tambah Berita
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#"><i class="fa fa-newspaper-o"></i> Post</a></li>
    <li class="active"><i class="fa fa-thumb-tack"></i> Tambah Berita</li>
  </ol>
</section>


<section class="content">
<form action="<?php echo base_url('berita/tulis/simpan'); ?>" method="post" enctype="multipart/form-data">
	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Judul</h3>
		</div>

		<div class="box-body">
			<div class="row">
				<div class="col-md-10">
					<input type="text" name="judul" class="form-control" placeholder="Judul Berita atau Artikel" required/>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<button type="submit" class="form-control btn btn-primary btn-flat pull-right"><span class="fa fa-pencil"></span> publish</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">Post</h3>
				</div>

				<div class="box-body">
					<textarea id="ckeditor" name="isi" required></textarea>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Pengaturan Lainnya</h3>
				</div>

				<div class="box-body">
					<div class="form-group">
						<label>Kategori</label>
						<select class="form-control select2" name="kategori" style="width: 100%;" required>
							<option value="">-pilih-</option>
							<?php 
							foreach ($kategori as $k):
							?>
							<option value="<?php echo $k['kategori_id'];?>"><?php echo $k['kategori_nama'];?></option>
							<?php endforeach;?>
						</select>
					</div>
					<div class="form-group">
						<label>Gambar</label>
						<input type="file" name="filefoto" style="width: 100%;">
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
</section>

<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script src="<?php echo base_url('assets/select2/dist/js/select2.full.min.js'); ?>"></script>

<script>
  $(function() {
    CKEDITOR.replace('ckeditor');
    $('.select2').select2();
  });
</script>