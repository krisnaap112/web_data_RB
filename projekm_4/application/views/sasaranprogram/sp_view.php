<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>ABC - Manager</title>
  <link rel="icon" href="<?php echo base_url();?>assets/images/kemenag.png">


  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>assets/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/sbadmin2/css/sb-admin-2a.css" rel="stylesheet">
<br>
<br>
<br>

</head>

<body class="bg-gradient-komplit">



  <!-- Page Wrapper -->
  


    <!-- Main Content -->            
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                   

                </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <?= $this->session->flashdata('message'); ?>
                        <table class="table table-striped" id="table-2">
                        <thead class="bg-gray-900">
                          <tr>
                            
                            <th>Sasaran Program</th>
                            <th>Indikator Kinerja</th>
                            <th>Target</th> 
                            <th>Capaian</th>
                            <th>Status</th>
                            </tr>
                        </thead>
                          <tbody>
                            <?php 
                            
                            $st[1] = '1. Meningkatnya kualitas bimbingan dan penyuluhan agama';
                            $st[2] = '';
                            $st[3] = '2. Meningkatnya kualitas pembinaan moderasi beragama';
                            $st[4] = '3. Meningkatnya kualitas layanan administrasi dan literatur keagamaan';
                            $st[5] = '';
                            $st[6] = '4. Meningkatnya kualitas penerimaan dana sosial keagamaan';
                            $st[7] = '5. Meningkatnya kualitas tenaga pendidik pada satuan pendidikan';
                            $st[8] = '6. Meningkatnya kualitas guru yang memenuhi SNP';
                            $st[9] = '7. Meningkatnya kualitas standar dan sistem penjaminan mutu pendidikan';
                            $st[10] = '';
                            $st[11] = '8. Meningkatnya partisipasi peserta didik pada satuan pendidikan';
                            $st[12] = '9. Menguatnya sistem pendidikan yang berperspektif moderat';
                            $st[13] = '10. Meningkatnya kualitas tenaga pendidik';
                            $st[14] = '';
                            $st[15] = '11. Meningkatnya kualitas standar dan sistem penjaminan mutu pendidikan';
                            $st[16] = '';
                            $st[17] = '12. Meningkatnya kualitas standar dan sistem penjaminan mutu pendidikan';
                            $st[18] = '13. Meningkatnya kualitas lulusan PTK yang diterima di dunia kerja';
                            $st[19] = '';
                            $st[20] = '';
                            $st[21] = '14. Meningkatnya tata kelola organisasi unit Eselon 1 yang efektif dan akuntabel';
                            $st[22] = '';
                            $st[23] = '';
                            $st[24] = '';
                            $st[25] = '';

                            $idktr[1] = 'a. Rasio penyuluh agama dengan kelompok sasaran yang mendapatkan bimbingan agama';
                            $idktr[2] = 'b. Presentase frekuensi penyuluhan agama kepada kelompok sasaran yang memenuhi standar minimal';
                            $idktr[3] = 'a. Tingkat moderasi beragama kelompok sasaran penyuluhan agama';
                            $idktr[4] = 'a. Persentase layanan administrasi keagamaan secara digital';
                            $idktr[5] = 'b. Presentase kitab suci dan buku keagamaan terdistribusi sesuai dengan sasaran';
                            $idktr[6] = 'a. Presentase partisipasi umat beragama dalam dana paramitha';
                            $idktr[7] = 'a. Presentase guru bersertifikat pendidik';
                            $idktr[8] = 'a. Presentase provinsi yang jumlah gurunya memenuhi SNP perjenjang';
                            $idktr[9] = 'a. Presentase madrasah/sekolah pendidikan keagamaan yang memenuhi 8 SNP';
                            $idktr[10] = 'b. Presentase madrasah/sekolah pendidikan keagamaan yang melaksanakan prosedur sistem penjaminan mutu dan manajemen kelembagaan';
                            $idktr[11] = 'a. Presentase peningkatan siswa pada Sekolah Keagamaan Buddha ';
                            $idktr[12] = 'a. Rerata nilai ujian mata kuliah pendidikan agama pada PTK/PTU yang bermuatan moderasi beragama';
                            $idktr[13] = 'a. Persentase dosen bersertifikat pendidik';
                            $idktr[14] = 'b. Persentase dosen berkualifikasi S3';
                            $idktr[15] = 'a. Persentase Prodi PTK yang terakreditasi A/Unggul';
                            $idktr[16] = 'b. Persentase PTK yang melaksanakan prosedur sistem penjaminan mutu dan manajemen kelembagaan';
                            $idktr[17] = 'a. Persentase jurnal ilmiah yang terakreditasi nasional';
                            $idktr[18] = 'a. Rerata Indeks Prestasi Kumulatif kelulusan mahasiswa PTK S1';
                            $idktr[19] = 'b. Rerata Indeks Prestasi Kumulatif kelulusan mahasiswa PTK S2';
                            $idktr[20] = 'C. Rerata masa tunggu lulusan sebelum memperoleh pekerjaan';
                            $idktr[21] = 'a. Persentase tindak lanjut hasil pemeriksaan yang diselesaikan';
                            $idktr[22] = 'b. Nilai Penilaian Mandiri Pelaksanaan Reformasi Birokrasi (PMPRB)';
                            $idktr[23] = 'c. Nilai Sistem Akuntabilitas Kinerja Instansi Pemerintah (SAKIP)';
                            $idktr[24] = 'd. Nilai Maturitas SPIP';
                            $idktr[25] = 'e. Indeks Profesionalitas ASN';
                            

                            $trgt[1] = '75';
                            $trgt[2] = '75';
                            $trgt[3] = '75';  
                            $trgt[4] = '75';
                            $trgt[5] = '75';
                            $trgt[6] = '75';
                            $trgt[7] = '75';
                            $trgt[8] = '75';  
                            $trgt[9] = '75';  
                            $trgt[10] = '75';  
                            $trgt[11] = '75';  
                            $trgt[12] = '75';  
                            $trgt[13] = '75';  
                            $trgt[14] = '75';  
                            $trgt[15] = '75';  
                            $trgt[16] = '75';  
                            $trgt[17] = '75';  
                            $trgt[18] = '75';  
                            $trgt[19] = '75';  
                            $trgt[20] = '75';  
                            $trgt[21] = '75';  
                            $trgt[22] = '75';  
                            $trgt[23] = '75';  
                            $trgt[24] = '75';  
                            $trgt[25] = '75';  
                           

                            $y=1;
                            $x=1;
                            $z=1;
                            $status=0;
                            

                            foreach($sasap as $sp) : ?>                         
                            <tr>
                            
                              <td><?= $st[1]; ?></td>
                              <td><?= $idktr[1]; ?></td>
                              <td><?= $trgt[1]; ?></td>
                              <td><?= $sp->skor_s1a; ?></td>
                              <td><?php if(($sp->skor_s1a) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 

                              
                            foreach($sasap as $sp) : ?>                         
                            <tr>
                            
                              <td><?= $st[2]; ?></td>
                              <td><?= $idktr[2]; ?></td>
                              <td><?= $trgt[2]; ?></td>
                              <td><?= $sp->skor_s1b; ?></td>
                              <td><?php if(($sp->skor_s1b) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 
 

                            foreach($sasap2 as $sp2) : ?>                         
                              <tr>
                            
                              <td><?= $st[3]; ?></td>
                              <td><?= $idktr[3]; ?></td>
                              <td><?= $trgt[3]; ?></td>
                              <td><?= $sp2->skor_s2a; ?></td>
                              <td><?php if(($sp2->skor_s2a) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 



                            foreach($sasap3 as $sp3) : ?>                         
                            <tr>
                            
                              <td><?= $st[4]; ?></td>
                              <td><?= $idktr[4]; ?></td>
                              <td><?= $trgt[4]; ?></td>
                              <td><?= $sp3->skor_s3a; ?></td>
                              <td><?php if(($sp3->skor_s3a) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 

                              
                            foreach($sasap3 as $sp3) : ?>                         
                            <tr>
                            
                              <td><?= $st[5]; ?></td>
                              <td><?= $idktr[5]; ?></td>
                              <td><?= $trgt[5]; ?></td>
                              <td><?= $sp3->skor_s3b; ?></td>
                              <td><?php if(($sp3->skor_s3b) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 
 


                                foreach($sasap4 as $sp4) : ?>                         
                            <tr>
                            
                              <td><?= $st[6]; ?></td>
                              <td><?= $idktr[6]; ?></td>
                              <td><?= $trgt[6]; ?></td>
                              <td><?= $sp4->skor_s4a; ?></td>
                              <td><?php if(($sp4->skor_s4a) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 

                              
                            foreach($sasap5 as $sp5) : ?>                         
                            <tr>
                            
                              <td><?= $st[7]; ?></td>
                              <td><?= $idktr[7]; ?></td>
                              <td><?= $trgt[7]; ?></td>
                              <td><?= $sp5->skor_s5a; ?></td>
                              <td><?php if(($sp5->skor_s5a) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach;
 

                            foreach($sasap6 as $sp6) : ?>                         
                            <tr>
                            
                              <td><?= $st[8]; ?></td>
                              <td><?= $idktr[8]; ?></td>
                              <td><?= $trgt[8]; ?></td>
                              <td><?= $sp6->skor_s6a; ?></td>
                              <td><?php if(($sp6->skor_s6a) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 
 

                            
                                foreach($sasap7 as $sp7) : ?>                         
                            <tr>
                            
                              <td><?= $st[9]; ?></td>
                              <td><?= $idktr[9]; ?></td>
                              <td><?= $trgt[9]; ?></td>
                              <td><?= $sp7->skor_s7a; ?></td>
                              <td><?php if(($sp7->skor_s7a) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 


                                foreach($sasap7 as $sp7) : ?>                         
                            <tr>
                            
                              <td><?= $st[10]; ?></td>
                              <td><?= $idktr[10]; ?></td>
                              <td><?= $trgt[10]; ?></td>
                              <td><?= $sp7->skor_s7b; ?></td>
                              <td><?php if(($sp7->skor_s7b) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 



                                foreach($sasap8 as $sp8) : ?>                         
                            <tr>
                            
                              <td><?= $st[11]; ?></td>
                              <td><?= $idktr[11]; ?></td>
                              <td><?= $trgt[11]; ?></td>
                              <td><?= $sp8->skor_s8a; ?></td>
                              <td><?php if(($sp8->skor_s8a) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach;



                                foreach($sasap9 as $sp9) : ?>                         
                            <tr>
                            
                              <td><?= $st[12]; ?></td>
                              <td><?= $idktr[12]; ?></td>
                              <td><?= $trgt[12]; ?></td>
                              <td><?= $sp9->skor_s9a; ?></td>
                              <td><?php if(($sp9->skor_s9a) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 


                                foreach($sasap10 as $sp10) : ?>                         
                            <tr>
                            
                              <td><?= $st[13]; ?></td>
                              <td><?= $idktr[13]; ?></td>
                              <td><?= $trgt[13]; ?></td>
                              <td><?= $sp10->skor_s10a; ?></td>
                              <td><?php if(($sp10->skor_s10a) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach;


                                foreach($sasap10 as $sp10) : ?>                         
                            <tr>
                            
                              <td><?= $st[14]; ?></td>
                              <td><?= $idktr[14]; ?></td>
                              <td><?= $trgt[14]; ?></td>
                              <td><?= $sp10->skor_s10b; ?></td>
                              <td><?php if(($sp10->skor_s10b) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 


                                foreach($sasap11 as $sp11) : ?>                         
                            <tr>
                            
                              <td><?= $st[15]; ?></td>
                              <td><?= $idktr[15]; ?></td>
                              <td><?= $trgt[15]; ?></td>
                              <td><?= $sp11->skor_s11a; ?></td>
                              <td><?php if(($sp11->skor_s11a) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach;


                                foreach($sasap11 as $sp11) : ?>                         
                            <tr>
                            
                              <td><?= $st[16]; ?></td>
                              <td><?= $idktr[16]; ?></td>
                              <td><?= $trgt[16]; ?></td>
                              <td><?= $sp11->skor_s11b; ?></td>
                              <td><?php if(($sp11->skor_s11b) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 


                                foreach($sasap12 as $sp12) : ?>                         
                            <tr>
                            
                              <td><?= $st[17]; ?></td>
                              <td><?= $idktr[17]; ?></td>
                              <td><?= $trgt[17]; ?></td>
                              <td><?= $sp12->skor_s12a; ?></td>
                              <td><?php if(($sp12->skor_s12a) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 


                                foreach($sasap13 as $sp13) : ?>                         
                            <tr>
                            
                              <td><?= $st[18]; ?></td>
                              <td><?= $idktr[18]; ?></td>
                              <td><?= $trgt[18]; ?></td>
                              <td><?= $sp13->skor_s13a; ?></td>
                              <td><?php if(($sp13->skor_s13a) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach;


                                foreach($sasap13 as $sp13) : ?>                         
                            <tr>
                            
                              <td><?= $st[19]; ?></td>
                              <td><?= $idktr[19]; ?></td>
                              <td><?= $trgt[19]; ?></td>
                              <td><?= $sp13->skor_s13b; ?></td>
                              <td><?php if(($sp13->skor_s13b) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 

                                foreach($sasap13 as $sp13) : ?>                         
                            <tr>
                            
                              <td><?= $st[20]; ?></td>
                              <td><?= $idktr[20]; ?></td>
                              <td><?= $trgt[20]; ?></td>
                              <td><?= $sp13->skor_s13c; ?></td>
                              <td><?php if(($sp13->skor_s13c) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 


                                foreach($sasap14 as $sp14) : ?>                         
                            <tr>
                            
                              <td><?= $st[21]; ?></td>
                              <td><?= $idktr[21]; ?></td>
                              <td><?= $trgt[21]; ?></td>
                              <td><?= $sp14->skor_s14a; ?></td>
                              <td><?php if(($sp14->skor_s14a) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 


                                
                                foreach($sasap14 as $sp14) : ?>                         
                            <tr>
                            
                              <td><?= $st[22]; ?></td>
                              <td><?= $idktr[22]; ?></td>
                              <td><?= $trgt[22]; ?></td>
                              <td><?= $sp14->skor_s14b; ?></td>
                              <td><?php if(($sp14->skor_s14b) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 


                                foreach($sasap14 as $sp14) : ?>                         
                            <tr>
                            
                              <td><?= $st[23]; ?></td>
                              <td><?= $idktr[23]; ?></td>
                              <td><?= $trgt[23]; ?></td>
                              <td><?= $sp14->skor_s14c; ?></td>
                              <td><?php if(($sp14->skor_s14c) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 


                                foreach($sasap14 as $sp14) : ?>                         
                            <tr>
                            
                              <td><?= $st[24]; ?></td>
                              <td><?= $idktr[24]; ?></td>
                              <td><?= $trgt[24]; ?></td>
                              <td><?= $sp14->skor_s14d; ?></td>
                              <td><?php if(($sp14->skor_s14d) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
                              </tr>
                                <?php endforeach; 


                                foreach($sasap14 as $sp14) : ?>                         
                            <tr>
                            
                              <td><?= $st[25]; ?></td>
                              <td><?= $idktr[25]; ?></td>
                              <td><?= $trgt[25]; ?></td>
                              <td><?= $sp14->skor_s14e; ?></td>
                              <td><?php if(($sp14->skor_s14e) >= 70) : ?>
                              <div class="badge badge-success"><i class="fas fa-user-edit"></i> Terpenuhi</div>
                              <?php else: ?>
                              <div class="badge badge-warning"><i class="fas fa-user"></i> Belum Terpenuhi</div>
                              <?php endif; ?></td>
                          
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
          </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>assets/sbadmin2/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>assets/sbadmin2/js/sb-admin-2.min.js"></script>

  </body>
  </html>



