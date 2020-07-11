<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Tex Soft | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/back/plugins/fontawesome-free/css/all.min.css')}}">
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
  <link rel="stylesheet" href="{{asset('public/back/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    {{-- Content --}}
  <div class="container-fluid">
      <div class="row">
            {{-- Column Start --}}
          <div class="col-sm-12 col-md-12">
                    {{-- Form Start --}}
          <form action="{{route('updateReport',$result->id)}}" method="POST">
                    @csrf
                    <div class="container text-center pt-5">
                    <a class="label label-success" href="{{route('viewReport')}}">   <h1>E-Tex Solution Ltd.</h1></a>
                      
                        <p>Audit Question Report For</p>
                        
                        <div style="margin: auto; width:250px"> 
                        
                            <table class="p-3">
                                <tr>
                                    <td style="width:20%"><label for="">Company: </label></td>
                                    <td style="width:80%">
                                        <div class="form-group">
                                            @php
                                                $company = DB::table('companies')->where('id',$result->company_id)->first();
                                            @endphp
                                            <input type="text" name="country_name" id="country_name" value="{{$company->company_name}}" class="form-control input-lg" placeholder="Search Company" />
                                            <div id="countryList">
                                            </div>
                                           </div>
                                           <input id="company_id1" type="hidden" name="company_id" value="">
                                            {{-- {{ csrf_field() }}  --}}
                                    {{-- <Select required name="company_id">
                                        <option value="">--Select Company--</option>
                                        @foreach ($companies as $company)
                                    <option value="{{$company->id}}">{{$company->company_name}}</option>
                                        @endforeach
                                       
                                      
                                    </Select> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:20%"><label for="">Certificate: </label></td>
                                    <td style="width:80%">
                                    <Select class="form-control" id="certificate" required name="certificate_id">
                                        <option value="">--Select Certificate--</option>
                                        @foreach ($certificates as $certificate)
                                    <option value="{{$certificate->id}}">{{$certificate->certificate_name}}</option>
                                        @endforeach
                                        
                                       
                                    </Select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:20%"><label for="">Stage: </label></td>
                                    <td style="width:80%">
                                    <Select class="form-control" id="stage" required name="stage">
                                        <option value="">--Select Stage--</option>
                                        <option value="1">Stage One</option>
                                        <option value="2">Stage Two</option>
                                    </Select>
                                    </td>
                                </tr>
                            </table>
                        
                        </div>
                        @if (Session::get('message'))
                        <p class="text-success"> {{Session::get('message')}} </p>
                            
                        @endif

                        <br><br><br>
                        <p style="color:red;"><b>*C for Conformity
                        *NC for Nonconformity
                        *O for Observation 
                        *DR for Documents Review<br>
                        *P for Plant Tour
                        *WI  for Workers Interview
                        *MI for Management Interview</b>
                        </p>    
                    </div>
                    <div class="container"> 
                        <table class="table table-bordered">
                            <thead class="bg-success">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Questions</th>
                                <th scope="col">Status</th>
                                <th scope="col">Evidence</th>
                                <th scope="col">Comment</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php
                                $status = json_decode($result->status_id, true);
                                $evidence= json_decode($result->evidence_id, true);
                                $comments= json_decode($result->description, true);
                                $key=0;
                                $test = count($status);
                                @endphp
                               
                                @foreach ($status as $key=>$item )
                         

                              
                            <tr>
                                {{-- <th scope="row">1</th> --}}
                            <th style="width: 5%">{{$key}}</th>
                                <td style="width:30%">
                                    @php
                                    $question =DB::table('questions')->where('id', $key)->first();
                                @endphp
                                {{$question->question}} 
                                    
                                  
                                <input type="hidden" name="question_id[]" value="{{$question->id}}">
                                </td>
                                <td style="width:20%">

                                   
                                    <label for="">C</label>
                                <input type="checkbox" id="status1{{$key}}" name="status_id[{{$question->id}}][]" value="1">
                                    <label for="">NC</label>
                                    <input type="checkbox" id="status2{{$key}}" name="status_id[{{$question->id}}][]" value="2">
                                    <label for="">O</label>
                                    <input type="checkbox" id="status3{{$key}}" name="status_id[{{$question->id}}][]" value="3">
                                    @foreach ($item as $st)
                                    
                                    @if ($st==1)
                                        {{-- <span class="badge badge-secondary">C</span> --}}
                                        <script>
                                             document.getElementById("status1"+{{$key}}).checked = true;
                                             console.log({{$st}});
                                        </script>
                                  
                                    @elseif($st==2)
                                    {{-- <span class="badge badge-secondary">NC</span> --}}
                                    <script>
                                        document.getElementById("status2"+{{$key}}).checked = true;
                                        console.log({{$st}});
                                   </script>
                                   
                                    @elseif($st==3)
                                    <script>
                                        document.getElementById("status3"+{{$key}}).checked = true;
                                        console.log({{$st}});
                                   </script>
                                        {{-- <span class="badge badge-secondary">O</span> --}}
                                       
                                    @else
                                    X
                                    @endif
                                  
                                    @endforeach
                                </td>
                                <td style="width:20%">

                                    <label for="">DR</label>
                                <input type="checkbox" id="evi1{{$key}}" name="evidence_id[{{$question->id}}][]" value="1">
                                    <label for="">P</label>
                                    <input type="checkbox" id="evi2{{$key}}" name="evidence_id[{{$question->id}}][]" value="2">
                                    <label for="">WI</label>
                                    <input type="checkbox" id="evi3{{$key}}" name="evidence_id[{{$question->id}}][]" value="3">
                                    <label for="">MI</label>
                                    <input type="checkbox" id="evi4{{$key}}" name="evidence_id[{{$question->id}}][]" value="4">
                                   
                                    @foreach ($evidence[$key] as $evi)
                                    @if ($evi==1)
                                    {{-- <span class="badge badge-secondary">DR</span> --}}
                                    <script>
                                        document.getElementById("evi1"+{{$key}}).checked = true;
                                        console.log({{$evi}});
                                   </script>
                                    @elseif($evi==2)
                                    {{-- <span class="badge badge-secondary">P</span> --}}
                                    <script>
                                        document.getElementById("evi2"+{{$key}}).checked = true;
                                        console.log({{$evi}});
                                   </script>
                                    @elseif($evi==3)
                                        {{-- <span class="badge badge-secondary">WI</span> --}}
                                        <script>
                                            document.getElementById("evi3"+{{$key}}).checked = true;
                                            console.log({{$evi}});
                                       </script>
                                    @elseif($evi==4)
                                        {{-- <span class="badge badge-secondary">MI</span> --}}
                                        <script>
                                            document.getElementById("evi4"+{{$key}}).checked = true;
                                            console.log({{$evi}});
                                       </script>
                                    @else
                                    X
                                    @endif

                                    
                                  
                                    @endforeach
                               
                               
                                </td>
                                <td style="width:25%"><textarea required name="description[{{$question->id}}][]" id="" cols="20" rows="2">
                                    @foreach ($comments[$key] as $comment)
                                    {{$comment}}
                                    @endforeach
                                </textarea>
                                
                                </td>
                            </tr> 
                         
                            @endforeach
                            </tbody>
                            <tfoot class="bg-success">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Questions</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Evidence</th>
                                    <th scope="col">Comment</th>
                                </tr>
                            </tfoot>
                            
                        </table>
                    <button type="submit" class="btn btn-primary float-right">Update</button>
                    <nav aria-label="...">
                        <ul class="pagination justify-content-center">
                            {{$questions->links()}}
                        </ul>
                    
                    </nav>
                    </div>
                {{-- End Table Container --}}
                
                </form>
               
                    {{-- Form End --}}
          </div>
            {{-- Column End --}}

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
    $(document).ready(function(){

    $('#country_name').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('searchCompany') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#countryList').fadeIn();  
                    $('#countryList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'option', function(){  
        $('#country_name').val($(this).text());
        $('#company_id1').val($(this).val());   
        $('#countryList').fadeOut();  
    });  

});
</script>



<script>
$(document).ready(function(){


// $('#company').val({{$result->company_id}});
$('#certificate').val({{$result->certificate_id}});
$('#stage').val({{$result->stage}});


});
</script>

</body>
</html>
