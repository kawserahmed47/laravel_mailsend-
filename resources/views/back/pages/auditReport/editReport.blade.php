@extends('back.auditAdminMaster')
@section('title','Add Banker')

@section('content')
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
                   
                        
                        <div style="margin: auto; width:250px"> 
                        
                           
                            <table class="p-3">
                                <tr>
                                    {{-- <td style="width:20%"><label for="">Company: </label></td> --}}
                                    <td style="width:80%">

                                    <input type="hidden" name="" value="{{$result->company_id}}">
                                      
                                    </td>
                                </tr>
                            
                                <tr>
                                {{-- <td style="width:20%"><label for="">Certificate: </label></td> --}}
                                <td style="width:80%"><input type="hidden" name="" value="{{$result->certificate_id}}"></td>
                                </tr>
                                <tr>
                                {{-- <td style="width:20%"><label for="">Stage: </label></td> --}}
                                <td style="width:80%"><input type="hidden" name="" value="{{$result->stage}}"></td>
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
                                $i=1;
                                @endphp
                               
                                @foreach ($status as $key=>$item )
                         

                              
                            <tr>
                                {{-- <th scope="row">1</th> --}}
                            <th style="width: 5%">{{$i++}}</th>
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
                            {{-- {{$questions->links()}} --}}
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
    
    @endsection
    <!-- ./wrapper -->
    @section('extraJS')
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    {{-- 
    <script>
        $(document).ready(function(){
          
          $('#selectRow').hide();
           
            
    
        $('#search_company').keyup(function(){ 
            var query = $(this).val();
            if(query != '')
            {
             var _token = $('input[name="_token"]').val();
             $.ajax({
              url:"{{ route('searchCompany') }}",
              method:"POST",
              data:{query:query, _token:_token},
              success:function(data){
                $('#selectRow').show();
            //    $('#searchList').fadeIn();  
                $('#companyList').html(data);
                // $('#countryList1').show();
              }
             });
            }
               
    
        
            
        });
    
     
        $(document).ready(function(){
                                                     
             $('#companyList').on('change', function() {
                $('#search_company').val($(this).find(":selected").text());
                $('#company_id').val($(this).find(":selected").val());
                var xxxx= $(this).val();
                console.log(xxxx);
                // $('#selectRow').hide();
         
             });
         
         
         });
                                                
                                          
                                            
    
     $('#select_tags').on('change', function() {
             var yyyy= $(this).val();
             console.log(yyyy);
    
     });
     
    
    
    });
    </script>
     --}}
    
        
    @endsection
    