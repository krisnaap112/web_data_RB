<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data PT - Manager</title>
  <link rel="icon" href="<?php echo base_url();?>assets/images/kemenag.png">


  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>assets/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/sbadmin2/css/sb-admin-2a.css" rel="stylesheet">

</head>

<body class="bg-gradient-komplit">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">


        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-3">
          

  <div class="row">
      <?= $this->session->flashdata('message'); ?>
      <?php foreach($testz as $tz) : ?>
      <form action="<?= base_url('login/mapsview'); ?>" method="post">
        <input type="hidden" name="id_maps" value="<?= $tz->id_maps ?>">
        <div class="form-group">
        <iframe width="600" height="500" id="gmap_canvas" src="<?php echo ($tz->link_alamat) ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
        <div class="form-group">
          <label for="nama_vihara">Nama Vihara</label>
          <input type="text" name="nama_vihara" id="nama_vihara" class="form-control" autocomplete="off" value="<?= $tz->nama_vihara ?>" readonly>
          <?= form_error('nama_vihara', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat Vihara</label>
          <input type="text" name="alamat" id="alamat" class="form-control" autocomplete="off" value="<?= $tz->alamat ?>" readonly>
          <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="nama_ketua">Nama Ketua Vihara</label>
          <input type="text" name="nama_ketua" id="nama_ketua" class="form-control" autocomplete="off" value="<?= $tz->nama_ketua ?>" readonly>
          <?= form_error('nama_ketua', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
        <label for="foto_vihara">Foto Vihara</label>
        <img src="<?= base_url('assets/images/foto_vihara/') . $tz->foto_vihara; ?>" class="img-thumbnail" width="100%" height="100%">    
        </div>
        </form>
    <?php endforeach; ?>
    </div>
  </div>
</div>
</div>
</div>
</div>


  <script src="<?php echo base_url();?>assets/sbadmin2/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
              
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>assets/sbadmin2/js/sb-admin-2.min.js"></script>

</body>

</html>
