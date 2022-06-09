<!DOCTYPE html>
<html>
<head>
  <title>Account Verfication - Sarmayah.com</title>
    
      <link rel="icon" type="image/png" href="{{asset('public/web_assist/images/3.png')}}">
    

      <!-- Bootstrap core CSS -->
      <link href="{{asset('public/web_assist/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <style type="text/css">
      html,
      body {
        height: 100%;
        background-color:#f5f6f7;
        overflow-x:hidden;
      }
     
      </style>
</head>
<body>

<div class="h-100 row align-items-center" style="padding:150px">
  <div class="col" >
    <div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="card ">
      <div class="text-center mb-2 mt-5">
          <a href="{{url('/')}}"><img src="{{asset('public/web_assist/images/sarmayah_logo.png')}}" height="40" width="150" alt=""></a>
       </div>

      <div style="padding:50px;">
        <div style="text-align: justify;text-justify:inter-word;margin-right:20px" >
      <p> Dear <span>{{$first_name.' '.$last_name}}</span>,</p><br>

      <p>Thank you for signing up and welcome to Sarmayah.com’s community of entrepreneurs and businesses! <br><br>
         To complete your registration process, please verify your account through the link sent to your email inbox.
    <br><br>
   To complete your registration process, please verify your account through the link sent to your email inbox. Kindly check your spam folder also in case the email is not found in your inbox.</p>  
        <br>
   If you did not receive an email, please contact support@sarmayah.com.
     
        <br>
        <br>
      Regards, <br>
        Sarmayah, Inc
  
          <hr>

    <a href="{{url('/')}}"><button  class="btn float-right text-white" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%)">Back to Home</button></a>
  </div>


    </div>
  </div>
</div>
    
  </div>
</div>
</body>
</html>