@extends('back.auditAdminMaster')
@section('title','Add Banker')

@section('content')
<div class="wrapper">
    {{-- Content --}}
  <div class="container-fluid">
      <div class="row">
            {{-- Column Start --}}
          <div class="col-sm-12 col-md-12">
            <h1>Change Details</h1>
          <form action="{{route('updateChange',$result->id)}}" method="POST">
            @csrf
            <table class="table table-bordered mt-5">
                <tr>
                <td colspan="2"> <strong> Audit Duration for Stage {{$result->stage}} </strong> </td>
                </tr>
                <tr>
                    <td>Are quoted man-days adequate?</td>
                <td> <input type="text" name="quoted_man" value="{{$result->quoted_man }}"></td>
                </tr>
                <tr>
                  <td>Any change in employee detail?</td>
                  <td> <input type="text" name="employee_detail" value="{{$result->employee_detail }}"> </td>
                </tr>
                <tr>
                  <td>Any Change in Scope?</td>
                  <td> <input type="text" name="change_scope" value="{{$result->change_scope}}"></td>
                </tr>
                <tr>
                  <td>Any additional Information:</td>
                  <td> <input type="text" name="additional_information" value="{{$result->additional_information}}"></td>
                </tr>
            </table>

            <button type="submit" class="btn btn-info float-right">Update</button>

        </form>



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
    