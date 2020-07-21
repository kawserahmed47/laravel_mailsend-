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
  <style>
    @font-face {
        font-family: 'fontawesome3';
        src: url('{{asset('public/font-awesome/font/fontawsome-webfont')}}')format('truetype');
        font-weight: normal;
        font-style: normal;
    }
    .fa3 {
        display: inline-block;
        font: normal normal normal 14px/1 fontawesome3;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

</style>
<style>
    .pagenum:before {
         content: counter(page);
     }
 </style>
<style>
    @page { margin: 100px 25px; }
    header { position: fixed; top: -60px; left: 0px; right: 0px; background-color:white; height:100px; margin-bottom: 10px; }
    footer { position: fixed; bottom: -60px; left: 0px; right: 0px; background-color:white; height: 70px; }
    p { page-break-after: always; }
    p:last-child { page-break-after: never; }
  </style>
</head>
<body style="font-size:11px;" class="layout-fixed">
    <header>
        <table style=" border-top-style:hidden;" class="table">
            <tr>
                <td >
                    <label for="">Document</label><br>
                    <label for="">E-TXF22</label>
                    
     
                </td>
                <td >
                    <label for="">Issue</label><br>
                    <label for="">01</label>
     
                </td>
                <td >
                    <label for="">Date</label><br>
                    <label for="">{{$company->s_audit_date}}</label>
                </td>
                <td class="float-right">
                <img style="height:50px; width:50px" src="{{asset('public/aimage/logo.jpg')}}" alt="LOGO">
               <br>
               Page/
               <span class="pagenum"></span>
                </td>
            </tr>
          
        </table>
    </header>
    <footer>
        <div class="mt-3">
            <hr>
        </div>
        <table>
            <tr>


                <td class="" style=" width:25%">
                    E-Tex Solution Ltd.  
                </td>

                <td style=" width:25% ">
                </td>

                <td style=" width:25% ">
                </td>

                <td class="text-center" style=" width:25% " >
                     Private & Confidential  
                </td>


            </tr>
        </table>
    </footer>
    
<div class="wrapper">
    {{-- Content --}}
  <div style="display: block; position:block;" class="container-fluid">
   
      <div class="row" style="margin-top: 85px;">
            {{-- Column Start --}}
      

        @php
         $improvement_area =  json_decode($summaries->improvement_area, true);
         $declaration = json_decode($summaries->declaration, true);
         $status = json_decode($result->status_id, true);
         $evidence= json_decode($result->evidence_id, true);
         $comments= json_decode($result->description, true);

        //  print_r($improvement_area);

         $i=1;
         @endphp



          <div class="col-sm-12 col-md-12 mt-3">
            
            


              <table>
                  <tr>
                      <td>
                        <label class="text-center" for="">
                        <strong>Stage {{$changes->stage}} Audit Report</strong>
                        </label>
                      </td>
                      <td> 
                      {{-- <a class="badge badge-success float-right" href="{{route('generatePdf',$changes->company_id)}}">Print PDF</a> --}}
                      </td>
                  </tr>
              </table>
              
              <table class="table table-bordered">
                  <tr>
                <td>Name of the Organization </td>
                  <td colspan="2">{{$company->company_name }}</td>
                  </tr>
                  <tr>
                    <td>Address</td>
                    <td colspan="2">{{$company->address}}</td>
                </tr>
                <tr>
                    <td>Standard Name</td>
                    <td colspan="2">{{$company->standard_name}}</td>
                </tr>
                <tr>
                    <td>Site Address (If any)</td>
                    <td colspan="2">{{$company->site_address}}</td>
                </tr>
                <tr>
                    <td>No. of Employees </td>
                    <td colspan="2">{{$company->employees_num}}</td>
                </tr>
                <tr>
                    <td>No. Of Shift</td>
                    <td colspan="2">{{$company->shift_num}}</td>
                </tr>
                <tr>
                    <td>E mail id </td>
                    <td colspan="2">{{$company->email}}</td>
                </tr>
                <tr>
                    <td>Contact Person </td>
                    <td colspan="2">{{$company->contact}}</td>
                </tr>
                <tr>
                    <td>Telephone/Fax</td>
                    <td colspan="2">{{$company->mobile }}</td>
                </tr>
                <tr>
                    <td>Scope </td>
                    <td colspan="2">{{$company->scope}}</td>
                </tr>
                <tr>
                    <td>Technical Area </td>
                    <td colspan="2">{{$company->technical_area }}</td>
                </tr>
                <tr>
                    <td>Exclusions</td>
                    <td colspan="2">{{$company->exclusion}}</td>
                </tr>
                <tr>
                    <td>Audit Team </td>
                    <td>{{$company->audit_team}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Starting date of Audit </td>
                    <td colspan="2">{{$company->s_audit_date}}</td>
                </tr>
                <tr>
                    <td>End Date of Audit</td>
                    <td colspan="2">{{$company->e_audit_date}}</td>
                </tr>
                <tr>
                    <td>Brief about the organization </td>
                    <td colspan="2">{{$company->brief }}</td>
                </tr>
                <tr>
                    <td>Audit Objective </td>
                    <td colspan="2">{{$company->objective}}</td>
                </tr>
                
              </table>
              <br>
              <br>
              <br>
              <strong>Change Details</strong>
              <table class="table table-bordered">
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
              <br>
              <br>
               
              <strong>Summary of Audit</strong>

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

<br><br>

              <table class="table table-bordered">
                  <tr>
                      <td> <strong> Non Conformities Raised  </strong></td>
                  </tr>
                  <tr>
                      <td>
                      <u> <strong> {{$summaries->nonconformatise }}</strong></u> Minor  Non conformance identified in the Stage 1 audit, details of Non Conformance in  F50.
                        Please respond by using your own corrective action form and include the root cause analysis with systemic corrective action. Failure to include root cause analysis with systemic corrective action will result in your responses being rejected by Lead Auditor
                        

                      </td>
                  </tr>
              </table>
              <br>
              <br>
              <br>
              <br>
              <br>
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
                <td>
                     {{-- {{$dec}}  --}}
                     @if ($dec==1)
                      <img style="height:20px; width:20px" src="{{asset('public/aimage/tick.png')}}" alt="tick"> 

                      {{-- <i class="fa3 fa-star checked"></i>  --}}

                     {{-- <i class="fa3"> &#10003; </i> --}}
                     {{-- <i class="fa3 fa fa-file-pdf-o"></i> --}}
                   
                         {{-- <p>  &#10003; </p>  --}}

                    @elseif($dec==0)
                    {{-- <p> &#10005; </p> --}}
                    <img style="height:20px; width:20px" src="{{asset('public/aimage/cross1.png')}}" alt="cross"> 
                        
                    @endif  
                
                
                </td> 
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
                    <td>Recommend not proceeding to stage 2 until audit evidence has been submitted to E-Tex Solution Ltd. showing that the concerns raised by the auditor (s) have been rectified. A date for stage 2 will then be agreed.</td>

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
                      <td>E-Tex Solution Ltd. Report Submission</td>
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
              <br>
              <br>
              <br>
              <br>
              <strong>AUDIT CHECKLIST</strong>
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
                            <span class="badge">C</span>
                        @elseif($st==2)
                        <span class="badge">NC</span>
                        @elseif($st==3)
                            <span class="badge">O</span>
                        @else
                        X
                        @endif
                        
                        @endforeach
                    </td>
                    <td>
                       @if ($evidence[$key])
                           
                       
                        @foreach ($evidence[$key] as $evi)
                        @if ($evi==1)
                        <span class="badge">DR</span>
                        @elseif($evi==2)
                        <span class="badge">P</span>
                        @elseif($evi==3)
                        <span class="badge">WI</span>
                        @elseif($evi==4)
                        <span class="badge">MI</span>
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
        </div>        
    </div>
      {{-- End Content --}}
  </div>

  
  {{-- <div id="footer">

</div> --}}

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

  {{-- <script >
    if ( isset($pdf) ) {
        // OLD 
        // $font = Font_Metrics::get_font("helvetica", "bold");
        // $pdf->page_text(72, 18, "{PAGE_NUM} of {PAGE_COUNT}", $font, 6, array(255,0,0));
        // v.0.7.0 and greater
        $x = 72;
        $y = 18;
        $text = "{PAGE_NUM} of {PAGE_COUNT}";
        $font = $fontMetrics->get_font("helvetica", "bold");
        $size = 6;
        $color = array(255,0,0);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
    }
</script>
   --}}
  </body>
  </html>
  
      