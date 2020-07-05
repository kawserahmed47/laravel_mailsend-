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

<section class="content">
    <div class="row">
      <div class="col-12">

            <div class="card">

                <div class="card-header">
                    <div class="col-sm-5 float-left"> <h3 class="card-title">Banker List</h3></div>

                    <div class="col-sm-7  float-right">

                        <form class="form-inline" action="{{route('bankerSearch')}}" method="POST">
                            @csrf
                            <select class="form-control" name="searchBy" id="">
                                <option value="">--Search By--</option>
                                <option value="1">Bank</option>
                                <option value="2">Name</option>
                            </select>
                            <input class="form-control" type="text" placeholder="Enter Name" name="name">

                            <button class="form-control" type="submit">
                                <i class="fas fa-search"></i>
                            </button>

                        </form>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Bank</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Mobile</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                        @if ($results)
                        @foreach ($results as $result)
                        <tr>
                            @php
                                $banks = DB::table('banks')->where('id', $result->bank_id)->first();
                            @endphp
                            <td>{{$banks->name}} </td>
                            <td>{{$result->name}} </td>
                            <td>{{$result->designation}}  </td>
                            <td>{{$result->address}}  </td>
                            <td>{{$result->email}}  </td>
                            <td>{{$result->phone}}  </td>
                            <td>{{$result->mobile}}  </td>
                            <td>
                            <a class=" badge bg-info" href="{{route('editBanker',$result->id)}}">Edit</a>
                                <a  onclick="return confirm('Are you sure?')" class=" badge bg-danger" href="{{route('deleteBanker',$result->id)}}">Delete</a>
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
                            <th>Bank</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Mobile</th>
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

@section('extraJS')
<script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
</script>
@endsection
