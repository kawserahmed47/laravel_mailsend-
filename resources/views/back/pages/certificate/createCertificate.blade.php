<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Generate Certificate</title>
    <style>
      .container {
  position: fixed;
}

 .company{
 
  position: relative;
  /* z-index: -2; */
  /* bottom: 20px;
  right: 20px; */
  /* background-color: black; */
  color: black;
  margin-top:-541px;
  margin-left:181px;
  /* padding-left: 20px;
  padding-right: 20px;  */
 }
 .address{
   margin-left: 183px;

 }
 .scope{
  margin-left:-415px;
  text-align: center;

 }
 .certificate{
   /* color:brown;
   margin-top: ; */
    color: red;
    /* margin-top: ; */
    /* margin-bottom: -27px; */
    text-align: center;
    margin-left:-455px;
    margin-top: -16px;
 }
 .cdate{
  margin-left: 246px;
    margin-top: 123px;

 }
 .regnum{
  margin-left: 246px;
    margin-top: -58px;

   
 }
 .cnum{
  margin-left: 246px;
    margin-top: -68px;

 }
 .issue{
  margin-left: 246px;
    margin-top: -25px;

 }
 .code{
  margin-left: 246px;
    margin-top: -69px;

 }
   
    </style>

  </head>
  <body>
    {{-- <div class="bg" >
         

    </div> --}}
    
   <div class="">
    <div class="">
      <div class="">
      <img src="{{asset('public/aimage/blank_certificate.jpg')}}" alt="Norway" style="width: 595px; height:842 px;">
         <div class="">
          <h4 class="company">Mahmud Fashion Limited</h4>
          <p class="address">Baroipara, Ashulia, Savar, Dhaka-1340</p>
          <p class="scope">Manufacturing, Washing /Non-washing & exporting of all <br> kinds of Denim/Knit Denim & Woven Items</p>
          <h4 class="certificate">ISO 9001:2015</h4>
          @php
              $d = date("d/m/Y");
              $cnum = strrev(date("dmY")) . "1";
              $rn= date("dmY") . "1";
          @endphp
          <p class="cdate">{{$d}}</p>
          <p class="regnum">{{$rn}}</p>
          <p class="cnum">{{$cnum}}</p>
          <p class="issue">01</p>
          <p class="code">04</p>
        </div> 

      </div>
    </div>


  </div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>