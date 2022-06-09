@extends('Admin.master')

@section('css')
<link href="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">    
@endsection
@section('content')

    <div class="row">
        <div class="col-md-6">
            
            <button type="button" class="btn btn-info float-right mb-2" data-toggle="modal" data-target="#myModal">Add to Feature <i class="mdi mdi-plus"></i></button>
            <div class="col-md-4 float-right"> 
                <select class="form-control" id="view_filter">
                <option value="" selected disabled>Filter</option>
                @foreach ($view_year as $item1)
                @php $month3 = strftime('%B', mktime(0, 0, 0, $item1->month)); @endphp
                <option value="{{$item1->month}} {{$item1->year}}">{{$month3}} {{$item1->year}}</option>
                    
                @endforeach
                </select>
            </div>
            <div class="table-responsive p-2">
                <table class="table table-struped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Business Name</th>
                            <th>Category</th>
                            <th>Owner Email</th>
                            <th>Month</th>
                            <th>Total View</th>
                            <th>View More</th>

                        </tr>
                    </thead>
                    @php $number=1; @endphp
                    <tbody id="body">
                        @foreach($view as $row)
                        <tr>
                        <td>{{$number++}}</td>  
                        <td>{{$row->startup_name}}  @if(isset($row->company_name)) {{$row->company_name}} @endif</td>  
                        <td>{{$row->catagory}}</td>    
                        <td>{{$row->entre_email}}</td> 
                        @php $monthName = strftime('%B', mktime(0, 0, 0, $row->date)); @endphp
   
                        <td>{{$monthName}} {{$row->year}}</td> 
                        <td style="text-align: center">{{$row->total}}</td> 
                        <td style="text-align: center"><button type="button" class="btn btn-success btn-circle more" data-date="{{$row->date}} {{$row->year}}" data-entre="{{$row->entrepreneurs_id}}"  data-toggle="modal" data-target="#myModal1" ><i class="mdi mdi-eye"></i></button></td>    
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> 
        <div class="col-md-6 " >
        <div class="col-md-4 float-right"> 
            <select class="form-control mb-1" id="feature_filter" >
            <option value="" selected disabled>Filter</option>
            @foreach ($feature_year as $item)
            @php $month2 = strftime('%B', mktime(0, 0, 0, $item->month)); @endphp
            <option value="{{$item->month}} {{$item->year}}">{{$month2}} {{$item->year}}</option>
                
            @endforeach
            </select>
        </div>
            <div class="table-responsive p-2">
                <table class="table table-struped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Business Name</th>
                            <th>Category</th>
                            <th>Owner Email</th>
                            <th>Month & Year</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    @php $number=1; @endphp
                    <tbody id="body1">
                        @foreach($feature as $row1)
                        <tr id="row{{$row1->feature_id}}">
                        <td>{{$number++}}</td>  
                        <td>{{$row1->startup_name}}  @if(isset($row1->company_name)) {{$row1->company_name}} @endif</td>  
                        <td>{{$row1->catagory}}</td>    
                        <td>{{$row1->entre_email}}</td> 
                        @php $month = strftime('%B', mktime(0, 0, 0, $row1->month)); @endphp
                        <td>{{$month}} {{$row1->year}} </td> 
                        <td style="text-align: center"><button type="button" class="btn btn-danger btn-circle delete" data-id="{{$row1->feature_id}}"><i class="mdi mdi-delete"></i></button></td>    
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> 
        
    </div>

    <div id="myModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Busniess to Feature Business</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{url('ad/featured/add')}}" method="post">
                        @csrf
                  <div class="form-group">
                      <label>Business <label class="text-danger">*</label> <small>(Mutiple Select) Press CTRL/Shift to Select Mutiple</small></label>
                      <select class="form-control" multiple name="business[]" required id="business_option">
                        @foreach($view as $row)
                        <option value="{{$row->entrepreneurs_id}}">{{$row->startup_name}}  @if(isset($row->company_name)) {{$row->company_name}} @endif</option>
                        @endforeach
                    </select>
  
                    </div>

                  <div class="form-group">
                    <label>Month <label class="text-danger">*</label></label>
                  <input type="month" name="month" class="form-control" id="month"  required>

                </div>

                </div>
                <div class="modal-footer">
                    <button type="Submit" class="btn btn-success waves-effect" id="submit">Save</button>
                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div id="myModal1" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title business" id="myModalLabel"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive p-2">
                        <table class="table table-struped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Investor Full Name</th>
                                    <th>Investor Email</th>
                                    <th>Ip Address</th>
                                    <th>OS</th>
                                    <th>Browser</th>
                                    <th>Access Date</th>
    
                                </tr>
                            </thead>
                            @php $number=1; @endphp
                            <tbody id="body3">
                              
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@section('page_title')
Featured Business
@endsection

@section('page_directory')
Featured Business
@endsection


@section('jquery')
<script src="{{asset('public/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

<script>
  $("body").on('click','.delete',function () {
          id = $(this).attr('data-id');
          url = '{{url("ad/featured/delete")}}/'+id;
   
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

<script>
$(document).ready(function(){    
  $('#view_filter').change(function(){
     var value= $(this).val();
     var url="{{url('ad/featured/view')}}"+'/'+value;
     var htmldata="";
     var htmldata1="";
     var number=1;
     var months = new Array('January', 'February', 'March',
                     'April', 'May', 'June', 'July', 'August',
                     'September', 'October', 'November', 'December');
     $.ajax({
     type:'get',
     url:url,
     success:function(data){ 
        // console.log(data);

        for (let i = 0; i < data.length; i++) {
            if(data[i].startup_name ==null){ 
               var startup="";
             }else{
                 startup=data[i].startup_name;
             }
             if(data[i].company_name==null){
                var company="";
             }else{
                var company=data[i].company_name;
             }
            var mont=data[i].date-1;
        htmldata1+='<option value="'+data[i].entrepreneurs_id+'">'+ startup + company +'</option>'    
        htmldata+='<tr><td>'+number++ +'</td><td>'+ startup + company +'</td>\
            <td>'+ data[i].catagory+'</td>\
            <td>'+ data[i].entre_email+'</td>\
            <td>'+months[mont]+' '+data[i].year+'</td>\
            <td>'+ data[i].total+'</td>\
            <td style="text-align: center"><button type="button" class="btn btn-success btn-circle more" \
            data-date="'+data[i].date+' '+data[i].year +'" data-entre="'+data[i].entrepreneurs_id+'"  data-toggle="modal" data-target="#myModal1" ><i class="mdi mdi-eye"></i></button></td>\
            </tr>'; 
            
        }

        $('#body').html(htmldata);
        $('#business_option').html(htmldata1);

        
    },
    error:function(jqxhr, status, exception){
    }
    });

    });//end of chage

    $('#feature_filter').change(function(){
     var value= $(this).val();
     var url="{{url('ad/featured/filter')}}"+'/'+value;
     var htmldata="";
     var number=1;
     var months = new Array('January', 'February', 'March',
                     'April', 'May', 'June', 'July', 'August',
                     'September', 'October', 'November', 'December');
     $.ajax({
     type:'get',
     url:url,
     success:function(data){ 
        // console.log(data);

        for (let i = 0; i < data.length; i++) {
            if(data[i].startup_name ==null){ 
               var startup="";
             }else{
                 startup=data[i].startup_name;
             }
             if(data[i].company_name==null){
                var company="";
             }else{
                var company=data[i].company_name;
             }
            var mont=data[i].month-1;
            
        htmldata+='<tr id="row'+ data[0].feature_id +'"><td>'+number++ +'</td><td>'+ startup + company +'</td>\
            <td>'+ data[i].catagory+'</td>\
            <td>'+ data[i].entre_email+'</td>\
            <td>'+months[mont]+' '+data[i].year+'</td>\
            <td style="text-align: center"><button type="button" class="btn btn-danger btn-circle delete" data-id="'+ data[0].feature_id +'"><i class="mdi mdi-delete"></i></button></td>\
            </tr>'; 
            
        }

        $('#body1').html(htmldata);
        
    },
    error:function(jqxhr, status, exception){
    }
    });

    });//end of chage

    $('body').on('click','.more',function(){
     var date= $(this).attr('data-date');
     var id= $(this).attr('data-entre');
    
    
     var url="{{url('ad/featured/detail/more')}}"+'/'+date+'/'+id;
     var htmldata="";
     var number=1;
     var months = new Array('January', 'February', 'March',
                     'April', 'May', 'June', 'July', 'August',
                     'September', 'October', 'November', 'December');
     $.ajax({
     type:'get',
     url:url,
     success:function(data){ 
        // console.log(data);

        for (let i = 0; i < data.length; i++) {
            if(data[i].startup_name ==null){ 
               var startup="";
             }else{
                 startup=data[i].startup_name;
             }
             if(data[i].company_name==null){
                var company="";
             }else{
                var company=data[i].company_name;
             }
            var mont=data[i].date-1;
            $('.business').html(startup + company+'&nbsp;<small class="badge badge-info">'+data[i].catagory+'</small>');
        htmldata+='<tr><td>'+number++ +'</td><td>'+ data[i].env_name +' '+data[i].env_last_name +'</td>\
            <td>'+ data[i].env__email+'</td>\
            <td>'+ data[i].ip_address+'</td>\
            <td>'+ data[i].os+'</td>\
            <td>'+ data[i].getBrowser+'</td>\
            <td>'+data[i].Date+'</td>\
            </tr>'; 
            
        }

        $('#body3').html(htmldata);
        
    },
    error:function(jqxhr, status, exception){
    }
    });

    });//end of chage

  });//end of dom
    </script>
@endsection