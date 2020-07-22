@extends('back.adminMaster')

@section('content')


<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">CEO Dashboard</h1>
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
      <div class="row text-center">
          <div class="col-sm-12">
              <a class="btn btn-info p-3" href="{{route('viewBanker')}}"><i class="fas fa-handshake"></i> Bankers</a>
              <a class="btn btn-warning p-3" href="{{ route('employeelist') }}"><i class="fas fa-users"></i> Employees</a>
              <a class="btn btn-success p-3" href="{{ route('auditorDashboard') }}"><i class="fas fa-chalkboard-teacher"></i> Auditor </a>
              <a class="btn btn-danger p-3" href="{{route('viewAdmins')}}"><i class="fas fa-user-tie"></i> Admins </a>
              <a class="btn btn-primary p-3" href="{{route('legalDocument')}}"><i class="fas fa-address-book"></i> Legal Documents </a>

          </div>
      </div>
  </div> <br> <br>



    <div class="container-fluid">
        <div class="row">
            <div class="clearfix hidden-md-up"></div>
            <div class="col-12 col-sm-6 col-md-3">
              <a href="{{route('viewReport')}}">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list"></i></span>
    
                    <div class="info-box-content">
                      <span class="info-box-text">Audit Report</span>
                      <span class="info-box-number">{{$audits}}</span>
                    </div>
                  <!-- /.info-box-content -->
                </div>
              </a>
            </div>
            <!-- /.col -->
            <div class="clearfix hidden-md-up"></div>
            <div class="col-12 col-sm-6 col-md-3">
                <a href="{{ route('viewConpany') }}">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-briefcase"></i></span>
      
                      <div class="info-box-content">
                        <span class="info-box-text">Audit Company</span>
                        <span class="info-box-number">{{$companies}}</span>
                      </div>
                    <!-- /.info-box-content -->
                  </div>
                </a>
            </div>
            <!-- /.col -->
  
            <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-3">
                  <a href="{{ route('viewReportCertificateable') }}">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-question"></i></span>
                        <div class="info-box-content">
                          <span class="info-box-text">Generate Certificate</span>
                          <span class="info-box-number">{{$pcertificates}}</span>
                        </div>
                          <!-- /.info-box-content -->
                    </div>
                  </a>
                </div>
           
            <!-- /.col -->
         
            <!-- /.col -->
            <div class="clearfix hidden-md-up"></div>
            <div class="col-12 col-sm-6 col-md-3">
              <a href="{{route('viewCertificate')}}">
                <div class="info-box mb-3">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-certificate"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Our Certificates</span>
                        <span class="info-box-number">{{$certificaes}}</span>
                      </div>
                  <!-- /.info-box-content -->
                </div>
              </a>
            </div>
      </div>

      {{-- <div class="row">
        @if ($results)
            
       @foreach ($results as $result)
       
       <div class="col-12 col-sm-6 col-md-3">
   
          <div class="info-box mb-3">
            
              <div class="info-box-content text-center mb-2">
                <img style="height: 200px; width:150px" src="{{asset($result->image)}}" alt="IMG">
                <span class="info-box-number">{{$result->certificate_name}}</span><br>
                <a class="btn btn-success float-left" href="{{URL::to('/dashboard/auditReport/'.$result->id.'/'.'1')}}" >Stage 1</a>
                <a class="btn btn-success  float-right" href="{{URL::to('/dashboard/auditReport/'.$result->id.'/'.'2')}}">Stage 2</a>
                <br>
              </div>
              
             
                <!-- /.info-box-content -->
          </div>
          
       
      </div>
        @endforeach
        @else 
        <p>No Data Available</p>
        @endif

        
      </div> --}}

      {{-- End Row --}}


    </div>
</section>

@endsection
