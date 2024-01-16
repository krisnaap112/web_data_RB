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
					<h3 class="card-title text-center">Change Your Profile</h3>
					<?= form_open_multipart('user/edit'); ?>
			<div class="form-group row">
				<label for="username" class="col-sm-2 col-form-label">Username</label>
				<div class="col-sm-10 input-group flex-nowrap">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-at"></i></span>
					</div>
					<input type="text" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" readonly>
				</div>
			</div>
				<div class="form-group row">
					<label for="name_user" class="col-sm-2 col-form-label">Full Name</label>
					<div class="col-sm-10 input-group flex-nowrap">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-address-card"></i></span>
						</div>
						<input type="text" name="name_user" id="name" class="form-control" value="<?= $user['name_user']; ?>">
						<?= form_error('name_user', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
				</div>				
			<div class="form-group row">
				<div class="col-sm-2">Picture</div>
				<div class="col-sm-10">
					<div class="row">
						<div class="col-sm-3">
							<img src="<?= base_url('assets/images/profiles/') . $user['image']; ?>" class="img-thumbnail">
						</div>
						<div class="col-sm-9">
							<div class="custom-file">
								<input type="file" name="image" class="custom-file-input" id="image">
								<label class="custom-file-label" for="image">Choose File</label>
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

</section>
</div>
</div>
<!-- End of Main Content -->

<?php $this->load->view('footer');?>