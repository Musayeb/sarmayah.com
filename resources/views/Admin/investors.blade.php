@extends('Admin.master')
@section('css')
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">
   <link href="{{asset('public/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/assets/build/css/intlTelInput.css')}}">
    <link href="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">
     <link href="{{asset('public/assets/tag/fm.tagator.jquery.css')}}" rel="stylesheet">

@endsection
@section('content')
				       <!-- table responsive -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Investors</h4>
                        <h6 class="card-subtitle">Manage Investors</h6>
                        <div class="table-responsive m-t-40">
                            <table id="config-table" class="table display table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th width="1">#</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Hear About Us</th>
                                        <th>Intersted Sector </th>
                                        <th>Country</th>
                                        <th>Phone Number</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                  @php $number=1 @endphp
                                    @foreach($inv as $row)
                                    <tr id="row{{$row->investor_id}}">
                                        <td>{{$number++}}</td>
                                        <td>{{$row->env_name}} {{$row->env_last_name}} </td>
                                        <td>{{$row->env__email}}</td>
                                        <td>{{$row->gender}}</td>
                                        <td>{{$row->how_hear_ab_us}}</td>  
                                        <td>{{$row->intersted_sector}}</td>
                                        <td>{{$row->country}}</td>
                                        <td>{{$row->env_phone}}</td>                          
                                        <td>@if($row->admin_status==null)
                                         <span class="badge badge-dark" style="font-size:14px">{{'null'}}</span> @endif
                                            @if($row->admin_status=="Rejected")<span class="badge badge-danger" style="font-size:14px">{{ $row->admin_status}}</span> @endif
                                            @if($row->admin_status=="Draft")<span class="badge badge-warning" style="font-size:14px">{{$row->admin_status}}</span> @endif
                                            @if($row->admin_status=="Approved")<span class="badge badge-success" style="font-size:14px">{{ $row->admin_status}}</span> @endif
                                     </td>
                              			<td style="text-align:center">
                              				<button class="btn btn-circle btn-danger delete" data-delete="{{$row->investor_id}}"><i class="far fa-trash-alt" ></i></button>

                                      <a href="{{url('ad/investor_profile')}}/{{$row->investor_id}}" >
                                      <button  class="btn btn-circle btn-success"><i class="fas fa-eye"></i></button>
                                    </a>
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
                        <h4 class="modal-title" id="myModalLabel">Edit Investor</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
               		<form method="post" action="{{url('ad/enterpreuners_update')}}">
               			@csrf
         
			        <div class="form-group">
		                <small for="pwd2">First Name</small>
		                <div class="input-group mb-3">		        
		                    <input type="text" class="form-control" placeholder="first name"  id="first_name" name="first_name">
		                </div>
		         {!!$errors->first('first_name', '<small style="color:red;margin-left:10px">:message</small>')!!}
		            </div>


		               <div class="form-group">
		                <small for="pwd2">last Name</small>
		                    <div class="input-group mb-3">		
		                    <input type="text" class="form-control" placeholder="last name" name="last_name" id="last_name">
		                
		                </div>
		                {!!$errors->first('last_name', '<small style="color:red;margin-left:10px">:message</small>')!!}
		            </div>

		             <div class="form-group">
		                <small for="pwd2">Email</small>
		                <div class="input-group mb-3">      
		                    <input type="email" class="form-control" placeholder="Email" name="email" id="email">
		                </div>
		                 {!!$errors->first('email', '<small style="color:red;margin-left:10px">:message</small>')!!}
		            </div>
			         <div class="form-group">
			             <small for="pwd2">Country</small>
			                <div class="input-group mb-3">
		                  <select class="custom-select form-control required " id="country" style="width:100%"  name="country">
		                    <option value="">Select Country</option>   
		                    @foreach($country as $cou)
		                    <option value="{{$cou->country}}">{{$cou->country}}</option>
		                    @endforeach
		               </select>
		                </div>
		                {!!$errors->first('country', '<small style="color:red;margin-left:10px">:message</small>')!!}	
		            </div>


                <div class="form-group">
                     <label >Bussness Sector </label>
                       <input type="text" class="tagator form-control" id="Business_sector" value="as" name="Business_sector"  
                   data-tagator-show-all-options-on-focus="true"  data-tagator-autocomplete="  
                   ['Aggriculture', 'Commerce', 'Construction', 'Education', 'Financial services']">
          {!!$errors->first('Business_sector', '<small style="color:red;margin-left:10px">:message</small>')!!}
           </div>


	            	  <p id="output">Please enter a valid number below  </p>
                    <input type="tel" class="form-control" id="phone">
                    <input type="hidden" class="form-control" id="hide" name="phone">
                    <input type="hidden" class="form-control" id="en_id" name="en_id">


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
@endsection
@section('page_title')
Investors
@endsection
@section('page_directory')
investors
@endsection
@section('jquery')
    <script src="{{asset('public/assets/node_modules/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>        
    <script src="{{asset('public/assets/node_modules/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/assets/build/js/intlTelInput.js')}}"></script>
    <script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
    <script src="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('public/assets/tag/fm.tagator.jquery.js')}}"></script>

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
  <script>
  	 $(".delete").click(function () {
            id = $(this).attr('data-delete');
            url = '{{url("ad/investor/delete")}}/'+id;

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
                    })                     
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

  </script>
@endsection