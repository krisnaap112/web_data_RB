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




<div class="main-content">
  <section class="section">
<!-- Page Heading -->




<div class="row justify-content-center">
    <div class="col-lg">
      <div class="card">
        <div class="card-body alert-warning">
          <h2 class="card-title text-center">Penilaian Kinerja Ditjen Bimas Buddha</h2> <br><br><br>

          <h4 class="card-title text-center">Sasaran program 1</h4> <br>
          <form action="<?= base_url('user/tambahdatasp'); ?>" method="post">
            
          
            <div class="form-group row">
                  <div class="col-sm-10 input-group flex-nowrap">
                    <input type="hidden" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" >
                  </div>
                </div>


            <div class="form-group row">
              <label for="id_skor_s1" class="col-sm-2 col-form-label">Sasaran Program 1 </label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                 <input type="text" name="id_skor_s1" id="id_skor_s1" class="form-control" value="Meningkatnya kualitas bimbingan dan penyuluhan agama" readonly> 
             </div>
            </div>


          
            <div class="form-group row">
              <label for="data_a1" class="col-sm-2 col-form-label">Indikator 1</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_a1" id="data_a1" class="form-control" value="Rasio penyuluh agama dengan kelompok sasaran yang mendapatkan bimbingan agama" readonly>
              </div>
            </div>

            
            
            <div class="form-group row">
              <label for="skor_s1a" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s1a" id="skor_s1a" class="form-control" value="<?= $sasa1a['skor_s1a']; ?>" readonly>
                


                <?php if($sasa1a['skor_s1a'] >= 70) : ?>
                              <div class="badge badge-success mb-2"><i class="fas fa-user-edit"></i> Tercapai</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Tercapai</div>
                              <?php endif; ?>

              </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal1a">edit</a> 
            </div>
          
          

          
            <div class="form-group row">
              <label for="data_a2" class="col-sm-2 col-form-label">Indikator 2</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_a2" id="data_a2" class="form-control" value="Presentase frekuensi penyuluhan agama kepada kelompok sasaran yang memenuhi standar minimal " readonly>
              </div>
            </div>


            
            <div class="form-group row">
              <label for="skor_s1b" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s1b" id="skor_s1b" class="form-control" value="<?= $sasa1a['skor_s1b']; ?>" readonly>
                <?php if($sasa1a['skor_s1b'] >= 70) : ?>
                                <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                                <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?>
              
                </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal1b">edit</a>
            </div>
            

        
            

            <h4 class="card-title text-center">Sasaran program 2</h4> <br>
          <form action="<?= base_url('user/tambahdatasp'); ?>" method="post">
            
          
            <div class="form-group row">
                  <div class="col-sm-10 input-group flex-nowrap">
                    <input type="hidden" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" >
                  </div>
                </div>


            <div class="form-group row">
              <label for="id_skor_s1" class="col-sm-2 col-form-label">Sasaran Program 2 </label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                 <input type="text" name="id_skor_s2" id="id_skor_s2" class="form-control" value="Meningkatnya kualitas pembinaan moderasi beragama" readonly> 
             </div>
            </div>

          
            <div class="form-group row">
              <label for="data_b1" class="col-sm-2 col-form-label">Indikator 1</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_b1" id="data_b1" class="form-control" value="Tingkat moderasi beragama kelompok sasaran penyuluhan agama" readonly>
              </div>
            </div>

            
            <div class="form-group row">
              <label for="skor_s2a" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s2a" id="skor_s2a" class="form-control" value="<?= $sasa2a['skor_s2a']; ?>" readonly>
                


                <?php if($sasa2a['skor_s2a'] >= 70) : ?>
                              <div class="badge badge-success mb-2"><i class="fas fa-user-edit"></i> Tercapai</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Tercapai</div>
                              <?php endif; ?>

              </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal2a">edit</a> 
            </div>
<!-- end of sasaran program 2 -->
          
          



            <h4 class="card-title text-center">Sasaran program 3</h4> <br>
          <form action="<?= base_url('user/tambahdatasp'); ?>" method="post">
            
          
            <div class="form-group row">
                  <div class="col-sm-10 input-group flex-nowrap">
                    <input type="hidden" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" >
                  </div>
                </div>



            <div class="form-group row">
              <label for="id_skor_s3" class="col-sm-2 col-form-label">Sasaran Program 3 </label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                 <input type="text" name="id_skor_s3" id="id_skor_s3" class="form-control" value="Meningkatnya kualitas layanan administrasi dan literatur keagamaan" readonly> 
             </div>
            </div>


          
            <div class="form-group row">
              <label for="data_a3" class="col-sm-2 col-form-label">Indikator 1</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_a3" id="data_a3" class="form-control" value="Persentase layanan administrasi keagamaan secara digital" readonly>
              </div>
            </div>

            
            <div class="form-group row">
              <label for="skor_s3a" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s3a" id="skor_s3a" class="form-control" value="<?= $sasa3a['skor_s3a']; ?>" readonly>
                


                <?php if($sasa3a['skor_s3a'] >= 70) : ?>
                              <div class="badge badge-success mb-2"><i class="fas fa-user-edit"></i> Tercapai</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Tercapai</div>
                              <?php endif; ?>

              </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal3a">edit</a> 
            </div>
          
          

          
            <div class="form-group row">
              <label for="data_b3" class="col-sm-2 col-form-label">Indikator 2</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_b3" id="data_b3" class="form-control" value="Presentase kitab suci dan buku keagamaan terdistribusi sesuai dengan sasaran" readonly>
              </div>
            </div>


            
            <div class="form-group row">
              <label for="skor_s3b" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s3b" id="skor_s3b" class="form-control" value="<?= $sasa3a['skor_s3b']; ?>" readonly>
                <?php if($sasa3a['skor_s3b'] >= 70) : ?>
                                <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                                <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?>
              
                </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal3b">edit</a>
            </div>
<!-- end of sasaran program 3 -->
           


          <h4 class="card-title text-center">Sasaran program 4</h4> <br>
          <form action="<?= base_url('user/tambahdatasp'); ?>" method="post">
            
          
            <div class="form-group row">
                  <div class="col-sm-10 input-group flex-nowrap">
                    <input type="hidden" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" >
                  </div>
                </div>



            <div class="form-group row">
              <label for="id_skor_s4" class="col-sm-2 col-form-label">Sasaran Program 4 </label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                 <input type="text" name="id_skor_s4" id="id_skor_s4" class="form-control" value="Meningkatnya kualitas penerimaan dana sosial keagamaan" readonly> 
             </div>
            </div>


          
            <div class="form-group row">
              <label for="data_a4" class="col-sm-2 col-form-label">Indikator 1</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_a4" id="data_a4" class="form-control" value="Presentase partisipasi umat beragama dalam dana paramitha" readonly>
              </div>
            </div>

            
            <div class="form-group row">
              <label for="skor_s4a" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s4a" id="skor_s4a" class="form-control" value="<?= $sasa4a['skor_s4a']; ?>" readonly>
                


                <?php if($sasa4a['skor_s4a'] >= 70) : ?>
                              <div class="badge badge-success mb-2"><i class="fas fa-user-edit"></i> Tercapai</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Tercapai</div>
                              <?php endif; ?>

              </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal4a">edit</a> 
            </div>
<!-- end of sasaran program 4 -->
           


      <h4 class="card-title text-center">Sasaran program 5</h4> <br>
          <form action="<?= base_url('user/tambahdatasp'); ?>" method="post">
            
          
            <div class="form-group row">
                  <div class="col-sm-10 input-group flex-nowrap">
                    <input type="hidden" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" >
                  </div>
                </div>



            <div class="form-group row">
              <label for="id_skor_s5" class="col-sm-2 col-form-label">Sasaran Program 5 </label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                 <input type="text" name="id_skor_s5" id="id_skor_s5" class="form-control" value="Meningkatnya kualitas tenaga pendidik pada satuan pendidikan	" readonly> 
             </div>
            </div>


          
            <div class="form-group row">
              <label for="data_a5" class="col-sm-2 col-form-label">Indikator 1</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_a5" id="data_a5" class="form-control" value="Presentase guru bersertifikat pendidik" readonly>
              </div>
            </div>

            
            <div class="form-group row">
              <label for="skor_s5a" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s5a" id="skor_s5a" class="form-control" value="<?= $sasa5a['skor_s5a']; ?>" readonly>
                


                <?php if($sasa5a['skor_s5a'] >= 70) : ?>
                              <div class="badge badge-success mb-2"><i class="fas fa-user-edit"></i> Tercapai</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Tercapai</div>
                              <?php endif; ?>

              </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal5a">edit</a> 
            </div>
<!-- end of sasaran program 5 -->
           


<h4 class="card-title text-center">Sasaran program 6</h4> <br>
          <form action="<?= base_url('user/tambahdatasp'); ?>" method="post">
            
          
            <div class="form-group row">
                  <div class="col-sm-10 input-group flex-nowrap">
                    <input type="hidden" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" >
                  </div>
                </div>



            <div class="form-group row">
              <label for="id_skor_s6" class="col-sm-2 col-form-label">Sasaran Program 6 </label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                 <input type="text" name="id_skor_s6" id="id_skor_s6" class="form-control" value="Meningkatnya kualitas guru yang memenuhi SNP" readonly> 
             </div>
            </div>


          
            <div class="form-group row">
              <label for="data_a6" class="col-sm-2 col-form-label">Indikator 1</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_a6" id="data_a6" class="form-control" value="Presentase provinsi yang jumlah gurunya memenuhi SNP perjenjang" readonly>
              </div>
            </div>

            
            <div class="form-group row">
              <label for="skor_s6a" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s6a" id="skor_s6a" class="form-control" value="<?= $sasa6a['skor_s6a']; ?>" readonly>
                


                <?php if($sasa6a['skor_s6a'] >= 70) : ?>
                              <div class="badge badge-success mb-2"><i class="fas fa-user-edit"></i> Tercapai</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Tercapai</div>
                              <?php endif; ?>

              </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal6a">edit</a> 
            </div>
          


<!-- end of sasaran program 6 -->
          
          



<h4 class="card-title text-center">Sasaran program 7</h4> <br>
          <form action="<?= base_url('user/tambahdatasp'); ?>" method="post">
            
          
            <div class="form-group row">
                  <div class="col-sm-10 input-group flex-nowrap">
                    <input type="hidden" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" >
                  </div>
                </div>



            <div class="form-group row">
              <label for="id_skor_s7" class="col-sm-2 col-form-label">Sasaran Program 7 </label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                 <input type="text" name="id_skor_s7" id="id_skor_s7" class="form-control" value="Meningkatnya kualitas standar dan sistem penjaminan mutu pendidikan" readonly> 
             </div>
            </div>


          
            <div class="form-group row">
              <label for="data_a7" class="col-sm-2 col-form-label">Indikator 1</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_a7" id="data_a7" class="form-control" value="Presentase madrasah/sekolah pendidikan keagamaan yang memenuhi 8 SNP" readonly>
              </div>
            </div>

            
            <div class="form-group row">
              <label for="skor_s7a" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s7a" id="skor_s7a" class="form-control" value="<?= $sasa7a['skor_s7a']; ?>" readonly>
                


                <?php if($sasa7a['skor_s7a'] >= 70) : ?>
                              <div class="badge badge-success mb-2"><i class="fas fa-user-edit"></i> Tercapai</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Tercapai</div>
                              <?php endif; ?>

              </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal7a">edit</a> 
            </div>
          
          

          
            <div class="form-group row">
              <label for="data_b7" class="col-sm-2 col-form-label">Indikator 2</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_b7" id="data_b7" class="form-control" value="Presentase madrasah/sekolah pendidikan keagamaan yang melaksanakan prosedur sistem penjaminan mutu dan manajemen kelembagaan " readonly>
              </div>
            </div>


            
            <div class="form-group row">
              <label for="skor_s7b" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s7b" id="skor_s7b" class="form-control" value="<?= $sasa7a['skor_s7b']; ?>" readonly>
                <?php if($sasa7a['skor_s7b'] >= 70) : ?>
                                <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                                <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?>
              
                </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal7b">edit</a>
            </div>
<!-- end of sasaran program 7 -->
           


<h4 class="card-title text-center">Sasaran program 8</h4> <br>
          <form action="<?= base_url('user/tambahdatasp'); ?>" method="post">
            
          
            <div class="form-group row">
                  <div class="col-sm-10 input-group flex-nowrap">
                    <input type="hidden" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" >
                  </div>
                </div>



            <div class="form-group row">
              <label for="id_skor_s8" class="col-sm-2 col-form-label">Sasaran Program 8 </label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                 <input type="text" name="id_skor_s8" id="id_skor_s8" class="form-control" value="Meningkatnya partisipasi peserta didik pada satuan pendidikan" readonly> 
             </div>
            </div>


          
            <div class="form-group row">
              <label for="data_a8" class="col-sm-2 col-form-label">Indikator 1</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_a8" id="data_a8" class="form-control" value="Presentase peningkatan siswa pada Sekolah Keagamaan Buddha" readonly>
              </div>
            </div>

            
            <div class="form-group row">
              <label for="skor_s8a" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s8a" id="skor_s8a" class="form-control" value="<?= $sasa8a['skor_s8a']; ?>" readonly>
                


                <?php if($sasa8a['skor_s8a'] >= 70) : ?>
                              <div class="badge badge-success mb-2"><i class="fas fa-user-edit"></i> Tercapai</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Tercapai</div>
                              <?php endif; ?>

              </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal8a">edit</a> 
            </div>
<!-- end of sasaran program 8 -->



           


<h4 class="card-title text-center">Sasaran program 9</h4> <br>
          <form action="<?= base_url('user/tambahdatasp'); ?>" method="post">
            
          
            <div class="form-group row">
                  <div class="col-sm-10 input-group flex-nowrap">
                    <input type="hidden" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" >
                  </div>
                </div>



            <div class="form-group row">
              <label for="id_skor_s9" class="col-sm-2 col-form-label">Sasaran Program 9 </label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                 <input type="text" name="id_skor_s9" id="id_skor_s9" class="form-control" value="Menguatnya sistem pendidikan yang berperspektif moderat" readonly> 
             </div>
            </div>


          
            <div class="form-group row">
              <label for="data_a9" class="col-sm-2 col-form-label">Indikator 1</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_a9" id="data_a9" class="form-control" value="Rerata nilai ujian mata kuliah pendidikan agama pada PTK/PTU yang bermuatan moderasi beragama" readonly>
              </div>
            </div>

            
            <div class="form-group row">
              <label for="skor_s9a" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s9a" id="skor_s9a" class="form-control" value="<?= $sasa9a['skor_s9a']; ?>" readonly>
                


                <?php if($sasa9a['skor_s9a'] >= 70) : ?>
                              <div class="badge badge-success mb-2"><i class="fas fa-user-edit"></i> Tercapai</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Tercapai</div>
                              <?php endif; ?>

              </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal9a">edit</a> 
            </div>
          


<!-- end of sasaran program 9 -->

        

<h4 class="card-title text-center">Sasaran program 10</h4> <br>
          <form action="<?= base_url('user/tambahdatasp'); ?>" method="post">
            
          
            <div class="form-group row">
                  <div class="col-sm-10 input-group flex-nowrap">
                    <input type="hidden" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" >
                  </div>
                </div>



            <div class="form-group row">
              <label for="id_skor_s10" class="col-sm-2 col-form-label">Sasaran Program 10 </label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                 <input type="text" name="id_skor_s10" id="id_skor_s10" class="form-control" value="Meningkatnya kualitas tenaga pendidik" readonly> 
             </div>
            </div>


          
            <div class="form-group row">
              <label for="data_a10" class="col-sm-2 col-form-label">Indikator 1</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_a10" id="data_a10" class="form-control" value="Persentase dosen bersertifikat pendidik" readonly>
              </div>
            </div>

            
            <div class="form-group row">
              <label for="skor_s10a" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s10a" id="skor_s10a" class="form-control" value="<?= $sasa10a['skor_s10a']; ?>" readonly>
                


                <?php if($sasa10a['skor_s10a'] >= 70) : ?>
                              <div class="badge badge-success mb-2"><i class="fas fa-user-edit"></i> Tercapai</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Tercapai</div>
                              <?php endif; ?>

              </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal10a">edit</a> 
            </div>
          
          

          
            <div class="form-group row">
              <label for="data_b10" class="col-sm-2 col-form-label">Indikator 2</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_b10" id="data_b10" class="form-control" value="Persentase dosen berkualifikasi S3" readonly>
              </div>
            </div>


            
            <div class="form-group row">
              <label for="skor_s10b" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s10b" id="skor_s10b" class="form-control" value="<?= $sasa10a['skor_s10b']; ?>" readonly>
                <?php if($sasa10a['skor_s10b'] >= 70) : ?>
                                <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                                <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?>
              
                </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal10b">edit</a>
            </div>
<!-- end of sasaran program 10 -->



<h4 class="card-title text-center">Sasaran program 11</h4> <br>
          <form action="<?= base_url('user/tambahdatasp'); ?>" method="post">
            
          
            <div class="form-group row">
                  <div class="col-sm-10 input-group flex-nowrap">
                    <input type="hidden" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" >
                  </div>
                </div>



            <div class="form-group row">
              <label for="id_skor_s11" class="col-sm-2 col-form-label">Sasaran Program 11 </label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                 <input type="text" name="id_skor_s11" id="id_skor_s11" class="form-control" value="Meningkatnya kualitas standar dan sistem penjaminan mutu pendidikan" readonly> 
             </div>
            </div>


          
            <div class="form-group row">
              <label for="data_a11" class="col-sm-2 col-form-label">Indikator 1</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_a11" id="data_a11" class="form-control" value="Persentase Prodi PTK yang terakreditasi A/Unggul" readonly>
              </div>
            </div>

            
            <div class="form-group row">
              <label for="skor_s11a" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s11a" id="skor_s11a" class="form-control" value="<?= $sasa11a['skor_s11a']; ?>" readonly>
                


                <?php if($sasa11a['skor_s11a'] >= 70) : ?>
                              <div class="badge badge-success mb-2"><i class="fas fa-user-edit"></i> Tercapai</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Tercapai</div>
                              <?php endif; ?>

              </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal11a">edit</a> 
            </div>
          
          

          
            <div class="form-group row">
              <label for="data_b11" class="col-sm-2 col-form-label">Indikator 2</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_b11" id="data_b11" class="form-control" value="Persentase PTK yang melaksanakan prosedur sistem penjaminan mutu dan manajemen kelembagaan" readonly>
              </div>
            </div>


            
            <div class="form-group row">
              <label for="skor_s11b" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s11b" id="skor_s11b" class="form-control" value="<?= $sasa11a['skor_s11b']; ?>" readonly>
                <?php if($sasa11a['skor_s11b'] >= 70) : ?>
                                <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                                <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?>
              
                </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal11b">edit</a>
            </div>
<!-- end of sasaran program 11 -->



<h4 class="card-title text-center">Sasaran program 12</h4> <br>
          <form action="<?= base_url('user/tambahdatasp'); ?>" method="post">
            
          
            <div class="form-group row">
                  <div class="col-sm-10 input-group flex-nowrap">
                    <input type="hidden" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" >
                  </div>
                </div>



            <div class="form-group row">
              <label for="id_skor_s12" class="col-sm-2 col-form-label">Sasaran Program 12 </label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                 <input type="text" name="id_skor_s12" id="id_skor_s12" class="form-control" value="Meningkatnya kualitas standar dan sistem penjaminan mutu pendidikan" readonly> 
             </div>
            </div>


          
            <div class="form-group row">
              <label for="data_a12" class="col-sm-2 col-form-label">Indikator 1</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_a12" id="data_a12" class="form-control" value="Persentase jurnal ilmiah yang terakreditasi nasional" readonly>
              </div>
            </div>

            
            <div class="form-group row">
              <label for="skor_s12a" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s12a" id="skor_s12a" class="form-control" value="<?= $sasa12a['skor_s12a']; ?>" readonly>
                


                <?php if($sasa12a['skor_s12a'] >= 70) : ?>
                              <div class="badge badge-success mb-2"><i class="fas fa-user-edit"></i> Tercapai</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Tercapai</div>
                              <?php endif; ?>

              </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal12a">edit</a> 
            </div>
<!-- End of Sasaran Program 12 -->



<h4 class="card-title text-center">Sasaran program 13</h4> <br>
          <form action="<?= base_url('user/tambahdatasp'); ?>" method="post">
            
          
            <div class="form-group row">
                  <div class="col-sm-10 input-group flex-nowrap">
                    <input type="hidden" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" >
                  </div>
                </div>



            <div class="form-group row">
              <label for="id_skor_s13" class="col-sm-2 col-form-label">Sasaran Program 13 </label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                 <input type="text" name="id_skor_s13" id="id_skor_s13" class="form-control" value="Meningkatnya kualitas lulusan PTK yang diterima di dunia kerja" readonly> 
             </div>
            </div>


          
            <div class="form-group row">
              <label for="data_a13" class="col-sm-2 col-form-label">Indikator 1</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_a13" id="data_a13" class="form-control" value="Rerata Indeks Prestasi Kumulatif kelulusan mahasiswa PTK S1" readonly>
              </div>
            </div>

            
            <div class="form-group row">
              <label for="skor_s13a" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s13a" id="skor_s13a" class="form-control" value="<?= $sasa13a['skor_s13a']; ?>" readonly>
                


                <?php if($sasa13a['skor_s13a'] >= 70) : ?>
                              <div class="badge badge-success mb-2"><i class="fas fa-user-edit"></i> Tercapai</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Tercapai</div>
                              <?php endif; ?>

              </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal13a">edit</a> 
            </div>
          
          

          
            <div class="form-group row">
              <label for="data_b13" class="col-sm-2 col-form-label">Indikator 2</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_b13" id="data_b13" class="form-control" value="Rerata Indeks Prestasi Kumulatif kelulusan mahasiswa PTK S2" readonly>
              </div>
            </div>


            
            <div class="form-group row">
              <label for="skor_s13b" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s13b" id="skor_s13b" class="form-control" value="<?= $sasa13a['skor_s13b']; ?>" readonly>
                <?php if($sasa13a['skor_s13b'] >= 70) : ?>
                                <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                                <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?>
              
                </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal13b">edit</a>
            </div>



            <div class="form-group row">
              <label for="data_c13" class="col-sm-2 col-form-label">Indikator 3</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_c13" id="data_c13" class="form-control" value="Rerata masa tunggu lulusan sebelum memperoleh pekerjaan" readonly>
              </div>
            </div>


            
            <div class="form-group row">
              <label for="skor_s13c" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s13c" id="skor_s13c" class="form-control" value="<?= $sasa13a['skor_s13c']; ?>" readonly>
                <?php if($sasa13a['skor_s13c'] >= 70) : ?>
                                <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                                <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?>
              
                </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal13c">edit</a>
            </div>
<!-- end of sasaran program 13 -->




<h4 class="card-title text-center">Sasaran program 14</h4> <br>
          <form action="<?= base_url('user/tambahdatasp'); ?>" method="post">
            
          
            <div class="form-group row">
                  <div class="col-sm-10 input-group flex-nowrap">
                    <input type="hidden" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" >
                  </div>
                </div>



            <div class="form-group row">
              <label for="id_skor_s14" class="col-sm-2 col-form-label">Sasaran Program 14 </label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                 <input type="text" name="id_skor_s14" id="id_skor_s14" class="form-control" value="Meningkatnya tata kelola organisasi unit Eselon 1 yang efektif dan akuntabel" readonly> 
             </div>
            </div>


          
            <div class="form-group row">
              <label for="data_a14" class="col-sm-2 col-form-label">Indikator 1</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_a14" id="data_a14" class="form-control" value="Persentase tindak lanjut hasil pemeriksaan yang diselesaikan" readonly>
              </div>
            </div>

            
            <div class="form-group row">
              <label for="skor_s14a" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s14a" id="skor_s14a" class="form-control" value="<?= $sasa14a['skor_s14a']; ?>" readonly>
                


                <?php if($sasa14a['skor_s14a'] >= 70) : ?>
                              <div class="badge badge-success mb-2"><i class="fas fa-user-edit"></i> Tercapai</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Tercapai</div>
                              <?php endif; ?>

              </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal14a">edit</a> 
            </div>
          
          

          
            <div class="form-group row">
              <label for="data_b14" class="col-sm-2 col-form-label">Indikator 2</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_b14" id="data_b14" class="form-control" value="Nilai Penilaian Mandiri Pelaksanaan Reformasi Birokrasi (PMPRB)" readonly>
              </div>
            </div>


            
            <div class="form-group row">
              <label for="skor_s14b" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s14b" id="skor_s14b" class="form-control" value="<?= $sasa14a['skor_s14b']; ?>" readonly>
                <?php if($sasa14a['skor_s14b'] >= 70) : ?>
                                <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                                <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?>
              
                </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal14b">edit</a>
            </div>



            <div class="form-group row">
              <label for="data_c14" class="col-sm-2 col-form-label">Indikator 3</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_c14" id="data_c14" class="form-control" value="Nilai Sistem Akuntabilitas Kinerja Instansi Pemerintah (SAKIP)" readonly>
              </div>
            </div>


            
            <div class="form-group row">
              <label for="skor_s14c" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s14c" id="skor_s14c" class="form-control" value="<?= $sasa14a['skor_s14c']; ?>" readonly>
                <?php if($sasa14a['skor_s14c'] >= 70) : ?>
                                <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                                <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?>
              
                </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal14c">edit</a>
            </div>



            <div class="form-group row">
              <label for="data_d14" class="col-sm-2 col-form-label">Indikator 4</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_d14" id="data_d14" class="form-control" value="Nilai Maturitas SPIP" readonly>
              </div>
            </div>


            
            <div class="form-group row">
              <label for="skor_s14d" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s14d" id="skor_s14d" class="form-control" value="<?= $sasa14a['skor_s14d']; ?>" readonly>
                <?php if($sasa14a['skor_s14d'] >= 70) : ?>
                                <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                                <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?>
              
                </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal14d">edit</a>
            </div>



            <div class="form-group row">
              <label for="data_e14" class="col-sm-2 col-form-label">Indikator 5</label>
              <div class="col-sm-10 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="data_e14" id="data_e14" class="form-control" value="Indeks Profesionalitas ASN" readonly>
              </div>
            </div>


            
            <div class="form-group row">
              <label for="skor_s14e" class="col-sm-2 col-form-label">Pencapaian :</label>
              <div class="col-sm-3 input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fw fa-list"></i></span>
                </div>
                <input type="text" name="skor_s14e" id="skor_s14e" class="form-control" value="<?= $sasa14a['skor_s14e']; ?>" readonly>
                <?php if($sasa14a['skor_s14e'] >= 70) : ?>
                                <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                                <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?>
              
                </div>
              <a href="" class="btn btn-success mb-2" data-toggle="modal" data-target="#newModal14e">edit</a>
            </div>


<!-- end of sasaran program 14 -->



             <?= $this->session->flashdata('message'); ?>
            </form>            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>
</div>
</div>
</div>
</div>
<!-- End of Main Content -->


<!-- /.container-fluid -->

<!-- Modal S1 1 -->
<div class="modal fade" id="newModal1a" tabindex="-1" role="dialog" aria-labelledby="newModal1aLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal1aLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors1'); ?>" method="post">
      <?php foreach ($sasaran_program as $sp) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s1a" id="skor_s1a">Skor</label>
          
          <input type="text" class="form-control" name="skor_s1a" id="skor_s1a" placeholder="...." autocomplete="off" value="<?= $sp->skor_s1a ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s1" value="<?= $sp->id_skor_s1 ?>">
      <input type="hidden" name="username" value="<?= $sp->username ?>">
      <input type="hidden" name="skor_s1b" value="<?= $sp->skor_s1b ?>">
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s1 1 -->


<!-- Modal S1 2 -->
<div class="modal fade" id="newModal1b" tabindex="-1" role="dialog" aria-labelledby="newModal1bLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal1bLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors1'); ?>" method="post">
      <?php foreach ($sasaran_program as $sp) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s1b" id="skor_s1b">Skor</label>
          
          <input type="text" class="form-control" name="skor_s1b" id="skor_s1b" placeholder="...." autocomplete="off" value="<?= $sp->skor_s1b ?>">        
        
        </div>

      
      <input type="hidden" name="id_skor_s1" value="<?= $sp->id_skor_s1 ?>">
      <input type="hidden" name="username" value="<?= $sp->username ?>">
      <input type="hidden" name="skor_s1a" value="<?= $sp->skor_s1a ?>">
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
</div>
</div>
</form>
</div>
</div>
</div>
      
<!-- end of modal s1 2 -->



<!-- Modal S2 1 -->
<div class="modal fade" id="newModal2a" tabindex="-1" role="dialog" aria-labelledby="newModal2aLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal2aLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors2'); ?>" method="post">
      <?php foreach ($sasaran_program2 as $sp2) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s2a" id="skor_s2a">Skor</label>
          
          <input type="text" class="form-control" name="skor_s2a" id="skor_s2a" placeholder="...." autocomplete="off" value="<?= $sp2->skor_s2a ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s2" value="<?= $sp2->id_skor_s2 ?>">
      <input type="hidden" name="username" value="<?= $sp2->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s2 1 -->


<!-- Modal S3 1 -->
<div class="modal fade" id="newModal3a" tabindex="-1" role="dialog" aria-labelledby="newModal3aLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal3aLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors3'); ?>" method="post">
      <?php foreach ($sasaran_program3 as $sp3) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s3a" id="skor_s3a">Skor</label>
          
          <input type="text" class="form-control" name="skor_s3a" id="skor_s3a" placeholder="...." autocomplete="off" value="<?= $sp3->skor_s3a ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s3" value="<?= $sp3->id_skor_s3 ?>">
      <input type="hidden" name="skor_s3b" value="<?= $sp3->skor_s3b ?>">
      <input type="hidden" name="username" value="<?= $sp3->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s3 1 -->


<!-- Modal S3 2 -->
<div class="modal fade" id="newModal3b" tabindex="-1" role="dialog" aria-labelledby="newModal3bLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal3bLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors3'); ?>" method="post">
      <?php foreach ($sasaran_program3 as $sp3) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s3b" id="skor_s3b">Skor</label>
          
          <input type="text" class="form-control" name="skor_s3b" id="skor_s3b" placeholder="...." autocomplete="off" value="<?= $sp3->skor_s3b ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s3" value="<?= $sp3->id_skor_s3 ?>">
      <input type="hidden" name="skor_s3a" value="<?= $sp3->skor_s3a ?>">
      <input type="hidden" name="username" value="<?= $sp3->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s2 1 -->



<!-- Modal S4 1 -->
<div class="modal fade" id="newModal4a" tabindex="-1" role="dialog" aria-labelledby="newModal4aLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal4aLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors4'); ?>" method="post">
      <?php foreach ($sasaran_program4 as $sp4) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s4a" id="skor_s4a">Skor</label>
          
          <input type="text" class="form-control" name="skor_s4a" id="skor_s4a" placeholder="...." autocomplete="off" value="<?= $sp4->skor_s4a ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s4" value="<?= $sp4->id_skor_s4 ?>">
      <input type="hidden" name="username" value="<?= $sp4->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s4 1 -->



<!-- Modal S5 1 -->
<div class="modal fade" id="newModal5a" tabindex="-1" role="dialog" aria-labelledby="newModal5aLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal5aLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors5'); ?>" method="post">
      <?php foreach ($sasaran_program5 as $sp5) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s5a" id="skor_s5a">Skor</label>
          
          <input type="text" class="form-control" name="skor_s5a" id="skor_s5a" placeholder="...." autocomplete="off" value="<?= $sp5->skor_s5a ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s5" value="<?= $sp5->id_skor_s5 ?>">
      <input type="hidden" name="username" value="<?= $sp5->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s5 1 -->



<!-- Modal S6 1 -->
<div class="modal fade" id="newModal6a" tabindex="-1" role="dialog" aria-labelledby="newModal6aLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal6aLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors6'); ?>" method="post">
      <?php foreach ($sasaran_program6 as $sp6) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s6a" id="skor_s6a">Skor</label>
          
          <input type="text" class="form-control" name="skor_s6a" id="skor_s6a" placeholder="...." autocomplete="off" value="<?= $sp6->skor_s6a ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s6" value="<?= $sp6->id_skor_s6 ?>">
      <input type="hidden" name="username" value="<?= $sp6->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s6 1 -->


<!-- Modal S7 1 -->
<div class="modal fade" id="newModal7a" tabindex="-1" role="dialog" aria-labelledby="newModal7aLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal7aLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors7'); ?>" method="post">
      <?php foreach ($sasaran_program7 as $sp7) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s7a" id="skor_s7a">Skor</label>
          
          <input type="text" class="form-control" name="skor_s7a" id="skor_s7a" placeholder="...." autocomplete="off" value="<?= $sp7->skor_s7a ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s7" value="<?= $sp7->id_skor_s7 ?>">
      <input type="hidden" name="skor_s7b" value="<?= $sp7->skor_s7b ?>">
      <input type="hidden" name="username" value="<?= $sp7->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s7 1 -->


<!-- Modal S7 2 -->
<div class="modal fade" id="newModal7b" tabindex="-1" role="dialog" aria-labelledby="newModal7bLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal7bLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors7'); ?>" method="post">
      <?php foreach ($sasaran_program7 as $sp7) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s7b" id="skor_s7b">Skor</label>
          
          <input type="text" class="form-control" name="skor_s7b" id="skor_s7b" placeholder="...." autocomplete="off" value="<?= $sp7->skor_s7b ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s7" value="<?= $sp7->id_skor_s7 ?>">
      <input type="hidden" name="skor_s7a" value="<?= $sp7->skor_s7a ?>">
      <input type="hidden" name="username" value="<?= $sp7->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s7 2 -->


<!-- Modal S8 1 -->
<div class="modal fade" id="newModal8a" tabindex="-1" role="dialog" aria-labelledby="newModal8aLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal8aLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors8'); ?>" method="post">
      <?php foreach ($sasaran_program8 as $sp8) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s8a" id="skor_s8a">Skor</label>
          
          <input type="text" class="form-control" name="skor_s8a" id="skor_s8a" placeholder="...." autocomplete="off" value="<?= $sp8->skor_s8a ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s8" value="<?= $sp8->id_skor_s8 ?>">
      <input type="hidden" name="username" value="<?= $sp8->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s8 1 -->


<!-- Modal S9 1 -->
<div class="modal fade" id="newModal9a" tabindex="-1" role="dialog" aria-labelledby="newModal9aLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal9aLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors9'); ?>" method="post">
      <?php foreach ($sasaran_program9 as $sp9) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s9a" id="skor_s9a">Skor</label>
          
          <input type="text" class="form-control" name="skor_s9a" id="skor_s9a" placeholder="...." autocomplete="off" value="<?= $sp9->skor_s9a ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s9" value="<?= $sp9->id_skor_s9 ?>">
      <input type="hidden" name="username" value="<?= $sp9->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s9 1 -->



<!-- Modal S10 1 -->
<div class="modal fade" id="newModal10a" tabindex="-1" role="dialog" aria-labelledby="newModal10aLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal10aLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors10'); ?>" method="post">
      <?php foreach ($sasaran_program10 as $sp10) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s10a" id="skor_s10a">Skor</label>
          
          <input type="text" class="form-control" name="skor_s10a" id="skor_s10a" placeholder="...." autocomplete="off" value="<?= $sp10->skor_s10a ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s10" value="<?= $sp10->id_skor_s10 ?>">
      <input type="hidden" name="skor_s10b" value="<?= $sp10->skor_s10b ?>">
      <input type="hidden" name="username" value="<?= $sp10->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s10 1 -->


<!-- Modal S10 2 -->
<div class="modal fade" id="newModal10b" tabindex="-1" role="dialog" aria-labelledby="newModal10bLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal10bLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors10'); ?>" method="post">
      <?php foreach ($sasaran_program10 as $sp10) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s10b" id="skor_s10b">Skor</label>
          
          <input type="text" class="form-control" name="skor_s10b" id="skor_s10b" placeholder="...." autocomplete="off" value="<?= $sp10->skor_s10b ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s10" value="<?= $sp10->id_skor_s10 ?>">
      <input type="hidden" name="skor_s10a" value="<?= $sp10->skor_s10a ?>">
      <input type="hidden" name="username" value="<?= $sp10->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s10 2 -->




<!-- Modal S11 1 -->
<div class="modal fade" id="newModal11a" tabindex="-1" role="dialog" aria-labelledby="newModal11aLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal11aLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors11'); ?>" method="post">
      <?php foreach ($sasaran_program11 as $sp11) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s11a" id="skor_s11a">Skor</label>
          
          <input type="text" class="form-control" name="skor_s11a" id="skor_s11a" placeholder="...." autocomplete="off" value="<?= $sp11->skor_s11a ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s11" value="<?= $sp11->id_skor_s11 ?>">
      <input type="hidden" name="skor_s11b" value="<?= $sp11->skor_s11b ?>">
      <input type="hidden" name="username" value="<?= $sp11->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s11 1 -->


<!-- Modal S11 2 -->
<div class="modal fade" id="newModal11b" tabindex="-1" role="dialog" aria-labelledby="newModal11bLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal11bLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors11'); ?>" method="post">
      <?php foreach ($sasaran_program11 as $sp11) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s11b" id="skor_s11b">Skor</label>
          
          <input type="text" class="form-control" name="skor_s11b" id="skor_s11b" placeholder="...." autocomplete="off" value="<?= $sp11->skor_s11b ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s11" value="<?= $sp11->id_skor_s11 ?>">
      <input type="hidden" name="skor_s11a" value="<?= $sp11->skor_s11a ?>">
      <input type="hidden" name="username" value="<?= $sp11->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s11 2 -->


<!-- Modal S12 1 -->
<div class="modal fade" id="newModal12a" tabindex="-1" role="dialog" aria-labelledby="newModal12aLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal12aLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors12'); ?>" method="post">
      <?php foreach ($sasaran_program12 as $sp12) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s12a" id="skor_s12a">Skor</label>
          
          <input type="text" class="form-control" name="skor_s12a" id="skor_s12a" placeholder="...." autocomplete="off" value="<?= $sp12->skor_s12a ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s12" value="<?= $sp12->id_skor_s12 ?>">
      <input type="hidden" name="username" value="<?= $sp12->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s12 1 -->



<!-- Modal S13 1 -->
<div class="modal fade" id="newModal13a" tabindex="-1" role="dialog" aria-labelledby="newModal13aLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal13aLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors13'); ?>" method="post">
      <?php foreach ($sasaran_program13 as $sp13) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s13a" id="skor_s13a">Skor</label>
          
          <input type="text" class="form-control" name="skor_s13a" id="skor_s13a" placeholder="...." autocomplete="off" value="<?= $sp13->skor_s13a ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s13" value="<?= $sp13->id_skor_s13 ?>">
      <input type="hidden" name="skor_s13b" value="<?= $sp13->skor_s13b ?>">
      <input type="hidden" name="skor_s13c" value="<?= $sp13->skor_s13c ?>">
      <input type="hidden" name="username" value="<?= $sp13->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s13 1 -->


<!-- Modal S13 2 -->
<div class="modal fade" id="newModal13b" tabindex="-1" role="dialog" aria-labelledby="newModal13bLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal13bLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors13'); ?>" method="post">
      <?php foreach ($sasaran_program13 as $sp13) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s13b" id="skor_s13b">Skor</label>
          
          <input type="text" class="form-control" name="skor_s13b" id="skor_s13b" placeholder="...." autocomplete="off" value="<?= $sp13->skor_s13b ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s13" value="<?= $sp13->id_skor_s13 ?>">
      <input type="hidden" name="skor_s13a" value="<?= $sp13->skor_s13a ?>">
      <input type="hidden" name="skor_s13c" value="<?= $sp13->skor_s13c ?>">
      <input type="hidden" name="username" value="<?= $sp13->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s13 2 -->



<!-- Modal S13 3 -->
<div class="modal fade" id="newModal13c" tabindex="-1" role="dialog" aria-labelledby="newModal13cLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal13cLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors13'); ?>" method="post">
      <?php foreach ($sasaran_program13 as $sp13) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s13c" id="skor_s13c">Skor</label>
          
          <input type="text" class="form-control" name="skor_s13c" id="skor_s13c" placeholder="...." autocomplete="off" value="<?= $sp13->skor_s13c ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s13" value="<?= $sp13->id_skor_s13 ?>">
      <input type="hidden" name="skor_s13b" value="<?= $sp13->skor_s13b ?>">
      <input type="hidden" name="skor_s13a" value="<?= $sp13->skor_s13a ?>">
      <input type="hidden" name="username" value="<?= $sp13->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s13 3 -->


<!-- Modal S14 1 -->
<div class="modal fade" id="newModal14a" tabindex="-1" role="dialog" aria-labelledby="newModal14aLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal14aLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors14'); ?>" method="post">
      <?php foreach ($sasaran_program14 as $sp14) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s14a" id="skor_s14a">Skor</label>
          
          <input type="text" class="form-control" name="skor_s14a" id="skor_s14a" placeholder="...." autocomplete="off" value="<?= $sp14->skor_s14a ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s14" value="<?= $sp14->id_skor_s14 ?>">
      <input type="hidden" name="skor_s14b" value="<?= $sp14->skor_s14b ?>">
      <input type="hidden" name="skor_s14c" value="<?= $sp14->skor_s14c ?>">
      <input type="hidden" name="skor_s14d" value="<?= $sp14->skor_s14d ?>">
      <input type="hidden" name="skor_s14e" value="<?= $sp14->skor_s14e ?>">
      <input type="hidden" name="username" value="<?= $sp14->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s14 1 -->


<!-- Modal S14 2 -->
<div class="modal fade" id="newModal14b" tabindex="-1" role="dialog" aria-labelledby="newModal14bLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal14bLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors14'); ?>" method="post">
      <?php foreach ($sasaran_program14 as $sp14) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s14b" id="skor_s14b">Skor</label>
          
          <input type="text" class="form-control" name="skor_s14b" id="skor_s14b" placeholder="...." autocomplete="off" value="<?= $sp14->skor_s14b ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s14" value="<?= $sp14->id_skor_s14 ?>">
      <input type="hidden" name="skor_s14a" value="<?= $sp14->skor_s14a ?>">
      <input type="hidden" name="skor_s14c" value="<?= $sp14->skor_s14c ?>">
      <input type="hidden" name="skor_s14d" value="<?= $sp14->skor_s14d ?>">
      <input type="hidden" name="skor_s14e" value="<?= $sp14->skor_s14e ?>">
      <input type="hidden" name="username" value="<?= $sp14->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s14 2 -->



<!-- Modal S14 3 -->
<div class="modal fade" id="newModal14c" tabindex="-1" role="dialog" aria-labelledby="newModal14cLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal14cLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors14'); ?>" method="post">
      <?php foreach ($sasaran_program14 as $sp14) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s14c" id="skor_s14c">Skor</label>
          
          <input type="text" class="form-control" name="skor_s14c" id="skor_s14c" placeholder="...." autocomplete="off" value="<?= $sp14->skor_s14c ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s14" value="<?= $sp14->id_skor_s14 ?>">
      <input type="hidden" name="skor_s14b" value="<?= $sp14->skor_s14b ?>">
      <input type="hidden" name="skor_s14a" value="<?= $sp14->skor_s14a ?>">
      <input type="hidden" name="skor_s14d" value="<?= $sp14->skor_s14d ?>">
      <input type="hidden" name="skor_s14e" value="<?= $sp14->skor_s14e ?>">
      <input type="hidden" name="username" value="<?= $sp14->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s14 3 -->



<!-- Modal S14 4 -->
<div class="modal fade" id="newModal14d" tabindex="-1" role="dialog" aria-labelledby="newModal14dLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal14dLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors14'); ?>" method="post">
      <?php foreach ($sasaran_program14 as $sp14) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s14d" id="skor_s14d">Skor</label>
          
          <input type="text" class="form-control" name="skor_s14d" id="skor_s14d" placeholder="...." autocomplete="off" value="<?= $sp14->skor_s14d ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s14" value="<?= $sp14->id_skor_s14 ?>">
      <input type="hidden" name="skor_s14a" value="<?= $sp14->skor_s14a ?>">
      <input type="hidden" name="skor_s14c" value="<?= $sp14->skor_s14c ?>">
      <input type="hidden" name="skor_s14b" value="<?= $sp14->skor_s14b ?>">
      <input type="hidden" name="skor_s14e" value="<?= $sp14->skor_s14e ?>">
      <input type="hidden" name="username" value="<?= $sp14->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s14 4 -->



<!-- Modal S14 5 -->
<div class="modal fade" id="newModal14e" tabindex="-1" role="dialog" aria-labelledby="newModal14eLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newModal14eLabel">Add skor pencapaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      

      <form action="<?= base_url('user/addskors14'); ?>" method="post">
      <?php foreach ($sasaran_program14 as $sp14) : ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="skor_s14e" id="skor_s14e">Skor</label>
          
          <input type="text" class="form-control" name="skor_s14e" id="skor_s14e" placeholder="...." autocomplete="off" value="<?= $sp14->skor_s14e ?>">
        
        </div>

      
      <input type="hidden" name="id_skor_s14" value="<?= $sp14->id_skor_s14 ?>">
      <input type="hidden" name="skor_s14b" value="<?= $sp14->skor_s14b ?>">
      <input type="hidden" name="skor_s14a" value="<?= $sp14->skor_s14a ?>">
      <input type="hidden" name="skor_s14d" value="<?= $sp14->skor_s14d ?>">
      <input type="hidden" name="skor_s14c" value="<?= $sp14->skor_s14c ?>">
      <input type="hidden" name="username" value="<?= $sp14->username ?>">
      
      
      <?php endforeach ; ?>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">edit</button>
</div>
</div>
</form>
</div>
</div>
</div>      
<!-- end of modal s14 4 -->


<?php $this->load->view('footer');?>