@extends('backEnd.mastering.index')
@section('backEndTitle')
Product List
@endsection
@section('backEndBody')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="row justify-content-between">
                    <h3 class="card-title">@yield('backEndTitle')</h3>
                    <a href="{{ route('addProduct') }}" class="btn btn-sm btn-primary shadow-none fw-bolder">Add New</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-sm table-dark table-bordered table-striped align-middle text-center table-hover small">
                <thead>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        <!-- /.card -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('backEndExtraJs')
<!-- DataTables  & Plugins -->
<script src="{{ asset('backEnd/assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('backEnd/assets') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('backEnd/assets') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backEnd/assets') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('backEnd/assets') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('backEnd/assets') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('backEnd/assets') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('backEnd/assets') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('backEnd/assets') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('backEnd/assets') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('backEnd/assets') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('backEnd/assets') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", /*"colvis"*/]
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
@endsection
