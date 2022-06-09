@extends('Admin.master')
@section('css')
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">

@endsection
@section('content')
				                      <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Investors</h4>
                        <h6 class="card-subtitle">Manage Investors</h6>
                        <div class="table-responsive m-t-40">
                            <table id="config-table" class="table display table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th width="1">#</th>
                                        <th>Inviter Name</th>
                                        <th>Inviter Email</th>
                                        <th>Receiver Email</th>
                                        <th>Receiver Name</th>
                                        <th>Invite Date</th>

                                    </tr>
                                </thead>
                                <tbody>
                                  @php $number=1 @endphp
                                    @foreach($invited as $row)
                                    <tr id="row">
                                        <td>{{$number++}}</td>
                                        <td>{{$row->inviter_name}} </td>
                                        <td>{{$row->inviter_email}} </td>
                                        <td>{{$row->receiver_name}} </td>
                                        <td>{{$row->receiver_email}} </td>      
                                        <td>{{$row->date}} </td>                     

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
@section('page_title')
Investors
@endsection
@section('page_directory')
investors
@endsection
@section('jquery')
    <script src="{{asset('public/assets/node_modules/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>        

	

  <script>
        $(function () {
            $('#config-table').DataTable({
                responsive: true
            });
          
        });
</script>

 

@endsection 