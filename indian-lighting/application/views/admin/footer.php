 <!-- Main Footer -->
  <footer class="main-footer">
    <strong>&copy; Hozzco  <?= date('Y'); ?><a href="https://spandigitsocial.com/">SpandigitSocial</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b><img class="logo" src="<?= base_url('uploads/'); ?>logodfurnusa.png" style="width: 15vh"alt=""></b> 
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url('static/backend/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url('static/backend/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('static/backend/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('static/backend/'); ?>dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?= base_url('static/backend/'); ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?= base_url('static/backend/'); ?>plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url('static/backend/'); ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?= base_url('static/backend/'); ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('static/backend/'); ?>plugins/chart.js/Chart.min.js"></script>

<!-- jQuery -->
<script src="<?= base_url('static/backend/'); ?>plugins/jquery/jquery.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?= base_url('static/backend/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('static/backend/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('static/backend/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('static/backend/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('static/backend/'); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('static/backend/'); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('static/backend/'); ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('static/backend/'); ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('static/backend/'); ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('static/backend/'); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('static/backend/'); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('static/backend/'); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  
  
  

$(function () {
  $('#add-realtor').validate({
    rules: {
      realtor_name: {
        required: true,
       
      },
	  email: {
        required: true,
       
      },
	  mobile: {
        required: true
      },
	  Realtor_Description: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      mobile: {
        required: "Please provide a Digits",
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
<html>
