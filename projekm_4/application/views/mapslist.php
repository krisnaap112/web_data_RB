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

<br>

</head>

<body id="page-top" class="bg-gradient-komplit">


<div class="container">


 <!-- Page Wrapper -->
 <div id="wrapper" class="d-flex flex-column">

    
    
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
            </div>
          </div>

          <div class="section-body"> 
            <p class="section-lead">
            </p>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <?= $this->session->flashdata('message'); ?>
                      <table class="table table-striped" id="table-2">
                        <thead class="bg-success">
                          <tr>
                          <th>No.</th>
                          <th>Nama Vihara</th>
                          <th>Alamat Vihara</th>
                          <th>Nama Ketua</th>                          
                          <th width="20px">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $no = 1; 
                          foreach($testz as $tz) : ?>
                          <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $tz['nama_vihara']; ?></td>
                            <td><?= $tz['alamat']; ?></td>
                            <td><?= $tz['nama_ketua']; ?></td>
                            </td>
                            <td>
                              <ul class="pagination">
                                <li class="mx-1">
                                  <?= anchor('login/mapsview/'.$tz['id_maps'], '<div class="btn btn-sm btn-primary">
                                  <i class="fa fa-edit"></i> Lihat Detail
                                  </div>'); ?>
                                </li>
                                </ul>
                              </td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>


  <script src="<?php echo base_url();?>assets/sbadmin2/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>assets/sbadmin2/js/sb-admin-2.min.js"></script>


<!-- Bootstrap core JavaScript-->
 
<script src="<?php echo base_url();?>assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url();?>assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url();?>assets/sbadmin2/js/sb-admin-2.min.js"></script>


<!-- JS Libraies -->
<script src="<?= base_url("assets/dist/"); ?>assets/modules/datatables/datatables.min.js"></script>
<script src="<?= base_url("assets/dist/"); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url("assets/dist/"); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?= base_url("assets/dist/"); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>


<!-- Page Specific JS File -->
<script src="<?= base_url("assets/dist/"); ?>assets/js/page/modules-datatables.js"></script>

<!-- Page Specific JS File -->
<script src="<?= base_url("assets/dist/"); ?>assets/js/page/index-0.js"></script>


</body>

</html>
