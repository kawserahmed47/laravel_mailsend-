@extends('back.adminMaster')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Company Add</h1>
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
                  <h3 class="card-title">Add Company</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
            <form action="{{route('insertCompany')}}" method="POST">

{{--                id	company_name	address	email	phone	mobile	hotline	description	status	created_by	updated_by	created_at	updated_at--}}

                @csrf
                  <div class="card-body">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Company Name</label>
                          <input type="text" name="company_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Company Name">
                      </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Company Address</label>
                        <textarea class="form-control" name="address" rows="3" placeholder="Enter Address "></textarea>
                      </div>

                      <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                      </div>

                      <div class="form-group">
                          <label for="exampleInputEmail1">Phone</label>
                          <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone">
                      </div>

                      <div class="form-group">
                          <label for="exampleInputEmail1">Mobile</label>
                          <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile">
                      </div>

                      <div class="form-group">
                          <label for="exampleInputEmail1">Hot Line</label>
                          <input type="text" name="hotline" class="form-control" id="exampleInputEmail1" placeholder="Enter Hot Line">
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
{{--id	question	status	created_by	updated_by	created_at	updated_at--}}
