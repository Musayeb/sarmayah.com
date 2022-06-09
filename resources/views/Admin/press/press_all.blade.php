@extends('Admin.master')
@section('css')
<link rel="stylesheet" type="text/css"
href="{{asset('public/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css"
href="{{asset('public/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">
<link href="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">
<link href="{{asset('public/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">

@endsection
@section('content')
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">News & Press</h4>
                <h6 class="card-subtitle">Manage News</h6>
                <a href="{{url('ad/press-news/add')}}" class="btn btn-success float-right mb-3"><i class="mdi mdi-plus"></i> Add News</a>
                <div class="table-responsive m-t-40">
                    <table id="config-table" class="table table-striped ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Tags</th>
                                <th>Slug</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Action</th>
                              </tr>
                            @php $number=1; @endphp
                        </thead>
                        <tbody>
                            @foreach($blog as $row)
                            <tr id="row{{$row->blog_id}}">
                                <td>{{$number++}}</td>
                                <td>{{$row->blog_title}} </td>
                                <td>{{$row->email}} </td>
                                @php
                                $lineArray = explode(",", $row->tags);
                                @endphp
                               
                                <td>
                                  @foreach($lineArray as $t)                                   
                                  <span class="badge badge-info ">{{'#'.$t}}</span>
                                 @endforeach
                                </td>
                                <td>{{$row->slug}} </td>
                                <td>{{"News"}} </td>
                                <td>{{$row->blog_reg_date}} </td>
                           
                                  <td>
                                      <button class="btn btn-circle btn-danger delete" data-delete="{{$row->blog_id}}"><i class="far fa-trash-alt" ></i></button>
                                    <a href="{{url('ad/newes/edit')}}/{{$row->blog_id}}"><button class="btn btn-circle btn-info edit" ><i class="fas fa-pencil-alt"></i></button></a>
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
    
@endsection
@section('page_directory')
Press & News
@endsection

@section('page_title')
Press & News
@endsection

@section('jquery')
<script src="{{asset('public/assets/node_modules/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>        
  <script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
  <script src="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

@if(session()->has('notif'))
<script type="text/javascript">
 $.toast({
            heading: '<small>{{session()->get("notif")}}</small>',
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
     $(".delete").click(function () {
          id = $(this).attr('data-delete');
          url = '{{url("ad/newes/delete/")}}/'+id;
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

</script>
@endsection