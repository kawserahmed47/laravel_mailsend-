{{-- This is New Section --}}

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

        /*...........................input..........................*/
        .input {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #CCC;
            color: #555;
            box-sizing: border-box;
            font-family: 'Arvo';
            font-size: 18px;
            height: 34px;
            left: 10%;
            margin: -25px 0 0 -100px;
            padding: 10px 0px;
            position: relative;
            top: 50%;
            width: 100px;

        &:focus {
             outline: none;
         }
        }

        input::-webkit-input-placeholder {
            color: #AAA;
        }

        input:focus::-webkit-input-placeholder {
            color: dodgerblue;
        }

        .input:focus+.underline {
            transform: scale(1);
        }

        .underline {
            background-color: dodgerblue;
            display: inline-block;
            height: 2px;
            left: px;
            margin-top: -4px;
            position: absolute;
            top: 185px;
            -webkit-transform: scale(0, 1);
            transform: scale(0, 1);
            -webkit-transition: all 0.5s linear;
            transition: all 0.5s linear;
            width: 202px;
        }

        /*..........................input end................................*/

        label {
            display: inline-block;
            margin-left: 30px;
            margin-bottom: .5rem;
        }

        .form-control-plaintext {
            display: block;
            width: 100%;
            padding-top: .375rem;
            padding-bottom: .375rem;
            margin-bottom: 0;
            line-height: 1.5;
            background-color: transparent;
            margin-top: 3px;
            border: solid transparent;
            border-width: 1px 0;
        }


        /* /.........................icon................../ */

        p.icon {
            margin: -11px;
        }

        .custom-control {
             padding-left: 0px;
        }


        #nonConformities {
            display: inline-block;
            margin-left: 7px;

            margin-bottom: .5rem;

        }

        /* /..................icon................./ */
        .custom-control {
            padding-left: 30px;
        }

    </style>
@endsection
@section('content')
    <div class="wrapper">
        {{-- Content --}}
        <div class="container-fluid">
            <div class="row container">
                <div class="col-sm-12 col-md-12 ml-2">
                    <form action="{{route('insertchangesummary')}}" method="POST" class="mb-5 pb-5">
                        @csrf
                        <input type="hidden" name="certificate_id" value="{{$certificate}}">
                        <input type="hidden" name="company_id" value="{{$company}}">
                        <input type="hidden" name="stage" value="{{$stage}}">

                        {{--                        <a class="label label-success" href="{{route('viewReport')}}">   <h1>E-Tex Solution Ltd.</h1></a>--}}
                        <h2 class="text-center mt-4">CHANGE DETAIL</h2>
                        <table class="table table-bordered m-4  table-hover text-center ">
                            
                            <tbody>

                            <tr style="height:50px;">
                            <td scope="col" class="" colspan="2" style="width:30%;"><strong>Audit Duration for Stage {{$stage}}</strong></td>
                                    {{--<td scope="col" ><input type="text" name="company_name" class=" table-striped form-control ninput-lg " style="border: none;"> </td>--}}
                            </tr>


                            <tr style="height: 50px;">
                                <td scope="col" class=""  style="width: 30%;"><span>Are quoted man-days adequate?</span></td>
                                <td scope="col" ><input required type="text" name="quoted_man" class=" table-striped form-control ninput-lg " placeholder="Please Enter Yes/No" style="border: none;"> </td>
                            </tr>

                            <tr style="height: 50px;">
                                <td scope="col" class=""  style="width: 30%;"><span> Any change in employee detail? </span></td>
                                <td scope="col" ><input required type="text" name="employee_detail" class=" table-striped form-control ninput-lg " placeholder="Please Enter Yes/No" style="border: none;"> </td>
                            </tr>

                            <tr style="height: 50px;">
                                <td scope="col" class=""  style="width: 30%;"><span> Any Change in Scope? </span></td>
                                <td scope="col" ><input required type="text" name="change_scope" class=" table-striped form-control ninput-lg "placeholder="Please Enter Yes/No" style="border: none;"> </td>
                            </tr>

                            <tr style="height: 50px;">
                                <td scope="col"  class=""  ><span>Any additional Information:  </span></td>
                                <td scope="col"  ><input required type="text"  name="additional_information" placeholder="Please Enter Yes/No" class=" table-striped form-control ninput-lg " style="border: none;"> </td>
                            </tr>


{{--                            <tr style="height: 80px; width: 100%">--}}
{{--                                <td scope="col" class=""  style="width: 30%;"><span>Any change in employee detail?</span></td>--}}
{{--                                <td scope="col" ><textarea  rows="4" cols="50"  type="text" name="address" class="form-control input-lg " style="border: none; height: 79px; margin-left: 10px;"></textarea> </td>--}}
{{--                            </tr>--}}

                            </tbody>
                        </table>








                        <h2 class="text-center mt-4">SUMMARY OF AUDIT</h2>
                        <table class="table table-bordered m-4  table-hover text-center ">
                            
                            <tbody>

                            <tr style="height: 50px;">
                                <td scope="col" class="" colspan="2" style="width: 30%;"><strong>  AREA OF IMPROVEMET
                                        (Areas of Improvement Which May be Identified as Non Conformities During Stage 2 Audit)
                                    </strong></td>
                            </tr>


                            <tr style="height: 50px;">
                                <td scope="col" ><input required type="text" placeholder="Example: Minor NC" name="improvement_area[1][]" class=" table-striped form-control ninput-lg " style="border: none;"> </td>
                                <td scope="col" ><input required type="text"  placeholder="Write your statement..." name="improvement_area[1][]" class=" table-striped form-control ninput-lg " style="border: none;"> </td>
                            </tr>

                            <tr style="height: 50px;">
                                <td scope="col" class=""  style="width: 30%;">
                                    <input required type="text" name="improvement_area[2][]" class=" table-striped form-control ninput-lg " style="border: none;">
                                </td>
                                <td scope="col" ><input required type="text" name="improvement_area[2][]" class=" table-striped form-control ninput-lg " style="border: none;"> </td>
                            </tr>

                            <tr style="height: 50px;">
                                <td scope="col" class=""  style="width: 30%;">
                                    <input type="text" required name="improvement_area[3][]" class=" table-striped form-control ninput-lg " style="border: none;">
                                </td>
                                <td scope="col" ><input required type="text" name="improvement_area[3][]" class=" table-striped form-control ninput-lg " style="border: none;"> </td>
                            </tr>

                            <tr style="height: 50px;">
                                <td scope="col" class=""  style="width: 30%;">
                                    <input type="text" required name="improvement_area[4][]" class=" table-striped form-control ninput-lg " style="border: none;">
                                </td>
                                <td scope="col" ><input required type="text" name="improvement_area[4][]" class=" table-striped form-control ninput-lg " style="border: none;"> </td>
                            </tr>

                            <tr style="height: 50px;">
                                <td scope="col" class=""  style="width: 30%;">
                                    <input type="text" required name="improvement_area[5][]" class=" table-striped form-control ninput-lg " style="border: none;">
                                </td>
                                <td scope="col" ><input required type="text" name="improvement_area[5][]" class=" table-striped form-control ninput-lg " style="border: none;"> </td>
                            </tr>

                            <tr style="height: 50px;">
                                <td scope="col" class=""  style="width: 30%;">
                                    <input type="text" required name="improvement_area[6][]" class=" table-striped form-control ninput-lg " style="border: none;">
                                </td>
                                <td scope="col" ><input required type="text" name="improvement_area[6][]" class=" table-striped form-control ninput-lg " style="border: none;"> </td>
                            </tr>

                            <tr style="height: 50px;">
                                <td scope="col" class=""  style="width: 30%;">
                                    <input type="text" required name="improvement_area[7][]" class=" table-striped form-control ninput-lg " style="border: none;">
                                </td>
                                <td scope="col" ><input required type="text" name="improvement_area[][]" class=" table-striped form-control ninput-lg " style="border: none;"> </td>
                            </tr>



                            {{--                            <tr style="height: 80px; width: 100%">--}}
                            {{--                                <td scope="col" class=""  style="width: 30%;"><span>Any change in employee detail?</span></td>--}}
                            {{--                                <td scope="col" ><textarea  rows="4" cols="50"  type="text" name="address" class="form-control input-lg " style="border: none; height: 79px; margin-left: 10px;"></textarea> </td>--}}
                            {{--                            </tr>--}}


                            </tbody>
















                        </table>











                        <table class="table table-bordered m-4  table-hover text-center ">
                            
                            <tbody>

                            <tr style="height: 50px;">
                                <td scope="col" class="" colspan="2" style="width: 30%;">
                                    <p class="text-left m-3">Non Conformities Raised<br>
                                        <input required class="input text-left pl-2" name="nonconformatise" type="text"> <span class="underline"></span>
                                        <label
                                            for="">Minor/Major Non conformance identified in the Stage 1 audit, details of Non Conformance in  F50.
                                    Please respond by using your own corrective action form and include the root cause analysis with systemic corrective action. Failure to include root cause analysis with systemic corrective action will result in your responses being rejected by Lead Auditor
                                        </label></p>
                                </td>
                            </tr>



                            {{--                            <tr style="height: 80px; width: 100%">--}}
                            {{--                                <td scope="col" class=""  style="width: 30%;"><span>Any change in employee detail?</span></td>--}}
                            {{--                                <td scope="col" ><textarea  rows="4" cols="50"  type="text" name="address" class="form-control input-lg " style="border: none; height: 79px; margin-left: 10px;"></textarea> </td>--}}
                            {{--                            </tr>--}}


                            </tbody>
                        </table>






                        <table class="table table-bordered m-4  table-hover text-center ">
                            @csrf
                            <tbody>

                            <tr style="height: 50px;">
                                <td scope="col" class="" colspan="2" style="width: 30%;"><strong>Team Leader Declaration  (Tick  or cross Each Column as per applicability)</strong></td>
                                {{--                                <td scope="col" ><input type="text" name="company_name" class=" table-striped form-control ninput-lg " style="border: none;"> </td>--}}
                            </tr>


                            <tr style="height: 50px;" class="text-left center">
                                <td scope="col"  class="text-center"><div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" class="form-check-input" name="declaration[1][]" value="1" id="a">
                                        <label class="" for="defaultInline3"><p class="icon">&#10004;</p></label>
                                    </div>

                                    <!-- Default inline 2-->
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" class="form-check-input" name="declaration[1][]" value="0" id="a">
                                        <label class="" for="defaultInline4"><p class="icon">&#10060;</p></label>
                                    </div>

                                </td>
                                <td scope="col" class=""  style="width: 70%;"><span>Auditing is based on a sampling process of the avaispan information</span></td>
                            </tr>



                            <tr style="height: 50px;" class="text-left">
                                <td scope="col"  class="text-center"><div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" required class="form-check-input" name="declaration[2][]" value="1" id="b">
                                        <label  for="defaultInline1"><p class="icon">&#10004;</p></label>
                                    </div>

                                    <!-- Default inline 2-->
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" required class="form-check-input" name="declaration[2][]" value="0" id="b">
                                        <label class="" for="defaultInline2"><p class="icon">&#10060;</p></label>
                                    </div>

                                </td>
                                <td scope="col" class=""  style="width: 70%;"><span> Audit is combined, joint or integrated; </span></td>
                            </tr>

                            <tr style="height: 50px;" class="text-left">
                                <td scope="col"  class="text-center"><div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" class="form-check-input" name="declaration[3][]" value="1" id="b">
                                        <label  for="defaultInline1"><p class="icon">&#10004;</p></label>
                                    </div>

                                    <!-- Default inline 2-->
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" class="form-check-input" name="declaration[3][]"  value="0"id="b">
                                        <label class="" for="defaultInline2"><p class="icon">&#10060;</p></label>
                                    </div>

                                </td>
                                <td scope="col" class=""  style="width: 70%;"><span> The effectiveness of corrective actions taken regarding previously identified  </span></td>
                            </tr>

                            <tr style="height: 50px;" class="text-left">
                                <td scope="col"  class="text-center"><div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" class="form-check-input" name="declaration[4][]" value="1" id="b">
                                        <label  for="defaultInline1"><p class="icon">&#10004;</p></label>
                                    </div>

                                    <!-- Default inline 2-->
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" class="form-check-input" name="declaration[4][]" value="0" id="b">
                                        <label class="" for="defaultInline2"><p class="icon">&#10060;</p></label>
                                    </div>

                                </td>
                                <td scope="col" class=""  style="width: 70%;"><span> nonconformities has verified </span></td>
                            </tr>

                            <tr style="height: 50px;" class="text-left">
                                <td scope="col"  class="text-center"><div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" class="form-check-input" name="declaration[5][]" value="1" id="b">
                                        <label  for="defaultInline1"><p class="icon">&#10004;</p></label>
                                    </div>

                                    <!-- Default inline 2-->
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" class="form-check-input" name="declaration[5][]" value="0" id="b">
                                        <label class="" for="defaultInline2"><p class="icon">&#10060;</p></label>
                                    </div>

                                </td>
                                <td scope="col" class=""  style="width: 70%;"><span> outcomes are effective and complying. </span></td>
                            </tr>

                            <tr style="height: 50px;" class="text-left">
                                <td scope="col"  class="text-center"><div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" class="form-check-input" name="declaration[6][]" value="1" id="b">
                                        <label  for="defaultInline1"><p class="icon">&#10004;</p></label>
                                    </div>

                                    <!-- Default inline 2-->
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" class="form-check-input" name="declaration[6][]" value="0" id="b">
                                        <label class="" for="defaultInline2"><p class="icon">&#10060;</p></label>
                                    </div>

                                </td>
                                <td scope="col" class=""  style="width: 70%;"><span> The internal audit and management review process are effective and complying with the requirements. </span></td>
                            </tr>

                            <tr style="height: 50px;" class="text-left">
                                <td scope="col"  class="text-center"><div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" class="form-check-input" name="declaration[7][]" value="1" id="b">
                                        <label  for="defaultInline1"><p class="icon">&#10004;</p></label>
                                    </div>

                                    <!-- Default inline 2-->
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" required class="form-check-input" name="declaration[7][]" value="0" id="b">
                                        <label class="" for="defaultInline2"><p class="icon">&#10060;</p></label>
                                    </div>

                                </td>
                                <td scope="col" class=""  style="width: 70%;"><span> The scope of certification is appropriate. </span></td>
                            </tr>


                            <tr style="height: 50px;" class="text-left">
                                <td scope="col"  class="text-center"><div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" required class="form-check-input" name="declaration[8][]" value="1" id="b">
                                        <label  for="defaultInline1"><p class="icon">&#10004;</p></label>
                                    </div>

                                    <!-- Default inline 2-->
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" required class="form-check-input" name="declaration[8][]" value="0" id="b">
                                        <label class="" for="defaultInline2"><p class="icon">&#10060;</p></label>
                                    </div>

                                </td>
                                <td scope="col" class=""  style="width: 70%;"><span> The capability of the management system to meet applicable requirements and expected </span></td>
                            </tr>


                            <tr style="height: 50px;" class="text-left">
                                <td scope="col"  class="text-center"><div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" class="form-check-input" name="declaration[9][]" value="1" id="b">
                                        <label  for="defaultInline1"><p class="icon">&#10004;</p></label>
                                    </div>

                                    <!-- Default inline 2-->
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" class="form-check-input" name="declaration[9][]" value="0" id="b">
                                        <label class="" for="defaultInline2"><p class="icon">&#10060;</p></label>
                                    </div>

                                </td>
                                <td scope="col" class=""  style="width: 70%;"><span>The audit objectives has been fulfilled and achieved.  </span></td>
                            </tr>

                            <tr style="height: 50px;">
                                <td scope="col" class="" colspan="2" style="width: 30%;"><strong>RECOMMENDATION </strong></td>
                            </tr>

                            <tr style="height: 50px;" class="text-left">
                                <td scope="col" ></td>
                                <td scope="col" class=""  style="width: 70%;"><p>Recommended Proceeding With Stage 2 (within 60 days from this audit date) </p></td>
                            </tr>

                            <tr style="height: 50px;" class="text-left">
                                <td scope="col" > </td>
                                <td scope="col" class=""  style="width: 70%;"><p>Recommend not proceeding to stage 2 until audit evidence has been submitted to SMS Inc. showing that the concerns raised by the auditor (s) have been rectified. A date for stage 2 will then be agreed.  </p></td>
                            </tr>

                            <tr style="height: 50px; line-height: 5px" class="text-left" >
                                <td scope="col" ></td>
                                <td scope="col"class="" style="width: 70%;"><p>Recommend not proceeding without a further stage 1 Audit due to the severity of the concerns raised by the audit team</p></td>
                            </tr>

                            </tbody>
                        </table>




                        <table class="table table-bordered m-4  table-hover text-center ">
                            
                            <tbody>

                            <tr style="height: 50px;">
                                <td scope="col" class="" colspan="2" style="width: 30%;"><strong>Sign Off :</strong><input required class="form-control-sm" type="text" name="sign_off_date">  </td>
                                {{-- <td><input type="date" name="sign_off_date"> </td> --}}
                                {{--                                <td scope="col" ><input type="text" name="company_name" class=" table-striped form-control ninput-lg " style="border: none;"> </td>--}}
                            </tr>

                            <tr style="height: 50px;" class="text-left">

                                <td scope="col" class=""  style="width: 50%;"><span>E-Tex Solution Report Submission </span></td>
                                <td scope="col" class=""  style="width: 50%;"><span>Client Acceptance for Report  </span></td>
                            </tr>



                            <tr style="height: 80px; width: 100%">
                                <td scope="col" class=""  style="width: 50%;">
                                    <div class="form-group row">
                                        <label for="staticEmail">Name of Auditor :</label>
                                        <div class="col-sm-6">
                                            <input type="text" required name="auditorName" class="form-control" id="" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="staticEmail">Signature :</label>
                                        <div class="col-sm-6">

                                        </div>
                                    </div>

                                </td>
                                <td scope="col" >

                                    <div class="form-group row">
                                        <label for="staticEmail">Name:</label>
                                        <div class="col-sm-6">
                                            <input type="text" required name="clientName" class="form-control"  >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="staticEmail">Sign :</label>
                                        <div class="col-sm-6">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="staticEmail">Designation:</label>
                                        <div class="col-sm-6">
                                            <input type="text" required name="clidentDesignation" class="form-control" id="" >
                                        </div>
                                    </div>

                                </td>
                            </tr>

                            </tbody>
                        </table>


                        <button type="submit" class="btn btn-info float-right">NEXT</button>


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





