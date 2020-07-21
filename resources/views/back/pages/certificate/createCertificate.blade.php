<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Certificate</title>
  <style>
    body{
      margin: 0px;
    }
   .container {
  position: relative;
}

.center {
  position: absolute;
  top: 652px;
  width: 494px;
  margin-left: 470px;
  text-align: center;
  /* font-size: 18px; */
}

img { 
  width: 100%;
  height: auto;
  /* opacity: 0.3; */
}
table{
  text-align: left;
}

  </style>
</head>
<body>
  <div class="container">
    <img src="{{asset('public/aimage/blank_certificate2.png')}}" alt="Cinque Terre" width="1000" height="300">
    <div class="center">
    <h1>{{$company->company_name}}</h1>
     <p>{{$company->address}}</p>
     <p>for</p>
    <p>{{$company->scope}}</p>
     <p>has been assesed and registered against the provision of</p>
    <h1 style="color: red;">{{$result->certificate->certificate_name}} </h1>
     <p>international Standard</p>
     <p>with</p>
     <table style="font-size: 14px;">
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
         <td style="padding: 10px;">  </td>
         <td>Certificate Number:</td>
        <td>{{$cernum}}</td>
       </tr>
       <tr>
        <td>Certificate Date:</td>
       <td>{{$cdate}}</td>
        <td style="padding: 10px;"></td>
        <td>Code:</td>
       <td>{{$code}}</td>
      </tr>
      <tr>
        <td>Re-Certification Due Date:</td>
        <td>28/06/2023</td>
        <td style="padding: 10px;"></td>
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


{{-- <div>
  <img style="height: 100%; width:100%" src="{{asset('public/aimage/blank_certificate1.jpg')}}" alt="">
</div>

<div class="content">
  <h1>This is company Name</h1>
</div> --}}
  
</body>
</html>