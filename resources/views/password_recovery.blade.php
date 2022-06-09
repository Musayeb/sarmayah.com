@extends('master')
@section('styles')
#message {
  display:none;
  color: #000;
  position: relative;
  padding: 10px;
  margin-bottom: 10px;
}


/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -4px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}


.invalid:before {
  position: relative;
  left: -4px;
  content: "✖";
}
@endsection
@section('content')
  <div class="bg-white">
	<div class="container">
	            <div class="row justify-content-center align-items-center d-flex vh-100">
	               <div class="col-lg-4 mx-auto">
	                  <div class="osahan-login py-4 ">    	
	                     <div class="text-center mb-4">
	      	             <a href="{{url('/')}}"><img  style="height:35px;width:140px" class="mb-3" src="{{asset('public/web_assist/images/sarmayah_logo.png')}}"></a> 
	                     </div>
	                     <h6 align="center">Let's change your password</h6>
	                        <p align="center">Enter your new password</p>
	                     <form action="{{url('password_recovery_change')}}" method="post">
	                     	@csrf
	                        <div class="form-group">
	                           <label class="mb-1">Email</label>
	                           <div class="position-relative icon-form-control">
	                              <i class="mdi mdi-account position-absolute"></i>
	                              <input type="email" class="form-control" name="email" value="{{$email}}" readonly>

	                              <input type="hidden" value="{{$id}}" name="id">
	                           </div>
	                        </div>
	                         <div class="form-group">
	                           <label class="mb-1">New password</label>
	                           <div class="position-relative icon-form-control">
	                              <i class="mdi mdi-key-variant position-absolute"></i>
	                              <input type="password" class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="psw" >
	                           </div>
	                           
		                      <div id="message">
		                        <span id="letter" class="invalid mr-3">lowercase letter</span>
		                        <span id="capital" class="invalid mr-3">uppercase letter</span>
		                        <span id="number" class="invalid mr-3">number</span>
		                        <span id="length" class="invalid">8 characters</span>
		                      </div>

                 {!!$errors->first('password', '<small style="color:red;margin-left:10px">:message</small>')!!}

	                        </div>
	                         <div class="form-group">
	                           <label class="mb-1">Confirm new password</label>
	                           <div class="position-relative icon-form-control">
	                              <i class="mdi mdi-key-variant position-absolute"></i>
	                              <input type="password" class="form-control" name="confirm_password">
	                           </div>
	    {!!$errors->first('confirm_password', '<small style="color:red;margin-left:10px">:message</small>')!!}

	                        </div>

	                        <button class="btn btn-success btn-block text-uppercase" type="submit" id="submits"> Submit </button>
	                       
	                     </form>
	                  </div>
	               </div>
	            </div>
	         </div>
	     </div>
@endsection

@section('jquery')
<script type="text/javascript">
	    
    $(document).ready(function(){

        var myInput =$("#psw");
        var letter =$("#letter");
        var capital =$("#capital");
        var number =$("#number");
        var length =$("#length");
        
        // When the user clicks on the password field, show the message box
        $(myInput).on("focusin",function() {
          $("#message").css("display", "block");
        })

        // When the user clicks outside of the password field, hide the message box
        $(myInput).on("blur",function() {
          $("#message").css("display", "none");
        })

        // When the user starts to type something inside the password field
        $(myInput).on("keyup",function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if( $(myInput).val().match(lowerCaseLetters)) {  
                $(letter).removeClass("invalid");
                $(letter).addClass("valid");

            } else {
                $(letter).removeClass("valid");
                $(letter).addClass("invalid");
            }
            
            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if($(myInput).val().match(upperCaseLetters)) {  
                $(capital).removeClass("invalid");
                $(capital).addClass("valid");
            } else {
                $(capital).removeClass("valid");
                $(capital).addClass("invalid");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if($(myInput).val().match(numbers)) {  
                $(number).removeClass("invalid");
                $(number).addClass("valid");
            } else {
                $(number).removeClass("valid");
                $(number).addClass("invalid");
            }
            
            // Validate length
            if($(myInput).val().length >= 8) {
                $(length).removeClass("invalid");
                $(length).addClass("valid");
            } else {
                $(length).removeClass("valid");
                $(length).addClass("invalid");
            }


            var numbers = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/g;
            if($(myInput).val().match(numbers)) {  

              $("#submits").attr("disabled",false);
              $('#message').css('display','none');
            } else {
              $("#submits").attr("disabled",true);
              $('#message').css('display','block');

            }



        }) 
    });
</script>
@endsection