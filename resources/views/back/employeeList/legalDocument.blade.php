@extends('back.adminMaster')
@section('style')


@endsection

@section('content')
    {{--            .....edit Modal.....--}}
    <!-- Modal -->
    <div class="modal fade " id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('updateLegalDocument') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <input type="hidden" name="abc" class="form-control" id="ID" value="" placeholder="Enter Name">

                            <div class="form-group">
                                <label >Name</label>
                                <input type="text" name="name" class="form-control" id="nameID" placeholder="Enter Name">
                            </div>

                            <div class="form-group">
                                <label >Details</label>
                                <textarea type="text" name="details" class="form-control" id="detailsID" placeholder="Enter  details"></textarea>
                            </div>

                            <div class="form-group">
                                <label >Document PDF</label>
                                <input type="file" name="document_pdf" class="form-control" id="documentID" placeholder="Enter Document PDF file">

                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

















    <section class="container parent p-3">
        <div class="container-fluid ">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-sm-12">
{{--                    <a class="btn btn-info" href="{{route('viewBanker')}}">Banker List</a>--}}
{{--                    <a class="btn btn-warning" href="{{ route('employeelist') }}">Employee List</a>--}}
{{--                    <a class="btn btn-success" href="{{ route('auditlist') }}">Audit List</a>--}}
{{--                    <a class="btn btn-success" href="{{ route('legalDocument') }}">Legal Document</a>--}}
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Add Document
                    </button>
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
                    <th>Discription</th>
                    <th>Action</th>
                </tr>
                {{--            id	name	designation	phone_parsonal	phone_official	email	addresh	bankname	bank_account_number	online_account_number	nid_number	passport_number	image_nid	image_passport	image_driving	details	created_at	updated_at--}}
                </thead>
                <tbody>
                @foreach($legalDocument as $key=>$document)
                <tr >
                    <td>{{$key+1}}</td>
                    <td>{{$document->name}}</td>
                    <td>{{$document->details}}</td>

                    <td>
                        <a href="#" class=" badge badge-info adminID waves-effect" data-toggle="modal" data-target="#exampleModal1" data-id="{{$document->id }}"  data-name="{{$document->name }}"   data-details="{{$document->details }}"  data-document_pdf="{{$document->document_pdf }}"  >
                            <i class="material-icons">edit</i>
                        </a>

                        <a href="{{route('documentDelete',['ID'=>$document->id])}}" class="badge badge-danger waves-effect">
                            <i class="material-icons">Delete</i>
                        </a>

                        <a href="{{asset('uploads/LegalDocumentPdf/'.$document->document_pdf)}}"target="_blank" class="badge badge-danger waves-effect">
                            <i class="material-icons">Document</i>
                        </a>
                    </td>
                </tr>
                    @endforeach

                </tbody>
            </table>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('createDocument') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">


                                    <div class="form-group">
                                        <label >Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                                    </div>

                                    <div class="form-group">
                                        <label >Details</label>
                                        <textarea type="text" name="details" class="form-control" id="exampleInputEmail1" placeholder="Enter  details"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label >Document PDF</label>
                                        <input type="file" name="document_pdf" class="form-control" id="exampleInputEmail1" placeholder="Enter Document PDF file">

                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
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


@section('extraJS')
    <script>
        $(".adminID").click(function(){

            $("#ID").val($(this).data('id'));
            $("#nameID").val($(this).data('name'));
            $("#detailsID").val($(this).data('details'));
        });

    </script>

@endsection
