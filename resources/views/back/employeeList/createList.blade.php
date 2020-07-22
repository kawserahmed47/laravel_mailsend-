@extends('back.adminMaster')
@section('content')
    <div class="container mt-5">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Employee Entry</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

{{--            id	name	designation	phone_parsonal	phone_official	email	addresh	bankname	bank_account_number	online_account_number	nid_number	passport_number	image_nid	image_passport	image_driving	details	created_at	updated_at--}}
            <form action="{{ route('createEmployee') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label >Company Name</label>
                        <input type="text" name=" company_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label >Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label >Designation</label>
                        <input type="text" name="designation" class="form-control" id="exampleInputEmail1" placeholder="Enter Designation">
                    </div>

                    <div class="form-group">
                        <label >Parsonal Number</label>
                        <input type="text" name="phone_parsonal" class="form-control" id="exampleInputEmail1" placeholder="Enter Parsonal Phone Number">
                    </div>

                    <div class="form-group">
                        <label >Official Number</label>
                        <input type="text" name="phone_official" class="form-control" id="exampleInputEmail1" placeholder="Enter Official Phone Number">
                    </div>

                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label >Addresh</label>
                        <textarea type="text" name="addresh" class="form-control" id="exampleInputEmail1" placeholder="Enter Addresh"></textarea>
                    </div>


                    <div class="form-group">
                        <label >Bank Name</label>
                        <input type="text" name="bankname" class="form-control" id="exampleInputEmail1" placeholder="Enter Bank Name">
                    </div>

                    <div class="form-group">
                        <label >Bank Account Number</label>
                        <input type="text" name="bank_account_number" class="form-control" id="exampleInputEmail1" placeholder="Enter Bank Account Number">
                    </div>

                    <div class="form-group">
                        <label >Online Account Number</label>
                        <input type="text" name="online_account_number" class="form-control" id="exampleInputEmail1" placeholder="Enter Online Payment Account Number ">
                    </div>


                    <div class="form-group">
                        <label >NID Number</label>
                        <input type="text" name="nid_number" class="form-control" id="exampleInputEmail1" placeholder="Enter NID Number">
                    </div>


                    <div class="form-group">
                        <label >Passport Number</label>
                        <input type="text" name="passport_number" class="form-control" id="exampleInputEmail1" placeholder="Enter Passport Number">
                    </div>


                    <div class="form-group">
                        <label >NID Image</label>
                        <input type="file" name="image_nid" class="form-control" id="exampleInputEmail1" placeholder="Enter NID Image">
{{--                        <input type="file" name="image_nid">--}}
                    </div>

                    <div class="form-group">
                        <label >Passport Image</label>
                        <input type="file" name="image_passport" class="form-control" id="exampleInputEmail1" placeholder="Enter Passport Image">
                        {{--                        <input type="file" name="image_nid">--}}
                    </div>

                    <div class="form-group">
                        <label >Driving Document Image</label>
                        <input type="file" name="image_driving" class="form-control" id="exampleInputEmail1" placeholder="Enter Driving Document Image">
                        {{--                        <input type="file" name="image_nid">--}}
                    </div>

                    <div class="form-group">
                        <label >Document PDF</label>
                        <input type="file" name="document_pdf" class="form-control" id="exampleInputEmail1" placeholder="Enter Document PDF file">

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

