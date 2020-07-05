@extends('back.adminMaster')

@section('content')


<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">All Contact Information</h1>
          @if (Session::get('message'))
        <p class="text-success">{{Session::get('message')}}</p>

          @endif
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">contacts</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

  <!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-sm-12">
            <a class="btn btn-info" href="{{route('viewBanker')}}">Banker List</a>
                <a class="btn btn-warning" href="{{ route('employeelist') }}">Employee List</a>
                <a class="btn btn-success" href="{{ route('auditlist') }}">Audit List</a>
            </div>
        </div>
    </div>
</section>

@endsection
