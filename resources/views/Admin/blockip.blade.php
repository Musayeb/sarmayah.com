@extends('Admin.master')

@section('css')
  <link href="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">

@endsection
@section('content')
    <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->


            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Block IP Address </h4>
                                <h6 class="card-title m-t-40">
                                    <i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i>Manage Bloked Ip Address
                                </h6>
                                <div class="table-responsive text-center">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">IP Address</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Author</th>
                                                <th scope="col">Bloked Date</th>
                                                <th scope="col">Delete</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                           @php
                                               $count=1;
                                           @endphp

                                            @foreach ($block as $item)
                                               <tr id="row{{$item->block_id}}">
                                                    <th scope="row">{{$count++}}</th>
                                                    <td>{{$item->ip_add}}</td>
                                                    <td>{{$item->description}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>{{$item->Registred_date}}</td>

                                                    <td>
                                                        <a class="delete" id="del" data-id="{{$item->block_id}}"  href="#" style="color:#f62d51;" ><span class="fa fa-trash "></span></a>
                                                    </td>
                                                 </tr>
                
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{url('ad/bloked/ip/')}}" class="form-horizontal form-material">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Block IP Address</label>
                                        <div class="col-md-12">
                                        <input type="text" style="@error('ipv4') border-color:red; @enderror" class="form-control " id="ipv4" name="ipv4" required placeholder="xxx.xxx.xxx.xxx"/>

                                            @error('ipv4')
                                                <p class="mt-2" style="color:red">{{$message}}</p>
                                            @enderror
                                        </div>
                                       <div class="col-md-12"> 
                                        <label class="col-md-12">Description</label>
                                        <textarea cols="5" rows="5" style="@error('Description') border-color:red; @enderror" class="form-control" name="Description" required>
                                            
                                        </textarea>
                                             @error('Description')
                                                <p class="mt-2" style="color:red">{{$message}}</p>
                                            @enderror
                                    </div>

                                           
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Block IP Address</button>
                                        </div>
                                    </div>
                                    
                                </form>

                            </div>
                        </div>

                    </div>
                
                </div>
            </div>            
@endsection
@section('jquery')
<script type="text/javascript" src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
 <script src="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

<script >

var ipv4_address = $('#ipv4');
ipv4_address.inputmask({
    alias: "ip",
    greedy: false //The initial mask shown will be "" instead of "-____".
});
</script>
<script type="text/javascript">
      $(".delete").click(function () {
          id = $(this).attr('data-id');
          url = '{{url("ad/bloked/ip/delete")}}/'+id;
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

