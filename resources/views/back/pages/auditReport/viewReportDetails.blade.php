<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Tex Soft | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="{{asset('public/back/plugins/fontawesome-free/css/all.min.css')}}"> --}}
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('public/back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/back/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('public/back/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/back/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('public/back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public/back/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  {{-- <link rel="stylesheet" href="{{asset('public/back/plugins/summernote/summernote-bs4.css')}}"> --}}
  <!-- Google Font: Source Sans Pro -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    {{-- Content --}}
  <div style="display: block; position:block;" class="container-fluid">
      <div class="row">
            {{-- Column Start --}}
          <div class="col-sm-12 col-md-12">
                    {{-- Form Start --}}
      

         @php
         $status = json_decode($result->status_id, true);
         $evidence= json_decode($result->evidence_id, true);
         $comments= json_decode($result->description, true);
         $i=1;
         @endphp
         <div class="container mt-5">
         <a href="{{route('generatePdf',$result->id)}}">
        Audit Checklist
        </a>
     

                <div class="row mt-3">
                  
                      
                    <div class="col-sm-10" style="padding: unset">
                            <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">REQUIREMENTS</th>
                                        <th scope="col">STATUS</th>
                                        <th scope="col">EVIDENCE</th>
                                        <th scope="col">COMMENT</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($status as $key=>$item   )
                                            
                                     
                                    
                                        {{-- @foreach ($status as $key=>$sta && $evidence as $eviden)  --}}
                                        <tr>
                                            <th scope="row">{{$i++}}</th>
                                            <td>
                                                 @php
                                                    $questions =DB::table('questions')->where('id', $key)->first();
                                                @endphp
                                                {{$questions->question}} 
                                                
                                            </td>
                                            <td>
                                            @foreach ($item as $st)
                                            @if ($st==1)
                                                <span class="badge badge-secondary">C</span>
                                            @elseif($st==2)
                                            <span class="badge badge-secondary">NC</span>
                                            @elseif($st==3)
                                                <span class="badge badge-secondary">O</span>
                                            @else
                                            X
                                            @endif
                                            
                                            @endforeach
                                        </td>
                                        <td>
                                           @if ($evidence[$key])
                                               
                                           
                                            @foreach ($evidence[$key] as $evi)
                                            @if ($evi==1)
                                            <span class="badge badge-secondary">DR</span>
                                            @elseif($evi==2)
                                            <span class="badge badge-secondary">P</span>
                                            @elseif($evi==3)
                                            <span class="badge badge-secondary">WI</span>
                                            @elseif($evi==4)
                                            <span class="badge badge-secondary">MI</span>
                                            @else
                                                X
                                            @endif
                                          
                                            @endforeach
                                          
                                            @endif
                                        </td>
                                        <td>
                                            @foreach ($comments[$key] as $comment)
                                            {{$comment}}

                                            @endforeach
                                        </td>
                            
                                        </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                    </div>
                
                    {{-- <div class="col-sm-3"  style="padding: unset">
                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th scope="col">EVIDENCE</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                            @foreach ($evidence as $eviden)
                            <tr>
                            
                                <td>
                                    @foreach ($eviden as $evi)
                                    @if ($evi==1)
                                    <span class="badge badge-secondary">DR</span>
                                @elseif($evi==2)
                                <span class="badge badge-secondary">P</span>
                                @elseif($evi==3)
                                    <span class="badge badge-secondary">WI</span>
                                @elseif($evi==4)
                                    <span class="badge badge-secondary">MI</span>
                                @else
                                X
                                @endif
                                @endforeach
                            </td>
                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div> --}}
                    {{-- <div class="col-sm-3"  style="padding: unset">
                    <table class="table table-bordered ">
                            <thead>
                            <tr>
                                <th scope="col">COMMENTS</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                                @foreach ($comments as $comment)
                                <tr>
                                    <td>
                                        @foreach ($comment as $comm)
                                        {{$comm}}
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                    </div> --}}
           
            </div>
    </div>

      


          </div>
       
  </div>

    {{-- End Content --}}

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('public/back/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/back/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/back/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('public/back/plugins/chart.js')}}/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('public/back/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('public/back/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('public/back/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/back/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('public/back/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('public/back/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public/back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('public/back/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/back/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/back/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/back/dist/js/demo.js')}}"></script>


</body>
</html>
