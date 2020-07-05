@extends('back.adminMaster')
@section('content')
    <div class="container mt-5">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Employee Entry</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('/dashboard/updateEmployee/'.$employeeData->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label >Bank Name</label>
                        <input type="text" name="bankname" value=" {{ $employeeData->bankname}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Bank Name">
                    </div>
                    <div class="form-group">
                        <label >Name</label>
                        <input type="text" name="name" value=" {{ $employeeData->bankname}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label >Designation</label>
                        <input type="text" name="designation" value=" {{ $employeeData->designation}}"  class="form-control" id="exampleInputEmail1" placeholder="Enter Designation">
                    </div>

                    <div class="form-group">
                        <label >Phone Number</label>
                        <input type="text" name="phone" value=" {{ $employeeData->phone}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number">
                    </div>
                    <div class="form-group">
                        <label >Addresh</label>
                        <textarea type="text" name="addresh" value=" " class="form-control" id="exampleInputEmail1" placeholder="Enter  Addresh">{{ $employeeData->addresh}}</textarea>
                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" name="email" value=" {{ $employeeData->email}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label >Details</label>
                        <textarea type="text" name="details" value=" " class="form-control" id="exampleInputEmail1" placeholder="Enter  details">{{ $employeeData->details}}</textarea>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection

