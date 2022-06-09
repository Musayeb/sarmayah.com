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
                <h4 class="card-title">Partners</h4>
                <h6 class="card-subtitle">Manage Partners</h6>
                <a  data-target="#verticalcenter" data-toggle="modal"  class="btn btn-success float-right mb-3 text-white"><i class="mdi mdi-plus"></i> Add Partner</a>
                <div class="table-responsive m-t-40">
                    <table id="config-table" class="table table-striped ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Partner Logo</th>

                                <th>Partner Name</th>
                                <th>Author</th>
                                <th>Catagory</th>
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
                            <td><img src="{{url('storage/app')}}/{{$row->partner_logo}}" class="img-circle" style="width:55px;height:55px"></td>
                                <td>{{$row->partner_name}} </td>
                                <td>{{$row->email}} </td>
                  
                                <td>{{$row->partner_catagory}} </td>
     
                                <td>{{'Partner'}} </td>
                                <td>{{$row->blog_reg_date}} </td>
                           
                                  <td>
                                      <button class="btn btn-circle btn-danger delete" data-delete="{{$row->blog_id}}"><i class="far fa-trash-alt" ></i></button>
                       
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
       <div id="verticalcenter" class="modal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="vcenter">Add Partner</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                   
                   <form method="post" action="{{url('ad/store/partners')}}" enctype="multipart/form-data">
                    @csrf
                     <div class="form-group">
                        <label class="control-label">Partner Name</label>
                        <input type="text" class="form-control" placeholder="Partner Name" required name="partner_name">
                      </div>
                       <div class="form-group">
                        <label class="control-label">Partner website or social media link</label>
                        <select name="catagory" class="form-control" required>
                          <option selected disabled value="">Select Catagory</option>
                          <option>Business Association</option>
                          <option>Financial Institutions</option>
                          <option>incubators</option>
                        </select>
                        </div>
                      <div class="form-group">
                        <label class="control-label">Partner Logo</label>
                        <input type="file" class="form-control"  name="partner_logo" required >
                      </div>
                    <div class="form-group">
                        <label class="control-label">Partner website or social media link</label>
                        <input type="url" class="form-control" name="website_link" placeholder="website url" >
                      </div>
                      <input type="Submit" class="btn btn-success float-right" name="submit" value="submit">
                   </form>

                </div>
     
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


@endsection
@section('page_directory')
Partners
@endsection

@section('page_title')
Partners
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
    $('#config-table').DataTable({
        responsive: true
    });

     $(".delete").click(function () {
          id = $(this).attr('data-delete');
          url = '{{url("ad/career/delete")}}/'+id;
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