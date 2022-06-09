@extends('Admin.master')
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



@endsection
@section('content1')
     <div class="py-2 cont" >
         <div class="container">

            <div class="row">
               <!-- Main Content -->
               <aside class="col-md-4">
                  <div class="box mb-3 shadow-sm rounded card profile-box  p-4">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">About Owner
             @if($investor->admin_status=="Draft")<span class="badge badge-warning" data-toggle="tooltip" title="Complete your profile to be approved by admin">{{$investor->admin_status}}</span>@endif
              @if($investor->admin_status=="Approved")<span class="badge badge-success">{{$investor->admin_status}}</span>@endif
              @if($investor->admin_status=="Rejected")<span class="badge badge-danger">{{$investor->admin_status}}</span>@endif
            </h6>
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

                  </div>
          
               </aside>
               <main class="col-md-8">
                  <div class="shadow-sm rounded card mb-3">
                     <div class="box-title border-bottom p-3">
                        <label class="m-0">General Information</label>
                            <div class=" m-0 float-right">
                                <label>Account status</label>
                                <select class="form-control" id="status">
                                  <option value="Rejected"
                                  @if($investor->admin_status=="Rejected") selected @endif>Rejected</option>
                                  <option value="Draft"
                                  @if($investor->admin_status=="Draft") selected @endif>Draft</option>
                                  <option value="Approved"
                                  @if($investor->admin_status=="Approved") selected @endif>Approved</option>
                                </select>
                              </div>
                     </div>
                        <form id="first" method="post" action="{{url('ad/investor/update2')}}" class="p-4">
                          @csrf
                        <div class="row ">
                            <div class="col-md-6">
                                   <div class="form-group">
                                      <label class="mb-1">Country  </label>
                                      <div class="position-relative icon-form-control">
                                          <select class="custom-select form-control required select2 " name="country">
                                            <option value="">Select Country</option>

                                            @foreach($country as $count)
                                            <option @if($investor->country==$count->country) selected @endif >{{$count->country}}</option>
                                            @endforeach
                                       </select>
                                       {!!$errors->first('country', '<small style="color:red;margin-left:10px">:message</small>')!!}
                                      </div>
                                   </div>
                                   <input type="hidden" name="investor" value="{{$investor->investor_id}}">
                                </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                     <label >Interested business sector  <small>Multiple select</small></label>
                   
                                    <input  type="text" class="tagator w-100" value="{{$investor->intersted_sector}}" name="interested_sector" 
                                     data-tagator-show-all-options-on-focus="true" data-tagator-autocomplete="[{{$sector_data}}']">
                               {!!$errors->first('interested_sector', '<small style="color:red;margin-left:10px">:message</small>')!!}
                                  </div>
                              </div>
                                   
                            </div>

                            <div class="row">                 
                              <div class="col-md-6">
                                <div class="form-group">
                                   <label >The amount of money you want to invest ($) </label>
                                     
                                      
                                      <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign "></i></span>
                                        </div>
                                          <input pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" id="amount_second" data-type="currency" name="invest_amount" class="form-control" placeholder="2000 $"
                                                    value="{{$investor->investment_amount}}">                                
                                      </div>


                            {!!$errors->first('invest_amount', '<small style="color:red;margin-left:10px">:message</small>')!!}
                                 </div>
                                
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                       <label >Please select the selection criteria you consider while selecting an entrepreneur <small>Multiple select</small></label>
                                       <input  type="text" class="tagator w-100" name="Initial_Startup" 
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
                        <h6 class="m-0">Portfolio </h6>
                        <p class="mb-0 mt-0 small"></p>
                     </div>
                     <div class="box-body pl-5 pr-5 pt-2 pb-5 pb-0">
                     <form method="post" action="{{url('ad/investor/update3')}}">
                          @csrf
                          <div class="row">
                         <div class="col-md-12">
                              <div class="form-group">
                                   <label >Investment Date</label>
                                   <input type="date" name="invest_date" class="form-control" value="{{$investor->port_invest_date}}">
                            {!!$errors->first('invest_date', '<small style="color:red;margin-left:10px">:message</small>')!!}
                                 </div>

                                   <input type="hidden" name="investor" value="{{$investor->investor_id}}">

                                <div class="form-group">
                                 <label >Investment Amount </label>
                        
                           
                             <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon11"><i class="fas fa-dollar-sign "></i></span>
                                 </div>
                                 <input pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" id="amount_second" data-type="currency" name="investment_amount" class="form-control" placeholder="2000 $"
                                          value="{{$investor->port_invest_amount}}">                               
                            </div>

  
                            {!!$errors->first('investment_amount', '<small style="color:red;margin-left:10px">:message</small>')!!}
                                 
                                 </div>

                                  

                              <div class="form-group">
                                       <label >Business Sector </label>
                                         <input type="text" class="tagator w-100" name="Business_sector" 
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
<div id="myModal3" class="modal animated slideInDown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel">Edit Account</h6>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{url('ad/investor/update1')}}">
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



@section('page_title')
Investor Application
@endsection
@section('page_directory')
Investor Application
@endsection

@section('jquery')
  <script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
  <script src="{{asset('public/assets/build/js/intlTelInput.js')}}"></script>
    <script src="{{asset('public/assets/tag/fm.tagator.jquery.js')}}"></script>
    <script type="text/javascript">
      $(document).ready(function() {  
      $('#status').change(function () {
        var val=$(this).val();
        url ="{{url('ad/change/investor/status')}}/"+'{{$investor->investor_id}}'+'/'+val;

          $.get(url,function(data){
            // location.reload(true);
            $('.comp').load(window.location.href+ " .comp");

            });
      });
   });
  </script>
    <script>

      $('.card1').css('display','none');
      $('select').addClass('form-control');

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

<script >
  $(function () {
  $('.button').click(function () {
      $('.cont').addClass('blur');    
  });
$('#myModal3').on('hidden.bs.modal',function () {
    $('.cont').removeClass('blur');
  });
  $('.button1').click(function () {
      $('.cont').addClass('blur');    
  });
  $('#myModal').on('hidden.bs.modal',function () {
    $('.cont').removeClass('blur');
  });
});  

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
   @if(session()->has('notif'))
     <script>
  $.toast({
             heading: '<small>{{session()->get("notif")}}</small>',
            // text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg:'#28d7aa',
            icon: 'success',
            hideAfter: 4500, 
            stack: 6
          });
  </script>       
  @endif
<script type="text/javascript">
      $(document).ready(function() {  
      $('#status').change(function () {
        var val=$(this).val();
        url ="{{url('ad/change/investor/status')}}/"+'{{$investor->investor_id}}'+'/'+val;
          $(location).attr('href',url);
         
      });
   });
  </script>
</script>
<script type="text/javascript">
  // document.oncontextmenu = document.body.oncontextmenu = function() {return false;}
</script>
   
@endsection