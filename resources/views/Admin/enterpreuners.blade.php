@extends('Admin.master')
@section('css')
   <link rel="stylesheet" type="text/css"
        href="{{asset('public/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">
   <link href="{{asset('public/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/assets/build/css/intlTelInput.css')}}">
    <link href="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/node_modules/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/node_modules/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />

@endsection
@section('styles')
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove{
    color: #000 !important;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
  background-color: #30b9be !important;
}

@endsection
@section('content')
				
       <!-- table responsive -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$pagetype}}</h4>
                        <h6 class="card-subtitle">Manage Business</h6>
                        <a href class="btn btn-info ml-1 float-right" data-toggle="modal" data-target="#model" >Send Customized Email</a>
                        <a href="{{url('sendReminderDraft')}}" class="btn btn-warning float-right">Send Reminder Email To Draft</a>
                      <a href data-toggle="modal" data-target="#reminder" class="btn btn-warning float-right mr-1">Reminder Log</a>
                          
                        <div class="table-responsive m-t-40">
                            <table id="config-table" class="table display table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th width="1">#</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Business Name</th>
                                        <th>Hear About Us</th>
                                        <th>Catagory</th>
                                        <th>Country</th>
                                        <th>Phone Number</th>
                                        <th>Requested Date</th>
                                        <th width="1">Status</th>
                                        <th>Action</th>

                                    </tr>
                                    @php $number=1; @endphp
                                </thead>
                                <tbody>
                                    @foreach($ent as $en)
                                    <tr id="row{{$en->entrepreneurs_id}}">
                                        <td>{{$number++}}</td>
                                        <td>{{$en->entre_name}} {{$en->entre_last_name}} </td>
                                        <td>{{$en->entre_email}}</td>
                                        <td>{{$en->gender}}</td>
                                        <td>@if(empty($en->startup_name)&& empty($en->company_name)) {{'N/A'}} @else   {{$en->startup_name}}  {{$en->company_name}} @endif</td>

                                        <td>{{$en->how_hear_ab_us}}</td>
                                        <td>@if($en->catagory=="SME") {{'Growth'}} @else {{$en->catagory}} @endif</td>
                                        <td>{{$en->country}}</td>
                                        <td>{{$en->entre_phone}}</td>
                                        <td>{{$en->created_at}}</td>
                                        <td>
                                       
                              @php $id = encrypt($en->entrepreneurs_id); @endphp                  
                             @if($en->admin_status=="Draft")<span class="badge badge-warning">{{$en->admin_status}}</span>@endif
                             @if($en->admin_status=="Approved")<span class="badge badge-success">{{$en->admin_status}}</span>@endif
                             @if($en->admin_status=="Rejected")<span class="badge badge-danger">{{$en->admin_status}}</span>@endif
                             @if($en->admin_status=="Submitted")<span class="badge badge-info">{{$en->admin_status}}</span>@endif

                                        </td>
                              			<td style="diplay:inline" >
                              				<a class=" delete"  data-toggle="tooltip" title="Delete" data-delete="{{$en->entrepreneurs_id}}"><i class="far fa-trash-alt text-danger fa-lg" ></i></a>
                                
                                        <span data-toggle="tooltip" title="Edit">
                                      				<a class=" edit"  alt="default" data-toggle="modal" data-target="#myModal" data-edit="{{$en->entrepreneurs_id}}"><i class="fas fa-pencil-alt text-info fa-lg"></i></a>
                                        </span>
                                        
                                         @if($en->varify_status!==null)
                                      <a href="{{url('ad/business_profile_show')}}/{{$id}}" >
                                      <span class="" data-toggle="tooltip" title="View"><i class="fas fa-eye text-success fa-lg"></i></span> 
                                    </a>
                                    @endif

                              			</td>
                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                 

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div id="myModal" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit Busniess</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
               		<form method="post" action="{{url('ad/enterpreuners_update')}}">
               			@csrf
         
			        <div class="form-group">
		                <small for="pwd2">First Name</small>
		                <div class="input-group mb-3">		        
		                    <input type="text" class="form-control" placeholder="first name"  id="first_name" name="first_name" required>
		                </div>
		         {!!$errors->first('first_name', '<small style="color:red;margin-left:10px">:message</small>')!!}
		            </div>


		               <div class="form-group">
		                <small for="pwd2">last Name</small>
		                    <div class="input-group mb-3">		
		                    <input type="text" class="form-control" placeholder="last name" name="last_name" id="last_name" required>
		                
		                </div>
		                {!!$errors->first('last_name', '<small style="color:red;margin-left:10px">:message</small>')!!}
		            </div>

		             <div class="form-group">
		                <small for="pwd2">Email</small>
		                <div class="input-group mb-3">      
		                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
		                </div>
		                 {!!$errors->first('email', '<small style="color:red;margin-left:10px">:message</small>')!!}
		            </div>
			         <div class="form-group">
			             <small for="pwd2">Country</small>
			                <div class="input-group mb-3">
		                  <select class="custom-select form-control required " id="country" style="width:100%"  name="country" required>
		                    <option value="">Select Country</option>   
		                    @foreach($country as $cou)
		                    <option value="{{$cou->country}}">{{$cou->country}}</option>
		                    @endforeach
		               </select>
		                </div>
		                {!!$errors->first('country', '<small style="color:red;margin-left:10px">:message</small>')!!}	
		            </div>
	            	  <p id="output">Please enter a valid number below  </p>
                    <input type="tel" class="form-control" id="phone">
                    <input type="hidden" class="form-control" id="hide" name="phone" required>
                    <input type="hidden" class="form-control" id="en_id" name="en_id" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                      </form>
                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
  <div id="model" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Send Email</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
           <div class="col-md-12">

           <form  action="{{url('ad/send/mail')}}" method="post" id="email_f">
              @csrf
                     <label class="control-label text-right">Email <small>Mutiple Select</small></label>
                     
                     <select class="select2 form-control custom-select" name="from_email[]" style="width: 100%; height:36px;" multiple placeholder="somthing@gmail.com" >
                       <option disabled>Select Email</option>
                         @foreach($ent as $row)
                         <option>{{$row->entre_email}}</option>
                         @endforeach
                     </select>       
                   {!!$errors->first('from_email', '<small class="text-danger ml-2">:message</small><br>')!!}
           
                
                     <label class="control-label text-right">Subject</label>
                     <input type="text" class="form-control" name="subject_email"  placeholder="subject" >
                   {!!$errors->first('subject_email', '<small class="text-danger ml-2">:message</small><br>')!!}


                 <label class="control-label text-right">Body</label>
                   <textarea class="form-control" rows="10" name="email_body" id="mymce2"></textarea>
                   {!!$errors->first('email_body', '<small class="text-danger ml-2">:message</small>')!!}

                   <button type="button" class="btn btn-success float-right mt-2" id="sa-warning">Send</button>
              </form>
         </div>

            </div>

          </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->

  <div id="reminder" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
              @php $reminder= DB::table('reminder_email_log')->join('users','users.id','reminder_email_log.author')->orderBy('date','Desc')->get(); $number2=1; @endphp
                <h4 class="modal-title" id="myModalLabel">Reminder Email Log</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
           <div class="col-md-12">
            <div class="table-responsive">
              <table class="table table-striped">
                  <thead>
                      <tr>
                        <th>#</th>
                        <th>Total Reminder Send</th>
                        <th>Author</th>
                        <th>Send Date </th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($reminder as $re)
                     <tr>
                       <td>{{$number2++}}</td>
                       <td>{{$re->total_business}}</td>
                       <td>{{$re->email}}</td>
                       <td>{{$re->date_time}}</td>
                     </tr> 

                     @endforeach
                  </tbody>
              </table>
            </div>

            </div>

            </div>

          </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->


@endsection
@section('page_title')
{{$pagetype}}
@endsection
@section('page_directory')
{{$pagetype}}
@endsection
@section('jquery')
    <script src="{{asset('public/assets/node_modules/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>        
    <script src="{{asset('public/assets/build/js/intlTelInput.js')}}"></script>
      <script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
      <script src="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('public/assets/node_modules/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/assets/node_modules/tinymce/tinymce.min.js')}}"></script>
  
        <script>
   $(document).ready(function() {

   tinymce.init({
      selector: 'textarea#mymce2',
         plugins: [
            "advlist autolink link  lists  paste"],
             oninit : "setPlainText",
              verify_html :false,
              cleanup : true,
              branding:false,
          content_style: "body {font:13px 'Gilroy', Gilroy-Medium; font-weight: 400; }body,button,input,select,textarea {font-size: 10pt;",
   
            height:200,
});

});

          $(document).ready(function () {
           $(".select2").select2();
           $('.mail').click(function () {
              var a=$(this).attr('data-data');  
              $('#mail').val(a);
           });
          });
        </script>
      @if($errors->has('from_email') || $errors->has('subject_email')|| $errors->has('email_body'))
      <script>
      $(document).ready(function(){
      $('#model').modal({show: true});
      });
      </script>
      @endif
      
	 @if(session()->has('notif'))
	 <script type="text/javascript">
	  $.toast({
	             heading: '{{session()->get("notif")}}',
	            // text: 'Use the predefined ones, or specify a custom position object.',
	            position: 'top-right',
	            loaderBg:'#ff6849',
	            icon: 'success',
	            hideAfter: 4500, 
	            stack: 6
	          });
	  </script>                  
    @endif
       @if(session()->has('error'))
   <script type="text/javascript">
    $.toast({
               heading: '<small>{{session()->get("error")}}</small>',
              // text: 'Use the predefined ones, or specify a custom position object.',
              position: 'top-right',
              loaderBg:'#ff6849',
              icon: 'error',
              hideAfter: 4500, 
              stack: 6
            });
    </script>                  
    @endif
    @if($errors->has('first_name') || $errors->has('last_name')|| $errors->has('phone')||$errors->has('email')||
	 $errors->has('country')||$errors->has('catagory'))
	<script>
	$(document).ready(function(){
	$('#myModal').modal({show: true});
	});
	</script>
	@endif

        <script>
        $(function () {
            $('#config-table').DataTable({
                responsive: true
            });
          
        });
</script>
    <script>
        $(function () {   
            $(".select2").select2();
        });
    </script>
  <script>

var input = document.querySelector("#phone"),
  output = document.querySelector("#output");

var iti = window.intlTelInput(input, {
  nationalMode: true,
  preferredCountries: ['af', 'ir'],
  utilsScript: "{{asset('public/assets/build/js/utils.js?1590403638580')}}" // just for formatting/placeholders etc
});

var handleChange = function() {
  var text = (iti.isValidNumber()) ? "Valid phone Number: " + iti.getNumber() : "Please enter a valid Number";
  var textNode = document.createTextNode(text);
  output.innerHTML = "";
  output.appendChild(textNode);
  $('#hide').val(iti.getNumber());
};

// listen to "keyup", but also "change" to update when the user selects a country
input.addEventListener('change', handleChange);
// input.addEventListener('keyup', handleChange);
  </script>
  <!-- edit -->
  <script>
  	$('.edit').click(function(){
         
          id = $(this).attr('data-edit');
          // alert(id);
          url ="{{url('ad/enterpreuners_edit')}}/"+id;
          $.get(url,function(data){
             data=JSON.parse(data);
              if (data!='') {
              $('#first_name').val(data[0].entre_name);
              $('#last_name').val(data[0].entre_last_name);
              $('#email').val(data[0].entre_email);
              $('#country').val(data[0].country);
              $('#phone').val(data[0].entre_phone);
              $('#hide').val(data[0].entre_phone);
              $('#en_id').val(data[0].entrepreneurs_id);          
              }
            });
         }); 

  	 $(".delete").click(function () {
            id = $(this).attr('data-delete');
            url = '{{url("ad/enterpreuners_delete")}}/'+id;

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.get(url , function (data){
                    });
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    ),
                  $("#row"+id).hide(2000);
                     $.toast({
                   heading: 'Record Delete Successfull',
                  // text: 'Use the predefined ones, or specify a custom position object.',
                  position: 'top-right',
                  loaderBg:'#2cdd9b',
                  icon: 'success',
                  hideAfter: 4500, 
                  stack: 6
                });
                }
            })
        });
         $("#sa-warning").click(function () {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Send it!'
            }).then((result) => {
                if (result.value) {
                  $("#email_f").submit();
                              
                }
            })
        });


  </script>
@endsection