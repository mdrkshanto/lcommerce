@extends('backEnd.mastering.index')
@section('backEndTitle')
Create a new category
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
                  <a href="{{ route('categoryList') }}" class="btn btn-sm btn-primary shadow-none fw-bolder">Category list</a>
              </div>
          </div>
          <!-- /.card-header -->
            <form action="{{ route('addCategoryAction') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="container col-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" class="form-control form-control-sm" name="categoryName" placeholder="Category Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Category Status</label>
                                    <select class="form-control form-control-sm text-center" name="categoryStatus">
                                        <option value="0">Inactive</option>
                                        <option value="1" selected>Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container col-6">
                                <button type="submit" class="btn btn-block btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
