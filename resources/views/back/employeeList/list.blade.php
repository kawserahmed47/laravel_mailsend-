@extends('back.adminMaster')
@section('style')
    <style>
        html{
            /*style="width: 1391px"*/
            width: 1391px;
        }
        .parent{
            position: relative;
        }
        .child{
            position: absolute;

        }

    </style>

@endsection

@section('content')
    <section class="container parent p-3">
        <div class="container-fluid ">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-sm-12">
                    <a class="btn btn-info" href="{{route('viewBanker')}}">Banker List</a>
                    <a class="btn btn-warning" href="{{ route('employeelist') }}">Employee List</a>
                    <a class="btn btn-success" href="{{ route('auditlist') }}">Audit List</a>
                    <a class="btn btn-success" href="{{ route('legalDocument') }}">Legal Document</a>
                </div>
                @if (Session::get('message'))
                    <p>{{Session::get('message')}}</p>

                @endif
            </div>
        </div>
    </section>
    <div class="container mt-5">
    <div class="card child">
        <div class="card-header">
            <h3 class="card-title">Employee List</h3>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Parsonal Phone</th>
                    <th>Email</th>
{{--                    <th>Address</th>--}}
                    <th>Bank Account Number</th>
                    <th>Online Prement Number</th>
                    <th>NID Image</th>
                    <th>Passport Image</th>
                    <th>Driving Document Image</th>
                    <th>Action</th>
                </tr>
                {{--            id	name	designation	phone_parsonal	phone_official	email	addresh	bankname	bank_account_number	online_account_number	nid_number	passport_number	image_nid	image_passport	image_driving	details	created_at	updated_at--}}
                </thead>
                <tbody>
                @foreach($employeeData as $key=>$employee)
                <tr >
                    <td>{{$key+1}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->designation}}</td>
                    <td>{{$employee->phone_parsonal}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->bank_account_number}}</td>
                    <td>{{$employee->online_account_number}}</td>
                    <td><img src="{{ url('uploads/NIDImage/'.$employee->image_nid) }} " class="img img-responsive alt="image not found" style=" height: 51px; width:66px" ></td>
                    <td><img src="{{ url('uploads/PassportImage/'.$employee->image_passport) }} " class="img img-responsive alt="image not found" style=" height: 51px; width:66px" ></td>
                    <td><img src="{{ url('uploads/DrivingDocumentImage/'.$employee->image_driving) }} " class="img img-responsive alt="image not found" style=" height: 51px; width:66px" ></td>
{{--                    <td>{{$employee->online_account_number}}</td>--}}
{{--                    <td>{{$employee->details}}</td>--}}
                    <td>
                        <a href="{{route('employeelistedit',['ID'=>$employee->id])}}" class=" badge badge-info waves-effect">
                            <i class="material-icons">edit</i>
                        </a>
                        <a href="{{route('employeelistDelete',['ID'=>$employee->id])}}" class="badge badge-danger waves-effect">
                            <i class="material-icons">Delete</i>
                        </a>

                        <a href="{{asset('uploads/DocumentPdf/'.$employee->document_pdf)}}"target="_blank" class="badge badge-danger waves-effect">
                            <i class="material-icons">Document</i>
                        </a>
                    </td>


                </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>
    </div>


@endsection

