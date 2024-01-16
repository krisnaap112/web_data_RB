
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Data ABC - Manager <?php echo date("Y");?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Anda yakin akan keluar Aplikasi?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo site_url('login/logout')?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
 
  <script src="<?php echo base_url();?>assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>assets/sbadmin2/js/sb-admin-2.min.js"></script>



  <!-- General JS Scripts -->
  <script src="<?= base_url("assets/dist/"); ?>assets/modules/jquery.min.js"></script>
  <script src="<?= base_url("assets/dist/"); ?>assets/modules/popper.js"></script>
  <script src="<?= base_url("assets/dist/"); ?>assets/modules/tooltip.js"></script>
  <script src="<?= base_url("assets/dist/"); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url("assets/dist/"); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url("assets/dist/"); ?>assets/modules/moment.min.js"></script>
  <script src="<?= base_url("assets/dist/"); ?>assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="<?= base_url("assets/dist/"); ?>assets/modules/datatables/datatables.min.js"></script>
  <script src="<?= base_url("assets/dist/"); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url("assets/dist/"); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="<?= base_url("assets/dist/"); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>

   <!-- JS Libraies -->
   <script src="<?= base_url("assets/"); ?>js/summernote-bs4.js"></script>
   <script src="<?= base_url("assets/"); ?>js/codemirror.js"></script>
   <script src="<?= base_url("assets/"); ?>js/javascript.js"></script>
   <script src="<?= base_url("assets/"); ?>js/jquery.selectric.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url("assets/dist/"); ?>assets/js/page/modules-datatables.js"></script>
  

  <!-- Page Specific JS File -->
  <script src="<?= base_url("assets/dist/"); ?>assets/js/page/index-0.js"></script>

  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>
