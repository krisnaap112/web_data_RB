<?php $this->load->view('header'); ?>
<body id="page-top">


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


<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?= $title; ?></h1>
          </div>
          <div class="section-body">
            <p class="section-lead">
             
            </p>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
      


        <!-- Begin Page Content -->
        <div class="container-fluid">
<!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form Buat Akun</h1>
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
                  
                  <form class="user" method="post" action="<?= base_url('login/register'); ?>">
                    <div class="form-group">
                       <?= $this->session->flashdata('message'); ?>
                      <label for="username" id="username">Name</label>
                      <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                        </div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name..." value="<?= set_value('name'); ?>" autocomplete="off">
                        </div>
                      <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <label for="username" id="username">Username</label>
                      <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>" autocomplete="off">
                        </div>
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  

                    <div class="form-group">
                      <label for="country" id="country">Daftar Sebagai..???</label>
                      <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <select name="role_id" id="role_id" class="form-control">
                          <option>Member</option>
                          <option>Admin</option>
                        </select>
                      </div>
                      <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="username" id="username">Password</label>
                        <div class="input-group flex-nowrap">
                          <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-key"></i></span>
                          </div>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                          <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                      <div class="col-sm-6">
                        <label for="username" id="username">Repeat Password</label>
                        <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-redo-alt"></i></span>
                        </div>
                        <input type="password" class="form-control" id="password1" name="password1" placeholder="Repeat Password">
                      </div>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                      Register Account
                    </button>
                  </form>
                    </div>
                  </div></div></div></div></div></div></div></div></div></div></div></div></section></div></div></div></div></body>
        

                  
  <?php $this->load->view('footer');?>
