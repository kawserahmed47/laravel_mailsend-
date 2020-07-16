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
  <div style="display: block; position:block;" class="container">
      <div class="row">
            {{-- Column Start --}}
          <div class="col-sm-6 col-md-6 mt-3">
              <h1>Change Details</h1>
              <table class="table table-bordered mt-5">
                  <tr>
                  <td colspan="2"> <strong> Audit Duration for Stage {{$changes->stage}} </strong> </td>
                  </tr>
                  <tr>
                      <td>Are quoted man-days adequate?</td>
                  <td> {{$changes->quoted_man }}</td>
                  </tr>
                  <tr>
                    <td>Any change in employee detail?</td>
                    <td> {{$changes->employee_detail }}</td>
                  </tr>
                  <tr>
                    <td>Any Change in Scope?</td>
                    <td> {{$changes->change_scope}}</td>
                  </tr>
                  <tr>
                    <td>Any additional Information:</td>
                    <td> {{$changes->additional_information}}</td>
                  </tr>
              </table>
                   

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
  
      