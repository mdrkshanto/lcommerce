@extends('backEnd.mastering.index')
@section('backEndTitle')
Brand List
@endsection
@section('backEndBody')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @if (Session::get('msg'))
        {{ Session::get('msg') }}
        @endif
        <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="row justify-content-between">
                    <h3 class="card-title">@yield('backEndTitle')</h3>
                    <a href="{{ route('addBrand') }}" class="btn btn-sm btn-primary shadow-none fw-bolder">Add New</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-sm table-dark table-striped align-middle text-center table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Brand Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ($brands as $brand)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $brand->brandName }}</td>
                        <td>{{ $brand->status == '1' ? 'Active' : 'Inactive' }}</td>
                        <td>
                          <div class="input-group input-group-sm btn-group justify-content-center">
                            <div class="input-group-prepend">
                              <a href="{{ route('editBrand',[$brand->id]) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            </div>
                            <div class="input-group-apend">
                              <form action="{{ route('deleteBrand',[$brand->id]) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                              </form>
                            </div>
                          </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Brand Name</th>
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
