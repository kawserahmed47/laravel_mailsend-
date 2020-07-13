@extends('back.adminMaster')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Audit Report View</h1>
          @if (Session::get('message'))
          <p>{{Session::get('message')}}</p>

              @endif
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"> Report View</li>
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
                    <h3 class="card-title mt-4" >Audit Report List</h3>

                    <section class="content p-3" style="float: right">
                        <div class="container-fluid">
                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                                <div class="col-sm-12">
                                    {{-- <a class="btn btn-info" href="{{ route('auditReport') }}">Add Report</a> --}}
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
                        <th>Company </th>
                        <th>Certificate</th>
                        <th>Stage</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                        @if ($results)
                        @foreach ($results as $key=>$result)
                        <tr>
                        <td>{{$key+1}}</td>
                            <td>
                                {{$result->company->company_name}} 
                            </td>
                            <td>  {{$result->certificate->certificate_name}}  </td>
                        <td>{{$result->stage}}</td>
                        <td>
                            @if ($result->updated_at == null)
                            {{$result->created_at}}</td>
                            @else 
                            {{$result->updated_at}}</td>
                            @endif
                            
                            
                            <td>
                                @if($result->status == 1)
                            <a class="badge badge-success" href="{{route('reportStatus',$result->id)}}">Successful</a>
                                   
                                @else
                                <a class="badge badge-warning" href="{{route('reportStatus',$result->id)}}">Pending</a>
                                 
                                @endif

                            </td>
                       
                            <td>
                             <a href="{{route('editReport',$result->id)}}" class="badge badge-info">Edit</a>
                             <a href="{{route('viewReportDetails',$result->id)}}" class="badge badge-success">View</a>
                             <a  onclick="return confirm('Are you sure?')" class="badge badge-danger" href="{{route('deleteReport',$result->id)}}">Delete</a>
                             </td>

                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="8">  <p>There are no data available</p>    </td>
                        </tr>

                        @endif







                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl</th>
                            <th>Company </th>
                            <th>Certificate</th>
                            <th>Stage</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
                </div>
                {{$results->links()}}
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

      </div>
    </div>

</section>



@endsection


