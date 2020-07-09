@extends('back.adminMaster')

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
      <p id="adminName"></p>
      <form action="" method="POST">
        @csrf
        <input type="text" id="admin_id" name="id" value="">
        <label for="">Select Role</label>
        <select name="role" id="">
          <option value="99">--Select--</option>
          <option value="2">Auditor</option>
          <option value="3">Contacts</option>
        </select>
      <a href="">Submit</a>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>


<section class="content-header">
      <div class="container-fluid">
        <div class="row ">
        <div class="col-sm-6">
            <h1>View Admins</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">View Admins</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content-header">
      <div class="container-fluid">
<div class="row">
          <div class="col-md-9">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Admins List</h3>
                <br>
                @if (Session::get('message'))
                <p class="bg-success text-center">{{ Session::get('message') }}</p>
                @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                     
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php
                      $a=0
                  @endphp
                  @if(!empty($results))
                  @foreach($results as $key=>$result)
                    <tr>
                      <td>{{$key+1 }} </td>
                      <td>{{$result->name }}</td>
                      <td> {{$result->email}} </td>
                     <td>
                     @if($result->role ==2 )
                    <span class="badge badge-info" >Auditor </span>
                 @elseif($result->role ==0)
                 <span class="badge badge-success" >Super admin</span>
                 @elseif($result->role ==3)
                 <span class="badge badge-secondary" >Administration</span>
                 @elseif($result->role ==1)
                 <span class="badge badge-warning" >New admin</span>
                 @else 
                 <span class="badge badge-danger" > Inactive</span>
                 <button type="button" class="badge badge-danger adminID" data-toggle="modal" data-target="#exampleModal" data-id="{{$result->id }}" data-name="{{ $result->name}}">
                  Inactive
                </button>
                 @endif
                     </td>
                      <td>
                        <a class=" badge bg-primary" href="{{route('editAdmin',$result->id)}}">Edit</a>
                      @if ($result->role !=0)
                      <a  onclick="return confirm('Are you sure?')" class=" badge bg-danger" href="{{route('deleteAdmin',$result->id)}}">Delete</a>
                      @endif
                      </td>
                    </tr>
                    @endforeach

                    @else 
                    <tr>
                      <td colspan="6" class="text-center">
                        No Data Available
                      </td>
                    </tr>
                    @endif
                
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
   

            </div>
            <!-- /.card -->

      
            <!-- /.card -->
          </div>
          <!-- /.col -->
        
          <!-- /.col -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection

@section('extraJS')
<script>
  $(".adminID").click(function(){
    //  $("p").hide();
    $("#adminName").html($(this).data('name'));
    $("#admin_id").val($(this).data('id'));
    // $("#product_name").val($(this).data('name'));
    // $("#product_price").val($(this).data('price'));
    // $('#product_type').val($(this).data('product_type'));
    });
  
  </script>
    
@endsection