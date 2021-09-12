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
          <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="card-body">
              <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Product Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Product Cetegory</label>
                            <select class="form-control form-control-sm form-select form-select-sm">
                                <option selected>Select Cetegory</option>
                                <option value="1">Main Image</option>
                                <option value="2">Thumb Image</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Product Brand</label>
                            <select class="form-control form-control-sm form-select form-select-sm">
                                <option selected>Select Brand</option>
                                <option value="1">Main Image</option>
                                <option value="2">Thumb Image</option>
                            </select>
                        </div>
                    </div>
              </div>
              <div class="row">
                    <div class="col-md-4">
                      <div class="row justify-content-between input-group-sm input-group">
                        <label class="form-label">Product Color</label>
                        <button type="button" class="btn btn-primary btn-sm addProductColor">Add Color</button>
                      </div>
                      <div class="row productColors">
                        <div class="col-md-3 input-group productColor">
                          <input type="color" class="form-control form-control-sm" value="#ff0000">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Regular Price</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Regular Price">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Discount Price</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Discount Price">
                        </div>
                    </div>
              </div>
              <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Product Color</label>
                            <input type="color" class="form-control form-control-sm" value="#ff0000">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Regular Price</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Regular Price">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Discount Price</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Discount Price">
                        </div>
                    </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <div class="row justify-content-between">
                  <h5>Product Images</h5>
                  <button type="button" class="btn btn-primary btn-sm addImage">Add Image</button>
                </div>
              </div>
              <div class="card-body productImages">
                <div class="row">
                  <div class="col-12">
                    <div class="input-group input-group-sm mb-3">
                      <div class="input-group-prepend">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input">
                          <label class="custom-file-label">Choose file</label>
                        </div>
                      </div>
                      <div class="input-group-append">
                        <select class="form-control">
                          <option>Select Image</option>
                          <option value="1" selected>Main Image</option>
                          <option value="2">Thumb Image</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <!-- /.card-body -->
        </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('backEndExtraJs')
<script>
  $(document).ready(function(){
    $('.addImage').click(function(){
        $(".productImages").append('<div class="row thumbImg"><div class="col-12"><div class="input-group input-group-sm mb-3"><div class="input-group-prepend"><div class="custom-file"><input type="file" class="custom-file-input"><label class="custom-file-label">Choose file</label></div></div><div class="input-group-append"><select class="form-control"><option>Select Image</option><option value="1">Main Image</option><option value="2" selected>Thumb Image</option></select><button type="button" class="btn btn-danger removeProductImg"><i class="fas fa-trash-alt"></i></button></div></div></div></div>');
    });
    $("body").on("click", ".removeProductImg", function(){
            $(this).parents('.thumbImg').remove();
    });


    $('.addProductColor').click(function(){
        $(".productColors").append('<div class="col-md-3 input-group productColor"><input type="color" class="form-control form-control-sm" value="#ff0000"><button type="button" class="close removeProductColor" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    });
    $("body").on("click", ".removeProductColor.close", function(){
            $(this).parents('.productColor').remove();
    });
  });
</script>

@endsection
