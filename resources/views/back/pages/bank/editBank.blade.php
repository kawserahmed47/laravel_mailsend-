@extends('back.adminMaster')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Bank Edit</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Bank Edit</li>
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
                  <h3 class="card-title">Edit Bank</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
            <form action="{{route('updateBank',$result->id)}}" method="POST">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bank Name</label>
                    <input type="text" name="name" value="{{$result->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Bank Name">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Bank Address</label>
                      <input type="text" name="address" value="{{$result->address}}"  class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email </label>
                        <input type="email" name="email" value="{{$result->email}}"  class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" name="phone" value="{{$result->phone}}"  class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Mobile</label>
                        <input type="text" name="mobile" value="{{$result->mobile}}"  class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Hotline</label>
                        <input type="text" name="hotline" value="{{$result->hotline}}"  class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>
                    <div class="form-group">
                        <label>Details/Description</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Enter ...">{{$result->description}}</textarea>
                      </div>
                                      
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
  
            </div>
        </div>
    </div>

 </section>
    
@endsection