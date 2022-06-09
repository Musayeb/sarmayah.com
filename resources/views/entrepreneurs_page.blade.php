@extends('master')
 @section('title')
 Investment Opportunities - Sarmayah.com
 @endsection

@section('css')
    <link href="{{asset('public/assets/node_modules/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/node_modules/ion-rangeslider/css/ion.rangeSlider.skinModern.css')}}" rel="stylesheet">
@endsection

 @section('styles')
   .product_cards{
    position: absolute;
     background: #54b997;
     padding: 7px ;
     text-align: center;
     display: inline-block;
     font-size: 10px;
     font-weight: 600;
     color: #ffffff;
     margin-left:0.1px;
     opacity:0.7;
   }
   @endsection
@section('content')

      <!-- End Inner Header -->
      <!--   header -->
      
      <section class="py-5 p-list-two">
         <div class="container">
             
             <nav class="bg-white" aria-label="breadcrumb" >
                <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Business lists</li>
                </ol>
             </nav>
            
            <div class="row">
               <div class="col-lg-3">
                  <div class="filters shadow-sm rounded bg-white mb-4">
                     <div class="filters-header border-bottom pl-4 pr-4 pt-3 pb-3">
                        <h5 class="m-0 id">Filter By</h5>
                     </div>
                     <div class="filters-body">
                        <div id="accordion">
                           <div class="filters-card border-bottom p-4">
                              <div class="filters-card-header" id="headingOne">
                                 <h6 class="mb-0">
                                    <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Popular <i class="mdi mdi-chevron-down float-right"></i>
                                    </a>
                                 </h6>
                              </div>
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                 <div class="filters-card-body card-shop-filters">
                                   @php $sectors=DB::table('sectors')->orderBy('sector_name','ASC')->get(); @endphp
                                    
                                     @foreach($popular as $pop)
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input sector select" value="{{$pop->sector_id}}">
                                       <label class="custom-control-label" for="">{{$pop->sector_name}} </label>
                                    </div>
                                    @endforeach 

                                 </div>
                              </div>
                           </div>
                           <div class="filters-card border-bottom p-4">
                              <div class="filters-card-header" id="headingTwo">
                                 <h6 class="mb-0">
                                    <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                    Categories <i class="mdi mdi-chevron-down float-right"></i>
                                    </a>
                                 </h6>
                              </div>
                              <div id="collapsetwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                 <div class="filters-card-body card-shop-filters">
                                    <form class="filters-search mb-3">
                                       <div class="form-group">
                                          <i class="fa fa-search"></i>
                                          <input type="text" class="form-control" placeholder="Search Brand" id="serach">
                                       </div>
                                    </form>
                                    <div id="divCatagory">
                                   @foreach($sectors as $sector)
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input sector select" value="{{$sector->sector_id}}" 
                                        id="{{$sector->sector_id}}"
                                       >
                                       <label class="custom-control-label" for="{{$sector->sector_id}}">{{$sector->sector_name}} </label>
                                    </div>
                                    @endforeach
                                    </div>
                                 </div>

                              </div>
                           </div>
                           <div class="filters-card border-bottom p-4">
                              <div class="filters-card-header" id="headingCategory">
                                 <h6 class="mb-0">
                                    <a href="#" class="btn-link show" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
                                    Amount of Investment <i class="mdi mdi-chevron-down float-right"></i>
                                    </a>
                                 </h6>
                              </div>
                              <div id="collapseCategory" class="collapse show" aria-labelledby="headingCategory" data-parent="#accordion">
                                 <div class="filters-card-body card-shop-filters">
                 
                                       <input type="hidden" id="min">
                                        <input type="hidden" id="max">

                                        <div id="range_03"></div>
                                        

                      
                                 </div>
                              </div>
                           </div>



                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9 view_slider recommended">

                  <div class="row output justify-content-start align-items-center">
            @if($ent->isEmpty())
            <div class="col-md-8">
                <img src="{{url('public/web_assist/images/no_data.png')}}" class="img-fluid" style="max-width: 100%;" >
             </div>

              @endif
          @foreach($ent as $row)
          
          <div class="col-md-4">
            <span class="product_cards">{{$row->sector_name}}</span>
                <a href="{{url('business/p/')}}/business={{$row->slug}}">   

             <div style="width:100%;height:214px;text-align: center;" class="bg-white">
                @if(empty($row->logo))
                <img  style="position:relative; top:32%;width:100px;height:100px"
                 src="{{url('public/web_assist/images/empty_img.png')}}"/>
                 @else
                <img  style="width:100%;height:214px;object-fit:contain; flex-grow: 0;flex-shrink: 0;align-self: stretch;"
                 src="{{url('storage/app')}}/{{$row->logo}}"/>
                  @endif
                 </div>
               </a>

                   <div class="inner-slider">
                      <div class="inner-wrapper">
                         <div class="d-flex align-items-center" >
                            <span class="seller-image">
                              <img class="img-fluid" 
                               src="@if(empty($row->profile_pic)) {{url('public/web_assist/images/person_empty.png')}} @else{{url('storage/app')}}/{{$row->profile_pic}} @endif"
                               alt='' />
                            </span>
                            <span class="seller-name">
                        <a href="{{url('business/p/')}}/business={{$row->slug}}">   
                        
                               @if($row->catagory=="STARTUP"||$row->catagory=="IDEA")
                                 {{$row->startup_name}}
                               @else                      
                               {{$row->company_name}}
                                @endif
                            </a>
                          </span>
                         </div>
                         <div class="content-info">
                            <div class="rating-wrapper " style="height:100px;overflow: hidden;text-overflow: ellipsis;">
                                    <a href="{{url('business/p/')}}/business={{$row->slug}}">   <h3>  
                                 @php 
                                     $text=html_entity_decode($row->elavator_picth);
                                     $final=implode(' ', array_slice(explode(' ', $text), 0, 30));
                                       echo $final.'...';
                                      @endphp

                            </h3></a>
                            </div>
                         </div>

                         <div class="footer">
                            @if($row->catagory=="STARTUP")
                            <span class="badge badge-primary">{{$row->catagory}}</span>
                            @endif
                              @if($row->catagory=="SME")
                            <span class="badge badge-success">{{"GROWTH"}}</span>
                            @endif  @if($row->catagory=="IDEA")
                            <span class="badge badge-warning">{{$row->catagory}}</span>
                            @endif

                            <div class="price">
                              @php
                              $checkInvest=DB::table('investment_processes')->where('entrepreneurs_id',$row->entrepreneurs_id)->get();
                              @endphp
                               @if($checkInvest->isEmpty())
                              <small class="p-0"> Required Investment {{'$'.number_format($row->mainimum_amount_looking, 2, '.', ',')}}</small>
                                @elseif($checkInvest[0]->status=="Matched")
                                <span class="badge badge-success">{{'Achieved'}}</span>
                              @else
                              <small class="p-0"> Required Investment {{'$'.number_format($row->mainimum_amount_looking, 2, '.', ',')}}</small>
                            @endif
                              
                            </div>
                         </div>

                      </div>
               
                   </div>

                    </div>
                    @endforeach
       
                    {{$ent->links()}}
               
               </div>                    
               </div>
            </div>
         </div>
      </section>









@endsection
@section('jquery')
  <script src="{{asset('public/assets/node_modules/ion-rangeslider/js/ion-rangeSlider/ion.rangeSlider.min.js')}}"></script>

  <script type="text/javascript">
    $("#range_03").ionRangeSlider({
    type: "double",
    grid: true,
    min: 1000,
    max: 500000,
    from:100,
    to:40000,
    prefix: "$", 
    onChange: function (data) {   
         $('#min').val(data.from);
         $('#max').val(data.to); 
          var min=$('#min').val();
          var max=$('#max').val();

         var imageUrl='{{url("public/web_assist/images/load5.gif")}}';
          $('.output').html("");
        $('.recommended').css({"background-image":"url('" + imageUrl +"')","background-repeat": "no-repeat",
        "background-attachment": "relative",
        "background-position": "center","background-size":" 50px 50px"});

    
        var url="{{url('Business/serach')}}";
         $.ajaxSetup({
          headers: {
                 'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
             }
         });
            $.ajax({
            url:url,
            method:"POST",
            data:{min:min,max:max},
            success:function(data){
            
              $('.output').html(data);
              $('.recommended').css({"background-image":"none"});
             
            }
        });

    },
});
  </script>
<script>
   $(document).ready(function () {
  $("#serach").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#divCatagory *").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});



$(document).ready(function(){
    $('.sector').click(function(){
      var imageUrl='{{url("public/web_assist/images/load5.gif")}}';
        $('.output').html('');
      // 'background-image','url("' + imageUrl +'")'
      $('.recommended').css({"background-image":"url('" + imageUrl +"')","background-repeat": "no-repeat",
        "background-attachment": "relative",
        "background-position": "center","background-size":" 50px 50px"});


      var url="{{url('Business/serach')}}";
      // alert(url);
      var sector=[];
        $('.sector').each(function () {
          if ($(this).is(':checked')) {
            sector.push($(this).val());
          }
          // console.log();
        });
           var sector=sector.toString();
         $.ajaxSetup({
          headers: {
                 'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
             }
         });
            $.ajax({
            url:url,
            method:"POST",
            data:{sector:sector},
            success:function(data){
               // if(data=""){
              $('.output').html(data);
              $('.recommended').css({"background-image":"none"});
           

              // $('.output').html(data);
              // $('.recommended').css({"background-image":"none"});

                  
            }
        });
    });

});
</script>

  @if(session()->has('error'))
     <script>
    $.toast({
               heading: '<small>{{session()->get("error")}}</small>',
              position: 'top-right',
              loaderBg:'#28d7aa',
              icon: 'error',
              hideAfter: 6500, 
              stack: 6
            });
    </script>       
    @endif
@endsection