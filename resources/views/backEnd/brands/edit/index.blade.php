@extends('backEnd.mastering.index')
@section('backEndTitle')
Edit "{{ $data->brandName }}" brand 
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
                  <a href="{{ route('brandList') }}" class="btn btn-sm btn-primary shadow-none fw-bolder">Brand list</a>
              </div>
          </div>
          <!-- /.card-header -->
            <form action="{{ route('updateBrand',[$data->id]) }}" method="post" autocomplete="off">
                @csrf
                <div class="card-body">
                    <div class="container col-6">
                        @error('brandName')<div class="text-danger small">{{ $message }}</div>@enderror
                        @error('brandStatus')<div class="text-danger small">{{ $message }}</div>@enderror
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Brand Name</label>
                                    <input type="text" class="form-control form-control-sm @error('brandName') is-invalid @enderror" name="brandName" placeholder="Brand Name" value="{{ $data->brandName }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Brand Status</label>
                                    <select class="form-control form-control-sm text-center @error('brandStatus') is-invalid @enderror" name="brandStatus">
                                        <option value="0"{{ $data->status == 0 ? 'selected' : '' }}>Inactive</option>
                                        <option value="1"{{ $data->status == 1 ? 'selected' : '' }}>Active</option>
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
