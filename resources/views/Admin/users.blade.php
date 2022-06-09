@extends('Admin.master')
@section('css')
   <link rel="stylesheet" type="text/css"
        href="{{asset('public/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">
  
   <link href="{{asset('public/assets/node_modules/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/node_modules/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
   <link href="{{asset('public/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/assets/build/css/intlTelInput.css')}}">
    <link href="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">


   

@endsection
@section('content')
				
       <!-- table responsive -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Users</h4>
                            <button data-toggle="modal" data-target="#modal"  class="btn btn-info float-right" >Create New</button>

                        <h6 class="card-subtitle">Manage Users</h6>
                        <div class="table-responsive m-t-40">
                            <table id="config-table" class="table display table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Register Date</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                	@php $number=1; @endphp
                                    @foreach($users as $row)
                                    <tr id="row{{$row->id}}">
                                        <td>{{$number++}} </td>
                                        <td>     
                                          <img src="{{url('storage/app/')}}/{{$row->profile_photo_path}}" class="rounded-circle" alt="user" width="50" height="50" />
                                      {{$row->name}}            


                                        </td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->created_at}}</td>
                              			<td style="text-align:center">
                              				<button class="btn btn-circle btn-danger delete" data-delete="{{$row->id}}"><i class="far fa-trash-alt" ></i></button>

                              				<button class="btn btn-circle btn-info edit" alt="default" data-toggle="modal" data-target="#editmodel" data-edit="{{$row->id}}"><i class="fas fa-pencil-alt"></i></button>
                                                     
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

 
{{---- Edit Model----}}

<!-- sample modal content -->
<div id="editmodel" class="modal animated slideInUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Edit User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{url('ad/users/update')}}" id="editmodel" enctype="multipart/form-data" 
            style="padding:20px">
                @csrf
                <div class="form-group">
                	<label>Name</label>
                	<input type="text" name="name" placeholder="user name" class="form-control" id="name">
             {!!$errors->first('name', '<small style="color:red;margin-left:10px">  :message</small>')!!}

                </div>
              <input type="hidden" id="user" name="user">  
                 <div class="form-group">
                	<label>Email</label>
                	<input type="text" name="email_address" class="form-control" placeholder="email" id="email">
               {!!$errors->first('email_address', '<small style="color:red;margin-left:10px">  :message</small>')!!}

                </div> 
             

                 <div class="form-group">
                	<label>profile picture</label>
                	<input type="file" name="photo" class="form-control">
         {!!$errors->first('photo', '<small style="color:red;margin-left:10px">  :message</small>')!!}
               
                </div>
                 <div id="ph">
                  
                </div>


          	
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-info" value="Update User" name="submit">
                    <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div> <!-- /.modal-content -->
    </div>  <!-- /.modal-dialog -->
</div>  <!-- /.modal -->
</div>

<!-- sample modal content -->
<div id="modal" class="modal animated slideInUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Create User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{url('ad/users/register')}}" enctype="multipart/form-data" 
            style="padding:20px">
                @csrf
                <div class="form-group">
                	<label>Name</label>
                	<input type="text" name="username" placeholder="user name" class="form-control"
                   value="{{old('username')}}">
           {!!$errors->first('username', '<small style="color:red;margin-left:10px">  :message</small>')!!}

                </div>
               <div class="form-group">
                	<label>Email</label>
                	<input type="text" name="email" class="form-control" placeholder="email"  value="{{old('email')}}">
             {!!$errors->first('email', '<small style="color:red;margin-left:10px">  :message</small>')!!}

                </div> 
             
              <div class="form-group">
                	<label>password</label>
                	<input type="password" name="password" class="form-control" value="{{old('password')}}">
               {!!$errors->first('password', '<small style="color:red;margin-left:10px">  :message</small>')!!}

                </div> 
              <div class="form-group">
                	<label>conferm password</label>
                	<input type="password" name="confrem_password" class="form-control">
             {!!$errors->first('confrem_password', '<small style="color:red;margin-left:10px">  :message</small>')!!}

                </div> 
             

                 <div class="form-group">
                	<label>profile picture</label>
                	<input type="file" name="photo" class="form-control" value="{{old('photo')}}">
       {!!$errors->first('photo', '<small style="color:red;margin-left:10px">  :message</small>')!!}

                </div>
          	
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-info" value="Register" name="submit">
                    <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div> <!-- /.modal-content -->
    </div>  <!-- /.modal-dialog -->
</div>  <!-- /.modal -->
</div>

@endsection
@section('page_title')
Users
@endsection
@section('page_directory')
users
@endsection
@section('jquery')
    <script src="{{asset('public/assets/node_modules/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>        
   <script src="{{asset('public/assets/node_modules/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/assets/node_modules/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/assets/build/js/intlTelInput.js')}}"></script>
      <script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
      <script src="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

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

    @if($errors->has('username') || $errors->has('last_name')|| $errors->has('photo')||$errors->has('email')||
	 $errors->has('conferm_password')||$errors->has('passord'))
	<script>
	$(document).ready(function(){
	$('#modal').modal({show: true});
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
            // For select 2
            $(".select2").select2();
        });
    </script>


  <script>
  	$('.edit').click(function(){
         
          id = $(this).attr('data-edit');
          // alert(id);
          url ="{{url('ad/users/edit')}}/"+id;
          $.get(url,function(data){
             data=JSON.parse(data);
             
              if (data !='') {
             $('#name').val(data['name']);
             $('#email').val(data['email']);   
             $('#user').val(data['id']);  
             $('#ph').html("<img height='80' width='80' src={{url('storage/app/')}}"+"/"+data['profile_photo_path']+">"); 
              }
            });
         }); 
  	 $(".delete").click(function () {
            id = $(this).attr('data-delete');
            url = '{{url("ad/users/delete")}}/'+id;

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
                    )
                  $("#row"+id).hide(2000);
                }
            })
        });

  </script>
@endsection