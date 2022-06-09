@extends('master')
 @section('title')
Investor Registration - Sarmayah.com
 @endsection

@section('css')
     <link rel="stylesheet" href="{{asset('public/assets/build/css/intlTelInput.css')}}">
@endsection
@section('styles')

body{
  overflow-x:hidden;
}
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
<div class="card ">
       @if(session()->has('notif'))
         <div class="alert alert-danger">
          <span data-dismiss="alert" class="float-right">X</span>
          <p> {{session()->get("notif")}}<p>

         </div>       
        @endif
   <h5 class="font-weight-bold text-center mt-5 " style="margin-bottom:20px;">Investor Registration </h5>      

 <form method="post" action="{{url('investor_register')}}" class="mb-5">
    @csrf
   <div class="col-lg-12">
      <div class="row bg-white">
 
         <div class="col-lg-2"></div>
         <div class="col-lg-4">
            <div class="col">
               <div class="form-group">
                  <label class="mb-1">First name </label>
                  <div class="position-relative icon-form-control">
                     <i class="mdi mdi-account position-absolute"></i>
                     <input type="text" class="form-control" name="first_name" value="{{old('first_name')}}">
                  </div>
        {!!$errors->first('first_name', '<small style="color:red;margin-left:10px">:message</small>')!!}
               </div>
            </div>
            
              <div class="col">
               <div class="form-group">
                  <label class="mb-1">Last name</label>
                  <div class="position-relative icon-form-control">
                     <i class="mdi mdi-account position-absolute"></i>
                    <input type="text" class="form-control"  name="last_name" value="{{old('last_name')}}">                      
                  </div>
         {!!$errors->first('last_name', '<small style="color:red;margin-left:10px">:message</small>')!!}
               </div>
            </div>
              <div class="col">
               <div class="form-group">
                  <!-- <label class="mb-1">phone</label> -->
                  <div class="position-relative icon-form-control">
                     <p id="output">Phone number</p>
                     <input  type="tel" id="phone" name="phonee" value="{{ old('phonee') }}" class="form-control" >
                     <input type="hidden" class="form-control" id="hide" name="phone"  value="{{ old('phone') }}" >          
                  </div>
          {!!$errors->first('phone', '<small style="color:red;margin-left:10px">:message</small>')!!}

               </div>
            </div>

          <div class="col">
            <div class="form-group">
               <label class="mb-1">Email</label>
               <div class="position-relative icon-form-control">
                  <i class="mdi mdi-email-outline position-absolute"></i>
                  <input type="email" class="form-control"  name="email" value="{{old('email')}}">
               </div>
     {!!$errors->first('email', '<small style="color:red;margin-left:10px">:message</small>')!!}
            </div>
         </div>
              <div class="col">
            <div class="form-group">
               <label class="mb-1">Gender </label>
                <select name="gender" >
                  <option value="" selected disabled>----Select gender----</option> 
                     <option value="Male"  @if(old("gender")=='Male') selected @endif>Male</option> 
                    <option value="Female"  @if(old("gender")=='Female') selected @endif>Female</option>
                     <option value="Rather not say"  @if(old("gender")=='Rather not say') selected @endif> Rather not say</option> 
                     <option value="Other"  @if(old("gender")=='Other') selected @endif>Other</option> 

               </select>
               {!!$errors->first('gender', '<small style="color:red;margin-left:10px">:message</small>')!!}
            </div>
         </div>




         </div>

         <div class="col-lg-4">
 
            <div class="col">
               <div class="form-group">
                  <label class="mb-1">Country  </label>
                  <div class="position-relative icon-form-control">
                     <i class="mdi mdi-account position-absolute"></i>
                      <select class="custom-select form-control required select2 " id="wlocation2" name="country">
                        <option value="" selected disabled>----Select country----</option>

                        @foreach($country as $count)
                        <option  @if(old("country")==$count->country) selected @endif>{{$count->country}}</option>
                        @endforeach
                   </select>
                   {!!$errors->first('country', '<small style="color:red;margin-left:10px">:message</small>')!!}
                  </div>
               </div>
            </div>
        
           <div class="col">
              <div class="form-group">
               <label class="mb-1">How did you hear about us?</label>
               <select name="How_did_you_Hear_About_us" >
                  <option value="" selected disabled>---Select an Option ---</option> 
                    <option value="Social Media"  @if(old("How_did_you_Hear_About_us")=='Social Media') selected @endif>Social Media</option>
                     <option value="Search Engines" @if(old("How_did_you_Hear_About_us")=='Search Engines') selected @endif>Search Engines</option> 
                     <option value="Incubation Programs" @if(old("How_did_you_Hear_About_us")=='Incubation Programs') selected @endif>Incubation Programs</option>
                     <option value="Events" @if(old("How_did_you_Hear_About_us")=='Events') selected @endif>Events</option>
                     <option value="Referred By Friends" @if(old("How_did_you_Hear_About_us")=='Referred By Friends') selected @endif>Referred By Friends</option> 
               </select>
               {!!$errors->first('How_did_you_Hear_About_us', '<small style="color:red;margin-left:10px">:message</small>')!!}
            </div>
         </div>
                 
      <div class="col">
            <div class="form-group">
               <label class="mb-1">Password</label>
               <div class="position-relative icon-form-control">
                  <i class="mdi mdi-key position-absolute"></i>
                  <input type="Password" class="form-control" name="password" id="psw"  data-toggle="tooltip" title="At least 8 characters, containing one uppercase letter, one lower case letter, and a number.">         
               </div>
                   <div id="message">
                    <span id="letter" class="invalid mr-3">lowercase letter</span>
                    <span id="capital" class="invalid mr-3">uppercase letter</span>
                    <span id="number" class="invalid mr-3">number</span>
                    <span id="length" class="invalid">8 characters</span>
                  </div>

     {!!$errors->first('password', '<small style="color:red;margin-left:10px">:message</small>')!!}
            </div>
         </div>

      <div class="form-group pl-3 pr-3">
         <label class="mb-1">You agree to the Sarmayah <a href="{{url('terms-of-use')}}">User Agreement & Privacy Policy</a></label>
        <button class="btn btn-success btn-block text-uppercase" type="submit" id="submits"> Agree & Join </button>
          <span class="ml-auto mt-2"> Already on Sarmayah? <a href="{{url('account/login')}}">Sign in</a></span>
      </div>

</div>
         </div>
      </div>
   </form>

</div>

</div>

@endsection

@section('jquery')
<script src="{{asset('public/assets/build/js/intlTelInput.js')}}"></script>


  <script>
var input = document.querySelector("#phone"),
  output = document.querySelector("#output");

var iti = window.intlTelInput(input, {
  nationalMode: true,
  preferredCountries: ['af', 'ir'],
  utilsScript: "{{asset('public/assets/build/js/utils.js')}}?1590403638580" // just for formatting/placeholders etc
});

var handleChange = function() {

  if (iti.isValidNumber()) {
    var text="Valid phone number: " + iti.getNumber();
    $('#submits').attr('disabled',false);
    $('#output').attr('class',''); 
  }else{
    var text="Please enter a valid number";
    $('#submits').attr('disabled',true);
    $('#output').attr('class','text-danger');

  }
  var textNode = document.createTextNode(text);
  output.innerHTML = "";
  output.appendChild(textNode);
  $('#hide').val(iti.getNumber());
};

// listen to "keyup", but also "change" to update when the user selects a country
input.addEventListener('change', handleChange);
// input.addEventListener('keyup', handleChange);

  </script>

  <script type="text/javascript">
    
    $(document).ready(function(){

      // $(".submits").removeAttr("disabled");
                

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

            } else {
              $("#submits").attr("disabled",true);
            }



        }) 
    });

  </script>
@endsection