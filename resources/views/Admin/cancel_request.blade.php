@extends('Admin.master')

@section('css')
 <link rel="stylesheet" type="text/css"
        href="{{asset('public/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">
@endsection

@section('content')
				       <!-- table responsive -->
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-subtitle">Canceled Request</h6>
                        <div class="table-responsive m-t-40">
                            <table id="config-table" class="table display table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Investor Name</th>
                                        <th>Investor Email</th>
                                        <th>Business Name</th>
                                        <th>Owner Name</th>
                                        <th>Business Owner</th>
                                        <th>Reason Summary</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                  @php $number=1 @endphp
                                    @foreach($invest as $row)
                                    <tr >
                                        <td>{{$number++}}</td>
                                        <td>{{$row->env_name}} {{$row->env_last_name}} </td>
                                        <td>{{$row->env__email}}</td>
                                        <td>{{$row->startup_name}} {{$row->company_name}}</td>
                                        <td>{{$row->entre_name}} {{$row->entre_last_name}}</td>
                                        <td>{{$row->entre_email}}</td>
                                        <td>{{$row->summary}}</td>



                                        <td> <h5> <span class="badge badge-danger h1">{{'Canceled'}}</span></h5>



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
@section('page_title')
Canceled Request
@endsection
@section('page_directory')
Canceled Request
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