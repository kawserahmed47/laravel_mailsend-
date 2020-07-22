@extends('back.auditAdminMaster')
@section('title','Add Banker')
@section('style')
    <style>
        body {
            margin: 0;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
            font-size: 1rem;
            font-weight: 400;
            /* line-height: 1.5; */
            color: #212529;
            text-align: left;
            background-color: #fff;
        }

        .form-control {
            /*display: block; */
            width: 97%;

            height: 40px;
            padding: 0.100rem 1.75rem;
            margin-top: 4px;
            padding: 0px;
            margin-right: 100px;

            font-size: 1rem;
            line-height: -1;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: -0.75rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }

        /*textarea {*/
        /*    !*display: block; *!*/
        /*    width: 100%;*/

        /*    height: 100px;*/
        /*    padding: 0.100rem 1.75rem;*/
        /*    margin-top: 50px;*/
        /*    padding: 0px;*/
        /*    margin-right: 100px;*/

        /*    font-size: 1rem;*/
        /*    line-height: -1;*/
        /*    color: #495057;*/
        /*    background-color: #fff;*/
        /*    background-clip: padding-box;*/
        /*    border: 1px solid #ced4da;*/
        /*    border-radius: -0.75rem;*/
        /*    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;*/
        /*}*/
        table {
            border-collapse: separate;
        }


        .table td, .table th {
            padding: 0px !important;
            /* vertical-align: top; */
            /* border-top: 1px solid #dee2e6; */
        }

        .table td, .table th {
            padding: .60rem;
            /* vertical-align: top; */
            /* border-top: 1px solid #dee2e6; */
        }

        .table-bordered td, .table-bordered th {
            border: 2px solid #dee2e6 !important;
        }

        span{
            margin-left: 10px;
            margin-top: 20px !important;
            padding-top: 20;: ;
        }
        input{
            margin-left: 10px;
            line-top: 20px;
        }

        td {
            line-height: 43px;
        }
    </style>
@endsection
@section('content')
    <div class="wrapper">
        {{-- Content --}}
        <div class="container-fluid">
            <div class="row container">
                <div class="col-sm-12 col-md-12 ml-2">
                    <form action="{{route('updateCompany',$CompanyData->id)}}" method="POST">
                        {{--                        <a class="span span-success" href="{{route('viewReport')}}">   <h1>E-Tex Solution Ltd.</h1></a>--}}

                        {{-- <input type="hidden" name="certificates_id" value="{{$certificates}}">
                        <input type="hidden" name="stage" value="{{$stage}}"> --}}
                        <h2 class="text-center mt-4">Company Information</h2>
                     {{-- <p class="text-center text-info">(Insert If New)</p> --}}
                        <table class="table table-bordered m-4   text-center ">
                            @csrf
                            <tbody>

                            <tr style="height: 50px;">
                                <td scope="col" class=""  style="width: 30%;"> <span for="">Name of the Organization</span> </td>
                              
                            <td scope="col" ><input type="text" name="company_name" value="{{$CompanyData->company_name}}" required class=" table-striped form-control ninput-lg " style="border: none;"> </td>
                            </tr>

                            <tr style="height: 80px; width: 100%">
                                <td scope="col" class=""  style="width: 30%;"><span>Address</span></td>
                                <td scope="col" ><textarea  rows="4" cols="50"  type="text" required name="address"  class="form-control input-lg " style="border: none; height: 79px; margin-left: 10px;">{{$CompanyData->address}}</textarea> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><span>Standard Name </span></td>
                                <td scope="col" ><input type="text" name="standard_name" value="{{$CompanyData->standard_name}}"  required class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><span>Site Address (If any) </span></td>
                                <td scope="col" ><input type="text" name="site_address" value="{{$CompanyData->site_address}}"  required class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><span mt-3>No. of Employees  </span></td>
                                <td scope="col" ><input type="text" required name="employees_num" class="form-control input-lg " value="{{$CompanyData->employees_num}}"  style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><span>No. Of Shift </span></td>
                                <td scope="col" ><input type="text" required name="shift_num" value="{{$CompanyData->shift_num}}"  class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><span>E mail id  </span></td>
                                <td scope="col" ><input type="text" required name="email" value="{{$CompanyData->email}}" class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><span>Contact Person  </span></td>
                                <td scope="col" ><input type="text" required name="contact"  class="form-control input-lg " value="{{$CompanyData->contact}}"  style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><span>Telephone/Fax  </span></td>
                                <td scope="col" ><input type="text" required name="mobile" value="{{$CompanyData->mobile}}"  class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><span> Scope </span></td>
                                <td scope="col" >
                                    <textarea  rows="4" cols="50"  type="text" required name="scope"  class="form-control input-lg " style="border: none; height: 79px; margin-left: 10px;">{{$CompanyData->scope}}</textarea>
                                    
{{--                                     
                                    <input type="text" required name="scope" value="{{$CompanyData->scope}}"  class="form-control input-lg " style="border: none;"> --}}
                                
                                </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><span>Technical Area </span></td>
                                <td scope="col" >
                                    <textarea  rows="4" cols="50"  type="text" required name="technical_area"  class="form-control input-lg " style="border: none; height: 79px; margin-left: 10px;">{{$CompanyData->technical_area}}</textarea>
                                    
                                    {{-- <input type="text" required name="technical_area" value="{{$CompanyData->technical_area}}" class="form-control input-lg " style="border: none;">   --}}
                                </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><span>Exclusions </span></td>
                                <td scope="col" >
                                    <textarea  rows="4" cols="50"  type="text" required name="exclusion"  class="form-control input-lg " style="border: none; height: 79px; margin-left: 10px;">{{$CompanyData->exclusion}}</textarea>
                                    
                                    {{-- <input type="text" required name="exclusion" class="form-control input-lg " value="{{$CompanyData->exclusion}}"  style="border: none;">
                                 --}}
                                </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><span> Audit Team </span></td>
                                <td scope="col" ><input type="text" required name="audit_team" class="form-control input-lg " value="{{$CompanyData->audit_team}}"  style="border: none;">
                                <input type="text" required name="audit_duration" class="form-control input-lg " value="{{$CompanyData->audit_duration}}"  style="border: none;">
                                </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><span> Starting date of Audit </span></td>
                                <td scope="col" ><input type="text" required name="s_audit_date" value="{{$CompanyData->s_audit_date}}" class="form-control input-lg" style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><span>End Date of Audit </span></td>
                                <td scope="col" ><input type="text" required name="e_audit_date"  value="{{$CompanyData->e_audit_date}}" class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><span> Brief about the organization </span></td>
                                <td scope="col" >
                                    <textarea  rows="4" cols="50"  type="text" required name="brief"  class="form-control input-lg " style="border: none; height: 79px; margin-left: 10px;">{{$CompanyData->brief}}</textarea>
                                    
                                    {{-- <input type="text" required name="brief" value="{{$CompanyData->brief}}" class="form-control input-lg " style="border: none;">  --}}
                                
                                </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><span>Audit Objective  </span></td>
                                <td scope="col" >
                                    <textarea  rows="4" cols="50"  type="text" required name="objective"  class="form-control input-lg " style="border: none; height: 79px; margin-left: 10px;">{{$CompanyData->objective}}</textarea>
                                    {{-- <input type="text" required name="objective" value="{{$CompanyData->objective}}" class="form-control input-lg " style="border: none;"> --}}
                                 </td>
                            </tr>
                            </tbody>
                        </table>

                        {{--                            <button type="submit" class="btn btn-primary">Submit</button>--}}
                        <button class="btn btn-info float-right mb-5">Update</button>
                    </form>

                </div>
                {{-- Column Start --}}

                {{-- Column End --}}

            </div>
        </div>

        {{-- End Content --}}

    </div>
    <!-- ./wrapper -->


@endsection
