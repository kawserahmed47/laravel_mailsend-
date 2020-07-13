@extends('back.adminMaster')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Certificate Add</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Company</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                 <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add Certificate</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
            <form action="{{route('insertCertificate')}}" method="POST" enctype="multipart/form-data">

{{--
id	certificate_name	description	status	created_by	updated_by	created_at	updated_at
--}}

                @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      {{-- <input class="form-control" type="file" name="image"> --}}
                      <input type='file' name="image" id="imgInp_slider" />
                      <img style="width: 100px; height: 100px;" id="blah_slider" src="#" alt="Preview" />
                    </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Certificate Name</label>
                          <input type="text" name="certificate_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Certificate Name">
                      </div>

                      <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                          <textarea class="form-control" name="description" rows="3" placeholder="Enter Description "></textarea>
                      </div>


                    <div class="form-group">
                        <input type="checkbox" id="publish" class="filled-in" name="status" value="1">
                        <label for="publish">Publish</label>
                    </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->

            </div>
        </div>
    </div>

 </section>

@endsection

@section('extraJS')
<script>
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
  
          reader.onload = function (e) {
              $('#blah_slider').attr('src', e.target.result);
          }
  
          reader.readAsDataURL(input.files[0]);
      }
  }
  
  $("#imgInp_slider").change(function(){
      readURL(this);
  });

  </script>
    
@endsection

