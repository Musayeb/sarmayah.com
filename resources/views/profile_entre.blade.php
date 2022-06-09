@extends('master')
@section('css')
    <link href="{{asset('public/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
@endsection
@section('content')



<div class="container mt-5">
  <div class="row">
    <div class="col-md-8">
   <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Busniess</li>
            <li class="breadcrumb-item active" aria-current="page">profile</li>

         </ol>
      </nav>
    </div>
   </div> 
</div>


<div class="main-page">
       <div class="container">
          <div class="row">
               <div class="col-lg-8">

                  <div id="overview" class="align-items-center">
                     <div class="d-flex">
                        <label class="profile-pict" for="profile_image" style="">
                        <img src="{{url('storage/app')}}/{{($ent->logo)}}" style="border-radius:50%;height:50px;width:50px" 
                           class="img-fluid img-circle" >
                        </label>                     

                        <div class="profile-name">
                           <span class="user-status">
                         <a href="#" class="seller-link" style="position:absolute;top:18px;margin-left:12px">{{$ent->startup_name}} &nbsp;   
                          @if($ent->catagory=="IDEA")<span class="badge badge-warning">{{$ent->catagory}}</span>@endif
                       </a>
                           </span>

                           <!-- <div class="seller-level">Level 1 Seller</div> -->
                        </div>
                     </div>
                     <div class="user-info d-flex">
                        <span class="user-info-rating d-flex">
                           <div class="star-rating-s15-wrapper">
                              </span>
                           </div>

                     </div>
                  </div>
                  <div class="slider mt-4">
                     <div id="aniimated-thumbnials" class="slider-for slick-slider-single">
                        <a href="https://www.youtube.com/embed/e1UDOvAXT-I">
                        <!-- <img class="img-fluid" src="{{url('public/web_assist/images/list/v1.png')}}" /> -->
                        @if(!$ent->pitch_video_link=="") 
                         @php $step1=explode('v=', $ent->pitch_video_link);
                                $step2 =explode('&',$step1[1]);
                                $vedio_id = $step2[0]; @endphp

                         <iframe  style="height:350px;width:100%" src='https://www.youtube.com/embed/{{ $vedio_id}}' frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;"></iframe> 
                         @else  <img src="{{url('storage/app')}}/{{$ent->logo}}" style="height:350px;width:100%">  @endif

                      </a>
                     </div>
                  </div>


        
                  <div class="profile-card mb-0">                 
                     <div class="stats-desc mb-0">                   
                        <article class="seller-desc mb-0">
                          <table class="table table-sm">
                           <th colspan="5" class="h4">About Busniess </th>
                            <tr>
                               <td >Idea name</td>
                               <td>{{$ent->startup_name}}</td>
                            </tr>

                             <tr>
                                <td >Rounds of investment</td>
                                <td>{{$ent->round_invest}}</td>
                            </tr>
                             <tr>
                                 <td >Minimum of the amount of investment</td>
                                <td>{{$ent->mainimum_amount_looking}}</td>
                            </tr>
                             <tr>
                                 <td > Potential establishment date</td>
                                <td>{{$ent->establishment_date}}</td>
                            </tr>
                              <tr>
                                 <td >Business sector</td>
                                <td>{{$ent->ent_industry_sector}}</td>
                            </tr>
                              <tr>
                                 <td > Needed team</td>
                                <td>{{$ent->team_size}}</td>
                            </tr>
                          </table>
                        </article>
                     </div>
                  </div> 
                  <h6 class="p-1">Elevator Pitch</h6>
                  <div id="description" class="description card p-4">
                     @php echo html_entity_decode($ent->elavator_picth); @endphp
                  </div>
                   <h6 class="p-1">Problem </h6>
                  <div id="description" class="description card p-4">
                     @php echo html_entity_decode($ent->problem_sulotion); @endphp
                  </div>
                   <h6 class="p-1">Solution</h6>
                    <div id="description" class="description card p-4">
                     @php echo html_entity_decode($ent->problem_sulotion); @endphp
                  </div>
                  <h6 class="p-1 div_market_position">Market Positioning Chart</h6>
                  <div class="text-center p-5 bg-white div_market_position" style="height:500px;">
                     <div class="img-fluid  div_market_position " style="position:absolute;height:500px;width:620px;background:transparent url('{{asset('public/web_assist/images/positioning.png')}}') no-repeat top /cover;background-size: contain;">

                       @if(!empty($ent->more_convenient_less_expensive)||!empty($ent->less_convenient_less_expensive))
                      <small style="position:relative;top:22%;left:3%;font-size:12px;display:inline;" class="btn btn-success market_b">
                          {{$ent->more_convenient_more_expensive}}</small>
                      <small style="position:relative;top:22%;left:14%;font-size:12px;display:inline;" class="btn btn-success market_b">
                            {{$ent->more_convenient_less_expensive}}</small>

                      <small style="position:relative;top:40%;left:-15%;font-size:12px;display:inline;" class="btn btn-success market_b">
                         {{$ent->less_convenient_more_expensive}}</small>

                      <small style="position:relative;top:40%;left:-4%;font-size:12px;display:inline;" class="btn btn-success market_b">
                           {{$ent->less_convenient_less_expensive}}</small>
                       @endif

                      </div>
                  </div>
                  <h6 class="p-1">Market Positioning Summary</h6>
                  <div class="card p-4">
                    @php echo html_entity_decode($ent->market_position_summary); @endphp

                  </div>
               <h6 class="p-1">Financial</h6>
                 <div class="row p-3" >
                    <div class="col-lg-6" style="padding: 0px 0px">
                    <div  class="table-responsive card p-2">
                  <caption>Initial Investement</caption>
                       <table class="table tabel-sm  a">
                       <thead>
                           <tr>
                              <th>Expenses</th>
                              <th>Amount</th>
                            </tr>
                        </thead>    
                           <tbody>
                          
                            <tr>
                              <td >payroll</td>
                             <td>{{'$'.number_format($ent->intial_payroll, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                             <td>Operation cost</td>
                             <td>{{'$'.number_format($ent->intial_operation_cost, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                             <td>Technology</td>
                             <td>{{'$'.number_format($ent->intial_technology, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                               <td>Machinery</td>
                             <td>{{'$'.number_format($ent->intial_machinery, 2, '.', ',')}}</td>
                            </tr>
                              <tr>
                             <td>Online presence</td>
                             <td>{{'$'.number_format($ent->intial_online_presence, 2, '.', ',')}}</td>
                            </tr>
                              @if(!empty($ent->other_name1))
                              <tr>
                             <td>{{$ent->other_name1}}</td>
                             <td>{{'$'.number_format($ent->intial_other1, 2, '.', ',')}}</td>                            
                            </tr>
                            @endif
                            @if(!empty($ent->other_name2))
                              <tr>
                             <td>{{$ent->other_name2}}</td>
                             <td>{{'$'.number_format($ent->intial_other2, 2, '.', ',')}}</td>
                            </tr>
                            @endif
                            @if(!empty($ent->other_name3))
                              <tr>
                             <td>{{$ent->other_name3}}</td>
                             <td>{{'$'.number_format($ent->intial_other3, 2, '.', ',')}}</td>
                            </tr>
                            @endif
                            <tr>
                             <td>Total</td>
                             <td>

                              @php 
                                $total=$ent->intial_payroll+
                                $ent->intial_operation_cost+
                                $ent->intial_technology+
                                $ent->intial_machinery+
                                $ent->intial_online_presence+
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
                  <caption>Operational cost</caption>
                       <table class="table tabel-sm  a">
                          <thead>
                              <tr>
                              <th>Expenses</th>
                              <th>Amount</th>
                            </tr>
                            
                          </thead>
                           <tbody>                         
                             <tr>
                              <td >payroll</td>
                             <td>{{'$'.number_format($ent->intial_payroll, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                             <td>Operation cost</td>
                             <td>{{'$'.number_format($ent->intial_operation_cost, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                              <td>Technology</td>
                             <td>{{'$'.number_format($ent->operation_technology, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                              <td>Machinery</td>
                             <td>{{'$'.number_format($ent->operation_machinery, 2, '.', ',')}}</td>
                            </tr>
                              <tr>
                             <td>Marketing</td>
                             <td>{{'$'.number_format($ent->operation_marketing, 2, '.', ',')}}</td>
                            </tr>
                              @if(!empty($ent->other_name1))
                              <tr>
                            <td>{{$ent->other_name4}}</td>
                             <td>{{'$'.number_format($ent->operation_other1, 2, '.', ',')}}</td>               
                            </tr>
                            @endif
                            @if(!empty($ent->other_name2))
                              <tr>
                             <td>{{$ent->other_name5}}</td>
                             <td>{{'$'.number_format($ent->operation_other2, 2, '.', ',')}}</td>
                            </tr>
                            @endif
                            @if(!empty($ent->other_name3))
                              <tr>
                              <td>{{$ent->other_name6}}</td>
                             <td>{{'$'.number_format($ent->operation_other3, 2, '.', ',')}}</td>
                            </tr>
                            @endif
                            <tr>
                             <td>Total</td>
                             <td>
                           @php 
                                $total1=$ent->operation_payroll+
                                $ent->operation_operation_cost+
                                $ent->operation_technology+
                                $ent->operation_machinery+
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

                   <div class="row p-3" >
                    <div class="col-lg-6" style="padding: 0px 0px">
                    <div  class="table-responsive card p-2">
                  <caption>Profitability Analysis</caption>
                       <table class="table tabel-sm  a">
                       <thead>
                           <tr>
                              <th>Expenses</th>
                              <th>Amount</th>
                            </tr>
                        </thead>    
                           <tbody>
                          
                            <tr>
                             <td>Fixed cost per unit</td>
                             <td>{{'$'.number_format($ent->f_fixed_cost_per_unit, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                             <td>Variable cost per unit</td>
                             <td>{{'$'.number_format($ent->f_variable_cost_per_unit, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                             <td>Profit margin per unit</td>
                             <td>{{'$'.number_format($ent->f_profit_margin_per_unit, 2, '.', ',')}}</td>
                            </tr>
                            <tr>
                             <td>Amount of sales annually</td>
                             <td>{{'$'.number_format($ent->f_amount_of_sales_annually, 2, '.', ',')}}</td>
                            </tr>
                              <tr>
                             <td>Total cost per unit</td>
                             <td>{{'$'.number_format($ent->f_total_cost_per_unit, 2, '.', ',')}}</td>
                            </tr>
                              <tr>
                             <td>Price per Unit</td>
                             <td>{{'$'.number_format($ent->f_price_per_unit, 2, '.', ',')}}</td>
                            </tr>
                              <tr>
                             <td>Total sales revenue annually</td>
                             <td>{{'$'.number_format($ent->f_total_sales_revenue_annually, 2, '.', ',')}}</td>
                            </tr>
 
                            </tbody>
                         </table>
                   </div>
                 </div>
               <div class="col-lg-6"  style="padding: 0px 0px">        
                <div  class="table-responsive card p-2">
                  <caption>Monthly Revenue</caption>
                       <table class="table tabel-sm  a">
                          <thead>
                              <tr>
                              <th>Expenses</th>
                              <th>Amount</th>
                            </tr>
                            
                          </thead>
                           <tbody>                         

                            <tr>
                             <td>Number of products sold</td>
                             <td>{{$ent->f_number_of_products_sold}}</td>                           
                            </tr>
                            <tr>
                             <td>Price per sale unit</td>
                             <td>{{'$'.number_format($ent->f_price_per_sale_unit, 2, '.', ',')}}</td>                       
                            </tr>
                            <tr>
                             <td>Number of customers</td>
                             <td>{{$ent->f_number_of_customers}}</td>                                                  
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

        <div class="card p-4 mt-3">
          <h6>Risk Analysis</h6>
          <table class="table table-bordered table-sm table_1">
            @php echo html_entity_decode($ent->risk_analysis)@endphp
          </table>
        </div>
        
         <div class="card p-4 mt-3">
          <h6>Busniess Trends</h6>
            <div class="table-responsive m-t-30">
                 <table class="table  table-bordered ">
                     <thead>
                     <tr align="center">
                         <th width="1" rowspan="2"> impact</th>
                         <th colspan="5">Trends</th>
                     </tr>
                     <tr>
                         <th>{{'Social'}}</th>
                         <th>{{'Political'}}</th>
                         <th>{{'Security'}}</th>
                         <th>{{'Technological'}}</th>
                         <th>{{'Economical'}}</th>
                     </tr>
                     </thead>
                     <tbody>

                     <tr>
                         <th>{{'Favorable'}}</th>
                         <td>
                           {{$ent->social_f}}
                         </td>
                         <td>
                           {{$ent->plotical_f}}
                         
                         </td>
                         <td>
                            {{$ent->security_f}}
                         </td>
                         <td>
                            {{$ent->technology_f}}
                            
                         </td>
                         <td>
                           {{$ent->economic_f}}
                         </td>

                     </tr>

                     <tr>
                         <th>{{'Unfavorable'}}</th>
                           <td>
                           {{$ent->social_u}}
                         </td>
                         <td>
                           {{$ent->plotical_u}}
                         
                         </td>
                         <td>
                            {{$ent->security_u}}
                         </td>
                         <td>
                            {{$ent->technology_u}}
                            
                         </td>
                         <td>
                           {{$ent->economic_u}}
                         </td>

                     </tr>
                     <tr>
                         <th>{{'Further Analysis'}}</th>
                              <td>
                           {{$ent->social_fa}}
                         </td>
                         <td>
                           {{$ent->plotical_fa}}
                         
                         </td>
                         <td>
                            {{$ent->security_fa}}
                         </td>
                         <td>
                            {{$ent->technology_fa}}
                            
                         </td>
                         <td>
                           {{$ent->economic_fa}}
                         </td>

                     </tr>
                     </tbody>
                 </table>
                      
                 </div>
        </div>


         <div class="card p-4 mt-3">
          <h6>Competitive Advantages</h6>
            <div class="table-responsive m-t-30">
             <table class="table table-bordered table-responsive-md text-center table-sm">
                    <thead>
                    <tr>
                        <th width="1" rowspan="3"> Compititors</th>
                        <th colspan="10">Advantage</th>
                    </tr>
                    <tr>
                        <th >{{$ent->advan_1}}</th>
                        <th >{{$ent->advan_2}}</th>
                        <th >{{$ent->advan_3}}</th>
                        <th >{{$ent->advan_4}}</th>
                        <th >{{$ent->advan_5}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$ent->comp_1}}</td>
                        <td>{{$ent->ad_1}}</td>
                        <td>{{$ent->ad_2}}</td>
                        <td>{{$ent->ad_3}}</td>
                        <td>{{$ent->ad_4}}</td>
                        <td>{{$ent->ad_5}}</td>
                    </tr>
                    <tr>
                        <td>{{$ent->comp_2}}</td>
                        <td>{{$ent->ad_6}}</td>
                        <td>{{$ent->ad_7}}</td>
                        <td>{{$ent->ad_8}}</td>
                        <td>{{$ent->ad_9}}</td>
                        <td>{{$ent->ad_10}}</td>
                    </tr>
                    <!-- This is our clonable table line -->
                    <tr>
                        <td class="pt-3-half" >{{$ent->comp_3}}</td>
                       <td>{{$ent->ad_11}}</td>
                        <td>{{$ent->ad_12}}</td>
                        <td>{{$ent->ad_13}}</td>
                        <td>{{$ent->ad_14}}</td>
                        <td>{{$ent->ad_15}}</td>

                    </tr>
                    <!-- This is our clonable table line -->
                    <tr>
                        <td class="pt-3-half" >{{$ent->comp_4}}</td>
                         <td>{{$ent->ad_16}}</td>
                        <td>{{$ent->ad_17}}</td>
                        <td>{{$ent->ad_18}}</td>
                        <td>{{$ent->ad_19}}</td>
                        <td>{{$ent->ad_10}}</td>
                    <tr>
                        <td class="pt-3-half" >{{$ent->comp_5}}</td>
                       <td>{{$ent->ad_21}}</td>
                        <td>{{$ent->ad_22}}</td>
                        <td>{{$ent->ad_23}}</td>
                        <td>{{$ent->ad_24}}</td>
                        <td>{{$ent->ad_25}}</td>
                    </tr>
                    </tbody>
                </table>
                      
                 </div>
           </div>
    
         </div>


               <div class="col-lg-4 right">
                 <article class="bg-white mb-2 sticky">
           
                   <div class="p-3">
                      <h3 class="mb-4">{{$ent->startup_name}} {{$ent->company_name}}</h3>
                      <h6 class="text-muted p-2" style="height:220px;overflow-y:scroll;"> @php echo html_entity_decode($ent->elavator_picth)@endphp</h6>
                     <table class="table-sm">
                      <th>Investment</th>
                      <th>Revinue</th>
                      <th>Monthly cost</th>
                      <th>Raised</th>
                      <tr>
                         <td class="text-muted"></td>
                         <td class="text-muted"></td>
                         <td class="text-muted"></td>
                         <td class="text-muted" ></td>
                      </tr>
                   </table>
                
                   <div class="btn btn-success mt-4  form-control" style="height:50px" data-toggle="modal" data-target="#myModal">
                      <h5 style="line-height:30px">Interest to Invest   {{$ent->startup_name}}</h5>
                   </div>
                </div>
                </article>
              </div>
              
            </div>
         </div>
        </div>
     </div>

  </div>


















    <div class="container mt-4 p-4">
          <h6>Busniess Model Convas </h6>
               <div class="row ">
                 <div class="col-md-2 pr-1 p-0">
                   <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">1.Key Partners</div>
                   <div class="bg-white p-5" style="height:27em">@php echo html_entity_decode($ent->Key_Partners)@endphp</div>

                 </div>
                 <div class="col-md-3 pr-1 p-0 ">
                   <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">2.Key Activities</div>
                   <div class="bg-white p-5" style="height:12em">@php echo html_entity_decode($ent->Key_Activities)@endphp</div>
                   <!--  -->
                  <div class="btn btn-success form-control  pt-2 pb-2 mb-1 text-center model-text">6.Key Resources</div>
                  <div class="bg-white p-5" style="height:12em">@php echo html_entity_decode($ent->Key_Resources)@endphp</div> 

                 </div>
                 <div class="col-md-2 p-0 pr-1">
                   <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text" >3.Value Propositions</div>
                  <div class="bg-white p-5" style="height:27em">@php echo html_entity_decode($ent->Value_Propositions)@endphp</div> 
                   <!--  -->
                  
                 </div>
                 <div class="col-md-3  pr-1 p-0">
                   <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text" >4.Customer Relationships</div>
                     <div class="bg-white p-5" style="height:12em">@php echo html_entity_decode($ent->Customer_Relationships)@endphp</div> 
       
                    <!--  -->
                     <div class="btn btn-success form-control pl-1 pt-2 pb-2 mb-1 text-center model-text">7.Channels</div>
                     <div class="bg-white p-5" style="height:12em">@php echo html_entity_decode($ent->Channels)@endphp</div> 


                 </div>
                   <div class="col-md-2  pr-1 p-0">
                   <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">5.Customer Segments</div>
                     <div class="bg-white p-5" style="height:27em">@php echo html_entity_decode($ent->Channels)@endphp</div> 
                
                 </div>
               </div>   
               <div class="row ">
                 <div class="col-md-6 " style="padding:0px 0px">
                    <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">8.Cost Structure</div>
                     <div class="bg-white p-5" style="height:12em">@php echo html_entity_decode($ent->Cost_Structure)@endphp</div> 
                 </div>
                 <div class="col-md-6 " style="padding:0px 5px">
                     <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">9.Revenue Streams</div>
                     <div class="bg-white p-5" style="height:12em">@php echo html_entity_decode($ent->Revenue_Streams)@endphp</div> 
                 </div>
                 
               </div>


          </div>


          <div class="container"> 
          <h6>Implementation Plan</h6>
            <div class="row">
            <div class="col-md-3" style="padding:0px 5px"> 
                   <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text phase">phase three</div>
                   <div class="bg-white p-5" >
                    @php echo html_entity_decode($ent->phase_first)@endphp
                    <hr>
                    <label class="pb-1">Timeline</label>
                     <label> <strong>{{ $ent->number_1}}&nbsp;{{ $ent->type_1}}</strong></label>
                    </div> 
                </div>

         
                <div class="col-md-3 pr-1 p-0 ">
                   <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">Phase tow</div>
                   <div class="bg-white p-5" >
                    @php echo html_entity_decode($ent->phase_second)@endphp
                    <hr>
                    <label class="pb-1">Timeline</label>
                     <label> <strong>{{ $ent->number_2}}&nbsp;{{ $ent->type_2}}</strong>  </label>
                    </div> 
                </div>

          
               <div class="col-md-3 pr-1 p-0 ">
                   <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text phase">phase three 
                   </div>
                   <div class="bg-white p-5" >
                    @php echo html_entity_decode($ent->phase_third)@endphp
                    <hr>
                    <label class="pb-1">Timeline</label>
                     <label> <strong>{{ $ent->number_3}}&nbsp;{{ $ent->type_3}}</strong></label>
                     </div>
                </div>


                </div>
          </div>   







































    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                  <div id="faq" class="faq">
                     <h6>Data Room</h6>
                     <div class="accordion " id="accordionExample">
                        <div class="card p-0 bg-white">
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
                              <div class="card-body">
                                                        
                                  @if(!empty($ent->pitch_presentation))  <a target="_blank" href="{{url('storage/app')}}/{{$ent->pitch_presentation}}"> <i class="mdi mdi-file" style="font-size:20px"></i>{{$ent->startup_name.' '. 'picth deck'}}</a>

                                  @endif
                              </div>
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
  <script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
     @if(session()->has('error'))
                 <script>
    $.toast({
               heading: '{{session()->get("error")}}',
              // text: 'Use the predefined ones, or specify a custom position object.',
              position: 'top-right',
              loaderBg:'#28d7aa',
              icon: 'error',
              hideAfter: 6500, 
              stack: 6
            });
    </script>       
            @endif

   @if($errors->has('password') || $errors->has('invest_ammount'))
  <script>
  $(document).ready(function(){
    $('#myModal').modal('show');
  });
  </script>
  @endif
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
</script>

@endsection