@extends('master')
 @section('title')
 Investor Profile - Sarmayah.com
 @endsection

@section('css')
 <link href="{{asset('public/dist/css/pages/tab-page.css')}}" rel="stylesheet">	
 <link href="{{asset('public/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
 <link rel="stylesheet" href="{{asset('public/assets/build/css/intlTelInput.css')}}">
 <link href="{{asset('public/assets/tag/fm.tagator.jquery.css')}}" rel="stylesheet">
 <link href="{{asset('public/dist/scss/core/animation.scss')}}" rel="stylesheet">
@endsection
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
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
   <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Investor</li>
            <li class="breadcrumb-item active" aria-current="page"> Invest Account Settings
         &nbsp; &nbsp; 
              @if($investor->admin_status=="Draft")<span class="badge badge-warning" data-toggle="tooltip" title="Complete your profile to be approved by admin">{{$investor->admin_status}}</span>@endif
              @if($investor->admin_status=="Approved")<span class="badge badge-success">{{$investor->admin_status}}</span>@endif
              @if($investor->admin_status=="Rejected")<span class="badge badge-danger">{{$investor->admin_status}}</span>@endif</li>
         </ol>
      </nav>
    </div>
   </div> 
</div>


       
         <div class="container">
            <div class="row">
               <!-- Main Content -->
               <aside class="col-md-4">
                  <div class="box mb-3 shadow-sm rounded bg-white profile-box  p-4">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">About Owner</h6>
                     </div><br>

                <div class="form-group row">
                    <label class="control-label  col-md-4">Full Name:</label>
                    <div class="col-md-8">
                        <p class="form-control-static "> {{$investor->env_name}} {{$investor->env_last_name}}  <i class="fas fa-pencil-alt ml-3 button" data-toggle="modal" data-target="#myModal3"  style="font-size:16px"></i> </p>
                    </div>
                </div>
              <div class="form-group row">
                    <label class="control-label  col-md-4">Email:</label>
                    <div class="col-md-8">
                        <p class="form-control-static"> {{$investor->env__email}}</p>
                    </div>
                </div>
                   <div class="form-group row">
                    <label class="control-label  col-md-4">Password:</label>
                    <div class="col-md-8">
                        <p class="form-control-static" style="font-size:24px"> **********
                         <i class="fas fa-pencil-alt ml-3 button1" data-toggle="modal" data-target="#myModal" style="font-size:16px"></i></p>
                    </div>
                </div>          
                     
                  </div>
          
               </aside>
               <main class="col-md-8">
                  <div class="shadow-sm rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">General Information</h6>
                     </div>
                        <form id="first" method="post" action="{{url('investor/change/detail')}}" class="p-4">
                          @csrf
                        <div class="row ">
                            <div class="col-md-6">
                                   <div class="form-group">
                                      <label class="mb-1">Country  </label>
                                      <div class="position-relative icon-form-control">
                                         <i class="mdi mdi-account position-absolute"></i>
                                          <select class="custom-select form-control required select2 " name="country">
                                            <option value="">Select Country</option>

                                            @foreach($country as $count)
                                            <option @if($investor->country==$count->country) selected @endif >{{$count->country}}</option>
                                            @endforeach
                                       </select>
                                       {!!$errors->first('country', '<small style="color:red;margin-left:10px">:message</small>')!!}
                                      </div>
                                   </div>
                                </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                     <label >Interested business sector  <small>Multiple select</small></label>
                   
                                    <input  type="text" class="form-control tagator " value="{{$investor->intersted_sector}}" name="interested_sector" 
                                     data-tagator-show-all-options-on-focus="true" data-tagator-autocomplete="[{{$sector_data}}']">
                               {!!$errors->first('interested_sector', '<small style="color:red;margin-left:10px">:message</small>')!!}
                                  </div>
                              </div>
                                   
                            </div>

                            <div class="row">                 
                              <div class="col-md-6">
                                <div class="form-group">
                                   <label >The amount of money you want to invest ($) </label>
                                     
                                    <div class="position-relative icon-form-control mb-2">
                                        <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                           <input pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" id="amount_second" data-type="currency" name="invest_amount" class="form-control" placeholder="2000 $"
                                          value="{{$investor->investment_amount}}">

                                    </div>  


                            {!!$errors->first('invest_amount', '<small style="color:red;margin-left:10px">:message</small>')!!}
                                 </div>
                                
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                       <label >Please select your selection criteria for investment <small>(Multiple select)</small></label>
                                       <input  type="text" class="tagator form-control" name="Initial_Startup" 
                                     data-tagator-show-all-options-on-focus="true" value="{{$investor->intial_startup_criteria}}"  data-tagator-autocomplete="['Innovation', 'Market Potentiality', 'Demand traction', 'Team', 'Growth Potential','National and international reach','return on investment/profitability']">
                                 </div>
                              {!!$errors->first('Initial_Startup', '<small style="color:red;margin-left:10px">:message</small>')!!}

                              </div>
                            </div>

                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                       <label id="output">Valid Phone Number</label><br>
                                       <input  class="form-control intl-tel-input" id="phone"   value="{{$investor->env_phone}}">
                                       <input type="hidden" class="form-control" id="hide" name="phone" value="{{$investor->env_phone}}">          

                            {!!$errors->first('phone', '<small style="color:red;margin-left:10px">:message</small>')!!}
                                 </div>
                              </div>


                              
                            </div>
                           <button type="Submit" class="btn btn-success float-right" id="submit">Update Information</button>
                           <br><br>
                        </form>

       
                  </div>
                  <div class="shadow-sm rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Previous Investment Portfolio </h6>
                        <p class="mb-0 mt-0 small"></p>
                     </div>
                     <div class="box-body pl-5 pr-5 pt-2 pb-5 pb-0">
                     <form method="post" action="{{url('investor/add/portfolio')}}">
                          @csrf
                          <div class="row">
                         <div class="col-md-12">
                              <div class="form-group">
                                   <label >Investment Date</label>
                                   <input type="date" name="invest_date" class="form-control" value="{{$investor->port_invest_date}}">
                            {!!$errors->first('invest_date', '<small style="color:red;margin-left:10px">:message</small>')!!}
                                 </div>

                                <div class="form-group">
                                 <label >Investment Amount </label>                               
                                    <div class="position-relative icon-form-control mb-2">
                                        <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                                           <input pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" id="amount_second" data-type="currency" name="investment_amount" class="form-control" placeholder="2000 $"
                                          value="{{$investor->port_invest_amount}}">

                                    </div>  
                            {!!$errors->first('investment_amount', '<small style="color:red;margin-left:10px">:message</small>')!!}
                                 
                                 </div>                                  

                              <div class="form-group">
                                       <label >Business Sector </label>
                                         <input type="text" class="tagator form-control" name="Business_sector" 
                                     data-tagator-show-all-options-on-focus="true"  value="{{$investor->port_busniess_sector}}"
                                      data-tagator-autocomplete="[{{$sector_data}}']">
                            {!!$errors->first('Business_sector', '<small style="color:red;margin-left:10px">:message</small>')!!}
                             </div>
                                 <div class="form-group">
                                       <label >Business Name </label>
                                      <input type="text" name="Bussness_name" class="form-control"  value="{{$investor->port_busniess_name}}">
                            {!!$errors->first('Bussness_name', '<small style="color:red;margin-left:10px">:message</small>')!!}
                             </div>
                            <div class="form-group">
                             <label >Results </label>
                            <input type="text" name="resuts" class="form-control"  value="{{$investor->results}}">
                            {!!$errors->first('resuts', '<small style="color:red;margin-left:10px">:message</small>')!!}
                             </div>
                           
                           </div>
                         </div>
                           <button type="Submit" class="btn btn-success float-right">Update Information </button><br>
                        </form>
                      </div>
                     </div>
                  </div>
               </main>
            </div>
         </div>
      </div>



          
            </div>
        </div>
    </div>
</div>

<!-- row -->










<!-- modal pass -->
<div id="myModal" class="modal animated slideInDown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel">change password</h6>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            	<form method="post" action="{{url('investor/change/password')}}">
                @csrf
          		<div class="form-group">
                     <label >old password </label><br>
                     <input type="password" name="current_password" class="form-control" >
          {!!$errors->first('current_password', '<small style="color:red;margin-left:10px">:message</small>')!!}
               </div>
           		<div class="form-group">
                     <label >new password </label><br>
                     <input type="password" name="new_password" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="psw"  data-toggle="tooltip" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                      <div id="message">
                        <span id="letter" class="invalid mr-3">lowercase letter</span>
                        <span id="capital" class="invalid mr-3">uppercase letter</span>
                        <span id="number" class="invalid mr-3">number</span>
                        <span id="length" class="invalid">8 characters</span>
                      </div>

          {!!$errors->first('new_password', '<small style="color:red;margin-left:10px">:message</small>')!!}
               </div>
        		<div class="form-group">
                     <label >conferm password </label><br>
                     <input type="password" name="conferm_password" class="form-control">
          {!!$errors->first('conferm_password', '<small style="color:red;margin-left:10px">:message</small>')!!}
          

           </div>
         

            </div>
            <div class="modal-footer">
           <button type="Submit" class="btn btn-success">Save passord</button>
      	 </form>
            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- modal pass -->
<div id="myModal3" class="modal animated slideInDown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel">Edit Account</h6>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{url('investor/change/detail/main')}}">
                @csrf
              <div class="form-group">
                     <label >First Name </label>
                     <input type="text" name="first_name" class="form-control"
                      value="{{$investor->env_name}}" required>
          {!!$errors->first('first_name', '<small style="color:red;margin-left:10px">:message</small>')!!}
               </div>
              <div class="form-group">
                     <label >last Name </label>
                     <input type="text" name="last_name" class="form-control"
                     value="{{$investor->env_last_name}}" required>
          {!!$errors->first('last_name', '<small style="color:red;margin-left:10px">:message</small>')!!}
               </div>
                <div class="form-group">
                     <label >Email </label>
                     <input type="text" name="email" class="form-control" value="{{$investor->env__email}}" required>
          {!!$errors->first('email', '<small style="color:red;margin-left:10px">:message</small>')!!}
               </div>
                 <div class="form-group">
                         <label >Select Investor Account</label>
                         <select name="investor_account" required>
                           <option value="">Select Account</option>
                           <option value="I am a local investor" @if($investor->account_type=="I am a local investor") selected @endif>I am a local inestor</option>
                           <option value="I am a foreigner investor" @if($investor->account_type=="I am a foreigner investor") selected @endif>I am a foreigner investor </option>
                           <option  value="I am an Afghan investor but living abroad" @if($investor->account_type=="I am an Afghan investor but living abroad") selected @endif>I am an Afghan investor but living abroad</option>
                         </select>
                 {!!$errors->first('investor_account', '<small style="color:red;margin-left:10px">:message</small>')!!}

                         </div>

               <div class="form-group">
                     <label >password </label>
                    <input type="password" name="password" class="form-control" required>
            {!!$errors->first('password', '<small style="color:red;margin-left:10px">:message</small>')!!}
             </div>
           

            </div>
            <div class="modal-footer">
           <button type="Submit" class="btn btn-success">Save work</button>
         </form>
            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection
@section('jquery')
  <script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
  <script src="{{asset('public/assets/build/js/intlTelInput.js')}}"></script>
    <script src="{{asset('public/assets/tag/fm.tagator.jquery.js')}}"></script>
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
    $('#submit').attr('disabled',false);
    $('#output').attr('class',''); 
  }else{
    var text="Please enter a valid number";
    $('#submit').attr('disabled',true);
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


   @if($errors->has('first_name') || $errors->has('last_name')
   ||$errors->has('email'))

  <script>
  $(document).ready(function(){
    $('.cont').addClass('blur');
      $('#myModal3').modal(['show',true]);

  });
  </script>
  @endif


	</script>
   @if(session()->has('notif'))
               <script>
  $.toast({
             heading: '{{session()->get("notif")}}',
            // text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg:'#28d7aa',
            icon: 'success',
            hideAfter: 4500, 
            stack: 6
          });
  </script>       
          @endif

   @if(session()->has('error'))
               <script>
  $.toast({
             heading: '{{session()->get("error")}}',
            // text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'error',
            hideAfter: 4500, 
            stack: 6
          });
  </script>       
          @endif

<script type="text/javascript">
  $(document).ready(function(){
  var d=new Date();
  var year=d.getFullYear();  
  var month=d.getUTCMonth()+1;
  var day=d.getDay();
  if (day<10) {
    day='0'+day;
  }if (month<10) {
    month='0'+month;
  }
  var fulldate=year+'-'+month+'-'+day;
  $('#potential__estab_date').attr('min',fulldate);
  $('.g_year').attr('max',fulldate);

});
$(document).ready(function () {
$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});

function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}
});

</script>
<script type="text/javascript">
  document.oncontextmenu = document.body.oncontextmenu = function() {return false;}
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