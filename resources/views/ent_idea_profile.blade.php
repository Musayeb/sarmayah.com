@extends('master')
@section('title')
Idea Profile - Sarmayah.com
@endsection

@section('css')
@endsection
@section('styles')


.card-container {
  background-image: linear-gradient(to bottom right, #2bdc9f, #1ecac9);
  border-radius: 4px;
  box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
  color: white;
  position: relative;
  max-width: 100%;
  text-align: center;
}

.card-container .round-imgs {
  border: 1px solid #ffffff;
  border-radius: 50%;
  padding: 7px;
  width:120px;
  height:120px;

}



.myBtn{
  color: #231E39;
  background-color: #FEBB0B;
  border-radius: 3px;
  font-size: 11px;
  font-weight: bold;
  padding: 1px !important;
}

.so-media{
  border:1px solid #7a7c84;
   border-radius:50%;
   width:30px;
   height:30px;
   display: flex;
   flex-direction: row;
   justify-content: center;
   align-items: center;
   color:#7a7c84;
   transition:all 0.3s;
   
}


.so-media:hover{
  text-decoration: none;
  color:#2bdc9f;
  border-color:#2bdc9f;
}

table.a > tbody > tr > td,
table.a > thead > tr > td,
table.a > tbody > tr > th,
table.a > thead > tr > th{
  text-align: left;
  padding: 8px;
  height:10px;
  font-size:10px;
}
.a{
  text-align:center;
}
.c{
  text-align:center;
}
.d{
  text-align:center;
}
.e{
  text-align:center;
}
.model-text{
  font-size:12px;
}
@endsection
@section('content')

<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
   <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Business</li>
            <li class="breadcrumb-item active" aria-current="page">{{$ent->startup_name}}</li>

         </ol>
      </nav>
    </div>
   </div> 
</div>

<!-- <section> -->
  <div class="main-page">
       <div class="container">
          <div class="row">
                   <div class="col-md-12 col-lg-4 mb-1  right order-lg-4 mt-4">
                        <div class="card-container pr-3 pl-3 pb-3">
                              @if(empty($ent->profile_pic))
                                <img src="{{url('public/web_assist/images/person_empty.png')}}"
                                     class="round-imgs mt-4 "  alt="Business logo">
                                @else
                                <img src="{{url('storage/app')}}/{{($ent->profile_pic)}}"
                                     class="round-imgs mt-4"  alt="Owner avetar">
                                @endif


                            <h5 class="mt-3 mb-3">Owner</h5>

                            <div class="d-flex justify-content-between ">
                                <h6>Full Name</h6>
                                <p>{{$ent->entre_name}} {{' '.$ent->entre_last_name}}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6>Email</h6>
                                <p>{{$ent->entre_email}}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6>Phone</h6>
                                <p>{{$ent->entre_phone}} </p>
                            </div>
                           
                        </div>
                    <article class="sticky" >
   
                      <div class="sticky" style="position:sticky;">
                        <div class="bg-white mt-2 shadow-lg " style="border-radius:4px;">
                        <div class="text-center mt-3">
                           @if(empty($ent->logo))
                           <img src="{{url('public/web_assist/images/empty_img.png')}}"
                               style="margin-top:10px;height:160px;width:100%;object-fit: contain;border-radius:4px;flex-shrink: 0;" alt="Business logo">
                           @else
                           <img src="{{url('storage/app')}}/{{($ent->logo)}}" style="margin-top:10px;height:160px;width:100%;object-fit: contain;border-radius:4px; border-bottom-left-radius:0;border-bottom-right-radius:0;" >
                          @endif
                        </div>
        
                            <div class="p-3">
                                <div class="d-flex align-items-top ">
                                    <label  class="mb-0 text-muted">Idea Name</label>
                                    <label class="font-weight-bold text-dark ml-auto">{{$ent->startup_name}}</label>
                                </div>
                             @if(isset($ent->sector_name))
                                <div class="d-flex align-items-top ">
                                    <label class="mb-0 text-muted">Business Sector</label>
                                    <label class="font-weight-bold text-dark ml-auto">{{$ent->sector_name}}</label>
                                </div>
                              @endif      
                                <div class="d-flex align-items-top ">
                                    <label class="mb-0 text-muted">Rounds of Investment</label>
                                    <label class="font-weight-bold text-dark ml-auto">{{$ent->round_invest}}</label>
                                </div>
                                <div class="d-flex align-items-top ">
                                    <label class="mb-0 text-muted">Minimum of the mount of investment</label>
                                    <label class="font-weight-bold text-dark ml-auto">{{$ent->mainimum_amount_looking}}</label>
                                </div>
                                  <div class="d-flex align-items-top ">
                                    <label class="mb-0 text-muted">Potential Establishment Date</label>
                                    <label class="font-weight-bold text-dark ml-auto">{{$ent->establishment_date}}</label>
                                </div>
        
                              <div class="d-flex align-items-top ">
                                    <label class="mb-0 text-muted">Needed team members</label>
                                    <label class="font-weight-bold text-dark ml-auto">{{$ent->team_size}}</label>
                                </div>
        
                                 <div class="d-flex justify-content-between">
                                  <label class="mb-0 text-muted">Account Type</label>
                                <small class="font-weight-bold text-dark mb-2 mt-0 ml-auto"><span class="badge badge-warning badge-pill" style="font-size:10px">{{$ent->catagory}}</span></small>
                                </div>
                                <div class="d-flex align-items-top mb-2">
                                    <label class="mb-0 text-muted">Account Status</label>
                                    <small class="font-weight-bold text-dark mb-0 mt-0 ml-auto"><span class="badge badge-success badge-pill" style="font-size:10px">{{$ent->admin_status}}</span></small>
                                </div>
                               
                            </div>
                        </div>
                      </div>
                   
               </article>
            </div>
               <div class="col-lg-8">
                  <div id="overview" class="align-items-center">
                     <div class="d-flex">
              
                     </div>
                     <div class="user-info d-flex">
                        <span class="user-info-rating d-flex">
                           <div class="star-rating-s15-wrapper">
                              </span>
                           </div>

                     </div>
                  </div>
                  <div class="slider mt-4">

                        @if(!$ent->pitch_video_link=="") 
                         @php $step1=explode('v=', $ent->pitch_video_link);
                                $step2 =explode('&',$step1[1]);
                                $vedio_id = $step2[0]; @endphp

                          <iframe  style="height:350px;width:100%" src='https://www.youtube.com/embed/{{ $vedio_id}}' frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;"></iframe> 
                         @else <div style="height:350px;width:100%;text-align:center" class="bg-white">
                         <img src="{{url('public/web_assist/images/video_empty.png')}}" style="height:175px;width:40%;position:relative;top:24%;" ></div> @endif

                  </div>



                  <div id="description" class="description card p-4 mt-1">
                  <h6 class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Elevator Pitch</h6>
                     <p style="margin:0;text-align: justify;text-justify: inter-word;">@php echo html_entity_decode($ent->elavator_picth); @endphp</p>
                  </div>
                  <div id="description" class="description card p-4 mt-1">
                   <h6 class="p-2"style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Problem </h6>
                     @php echo html_entity_decode($ent->problem_sulotion); @endphp
                  </div>
                    <div id="description" class="description card p-4 mt-1">
                   <h6 class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">The Proposed Solution</h6>
                     @php echo html_entity_decode($ent->problem_sulotion); @endphp
                  </div>
                  @if(!empty($ent->market_positon_file))

                  <div class=" card div_market_position p-3 mt-1">
                  <h6 class="p-2 div_market_position" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Market Positioning Chart</h6>
                    
                  <iframe src="{{url('storage/app')}}/{{$ent->market_positon_file}}" style="scrollbar-width:thin;" width="100%" height="500"></iframe>
                  </div>
                    @endif

                  <div class="card p-4 mt-1">
                  <h6 class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">The Market</h6>
                    @php echo html_entity_decode($ent->the_market); @endphp
                  </div>

               <div class="card mt-1 pl-4 pr-4 pt-3 pb-1 " ><h6 class=" p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Financial</h6></div>
                 <div class="d-flex">
                    <div class="col-lg-6" style="padding: 0px 0px">
                    <div  class="table-responsive card p-2">
                  <caption> <p style="font-size:14px;font-weight:bold;">Initial Investement</p></caption>
                       <table class="table tabel-sm  a">
                       <thead>
                           <tr>
                              <th class="font-weight-bold">Expenses</th>
                              <th class="font-weight-bold">Amount</th>
                            </tr>
                        </thead>    
                           <tbody>                           
                      
                            <tr>
                             <td class="font-weight-bold">Technology</td>
                             <td>{{'$'.number_format($ent->intial_technology, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                               <td class="font-weight-bold">Machinery</td>
                             <td>{{'$'.number_format($ent->intial_machinery, 2, '.', ',')}}</td>
                            </tr>
                            
                              @if(!empty($ent->other_name1))
                              <tr>
                             <td class="font-weight-bold">{{$ent->other_name1}}</td>
                             <td>{{'$'.number_format($ent->intial_other1, 2, '.', ',')}}</td>                            
                            </tr>
                            @endif
                            @if(!empty($ent->other_name2))
                              <tr>
                             <td class="font-weight-bold">{{$ent->other_name2}}</td>
                             <td>{{'$'.number_format($ent->intial_other2, 2, '.', ',')}}</td>
                            </tr>
                            @endif
                            @if(!empty($ent->other_name3))
                              <tr>
                             <td class="font-weight-bold">{{$ent->other_name3}}</td>
                             <td>{{'$'.number_format($ent->intial_other3, 2, '.', ',')}}</td>
                            </tr>
                            @endif
                            <tr>
                             <td class="font-weight-bold">Total</td>
                             <td>

                              @php 
                                $total=$ent->intial_technology+
                                $ent->intial_machinery+
                                $ent->intial_other1+
                                $ent->intial_other2+
                                $ent->intial_other3;
                            @endphp
                          {{'$'.number_format($total, 2, '.', ',')}}
                               </td>
                            </tr>
 
                            </tbody>
                         </table>
                   </div>
                 </div>
               <div class="col-lg-6"  style="padding: 0px 0px">        
                <div  class="table-responsive card p-2">
                  <caption><p style="font-size:14px;font-weight:bold;">Operational cost</p></caption>
                       <table class="table tabel-sm  a">
                          <thead>
                              <tr>
                              <th class="font-weight-bold">Expenses</th>
                              <th class="font-weight-bold">Amount</th>
                            </tr>
                            
                          </thead>
                           <tbody>                         
                            <tr>
                              <td  class="font-weight-bold">Payroll</td>
                             <td>{{'$'.number_format($ent->operation_payroll, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                             <td class="font-weight-bold">Operation cost</td>
                             <td>{{'$'.number_format($ent->operation_operation_cost, 2, '.', ',')}}</td>
                            </tr>
                
                              <tr>
                             <td class="font-weight-bold">Marketing</td>
                             <td>{{'$'.number_format($ent->operation_marketing, 2, '.', ',')}}</td>
                            </tr>
                              @if(!empty($ent->other_name1))
                              <tr>
                            <td class="font-weight-bold">{{$ent->other_name4}}</td>
                             <td>{{'$'.number_format($ent->operation_other1, 2, '.', ',')}}</td>               
                            </tr>
                            @endif
                            @if(!empty($ent->other_name2))
                              <tr>
                             <td class="font-weight-bold">{{$ent->other_name5}}</td>
                             <td>{{'$'.number_format($ent->operation_other2, 2, '.', ',')}}</td>
                            </tr>
                            @endif
                            @if(!empty($ent->other_name3))
                              <tr>
                              <td class="font-weight-bold">{{$ent->other_name6}}</td>
                             <td>{{'$'.number_format($ent->operation_other3, 2, '.', ',')}}</td>
                            </tr>
                            @endif
                            <tr>
                             <td class="font-weight-bold">Total</td>
                             <td>
                           @php 
                                $total1=$ent->operation_payroll+
                                $ent->operation_operation_cost+
                                $ent->operation_marketing+
                                $ent->operation_other1+
                                $ent->operation_other2+
                                $ent->operation_other3;
                            @endphp
                          {{'$'.number_format($total1, 2, '.', ',')}}
                             </td>
                            </tr>
 
 
                            </tbody>
                         </table>
                   </div>
                 </div>
              
               </div>

              <div class="d-flex" >
                    <div class="col-lg-6" style="padding: 0px 0px">
                    <div  class="table-responsive card p-2">
                  <caption><p style="font-size:14px;font-weight:bold;">Profitability Analysis</p></caption>
                       <table class="table tabel-sm muted-bordered-table  a muted-bordered-table">
                      <thead>
                           <tr>
                              <th class="font-weight-bold">Expenses</th>
                              <th class="font-weight-bold">Amount</th>
                            </tr>
                        </thead>    
                           <tbody>
                           
                           <tr>
                             <td colspan="2" class="text-white" style="background-color: #6c757d">First Year</td>
                           </tr>
                            <tr>
                             <td class="font-weight-bold">Fixed cost per unit</td>
                             <td>{{'$'.number_format($ent->f_fixed_cost_per_unit, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                             <td class="font-weight-bold">Variable cost per unit</td>
                             <td>{{'$'.number_format($ent->f_variable_cost_per_unit, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                             <td class="font-weight-bold">Profit margin per unit</td>
                             <td>{{'$'.number_format($ent->f_profit_margin_per_unit, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                             <td class="font-weight-bold">Amount of sales annually</td>
                             <td>{{'$'.number_format($ent->f_amount_of_sales_annually, 2, '.', ',')}}</td>
                            </tr>
                              <tr>
                             <td class="font-weight-bold">Total cost per unit</td>
                             <td>{{'$'.number_format($ent->f_total_cost_per_unit, 2, '.', ',')}}</td>
                            </tr>
                              <tr>
                             <td class="font-weight-bold">Price per Unit</td>
                             <td>{{'$'.number_format($ent->f_price_per_unit, 2, '.', ',')}}</td>
                            </tr>
                             

                           <tr>
                             <td colspan="2" colspan="2" class="text-white" style="background-color: #6c757d">Second Year</td>
                           </tr>
                            <td class="font-weight-bold">Fixed cost per unit</td>
                             <td>{{'$'.number_format($ent->s_fixed_cost_per_unit, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                             <td class="font-weight-bold">Variable cost per unit</td>
                             <td>{{'$'.number_format($ent->s_variable_cost_per_unit, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                             <td class="font-weight-bold">Profit margin per unit</td>
                             <td>{{'$'.number_format($ent->s_profit_margin_per_unit, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                             <td class="font-weight-bold">Amount of sales annually</td>
                             <td>{{'$'.number_format($ent->s_amount_of_sales_annually, 2, '.', ',')}}</td>
                            </tr>
                              <tr>
                             <td class="font-weight-bold">Total cost per unit</td>
                             <td>{{'$'.number_format($ent->s_total_cost_per_unit, 2, '.', ',')}}</td>
                            </tr>
                              <tr>
                             <td class="font-weight-bold">Price per Unit</td>
                             <td>{{'$'.number_format($ent->s_price_per_unit, 2, '.', ',')}}</td>
                            </tr>
                        
                            <tr>
                            <td colspan="2" colspan="2" class="text-white" style="background-color: #6c757d">Third Year</td>                          
                            </tr>
                             <td class="font-weight-bold">Fixed cost per unit</td>
                             <td>{{'$'.number_format($ent->t_fixed_cost_per_unit, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                             <td class="font-weight-bold">Variable cost per unit</td>
                             <td>{{'$'.number_format($ent->t_variable_cost_per_unit, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                             <td class="font-weight-bold">Profit margin per unit</td>
                             <td>{{'$'.number_format($ent->t_profit_margin_per_unit, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                             <td class="font-weight-bold">Amount of sales annually</td>
                             <td>{{'$'.number_format($ent->t_amount_of_sales_annually, 2, '.', ',')}}</td>
                            </tr>
                              <tr>
                             <td class="font-weight-bold">Total cost per unit</td>
                             <td>{{'$'.number_format($ent->t_total_cost_per_unit, 2, '.', ',')}}</td>
                            </tr>
                              <tr>
                             <td class="font-weight-bold">Price per Unit</td>
                             <td>{{'$'.number_format($ent->t_price_per_unit, 2, '.', ',')}}</td>
                            </tr>
                            

                            </tbody>
                         </table>
                   </div>
                 </div>
               <div class="col-lg-6"  style="padding: 0px 0px">        
                <div  class="table-responsive card p-2">
                  <caption ><p style="font-size:14px;font-weight:bold;">Annual Revenue</p></caption>
                       <table class="table tabel-sm  a">
                           <thead>
                              <tr>
                              <th class="font-weight-bold">Expenses</th>
                              <th class="font-weight-bold">Amount</th>
                            </tr>
                            
                          </thead>
                           <tbody>                         
                            
                            <tr>
                             <td colspan="2"  class="text-white" style="background-color: #6c757d">First Year </td>
                            </tr>

                            <tr>
                             <td class="font-weight-bold">Number of products sold</td>
                             <td>{{$ent->f_number_of_products_sold}}</td>                           
                            </tr>
                            <tr>
                             <td class="font-weight-bold">Price per sale unit</td>
                             <td>{{'$'.number_format($ent->f_price_per_sale_unit, 2, '.', ',')}}</td>                       
                            </tr>
                            <tr>
                             <td class="font-weight-bold">Number of customers</td>
                             <td>{{$ent->f_number_of_customers}}</td>                                                  
                            </tr>

                            <tr>
                             <td colspan="2"  class="text-white" style="background-color: #6c757d">Second Year </td>
                            </tr>
                            
                             <tr>
                             <td class="font-weight-bold">Number of products sold</td>
                             <td>{{$ent->s_number_of_products_sold}}</td>                           
                            </tr>
                            <tr>
                             <td class="font-weight-bold">Price per sale unit</td>
                             <td>{{'$'.number_format($ent->s_price_per_sale_unit, 2, '.', ',')}}</td>                       
                            </tr>
                            <tr>
                             <td class="font-weight-bold">Number of customers</td>
                             <td>{{$ent->s_number_of_customers}}</td>                                                  
                            </tr>
                              <tr>
                             <td colspan="2" class="text-white" style="background-color: #6c757d">Third Year </td>
                            </tr>
                             <tr>
                             <td class="font-weight-bold">Number of products sold</td>
                             <td>{{$ent->t_number_of_products_sold}}</td>                           
                            </tr>
                            <tr>
                             <td class="font-weight-bold">Price per sale unit</td>
                             <td>{{'$'.number_format($ent->t_price_per_sale_unit, 2, '.', ',')}}</td>                       
                            </tr>
                            <tr>
                             <td class="font-weight-bold">Number of customers</td>
                             <td>{{$ent->t_number_of_customers}}</td>                                                  
                            </tr>

 
                            </tbody>
                         </table>
                   </div>
                 </div>
              
           </div>

         <h6></h6>      
        <div class="card p-4">
            <canvas id="mixed-chart" width="800" height="450"></canvas>
        </div>

        <div class="card p-4 mt-1">
          <h6 class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff">Risk Analysis</h6>
            <div class="table-responsive ">
          <table class="table table-bordered table-sm table_1">
            @php echo html_entity_decode($ent->risk_analysis)@endphp
          </table>
        </div>
        </div>

        
         <div class="card p-4 mt-1">
          <h6 class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff">Business Trends</h6>
            <div class="table-responsive m-t-30">
                 <table class="table  table-bordered ">
                  @php echo html_entity_decode($ent->busniess_trends)@endphp

                 </table>       
               </div>
        </div>


        <div class="card p-4 mt-1">
          <h6 class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff" >Competitive Advantages</h6>
            <div class="table-responsive m-t-30">
             <table class="table table-bordered  text-center table-sm">
                    <thead>
                    <tr>
                        <th width="1" rowspan="3" style="vertical-align:baseline"> Compititors</th>
                        <th colspan="10">Advantage</th>
                    </tr>
                    <tr>
                        <th >@if(!empty($ent->advan_1))  @php echo html_entity_decode($ent->advan_1); @endphp @else {{'N/A'}} @endif </th>
                        <th >@if(!empty($ent->advan_2))  @php echo html_entity_decode($ent->advan_2); @endphp @else {{'N/A'}} @endif</th>
                        <th >@if(!empty($ent->advan_3))  @php echo html_entity_decode($ent->advan_3); @endphp @else {{'N/A'}} @endif</th>
                        <th >@if(!empty($ent->advan_4))  @php echo html_entity_decode($ent->advan_4); @endphp @else {{'N/A'}} @endif</th>
                        <th >@if(!empty($ent->advan_5))  @php echo html_entity_decode($ent->advan_5); @endphp @else {{'N/A'}} @endif</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>@if(!empty($ent->comp_1)) @php echo html_entity_decode($ent->comp_1); @endphp @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_1)) {{$ent->ad_1}} @else {{'N/A'}} @endif </td>
                        <td>@if(!empty($ent->ad_2)) {{$ent->ad_2}} @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_3)) {{$ent->ad_3}} @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_4)) {{$ent->ad_4}} @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_5)) {{$ent->ad_5}} @else {{'N/A'}} @endif</td>
                    </tr>
                    <tr>
                        <td>@if(!empty($ent->comp_2)) @php echo html_entity_decode($ent->comp_2); @endphp @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_6)) {{$ent->ad_6}} @else {{'N/A'}} @endif </td>
                        <td>@if(!empty($ent->ad_7)) {{$ent->ad_7}} @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_8)) {{$ent->ad_8}} @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_9)) {{$ent->ad_9}} @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_10)) {{$ent->ad_10}} @else {{'N/A'}} @endif</td>
                    </tr>
                    <!-- This is our clonable table line -->
                    <tr>
                        <td >@if(!empty($ent->comp_3)) @php echo html_entity_decode($ent->comp_3); @endphp @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_11)) {{$ent->ad_11}} @else {{'N/A'}} @endif </td>
                        <td>@if(!empty($ent->ad_12)) {{$ent->ad_12}} @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_13)) {{$ent->ad_13}} @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_14)) {{$ent->ad_14}} @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_15)) {{$ent->ad_15}} @else {{'N/A'}} @endif</td>

                    </tr>
                    <!-- This is our clonable table line -->
                    <tr>
                        <td>@if(!empty($ent->comp_4)) @php echo html_entity_decode($ent->comp_4); @endphp @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_16)) {{$ent->ad_16}} @else {{'N/A'}} @endif </td>
                        <td>@if(!empty($ent->ad_17)) {{$ent->ad_17}} @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_18)) {{$ent->ad_18}} @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_19)) {{$ent->ad_19}} @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_20)) {{$ent->ad_20}} @else {{'N/A'}} @endif</td>
                    <tr>
                        <td>@if(!empty($ent->comp_5)) @php echo html_entity_decode($ent->comp_5); @endphp @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_21)) {{$ent->ad_21}} @else {{'N/A'}} @endif </td>
                        <td>@if(!empty($ent->ad_22)) {{$ent->ad_22}} @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_23)) {{$ent->ad_23}} @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_24)) {{$ent->ad_24}} @else {{'N/A'}} @endif</td>
                        <td>@if(!empty($ent->ad_25)) {{$ent->ad_25}} @else {{'N/A'}} @endif</td>
                    </tr>
                    </tbody>
                </table>
                      
                 </div>
           </div>

               </div>




            </div>
         </div>

      </div>




<!-- busniess model -->
    <div class="container  mt-1 ">
      <div class="card p-0 m-0 w-100 shadow-lg">
          <h6 class="p-2 pb-0" >Business Model Canvas </h6>
      </div>
               <div class="d-flex mt-1">
                 <div class="col-md-2 pr-1 p-0">
                   <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">1.Key Partners</div>
                   <div class="bg-white p-4" style="height:27em;overflow-y:scroll;">@php echo html_entity_decode($ent->Key_Partners)@endphp</div>

                 </div>
                 <div class="col-md-3 pr-1 p-0 ">
                   <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">2.Key Activities</div>
                   <div class="bg-white p-4" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($ent->Key_Activities)@endphp</div>
                   <!--  -->
                  <div class="btn btn-success form-control  pt-2 pb-2 mb-1 text-center model-text">6.Key Resources</div>
                  <div class="bg-white p-4" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($ent->Key_Resources)@endphp</div> 

                 </div>
                 <div class="col-md-2 p-0 pr-1">
                   <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text" >3.Value Propositions</div>
                  <div class="bg-white p-4" style="height:27em;overflow-y:scroll;">@php echo html_entity_decode($ent->Value_Propositions)@endphp</div> 
                   <!--  -->
                  
                 </div>
                 <div class="col-md-3  pr-1 p-0">
                   <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text" >4.Customer Relationships</div>
                     <div class="bg-white p-4" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($ent->Customer_Relationships)@endphp</div> 
       
                    <!--  -->
                     <div class="btn btn-success form-control pl-1 pt-2 pb-2 mb-1 text-center model-text">7.Channels</div>
                     <div class="bg-white p-4" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($ent->Channels)@endphp</div> 


                 </div>
                   <div class="col-md-2  pr-1 p-0">
                   <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">5.Customer Segments</div>
                     <div class="bg-white p-4" style="height:27em;overflow-y:scroll;">@php echo html_entity_decode($ent->Customer_Segments)@endphp</div> 
                
                 </div>
               </div>   
               <div class="d-flex">
                 <div class="col-md-6 " style="padding:0px 0px">
                    <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">8.Cost Structure</div>
                     <div class="bg-white p-4" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($ent->Cost_Structure)@endphp</div> 
                 </div>
                 <div class="col-md-6 " style="padding:0px 5px">
                     <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">9.Revenue Streams</div>
                     <div class="bg-white p-4" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($ent->Revenue_Streams)@endphp</div> 
                 </div>
                 
               </div>
          </div>

<!-- implement plan -->

        <div class="container mt-1 mb-2"> 
           <div class="card w-100 shadow-lg" style="padding:0px 0px">
          <h6 class="p-2 ">Implementation Plan</h6>
        </div>


            <div class="d-flex mt-1">
            <div class="col-md-4" style="padding:0px 2px"> 
                   <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text phase">phase three</div>
                   <div class="bg-white p-4" >
                    @php echo html_entity_decode($ent->phase_first)@endphp
                    <hr>
                    <label class="pb-1">Timeline</label>
                     <label> <strong>{{ $ent->number_1}}&nbsp;{{ $ent->type_1}}</strong></label>
                    </div> 
                </div>

         
                <div class="col-md-4"style="padding: 0px 2px" >
                   <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">Phase tow</div>
                   <div class="bg-white p-4" >
                    @php echo html_entity_decode($ent->phase_second)@endphp
                    <hr>
                    <label class="pb-1">Timeline</label>
                     <label> <strong>{{ $ent->number_2}}&nbsp;{{ $ent->type_2}}</strong>  </label>
                    </div> 
                </div>

          
               <div class="col-md-4 " style="padding: 0px 2px">
                   <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text phase">phase three 
                   </div>
                   <div class="bg-white p-4" >
                    @php echo html_entity_decode($ent->phase_third)@endphp
                    <hr>
                    <label class="pb-1">Timeline</label>
                     <label> <strong>{{ $ent->number_3}}&nbsp;{{ $ent->type_3}}</strong></label>
                     </div>
                </div>

                </div>

                 <div class="card mt-2 shadow-lg" style="margin:0px 0px">
                  <h6 class="p-2">Investment Management</h6>
                 </div>

                <div class="d-flex">
                  <div class="col-lg-6 border-right" style="padding:0px 0px">
                    <div class="bg-white  p-3 mt-2"  style="text-align: justify;text-justify: inter-word">
                    <h6  class="mt-2 p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">investment terms</h6>
                        @php echo html_entity_decode($ent->define_your_investment_terms)@endphp
                  </div>
                </div>
                  <div class="col-lg-6" style="padding:0px 0px">
                    <div class="bg-white  p-3 mt-2"  style="text-align: justify;text-justify: inter-word">
                      <h6 class="mt-2 p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;"> Investment managment plan</h6>
                        @php echo html_entity_decode($ent->plan_for_management_of__investment)@endphp
                    </div>
                  </div>
                   
                </div> 


                <div class="container mt-1 mb-1 p-0">
                    <div class="col-lg-12" style="padding: 0px 0px">
                    <div class="card p-3">
                      <h6 class="p-2 mb-3" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">The Team<h6>
                        @foreach($team_member as $team)   
  
                        <div class="row  mb-3 txt-center pr-5">
                        <div class="col-md-4 col-lg-3 d-flex flex-column justify-content-start align-items-center mb-2">
                        <img src="{{url('storage/app')}}/{{$team->photo}}" alt="" class="rounded-circle " style="height:85px;width:85px;">
                            <h6 class="mt-3">{{$team->full_name}}</h6>
                            <h6 class="mt-3">{{$team->position}}</h6>

                        </div>
                        <div class="col-md-8 col-lg-9">
                            <p>
                               @php echo html_entity_decode($team->summary) @endphp
                            </p>
                        </div>
                    </div><hr>

                  @endforeach
   
              </div>
            </div>
          </div>

    </div>   

<!-- dataroom -->
    <div class="container mb-4">
            <div class="col-lg-12" style="padding: 0px 0px">

                  <div id="faq" class="faq">
                     <div class="accordion " id="accordionExample">
                        <div class="card p-0 bg-white p-4">
                            <h6>Data Room</h6><hr>
                           <div class="card-header bg-white" id="headingThree">
                              <h2 class="mb-0 bg-white">
                                 <button class="btn  collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <label style="color:#21cebf">
                                    <i class="mdi mdi-chevron-right" style="font-size:20px"></i>
                                    <i class="mdi mdi-folder" style="font-size:20px"></i>  Pitch deck
                                    </label>  
                                  </a>
                              </h2>
                           </div>
                           <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                              data-parent="#accordionExample">
                              <div class="card-body pl-5">
                  
                                  @if(!empty($ent->pitch_presentation))  <a target="_blank" href="{{url('storage/app')}}/{{$ent->pitch_presentation}}"> <i class="mdi mdi-file" style="font-size:20px"></i>{{'picth deck'}}</a>
                                  @endif
                              </div>
                           </div>
                      <div class="card-header bg-white" id="headingThree">
                              <h2 class="mb-0 bg-white">
                                 <button class="btn  collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapsef" aria-expanded="false" aria-controls="collapsef">
                                    <label style="color:#21cebf">
                                    <i class="mdi mdi-chevron-right" style="font-size:20px"></i>
                                    <i class="mdi mdi-folder" style="font-size:20px"></i>  Tazkira/Passport
                                    </label>  
                                  </a>
                              </h2>
                           </div>
                           <div id="collapsef" class="collapse" aria-labelledby="headingThree"
                              data-parent="#accordionExample">
                              <div class="card-body pl-5 ">
                  
                                  @if(!empty($ent->tazkira))  <a target="_blank" href="{{url('storage/app')}}/{{$ent->tazkira}}"> <i class="mdi mdi-file" style="font-size:20px"></i>{{'Tazkira/Passport'}}</a>
                                  @endif
                              </div>
                           </div>
                        </div>
                     </div>
            </div>
          </div>
       </div>   

  @php

            $producationamount1=$ent->f_number_of_products_sold;
            $price1=$ent->f_price_per_sale_unit;
            $totalcost1=$ent->f_fixed_cost_per_unit + $ent->f_variable_cost_per_unit;
            $totalproductioncost1=$producationamount1*$totalcost1;
            $totalsalesrevenue1=$producationamount1*$price1;
//----------------------------------------------

            $producationamount2=$ent->s_number_of_products_sold;
            $price2=$ent->s_price_per_sale_unit;
            $totalcost2=$ent->s_fixed_cost_per_unit + $ent->s_variable_cost_per_unit;
            $totalproductioncost2=$producationamount2*$totalcost2;
            $totalsalesrevenue2=$producationamount2*$price2;
       
//-------------------------------------------------
            $producationamount3=$ent->t_number_of_products_sold;
            $price3=$ent->t_price_per_sale_unit;
            $totalcost3=$ent->t_fixed_cost_per_unit + $ent->t_variable_cost_per_unit;
            $totalproductioncost3=$producationamount3*$totalcost3;
            $totalsalesrevenue3=$producationamount3*$price3;
// --------------------------       
$intialinvest=$ent->operation_payroll+
$ent->operation_operation_cost+
$ent->intial_technology+
$ent->intial_machinery+
$ent->intial_online_presence+
$ent->intial_other1+
$ent->intial_other2+
$ent->intial_other3;


     @endphp 
@endsection
@section('jquery')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script type="text/javascript">
  new Chart(document.getElementById("mixed-chart"), {
    type: 'bar',
    data: {
      labels: ["First year", "Second year", "Third year"],
      datasets: [{
          label: "Sales Revenue",
          type: "line",
          borderColor: "#8e5ea2",
          data: [0,<?php echo $totalsalesrevenue1 ;?>,<?php echo $totalsalesrevenue2; ?>,
          <?php echo $totalsalesrevenue3; ?>],
          fill: false
        }, {
          label: "Startup Cost",
          type: "line",
          borderColor: "#21cebe",
          data: [<?php echo $intialinvest;?>,<?php echo $intialinvest;?>,<?php echo $intialinvest;?>,<?php echo $intialinvest;?>],
          fill: false
        },{
          label: "Total cost",
          type: "line",
          borderColor: "#3e95cd",
         data: [<?php echo $intialinvest;?>,<?php echo $totalproductioncost1;?>,<?php echo $totalproductioncost2?>,<?php echo 
          $totalproductioncost3;?>],
          fill: false
        },
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Break-Event Point '
      },
      legend: { display: false }
    }
});
</script>

<script type="text/javascript">
  $('td').attr('contenteditable',false);
  $('card').addClass('shadow-lg');
</script>

@endsection