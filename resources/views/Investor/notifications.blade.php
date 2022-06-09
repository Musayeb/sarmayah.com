@extends('master')
@section('css')
    <link href="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">

@endsection
@section('content')
<div class="container mt-5">
   <div  class="row justify-content-center">
               <div class="col-lg-9 ">
                  <div class="box shadow-sm rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0 font-weight-bold">Recent Notifications</h6>
                     </div>

                       @foreach($notfi as $row)
                       <div class="box-body p-0 row{{$row->not_id}}">
                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                           <div class="">
                              <div class="dropdown-notifications-item-content-text">
                                @if(!empty($row->html_description))
                                @php echo html_entity_decode($row->html_description)@endphp
                                @else {{$row->description}} @endif
                              </div>
                              <div class="small">@php $date = date_create($row->created_at); echo date_format($date,'g:ia l jS F Y');@endphp </div>
                           </div>
                           <span class="ml-auto mb-auto">
                              <div class="btn-group">
                                 <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <i class="mdi mdi-dots-vertical"></i>
                                 </button>
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item delete" data-d="{{$row->not_id}}" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                 </div>
                              </div>
                              <br>
                           </span>
                        </div>
                     </div>
              @endforeach
        </div>
   </div>
</div>     
</div>      
@endsection

@section('jquery')
    <script src="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
<script>
    $(".delete").click(function () {
            id = $(this).attr('data-d');
            url = '{{url("investor/notificatios/delete")}}/'+id;

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
                 $(".row"+id).hide(2000);
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