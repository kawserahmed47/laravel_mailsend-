@extends('back.adminMaster')

@section('content')


<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Auditor Dashboard</h1>
          @if (Session::get('message'))
        <p class="text-success">{{Session::get('message')}}</p>

          @endif
        </div><!-- /.col -->
       
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

  <!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
        {{-- <div class="row">
            <div class="col-sm-12">
            <a class="btn btn-info" href="{{route('viewReport')}}">Audit List</a>
                <a class="btn btn-warning" href="{{ route('viewConpany') }}">Company</a>
                <a class="btn btn-success" href="{{ route('viewQuestion') }}">Question List</a>
                <a class="btn btn-success" href="{{ route('viewCertificate') }}">Certificate List</a>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <a href="{{route('viewReport')}}">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Audit Report</span>
                  <span class="info-box-number">
                    {{$audits}}
                  
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="{{ route('viewConpany') }}">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-briefcase"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Company</span>
                <span class="info-box-number">{{$companies}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
            </div>
            <!-- /.col -->
  
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
            <a href="{{ route('viewQuestion') }}">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-question"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Question</span>
                <span class="info-box-number">{{$questions}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="{{ route('viewCertificate') }}">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-certificate"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Certificate</span>
                <span class="info-box-number">{{$certificaes}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>

            </div>
            <!-- /.col -->
          </div>



    </div>
</section>

@endsection
