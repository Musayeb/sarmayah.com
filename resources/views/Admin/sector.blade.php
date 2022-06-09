@extends('Admin.master')
@section('css')
   <link rel="stylesheet" type="text/css"
        href="{{asset('public/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">  
   <link href="{{asset('public/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">


@endsection
@section('content')
	
       <!-- table responsive -->
                <div class="card">
                    <div class="card-body">
      	<button class="btn btn-info float-right" data-toggle="modal" data-target="#myModal" id="add">Create New</button>

                        <h6 class="card-subtitle">Manage Sectors</h6>
                        <div class="table-responsive m-t-40">
                            <table id="config-table" class="table display table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Photo</th>
                                        <th>Sector Name</th>
                                        <th>Autor</th>
                                        <th>Requested Date</th>
                                        <th>Action</th>

                                    </tr>
                                    @php $number=1; @endphp
                                </thead>
                                <tbody>
                                    @foreach($sector as $row)
                                    <tr id="row{{$row->sector_id}}">
                                        <td>{{$number++}}</td>
                                        <td><img src="{{url('storage/app')}}/{{$row->sector_photo}}" style="height:50px;width:50px"> </td>
                                        <td>{{$row->sector_name}} </td>
                                        <td>{{$row->email}} </td>
                                        <td>{{$row->created_at}}</td>
                              			<td style="text-align:center">
                              				<button class="btn btn-circle btn-danger delete" data-delete="{{$row->sector_id}}"><i class="far fa-trash-alt" ></i></button>

                              				<button class="btn btn-circle btn-info edit" alt="default" data-toggle="modal" data-target="#editModal" data-edit="{{$row->sector_id}}"><i class="fas fa-pencil-alt"></i></button>
                                     
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
                        <h4 class="modal-title" id="myModalLabel">Create Sector</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
               		<form method="post" action="{{url('ad/sectors/add')}}" enctype="multipart/form-data">
               			@csrf
         
			        <div class="form-group">
		                <small for="pwd2">Sector name</small>
		                    <input type="text" class="form-control" placeholder="Sector name"   name="sector_name">
		         {!!$errors->first('sector_name', '<small class="text-danger ml-1">:message</small>')!!}
		            </div>
   
                <div class="form-group">
                    <small for="pwd2">Sector Photo</small>
                    <div class="input-group mb-3">            
                      <input type="file" name="sector_photo" class="form-control" data-allowed-file-extensions="jpg jpeg png " data-max-file-size-preview="5M" />
                    </div>
             {!!$errors->first('sector_photo', '<small class="text-danger ml-1">:message</small>')!!}
                </div>


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                    </form>
                    </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- /.modal -->
            <div id="editModal" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit Sector</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
               		<form method="post" action="{{url('ad/sector_update')}}" enctype="multipart/form-data">
               			@csrf
         
			        <div class="form-group">
		                <small for="pwd2">Sector name</small>
		                <div class="input-group mb-3">		        
	                    <input type="text" class="form-control" id="sector_name" placeholder="Sector name"  name="Update_sector_name">
		                </div>
		         {!!$errors->first('Update_sector_name', '<small style="color:red;margin-left:10px">:message</small>')!!}
		            </div>
                 <div class="form-group">
                    <small for="pwd2">Sector Photo</small>
                    <div class="input-group mb-3">            
                      <input type="file" name="update_sector_photo" class="form-control" data-allowed-file-extensions="jpg jpeg png " data-max-file-size-preview="5M" />
                    </div>
             {!!$errors->first('update_sector_photo', '<small class="text-danger ml-1">:message</small>')!!}
                </div>
		            <div class="form-group" id="photo">
                </div>
                <input type="hidden" name="sector" id="sector">

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                        </form>
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
Busniess Sector
@endsection
@section('page_directory')
Busniess Sector
@endsection
@section('jquery')
    <script src="{{asset('public/assets/node_modules/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>        
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

  <!-- edit -->
  <script>
  	$('.edit').click(function(){
   

         
          id = $(this).attr('data-edit');
          // alert(id);
          url ="{{url('ad/sector_edit')}}/"+id;
          $.get(url,function(data){
             data=JSON.parse(data);
             console.log(data);
              if (data!='') {
              $('#sector_name').val(data[0].sector_name);
              $('#sector').val(data[0].sector_id);

              $('#photo').html('<img src="{{url("storage/app")}}/'+data[0].sector_photo+'" style="height:50px;width:50px">');

              }
            });
         }); 
  	 $(".delete").click(function () {
            id = $(this).attr('data-delete');
            url = '{{url("ad/delete_sector")}}/'+id;

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