@extends('back.adminMaster')
@section('content')
    <div class="container mt-5">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Audit Entry</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

{{--            id	companyname	auditname	designation	phone	addresh	email	details	created_at	updated_at--}}

            <form action="{{ route('createAudit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label >Company Name</label>
                        <input type="text" name="companyname" class="form-control" id="exampleInputEmail1" placeholder="Enter Company Name">
                    </div>
                    <div class="form-group">
                        <label >Audit Name</label>
                        <input type="text" name="auditname" class="form-control" id="exampleInputEmail1" placeholder="Enter Audit Name">
                    </div>

                    <div class="form-group">
                        <label >Designation</label>
                        <input type="text" name="designation" class="form-control" id="exampleInputEmail1" placeholder="Enter Designation">
                    </div>

                    <div class="form-group">
                        <label >Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number">
                    </div>
                    <div class="form-group">
                        <label >Addresh</label>
                        <textarea type="text" name="addresh" class="form-control" id="exampleInputEmail1" placeholder="Enter Addresh"></textarea>
                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label >Details</label>
                        <textarea type="text" name="details" class="form-control" id="exampleInputEmail1" placeholder="Enter  details"></textarea>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

