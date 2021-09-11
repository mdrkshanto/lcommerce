@extends('backEnd.mastering.index')
@section('backEndTitle')
Create a new Product
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
                  <a href="{{ route('productList') }}" class="btn btn-sm btn-primary shadow-none fw-bolder">Product list</a>
              </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              
          </div>
          <!-- /.card-body -->
        </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
