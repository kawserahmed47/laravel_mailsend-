@extends('back.adminMaster')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Company View</h1>
          @if (Session::get('message'))
          <p>{{Session::get('message')}}</p>

              @endif
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Company View</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<section class="content">
    <div class="row">
      <div class="col-12">

            <div class="card">

                <div class="card-header">
                    <h3 class="card-title mt-4" >Company List</h3>

                    <section class="content p-3" style="float: right">
                        <div class="container-fluid">
                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info" href="{{ route('addCompany') }}">Add Company</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- /.card-header -->
{{--                //id	company_name	address	email	phone	mobile	hotline	description	status	created_by	updated_by	created_at	updated_at--}}
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Company Name</th>
                        <th>Address</th>
                        <th style="">Email</th>
                        {{-- <th>Phone</th> --}}
                        <th>Mobile</th>
                        {{-- <th>Hot Line</th> --}}
                        {{-- <th>Descripton</th> --}}
                        {{-- <th>Status</th> --}}
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                        @if ($CompanyData)
                        @foreach ($CompanyData as $key=>$company)
                        <tr>
                            <td>{{$key+1}} </td>
                            <td>{{$company->company_name}} </td>
                            <td>{{$company->address}} </td>
                            <td><a href="mailto:{{$company->email}}">{{$company->email}}</a></td>
                            {{-- <td>{{$company->phone}} </td> --}}
                            <td><a href="tel:{{$company->mobile}}">{{$company->mobile}}</a></td>
                            {{-- <td>{{$company->hotline}} </td> --}}
                            {{-- <td>{{$company->description}} </td> --}}
                            {{-- <td>
                                @if($company->status == true)
                                    <span class="badge badge-success">Published</span>
                                @else
                                    <span class="badge badge-danger">Pending</span>
                                @endif

                            </td> --}}
                            <td>
                             <a href="{{route('editCompany',$company->id)}}" class="badge badge-success">Edit</a>
                             <a  class="badge badge-danger" href="{{route('deleteCompany',$company->id)}}">Delete</a>
                             </td>

                        </tr>
                        @endforeach
                        @else($questionData==null)
                        <tr>
                            <td colspan="8">  <p>There are no data available</p>    </td>
                        </tr>

                        @endif







                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl</th>
                            <th>Company Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            {{-- <th>Phone</th> --}}
                            <th>Mobile</th>
                            {{-- <th>Hot Line</th> --}}
                            {{-- <th>Descripton</th> --}}
                            {{-- <th>Status</th> --}}
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

      </div>
    </div>

</section>



@endsection

{{--@section('extraJS')--}}
{{--<script>--}}
{{--    $(function () {--}}
{{--      $("#example1").DataTable();--}}
{{--      $('#example2').DataTable({--}}
{{--        "paging": true,--}}
{{--        "lengthChange": false,--}}
{{--        "searching": false,--}}
{{--        "ordering": true,--}}
{{--        "info": true,--}}
{{--        "autoWidth": false,--}}
{{--      });--}}
{{--    });--}}
{{--</script>--}}
{{--@endsection--}}
