<!DOCTYPE html>
<html>
<head>
	<title>Account Verfication</title>
	      <link rel="icon" type="image/png" href="{{asset('public/web_assist/images/3.png')}}">

      <!-- Bootstrap core CSS -->
      <link href="{{asset('public/web_assist/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
         <link href="{{asset('public/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
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

<div class="h-100 row align-items-center">
  <div class="col" >
  	<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="card ">
    	<div class="text-center mb-2 mt-5">
         <div bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; line-height: 48px;"> 
                   <a href="{{url('/')}}"> <img src=" {{asset('public/web_assist/images/sarmayah_logo.png')}}" width="180" height="40" style="display: block; border: 0px;" /></a>
          </div>

	     </div>
    	<div class="card-title" style="padding:50px">

 
        <p style="margin:0;text-align: justify;text-justify: inter-word;">
              Dear Investor,
              <br><br>
           Thank you for your interest to invest in the selected business,<br><br>
           Your request registered successfully please wait for the system to match.You with selected entrepreneur 
              <br><br>
              Regards,<br>
              Sarmayah, Inc

              </p>

   		<br><hr>
		<p style="display:inline">Sarmayah.com</p>
		<a href="{{url('/')}}"><button  class="btn btn-info float-right">Back to Home</button></a>
	</div>


    </div>
  </div>
</div>
    
  </div>
</div>
        <script src="{{asset('public/web_assist/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>

     @if(session()->has('notif'))
                 <script>
    $.toast({
               heading: '<small>{{session()->get("notif")}}</small>',
              // text: 'Use the predefined ones, or specify a custom position object.',
              position: 'top-right',
              loaderBg:'#28d7aa',
              icon: 'success',
              hideAfter: 6500, 
              stack: 6
            });
    </script>       
            @endif

</body>

</html>