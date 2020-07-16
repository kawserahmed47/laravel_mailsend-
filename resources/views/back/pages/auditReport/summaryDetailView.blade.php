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

        @php
         $improvement_area =  json_decode($summaries->improvement_area, true);
         $declaration = json_decode($summaries->declaration, true);

        //  print_r($improvement_area);

         $i=1;
         @endphp



          <div class="col-sm-12 col-md-12 mt-3">
              <strong>Summary of Audit Stage {{$summaries->stage}}</strong>

             <table class="table table-bordered">
                 <tr>
                     <td colspan="2" class="text-center">
                         <span>AREA OF IMPROVEMENT</span><br>
                         <span>(Areas of Improvement Which May be Identified as Non Conformities During Stage 2 Audit)</span>

                    
                    </td>
                   
                   
                 </tr>

                 @foreach ($improvement_area as $item)
                 <tr>
                 @foreach ($item as $key=>$it)                        
                         <td >{{$it}}</td>  
                 @endforeach 
                 </tr>    
                 @endforeach

             </table>



              <table class="table table-bordered">
                  <tr>
                      <td> <strong> Non Conformities Raised  </strong></td>
                  </tr>
                  <tr>
                      <td>
                      <u> <strong> ...{{$summaries->nonconformatise }}... </strong></u> Minor  Non conformance identified in the Stage 1 audit, details of Non Conformance in  F50.
                        Please respond by using your own corrective action form and include the root cause analysis with systemic corrective action. Failure to include root cause analysis with systemic corrective action will result in your responses being rejected by Lead Auditor
                        

                      </td>
                  </tr>
              </table>
              <br>
              
              <table class="table table-bordered">
                <tr>
                    <td colspan="2" >
                        <strong>Team Leader Declaration  (Tick  or cross Each Column as per applicability)</strong><br>
                      

                   
                   </td>
                  
                  
                </tr>
              @foreach ($declaration as $key=>$declear)
                <tr>
                @foreach ($declear as $dec)  
                <td >{{$dec}}</td> 
                <td>
                    @if ($key==1)
                        <span>Auditing is based on a sampling process of the available information</span>
                    @elseif($key==2)
                        <span>Audit is combined, joint or integrated; </span>
                    @elseif($key==3)
                        <span>The effectiveness of corrective actions taken regarding previously identified </span>
                    @elseif($key==4)
                        <span> nonconformities has verified</span>
                    @elseif($key==5)
                        <span>outcomes are effective and complying. </span>
                    @elseif($key==6)
                        <span>The internal audit and management review process are effective and complying with the requirements. </span>
                    @elseif($key==7)
                        <span>The scope of certification is appropriate. </span>
                    @elseif($key==8)
                        <span>The capability of the management system to meet applicable requirements and expected </span>
                    @elseif($key==9)
                        <span>The audit objectives has been fulfilled and achieved. </span>
                    @endif
                    {{-- {{$key}} --}}
                
                
                </td>                       
                         
                @endforeach 
                </tr>    
                @endforeach

            </table>
            <br>
            <strong>Recommendation</strong>
            <table class="table table-bordered">
                <tr>
                    <td></td>
                    <td>Recommended Proceeding With Stage 2 (within 60 days from this audit date)</td>

                </tr>
                <tr>
                    <td></td>
                    <td>Recommend not proceeding to stage 2 until audit evidence has been submitted to SMS Inc. showing that the concerns raised by the auditor (s) have been rectified. A date for stage 2 will then be agreed.</td>

                </tr>
                <tr>
                    <td></td>
                    <td>Recommend not proceeding without a further stage 1 Audit due to the severity of the concerns raised by the audit team</td>

                </tr>

            </table>

              <table class="table table-bordered">
                  <tr>
                      <td colspan="2">Sign Off : {{$summaries->sign_off_date}} </td>

                  </tr>
                  <tr>
                      <td>SMS Inc. Report Submission</td>
                      <td>Client Acceptance for Report </td>
                      
                </tr>
                <tr>
                    <td><span> Name of Auditor: {{$summaries->auditorName}}  </span> <br><br><br>
                        <span>Signature: </span>


                    </td>
                    <td>
                        <span>Name:{{$summaries->clientName }}  </span><br><br><br>
                        <span>Signature: </span><br>
                        <span>Designation: {{$summaries->clidentDesignation}} </span>
                        
                    </td>
                      
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
  
      