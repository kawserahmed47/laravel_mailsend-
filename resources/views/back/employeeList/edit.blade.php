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
                        <label >Company Name</label>
                        <input type="text" name=" company_name"  value=" {{ $employeeData->company_name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label >Name</label>
                        <input type="text" name="name" value=" {{ $employeeData->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label >Designation</label>
                        <input type="text" name="designation" value=" {{ $employeeData->designation}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Designation">
                    </div>

                    <div class="form-group">
                        <label >Parsonal Number</label>
                        <input type="text" name="phone_parsonal" value=" {{ $employeeData->phone_parsonal}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Parsonal Phone Number">
                    </div>

                    <div class="form-group">
                        <label >Official Number</label>
                        <input type="text" name="phone_official" value=" {{ $employeeData->phone_official}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Official Phone Number">
                    </div>

                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" name="email" value=" {{ $employeeData->email}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label >Addresh</label>
                        <textarea type="text" name="addresh" value=" " class="form-control" id="exampleInputEmail1" placeholder="Enter Addresh">{{ $employeeData->addresh}}</textarea>
                    </div>


                    <div class="form-group">
                        <label >Bank Name</label>
                        <input type="text" name="bankname" value=" {{ $employeeData->bankname}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Bank Name">
                    </div>

                    <div class="form-group">
                        <label >Bank Account Number</label>
                        <input type="text" name="bank_account_number" value=" {{ $employeeData->bank_account_number}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Bank Account Number">
                    </div>

                    <div class="form-group">
                        <label >Online Account Number</label>
                        <input type="text" name="online_account_number" value=" {{ $employeeData->online_account_number}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Online Payment Account Number ">
                    </div>


                    <div class="form-group">
                        <label >NID Number</label>
                        <input type="text" name="nid_number" value=" {{ $employeeData->nid_number}}" class="form-control" id="exampleInputEmail1" placeholder="Enter NID Number">
                    </div>


                    <div class="form-group">
                        <label >Passport Number</label>
                        <input type="text" name="passport_number" value=" {{ $employeeData->passport_number}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Passport Number">
                    </div>


                    <div class="form-group">
                        <label >NID Image</label>
                        <input type="file" name="image_nid" value=" {{ $employeeData->phone}}" class="form-control" id="exampleInputEmail1" placeholder="Enter NID Image">
                        {{--                        <input type="file" name="image_nid">--}}
                    </div>

                    <div class="form-group">
                        <label >Passport Image</label>
                        <input type="file" name="image_passport" value=" {{ $employeeData->phone}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Passport Image">
                        {{--                        <input type="file" name="image_nid">--}}
                    </div>

                    <div class="form-group">
                        <label >Driving Document Image</label>
                        <input type="file" name="image_driving" value=" {{ $employeeData->phone}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Driving Document Image">
                        {{--                        <input type="file" name="image_nid">--}}
                    </div>

                    <div class="form-group">
                        <label >Document PDF</label>
                        <input type="file" name="document_pdf" value=" {{ $employeeData->phone}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Document PDF file">

                    </div>

                    <div class="form-group">
                        <label >Details</label>
                        <textarea type="text" name="details"  class="form-control" id="exampleInputEmail1" placeholder="Enter  details">{{ $employeeData->details}}</textarea>
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

