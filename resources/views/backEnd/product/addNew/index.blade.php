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
          <!-- /.card-body -->
        </div>
      <!-- /.card -->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-default">
            <div class="card-body">
              <div id="actions" class="row">
                <div class="col-lg-6">
                  <div class="btn-group btn-group-sm w-100">
                    <span class="btn btn-success col fileinput-button">
                      <i class="fas fa-plus"></i>
                      <span>Add files</span>
                    </span>
                    <button type="submit" class="btn btn-primary col start">
                      <i class="fas fa-upload"></i>
                      <span>Start upload</span>
                    </button>
                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                  <div class="fileupload-process w-100">
                    <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                      <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="table table-striped files" id="previews">
                <div id="template" class="row mt-2">
                  <div class="col-auto">
                      <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                  </div>
                  <div class="col d-flex align-items-center">
                      <p class="mb-0">
                        <span class="lead" data-dz-name></span>
                        (<span data-dz-size></span>)
                      </p>
                      <strong class="error text-danger" data-dz-errormessage></strong>
                  </div>
                  <div class="col-4 d-flex align-items-center">
                      <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                      </div>
                  </div>
                  <div class="col-auto d-flex align-items-center">
                    <div class="btn-group btn-group-sm">
                        <select class="form-select form-select-sm">
                            <option selected>Select Image Type</option>
                            <option value="1">Main Image</option>
                            <option value="2">Thumb Image</option>
                        </select>
                      <button data-dz-remove class="btn btn-danger delete">
                        <i class="fas fa-trash"></i>
                        <span>Delete</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('backEndExtraJs')
<script src="{{ asset('backEnd/assets') }}/plugins/dropzone/min/dropzone.min.js"></script>
<script>
      // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

// Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
var previewNode = document.querySelector("#template")
previewNode.id = ""
var previewTemplate = previewNode.parentNode.innerHTML
previewNode.parentNode.removeChild(previewNode)

var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
  url: "/target-url", // Set the url
  thumbnailWidth: 80,
  thumbnailHeight: 80,
  parallelUploads: 20,
  previewTemplate: previewTemplate,
  autoQueue: false, // Make sure the files aren't queued until manually added
  previewsContainer: "#previews", // Define the container to display the previews
  clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
})

myDropzone.on("addedfile", function(file) {
  // Hookup the start button
  file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
})

// Update the total progress bar
myDropzone.on("totaluploadprogress", function(progress) {
  document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
})

myDropzone.on("sending", function(file) {
  // Show the total progress bar when upload starts
  document.querySelector("#total-progress").style.opacity = "1"
  // And disable the start button
  file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
})

// Hide the total progress bar when nothing's uploading anymore
myDropzone.on("queuecomplete", function(progress) {
  document.querySelector("#total-progress").style.opacity = "0"
})

// Setup the buttons for all transfers
// The "add files" button doesn't need to be setup because the config
// `clickable` has already been specified.
document.querySelector("#actions .start").onclick = function() {
  myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
}
document.querySelector("#actions .cancel").onclick = function() {
  myDropzone.removeAllFiles(true)
}
// DropzoneJS Demo Code End
</script>
@endsection
