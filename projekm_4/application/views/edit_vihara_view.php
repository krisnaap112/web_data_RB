<?php $this->load->view('header'); ?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('menu_left');?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view('menu_top');?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">


<!-- Begin Page Content -->
<div class="main-content">
	<section class="section">

<div class="section-header">
    <i class="fas fa-user-edit"></i><h1 class="ml-3"><?= $title; ?></h1>
  </div>

	<div class="row justify-content-center">
		<div class="col-lg">
			<div class="card">
				<div class="card-body alert-warning">
					<h3 class="card-title text-center">Edit Vihara</h3>
					<?= form_open_multipart('login/update_vihara2'); ?>
          <?php foreach($testz as $tz): ?>
			<div class="form-group row">
				<label for="id_maps" class="col-sm-2 col-form-label">id_maps</label>
				<div class="col-sm-10 input-group flex-nowrap">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-at"></i></span>
					</div>
					<input type="text" name="id_maps" id="id_maps" class="form-control" value="<?= $tz['id_maps']; ?>" readonly>
				</div>
			</div>
				<div class="form-group row">
					<label for="nama_vihara" class="col-sm-2 col-form-label">Nama Vihara</label>
					<div class="col-sm-10 input-group flex-nowrap">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-address-card"></i></span>
						</div>
						<input type="text" name="nama_vihara" id="nama_vihara" class="form-control" value="<?= $tz['nama_vihara']; ?>">
						<?= form_error('nama_vihara', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="link_alamat" class="col-sm-2 col-form-label">Link Alamat</label>
					<div class="col-sm-10 input-group flex-nowrap">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-address-card"></i></span>
						</div>
						<input type="text" name="link_alamat" id="link_alamat" class="form-control" value="<?= $tz['link_alamat']; ?>">
						<?= form_error('link_alamat', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-10 input-group flex-nowrap">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-address-card"></i></span>
						</div>
						<input type="text" name="alamat" id="alamat" class="form-control" value="<?= $tz['alamat']; ?>">
						<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="nama_ketua" class="col-sm-2 col-form-label">Nama Ketua Vihara</label>
					<div class="col-sm-10 input-group flex-nowrap">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-address-card"></i></span>
						</div>
						<input type="text" name="nama_ketua" id="nama_ketua" class="form-control" value="<?= $tz['nama_ketua']; ?>">
						<?= form_error('nama_ketua', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
				</div>
				
				
								
			<div class="form-group row">
				<div class="col-sm-2">Foto Vihara</div>
				<div class="col-sm-10">
					<div class="row">
						<div class="col-sm-3">
							<img src="<?= base_url('assets/images/foto_vihara/') . $tz['foto_vihara']; ?>" class="img-thumbnail">
						</div>
						<div class="col-sm-9">
							<div class="custom-file">
								<input type="file" name="foto_vihara" class="custom-file-input" id="foto_vihara">
								<label class="custom-file-label" for="foto_vihara">Choose File</label>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<div class="form-group row justify-content-end">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-success">Edit</button>
				</div>
			</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
<?php endforeach; ?>

</section>
</div>
</div>
<!-- End of Main Content -->

<?php $this->load->view('footer');?>