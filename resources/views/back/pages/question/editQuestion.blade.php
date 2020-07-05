@extends('back.adminMaster')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Question Edit</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Question Edit</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                 <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Question</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
            <form action="{{route('updateQuestion',$questionData->id)}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Question</label>
                        <textarea class="form-control" name="question" rows="3" placeholder="Enter Question">{{$questionData->question}}</textarea>
                    </div>


                    <div class="form-group">
                        <input type="checkbox" id="publish" class="filled-in" name="status" value="1" {{ $questionData->status == true ? 'checked' : '' }}>
                        <label for="publish">Status</label>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
              </div>
              <!-- /.card -->

            </div>
        </div>
    </div>

 </section>

@endsection
