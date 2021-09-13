@extends('backEnd.mastering.index')
@section('backEndTitle')
Category List
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
                    <a href="{{ route('addCategory') }}" class="btn btn-sm btn-primary shadow-none fw-bolder">Add New</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-sm table-dark table-bordered table-striped align-middle text-center table-hover small">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $category->categoryName }}</td>
                        <td>{{ $category->status == '1' ? 'Active' : 'Inactive' }}</td>
                        <td>asdf</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Action</th>
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
