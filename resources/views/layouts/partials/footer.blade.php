{{-- <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="#">Admin</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer> --}}

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('js/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('js/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('js/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('js/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('js/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('js/dashboard.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- jquery-validation -->
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/additional-methods.min.js') }}"></script>

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
</script>
<script type="text/javascript">
    $(function () {
        $(document).on('click','#delete',function (e) {
            e.preventDefault();
            var  link = $(this).attr("href");
                 Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.value) {
                    window.location.href = link;
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
                })
        })
    })
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#image').change(function (e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showImg').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
</body>
</html>
