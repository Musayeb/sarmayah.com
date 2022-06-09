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
                        <!-- <h4 class="card-title">Investment Request</h4> -->
                        <h6 class="card-subtitle">Manage Investment Request</h6>
                        <div class="table-responsive m-t-40">
                            <table id="config-table" class="table display table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Investor Name</th>
                                        <th>Email</th>
                                        <th>Investment Amount </th>
                                        <th>Entreprenure</th>
                                        <th>Status</th>
                                        <th>Registred Date</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                  @php $number=1 @endphp
                                    @foreach($invest as $row)
                                    <tr id="row{{$row->investor_id}}">
                                        <td>{{$number++}}</td>
                                        <td>{{$row->env_name}} {{$row->env_last_name}} </td>
                                        <td>{{$row->env__email}}</td>
                                        <td>{{$row->investment_ammount}}</td>
                                        <td>{{$row->startup_name}} {{$row->company_name}}</td>
                                        <td>@if(!empty($row->status))
                                            <span class="badge badge-success">{{$row->status}}</span>
                                            @else 
                                            <span class="badge badge-danger">{{'pandding'}}</span>
                                            @endif
                                        </td>
                                        <td>
                                         @php $date = date_create($row->created_at); echo date_format($date,'g:ia l jS F Y');@endphp
                                       </td>                          
                              			<td style="text-align:center">
                              				<button class="btn btn-circle btn-danger delete" data-delete="{{$row->investor_id}}"><i class="far fa-trash-alt" ></i></button>
                                    <a href="#" data-target="#myModal3" data-toggle="modal"  class="email" data-email-inv="{{$row->env__email}}" data-email-entre="{{$row->entre_email}}">
                                      <button  class="btn btn-circle btn-info"><i class="ti-email"></i></button>
                                    </a>
                                   @if(empty($row->status))
                                      <a href="{{url('ad/invest_match')}}/{{$row->investor_id}}/{{$row->entrepreneurs_id}}/{{$row->invest_process_id}}" >
                                      <button  class="btn btn-circle btn-success"><i class="fas fa-handshake"></i></button>
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


        

<!-- modal pass -->
<div id="myModal3" class="modal slide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel">Send Email</h6>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{url('ad/invest/fallup/email')}}">
                @csrf
            
                <div class="form-group">
                    <label>To*</label>
                    <input type="Email" class="form-control" required name="email" id="to" readonly>
                </div>

                <div class="form-group">
                    <label>subject*</label>
                    <input type="text" class="form-control"  required name="subject">
                </div>

                <div class="form-group">
                    <label>body*</label>
                    <textarea class="form-control" name="body"  required rows="7"></textarea>
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
Investment Request
@endsection
@section('page_directory')
Investment Request
@endsection

@section('jquery')
    <script src="{{asset('public/assets/node_modules/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>        
    <script src="{{asset('public/assets/node_modules/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/assets/build/js/intlTelInput.js')}}"></script>
    <script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
    <script src="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

    <script>
    $(function () {
        $('#config-table').DataTable({
            responsive: true
        });
      
    });
    $(document).ready(function () {
       
       $('.email').click(function () {
        var investor=$(this).attr('data-email-inv');
        var entre=$(this).attr('data-email-entre');
        $('#to').val(investor+','+entre);

       });
    });
</script>
   @if(session()->has('notif'))
     <script>
  $.toast({
             heading: 'Successfull',
            text: '{{session()->get("notif")}}',
            position: 'top-right',
            loaderBg:'#28d7aa',
            icon: 'success',
            hideAfter: 4500, 
            stack: 6
          });
  </script>       
  @endif
@endsection