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
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Bank View</h1>
          @if (Session::get('message'))
          <p>{{Session::get('message')}}</p>

              @endif
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Banks View</li>
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
                    <div class="col-sm-5 float-left"> <h3 class="card-title">Bank List</h3></div>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Mobile</th>
                        <th>Hotline</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                        @if ($results)
                        @foreach ($results as $result)
                        <tr>
                            <td>{{$result->name}} </td>
                            <td>{{$result->address}}  </td>
                            <td>{{$result->email}}  </td>
                            <td>{{$result->phone}}  </td>
                            <td>{{$result->mobile}}  </td>
                            <td>{{$result->hotline}} </td>
                            <td>
                            <a href="{{route('editBank',$result->id)}}">Edit</a>
                                <a  onclick="return confirm('Are you sure?')" class=" badge bg-danger" href="{{route('deleteBank',$result->id)}}">Delete</a>
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
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Mobile</th>
                            <th>Hotline</th>
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
