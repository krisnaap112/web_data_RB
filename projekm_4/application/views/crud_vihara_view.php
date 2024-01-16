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



    <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title"></h2>
            <p class="section-lead">
             
            </p>

            
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4> </h4>
                  </div>
                  <div class="card-body">
                    <div class="card-header">
                      <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#newAddViharaModal">Add New Vihara</a>
                    </div>
                    <div class="table-responsive">
                      <?= $this->session->flashdata('message'); ?>
                      <table class="table table-striped" id="table-2">
                        <thead class="bg-success">
                          <tr>
                            <th>No</th>
                            <th>Id Maps</th>
                            <th>Nama Vihara</th>
                            <th>Link Alamat GMaps</th>
                            <th>Alamat Vihara</th>
                            <th>Nama Ketua Vihara</th>
                            <th>Foto Vihara</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $no = 1; 
                          foreach($testz as $tz) : ?>
                          <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $tz['id_maps']; ?></td>
                            <td><?= $tz['nama_vihara']; ?></td>
                            <td><?= $tz['link_alamat']; ?></td>
                            <td><?= $tz['alamat']; ?></td>
                            <td><?= $tz['nama_ketua']; ?></td>
                            <td><div class="img-thumbnail"  > <img height="100" width="100" src="<?= base_url('assets/images/foto_vihara/') . $tz['foto_vihara']; ?>"> </div> </td>
                            <td>
                              <ul class="pagination">
                                <li class="mx-1">
                                <?= anchor('login/update_vihara1/'.$tz['id_maps'], '<div class="btn btn-sm btn-primary">
                                  <i class="fa fa-trash"></i> Edit
                                  </div>'); ?> 
                              </li> 
                                <li class="mx-1">
                                  <?= anchor('login/delete_vihara/'.$tz['id_maps'], '<div class="btn btn-sm btn-danger">
                                  <i class="fa fa-trash"></i> Hapus
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


<!-- Modal Add Vihara-->
<div class="modal fade" id="newAddViharaModal" tabindex="-1" role="dialog" aria-labelledby="newAddViharaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newAddViharaModal">Add New Vihara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('login/submenu_vihara'); ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label for="nama_vihara" id="nama_vihara">Nama Vihara</label>
          <input type="text" class="form-control" name="nama_vihara" id="nama_vihara" placeholder="Nama Vihara" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="link_alamat" id="link_alamat">Link Alamat GMaps</label>
          <input type="text" class="form-control" name="link_alamat" id="link_alamat" placeholder="Link Alamat GMaps" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="alamat" id="alamat">Alamat Vihara</label>
          <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Vihara" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="nama_ketua" id="nama_ketua">Nama Ketua Vihara</label>
          <input type="text" class="form-control" name="nama_ketua" id="nama_ketua" placeholder="Nama Ketua Vihara" autocomplete="off">  
        </div>
        <div class="form-group">
          <label for="foto_vihara" id="foto_vihara" hidden>Foto Vihara</label>
          <input type="text" class="form-control" name="foto_vihara" id="foto_vihara" placeholder="borobudur.jpg" autocomplete="off" value="borobudur.jpg" readonly hidden>  
        </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End of Modal Add Vihara-->




 <?php $this->load->view('footer');?>