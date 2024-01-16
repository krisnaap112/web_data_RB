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

<!-- Page Heading -->
<div class="section-header">
    <i class="fas fa-key"></i><h1 class="ml-3"><?= $title; ?></h1>
  </div>

	<div class="row">
		<div class="col-lg-3">
			<?= $this->session->flashdata('message'); ?>
				<h5>Role : <?= $role['access']; ?></h5>
					<?php foreach ($menu as $m) : ?>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<input type="checkbox" class="1" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
								</div>
							</div>
							<input type="text" class="form-control" value="<?= $m['menu']; ?>">
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>

</div>
<!-- /.container-fluid -->

</section>
</div>
<!-- End of Main Content -->


<?php $this->load->view('footer');?>