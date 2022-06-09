@extends('master')
@section('title')
Idea Account Settings - Sarmayah.com
@endsection

@section('css')
     <link rel="stylesheet" href="{{asset('public/assets/build/css/intlTelInput.css')}}">
    <link href="{{asset('public/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
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

     <div class="py-5">
         <div class="container">
            <div class="row">
               <!-- Main Content -->
               <aside class="col-md-4">
                  <div class="box mb-3 shadow-sm rounded bg-white profile-box text-center">
                     <div class="py-4 px-3 border-bottom">
               <form id="photoform" method="post" enctype="multipart/form-data">
                        @csrf
                  <a href="javascript:void();">
                    <label for="fileAttachmentBtn" data-toggle="tooltip" title="Select Profile Photo">
                      <div class="form">
                         @if(empty($entre[0]->profile_pic))
                          <img src="{{url('public/web_assist/images/person_empty.png')}}"
                               class="img-fluid rounded-circle" style="height:120px;width:115px">
                          @else
                           <img src="{{url('storage/app')}}/{{($entre[0]->profile_pic)}}"
                               class="img-fluid rounded-circle" style="height:120px;width:115px" alt="Owner avetar">
                          @endif
                        </div>
                      </label>
                          <input id="fileAttachmentBtn"  type="file" class="d-none" name="photo">
                      </a>
                      </form>
                      
                        <h5 class="font-weight-bold text-dark mb-1 mt-4">{{$entre[0]->entre_name.' '.$entre[0]->entre_last_name}}</h5>
                        <p class="mb-0 text-muted">{{$entre[0]->country}}</p>
                     </div>
                     
                  </div>
          
               </aside>
               <main class="col-md-8">
                  <div class="shadow-sm rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Edit Account</h6>
                     </div>
                     <div class="box-body pl-5 pr-5 pt-2">
                           <form class="js-validate" action="{{url('ent/idea/change/general')}}" method="post">
                            @csrf
                           <div class="row">
                              <!-- Input -->
                              <div class="col-sm-6 mb-2">
                           
                                 <div class="js-form-message">
                                    <label id="nameLabel" class="form-label">
                                    First name
                                    <span class="text-danger">*</span>
                                    </label>
                                    <div class="form-group">
                                  <input type="text" class="form-control" name="first_name" value="{{$entre[0]->entre_name}}">
                          {!!$errors->first('first_name', '<small class="text-danger ml-2">:message</small>')!!}

                                    </div>
                                 </div>
                              </div>
                              <!-- End Input -->
                              <!-- Input -->
                              <div class="col-sm-6 mb-2">
                                 <div class="js-form-message">
                                    <label id="usernameLabel" class="form-label">
                                    Last name
                                    <span class="text-danger">*</span>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="last_name" value="{{$entre[0]->entre_last_name}}">
                             {!!$errors->first('last_name', '<small class="text-danger ml-2">:message</small>')!!}
     
                                    </div>
                                 </div>
                              </div>
                              <!-- End Input -->
                           </div>
                      
                           <div class="row">
                              <!-- Input -->
                              <div class="col-md-6 mb-3 mb-sm-6">
                                 <div class="js-form-message">
                                   <label class="form-label" >
                                    Gender
                                    <span class="text-danger">*</span>
                                   </label>
                                  <div class="form-group">
                                    <select name="gender" class="form-control">     
                                    <option selected disabled value="">select gender</option>
                                     <option value="Male" @if($entre[0]->gender=="Male") selected @endif>Male</option> 
                                          <option value="Female" @if($entre[0]->gender=="Female") selected @endif>Female</option>
                                           <option value="Rather not say" @if($entre[0]->gender=="Rather not say") selected @endif> Rather not say</option> 
                                           <option value="other" @if($entre[0]->gender=="other") selected @endif>other</option> 
                                     </select>
                               {!!$errors->first('gender', '<small class="text-danger ml-2">:message</small>')!!} 
                                    </div>
                                 </div>
                              </div>
                              <!-- End Input -->
                              <!-- Input -->
                              <div class="col-md-6 mb-3 mb-sm-6">
                                <div class="js-form-message">
                                 <label class="form-label">
                                    Country
                                    <span class="text-danger">*</span>
                                    </label>
                                 <div class="form-group">
                              <select class="form-control" name="country">
                              <option value="" selected disabled>Select Country</option>
                                  @foreach($country as $count)
                                  <option @if($entre[0]->country==$count->country) selected @endif >{{$count->country}}</option>
                                  @endforeach
                              </select>
                         {!!$errors->first('country', '<small class="text-danger ml-2">:message</small>')!!} 
  
                            </div>
                          </div>
                         </div>
                            </div>

                           <div class="row">
                              <!-- Input -->
                              <div class="col-sm-6 mb-2">
                                 <div class="js-form-message">
                                    <label id="output" class="form-label">
                                    phone
                                    <span class="text-danger">*</span>
                                    </label>
                                  <div class="form-group">
                                   <input  type="tel"  name="phonee"
                                   class="form-control phone" value="{{$entre[0]->entre_phone}}" >
                                     <input type="hidden" class="form-control" id="hide" name="phone" value="{{$entre[0]->entre_phone}}" >
                             {!!$errors->first('phone', '<small class="text-danger ml-2">:message</small>')!!} 
 
                                    </div>
                                 </div>
                              </div>
                              <!-- End Input -->
                               <div class="col-sm-6 mb-2">
                                 <div class="js-form-message">
                                <div class="form-group mt-4 float-right" >
                                 <input type="submit" id="submit" value="Update" class="btn btn-success">
                               </div>
                             </div>
                             </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="shadow-sm rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Change Password </h6>
                        <p class="mb-0 mt-0 small"></p>
                     </div>
                     <div class="box-body pl-5 pr-5 pt-2 pb-5 pb-0">
                      <form  action="{{url('ent/idea/change/password')}}" method="post">
                      @csrf 
                        <div class="form-group">
                          <label>Current password</label>
                          <input type="password" name="current_password" class="form-control">
                            {!!$errors->first('current_password', '<small class="text-danger ml-2">:message</small>')!!}
                        </div>
                        <div class="form-group">
                          <label>New password</label>
                          <input type="password" name="new_password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="psw"  data-toggle="tooltip" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">         
                             <div id="message">
                                <span id="letter" class="invalid mr-3">lowercase letter</span>
                                <span id="capital" class="invalid mr-3">uppercase letter</span>
                                <span id="number" class="invalid mr-3">number</span>
                                <span id="length" class="invalid">8 characters</span>
                            </div>

                            {!!$errors->first('new_password', '<small class="text-danger ml-2">:message</small>')!!}
                        </div>
                        <div class="form-group">
                          <label>Confirm password</label>
                          <input type="password" name="confirm_password" class="form-control">
                       {!!$errors->first('confirm_password', '<small class="text-danger ml-2">:message</small>')!!}<br>
                        </div>
                       <input type="submit" name="submit" value="Update" id="submits" class="btn btn-success float-right">
                      </form>
                      </div>
                     </div>
                  </div>
               </main>
            </div>
         </div>
      </div>


@endsection
@section('jquery')
<script src="{{asset('public/assets/build/js/intlTelInput.js')}}"></script>
  <script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
 <script type="text/javascript">
    $(document).ready(function(){
     $('#fileAttachmentBtn').change(function(){
        var allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
        var file = this.files[0];
        var fileType = file.type;
        var size = file.size;

        if(!allowedTypes.includes(fileType)){
            alert('Please select a valid file (JPEG/JPG/PNG/GIF)');
            $("#fileAttachmentBtn").val('');
            return false;
        }
        else if(size>2000000){
          alert('Please select a file less then 2 MB');
            $("#fileAttachmentBtn").val('');
            return false;
        }else{
      $("#photoform").submit();  

        }
    });
    $("#photoform").on('submit', function(e){

        e.preventDefault();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
            }
        });  
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        $(".t-progress").width(percentComplete + '%');
                        $(".t-progress").html(percentComplete+'%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: '{{url("ent/idea/change/photo")}}',
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $(".t-progress").width('0%');
            },
            error:function(){
                $('#tuploadStatus').html('<p class="text-danger">File upload failed, please try again.</p>');
            },
            success: function(resp){
                // alert(resp);
                if(resp !== ''){
                
                $.toast({
                   text: 'Profile picture updated successfully',
                  position: 'top-right',
                  loaderBg:'#28d7aa',
                  icon: 'success',
                  hideAfter: 4500, 
                  stack: 6
                });
               $('.form').load(window.location.href+ " .form");
                $('#tupdate_form')[0].reset();
                }else if(resp == 'err'){
                    $('#tuploadStatus').html('<p class="text-danger">Please select a valid file to upload.</p>');
                }
            }
        
    });
});
});
  </script>

  <script>
var input = document.querySelector(".phone"),
  output = document.querySelector("#output");
var iti = window.intlTelInput(input, {
  nationalMode: true,
  preferredCountries: ['af', 'us'],
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
        loaderBg:'#28d7aa',
        icon: 'error',
        hideAfter: 4500, 
        stack: 6
      });
</script>       
    @endif

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