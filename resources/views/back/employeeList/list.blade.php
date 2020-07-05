@extends('back.adminMaster')
@section('content')
    <section class="content p-3">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-sm-12">
                    <a class="btn btn-info" href="{{route('viewBanker')}}">Banker List</a>
                    <a class="btn btn-warning" href="{{ route('employeelist') }}">Employee List</a>
                    <a class="btn btn-success" href="{{ route('auditlist') }}">Audit List</a>
                </div>
                @if (Session::get('message'))
                    <p>{{Session::get('message')}}</p>

                @endif
            </div>
        </div>
    </section>
    <div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Employee List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Bank Name</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Details</th>
                    <th>Action</th>
                </tr>

                </thead>
                <tbody>
                @foreach($employeeData as $key=>$employee)
                <tr >
                    <td>{{$key+1}}</td>
                    <td>{{$employee->bankname}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->designation}}</td>
                    <td>{{$employee->phone}}</td>
                    <td>{{$employee->addresh}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->details}}</td>
                    <td>
                        <a href="{{route('employeelistedit',['ID'=>$employee->id])}}" class="btn btn-info waves-effect">
                            <i class="material-icons">edit</i>
                        </a>
                        <a href="{{route('employeelistDelete',['ID'=>$employee->id])}}" class="btn btn-danger waves-effect">
                            <i class="material-icons">Delete</i>
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

