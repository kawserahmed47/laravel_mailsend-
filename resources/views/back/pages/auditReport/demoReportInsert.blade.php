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
          <form action="{{route('insertReport')}}" method="POST">
                    @csrf
          <input type="hidden" name="company_id" value="{{$company}}">
          <input type="hidden" name="certificate_id" value="{{$certificate}}">
          <input type="hidden" name="stage" value="{{$stage}}">

                    <div class="container text-center pt-5">
                    {{-- <a class="label label-success" href="{{route('viewReport')}}">   <h1>E-Tex Solution Ltd.</h1></a>
                      
                        <p>Audit Question Report For</p> --}}
                        <p>Audit Checklist</p>
                        
                        <div style="margin: auto; width:250px"> 
                        
                            {{-- <table class="p-3">
                                <tr>
                                    <td style="width:20%"><label for="">Company: </label></td>
                                    <td style="width:80%">
                                        <input id="company_id" type="hidden" name="company_id" value=""> 
                                        <div class="form-group">
                                            <input type="text" name="search_company" id="search_company" class="form-control" placeholder="Search Company" />    
                                        </div>
                                         
                                    </td>
                                </tr>
                               
                                <tr  id="selectRow">
                                    <td  style="width: 20%"><label id="selectLabel" for="">Select:</label></td>
                                    <td style="width: 80%">
                                        <div class="form-group">
                                            <div>
                                                <select class="form-control" name="" id="companyList">

                                                </select>
                                            </div>
                                       
                                        </div>
                                    </td>
                                </tr>
                           
                                <tr>
                                    <td style="width:20%"><label for="">Certificate: </label></td>
                                    <td style="width:80%">
                                        <div class="form-group">
                                    <Select id="select_tags" class="form-control" required name="certificate_id">
                                        <option value="">--Select Certificate--</option>
                                        @foreach ($certificates as $certificate)
                                    <option value="{{$certificate->id}}">{{$certificate->certificate_name}}</option>
                                        @endforeach
                                        
                                       
                                    </Select>

                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:20%"><label for="">Stage: </label></td>
                                    <td style="width:80%">

                                        <div class="form-group">
                                    <Select class="form-control" required name="stage">
                                        <option value="">--Select Stage--</option>
                                        <option value="1">Stage One</option>
                                        <option value="2">Stage Two</option>
                                    </Select>
                                    </div>
                                    </td>
                                </tr>
                            </table>
                         --}}
                          
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
                                @foreach ($questions as $key=>$question)
                              
                            <tr>
                                {{-- <th scope="row">1</th> --}}
                            <th style="width: 5%">{{$key+1}}</th>
                                <td style="width:30%">{{$question->question}}
                            <input type="hidden" name="question_id[]" value="{{$question->id}}">
                                </td>
                                <td style="width:20%">
                                    <label for="">C</label>
                                    <input type="checkbox" name="status_id[{{$question->id}}][]" value="1">
                                    <label for="">NC</label>
                                    <input type="checkbox" name="status_id[{{$question->id}}][]" value="2">
                                    <label for="">O</label>
                                    <input type="checkbox" name="status_id[{{$question->id}}][]" value="3">
                                </td>
                                <td style="width:20%">
                                    <label for="">DR</label>
                                    <input type="checkbox" name="evidence_id[{{$question->id}}][]" value="1">
                                    <label for="">P</label>
                                    <input type="checkbox" name="evidence_id[{{$question->id}}][]" value="2">
                                    <label for="">WI</label>
                                    <input type="checkbox" name="evidence_id[{{$question->id}}][]" value="3">
                                    <label for="">MI</label>
                                    <input type="checkbox" name="evidence_id[{{$question->id}}][]" value="4">
                                </td>
                            <td style="width:25%"><textarea id="description{{$question->id}}"  name="description[{{$question->id}}][]" id="" cols="20" rows="2"></textarea>
                                    <script>
                                        
                                        // document.getElementById("evi4"+{{$key}}).checked = true;
                                        // document.getElementById("myText").value = "Johnny Bravo";
                                        var x = document.getElementById("description"+{{$question->id}}).value;
                                        if(x==""){
                                        document.getElementById("description"+{{$question->id}}).value ="   ";
                                        }
                                   </script>
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
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
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
