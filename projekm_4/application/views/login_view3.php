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
<br>

</head>

<body class="bg-gradient-komplit">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Form</h1>
                    <br>
                  </div>
                  
                  <?php 
				  #print_r($data);
				  if(isset($data['pesan'])){					  
				  ?>
                  <div class="col-lg-12">
                      <div class="card bg-danger text-white shadow">
                        <div class="card-body">
                          <?php echo $data['pesan']; ?>
                        </div>
                      </div>
                     
                  </div>
                   <br />
                  <?php } ?>
                  
          
                    
                <form class="user" method="post" action="<?= base_url('login'); ?>">
                    <div class="form-group">
                      <?= $this->session->flashdata('message'); ?>
                      <label for="username" id="username">Username</label>
                      <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Enter username..." value="<?= set_value('username'); ?>" autocomplete="off">
                    </div>
                  <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                    <div class="form-group">
                      <label for="password" id="password">Password</label>
                      <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
                      </div>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    <br>
                    <br>
                  </div>
                    <button type="submit" class="btn btn-primary btn-block">
                      Login
                    </button>
                  </form>
                  


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>assets/sbadmin2/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>assets/sbadmin2/js/sb-admin-2.min.js"></script>

</body>

</html>
