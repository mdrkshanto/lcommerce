@extends('backEnd.mastering.index')
@section('backEndTitle')
Create a new product
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
          <form action="{{ route('addProductAction') }}" method="post" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="card-body">
              <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control form-control-sm" name="productName" placeholder="Product Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Product Cetegory</label>
                            <select class="form-control form-control-sm form-select form-select-sm" name="productCetegory">
                                <option value="1">Main Image</option>
                                <option value="2">Thumb Image</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Product Brand</label>
                            <select class="form-control form-control-sm form-select form-select-sm" name="productBrand">
                                <option value="1">Main Image</option>
                                <option value="2">Thumb Image</option>
                            </select>
                        </div>
                    </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Product Model Number</label>
                        <input type="text" class="form-control form-control-sm" name="productModelNumber" placeholder="Product Model Number">
                    </div>
                </div>
                    <div class="col-md-3">
                      <div class="row justify-content-between input-group-sm input-group">
                        <label class="form-label">Product Color</label>
                        <button type="button" class="btn btn-primary btn-sm addProductColor">Add Color</button>
                      </div>
                      <div class="row productColors">
                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Regular Price</label>
                            <input type="text" class="form-control form-control-sm" name="productRegularPrice" placeholder="Regular Price">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Discount Price</label>
                            <input type="text" class="form-control form-control-sm" name="productDiscountPrice" placeholder="Discount Price">
                        </div>
                    </div>
              </div>
              <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="card card-outline card-info">
                              <div class="card-header">
                                <h3 class="card-title">
                                    Product Details
                                </h3>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                <textarea class="productDetails" name="productDetails"></textarea>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="card card-outline card-info">
                              <div class="card-header">
                                <h3 class="card-title">
                                    Product Short Description
                                </h3>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                <textarea class="productShortDescription" name="productShortDescription"></textarea>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="card card-outline card-info">
                              <div class="card-header">
                                <h3 class="card-title">
                                    Product Description
                                </h3>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                <textarea class="productDescription" name="productDescription"></textarea>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="card card-outline card-info">
                              <div class="card-header">
                                <h3 class="card-title">
                                    Delivery Process
                                </h3>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                <textarea class="deliveryProcess" name="deliveryProcess"></textarea>
                              </div>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
          <!-- /.card-body -->
        </div>
      <!-- /.card -->
      <div class="card">
        <div class="card-header">
          <div class="row justify-content-between">
            <h5>Product Images</h5>
            <button type="button" class="btn btn-primary btn-sm addImage">More Image</button>
          </div>
        </div>
        <div class="card-body">
          <div class="row productImages">
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <div class="custom-file">
                    <input type="file" accept="image/*" class="custom-file-input" name="productImage">
                    <label class="custom-file-label">Select Image</label>
                  </div>
                </div>
                <div class="input-group-append">
                  <select class="form-control" name="productImageType[]">
                    <option value="1" selected>Main Image</option>
                    <option value="2">Thumb Image</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-2">
            <div class="input-group-append">
                <select class="form-control form-control-sm text-center" name="productStatus">
                    <option value="1" selected>Active</option>
                    <option value="2">Inactive</option>
                </select>
            </div>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-6">
            <button type="submit" class="btn btn-primary btn-sm btn-block">Submit</button>
          </div>
      </div>
    </form>
</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('backEndExtraJs')
<script src="{{ asset('backEnd/assets') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('backEnd/assets') }}/plugins/summernote/summernote-bs4.js"></script>
<script>
$(document).ready(function(){
    $('.addImage').click(function(){
        $(".productImages").append('<div class="col-md-6 thumbImg"><div class="input-group input-group-sm mb-3"><div class="input-group-prepend"><div class="custom-file"><input type="file" accept="image/*" class="custom-file-input" name="productImage"><label class="custom-file-label">Select Image</label></div></div><div class="input-group-prepend"><select class="form-control" name="productImageType[]"><option value="1">Main Image</option><option value="2" selected>Thumb Image</option></select></div><div class="input-group-append"><button type="button" class="btn btn-danger removeProductImg"><i class="fas fa-trash-alt"></i></button></div></div></div>');
        bsCustomFileInput.init();
    });
    $("body").on("click", ".removeProductImg", function(){
        $(this).parents('.thumbImg').remove();
    });


    $('.addProductColor').click(function(){
        $(".productColors").append('<div class="col-md-3 input-group productColor"><input type="color" class="form-control form-control-sm" name="productColor[]" value="#000000"><button type="button" class="close btn btn-sm removeProductColor" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    });
    $("body").on("click", ".removeProductColor.close", function(){
        $(this).parents('.productColor').remove();
    });
    bsCustomFileInput.init();
    $('.productDetails').summernote()
    $('.productShortDescription').summernote()
    $('.productDescription').summernote()
    $('.deliveryProcess').summernote()
});
</script>

@endsection
