@extends('back.adminMaster')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Question View</h1>
          @if (Session::get('message'))
          <p>{{Session::get('message')}}</p>

              @endif
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Question View</li>
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
                    <h3 class="card-title mt-4" >Question List</h3>

                    <section class="content p-3" style="float: right">
                        <div class="container-fluid">
                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info" href="{{ route('addQuestion') }}">Add Question</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Question</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                        @if ($questionData)
                        @foreach ($questionData as $key=>$question)
                        <tr>
                            <td>{{$key+1}} </td>
                            <td>{{$question->question}} </td>
                            <td>
                                @if($question->status == true)
                                    <span class="btn btn-success">Published</span>
                                @else
                                    <span class="btn btn-danger">Pending</span>
                                @endif

                            </td>
                            <td>
                             <a href="{{route('editQuestion',$question->id)}}" class="btn btn-success">Edit</a>
                             <a  class="btn btn-danger" href="{{route('deleteQuestion',$question->id)}}">Delete</a>
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
                            <th>Question</th>
                            <th>Status</th>
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
