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

            <!-- Main Content -->
              <div class="main-content">
                <section class="section">
                  <div class="section-header">
                    <i class="fas fa-address-card"></i><h1 class="ml-3"><?= $title; ?></h1>
                  </div>
                 

                    <div class="row mt-sm-4">
                      <div class="col-12 col-md-12 col-lg-12">
                        <div class="card profile-widget">
                          <div class="profile-widget-header">                     
                            <img alt="image" src="<?= base_url('assets/images/profiles/') . $user['image']; ?>" width="130px" height="130px" class="rounded-circle profile-widget-picture">
                            <div class="profile-widget-items">
                             
                              <div class="profile-widget-item">
                                <div class="profile-widget-item-label"><i class="fas fa-calendar-alt"></i></div>
                                <div class="profile-widget-item-label">Join</div>
                                <div class="profile-widget-item-value"><?= date('d F Y', $user['date_created']); ?></div>
                              </div>
                              <div class="profile-widget-item">
                                <div class="profile-widget-item-label"><i class="fas fa-pen"></i></div>
                                <div class="profile-widget-item-label">Status</div>
                                <div class="profile-widget-item-value"><?php 
                                $user['is_active'];
                                if($user['is_active'] > 0){
                                  echo "Aktif";
                                } else {
                                  echo "Tidak Aktif";
                                }
                                 ?></div>
                              </div>
                            </div>
                          </div>
                          <div class="profile-widget-description">
                            <div class="profile-widget-name"><?= $user['name_user']; ?> <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> <?php 
                            $user['role_id']; 
                            if( $user['role_id'] == 1){
                              echo "Administrator";
                            } else {
                              echo "Member";
                            }
                            ?></div></div>
                            <div class="profile-widget-name">Username : <?= $user['username']; ?></div>
                            <?= $user['name_user']; ?> test1 <b>aaa</b>, test2 <b>'bay'</b>.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
      <!-- End of Main Content -->


  
 <?php $this->load->view('footer');?>