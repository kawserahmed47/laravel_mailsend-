<!DOCTYPE html>
<html>
<head>
<style>
    body{
        padding: 0;
        margin: 0;
    }
.container {
  position: relative;
}

.topleft {
  position: absolute;
  top: 8px;
  left: 16px;
  font-size: 14px;
  text-align: center;
  padding: 0px;
  line-break: unset;
}

img { 
  width: 100%;
  height: auto;
  /* opacity: 0.3; */
}
</style>
</head>
<body>

<div class="container">
  <img src="{{asset('public/aimage/blank_certificate2.png')}}" alt="Cinque Terre" width="1000" height="300">
    <div style="margin-top: 32%; margin-left:15%; width:517px" class="topleft">
        <h3>{{$company->company_name}}</h3>
     <span>{{$company->address}}</span>
     <p style="margin: 0px; padding:0px;">for</p>
     <p>{{$company->scope}}</p>
     <span>has been assesed and registered against the provision of</span>
     <h3 style="color: red">{{$result->certificate->certificate_name}}</h3>
     <span>international Standard</span>
     <p style="margin: 0px; padding:0px;">with</p>
     <table style="text-align: left; margin-left:80px">
      @php
      $regnum =date("dmY") . $company->id;
      $cdate = date("d/m/Y");
      $cernum= strrev(date("dmY")) . $company->id;
      $code = 4;
      $issue = 01;
     @endphp
       <tr>
         <td>Registration Number:</td>
         <td>{{$regnum}}</td>
         <td style="">  </td>
         <td>Certificate Number:</td>
         <td>{{$cernum}}</td>
       </tr>
       <tr>
        <td>Certificate Date:</td>
        <td>{{$cdate}}</td>
        <td style=""></td>
        <td>Code:</td>
        <td>{{$code}}</td>
      </tr>
      <tr>
        <td>Re-Certification Due Date:</td>
        <td>28/06/2023</td>
        <td ></td>
        <td>Exclusions</td>
        <td>7.3, 7.5, 9.2</td>
      </tr>
       <tr>
       <td>Issue No:</td>
        <td>01</td>
      </tr> 

     </table>
    
    </div>
</div>

</body>
</html>