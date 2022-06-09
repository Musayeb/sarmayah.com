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
				
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Website Pages</h4>
                           <a href="{{url('ad/create/pages')}}"> <button  class="btn btn-info float-right" >Create New</button></a>

                        <h6 class="card-subtitle">Manage Pages</h6>
                        <div class="table-responsive m-t-40">
                            <table id="config-table" class="table display table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="1">#</th>
                                        <th>Page name</th>
                                        <th>Autor</th>
                                        <th>Created Date</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                	@php $number=1; @endphp
                                   @foreach ($pages as $item)
                                       <tr id="row{{$item->page_id}}">
                                        <td>{{$number++}}</td>
                                        <td>{{$item->page_name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->created_at}}</td>


                                        <td>
                                            <a href="{{url('ad/page/edit/')}}/{{$item->page_id}}"><i class="mdi mdi-pencil text-info mdi-lg" style="font-size:20px"></i></a>
                                            <a href="javascript:void()"><i class="mdi mdi-delete text-danger delete" data-id="{{$item->page_id}}" style="font-size:20px"></i></a>
                    
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

@endsection
@section('page_title')
Website Pages
@endsection
@section('page_directory')
Website Pages
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

  

<script>
        $(function () {
            $('#config-table').DataTable({
                responsive: true
            });
          
        });
        $(".delete").click(function () {
          id = $(this).attr('data-id');
          url = '{{url("ad/page/delete")}}/'+id;
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
                  )
                $("#row"+id).hide(2000);
              }
          })
      });
</script>
    

@endsection