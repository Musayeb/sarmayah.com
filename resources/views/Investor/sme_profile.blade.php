@extends('master')
 @section('title')
{{$ent->company_name}} - Sarmayah.com
 @endsection


@section('css')
    <link href="{{asset('public/assets/nodcopanye_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link href="{{asset('public/dist/scss/core/animation.scss')}}" rel="stylesheet">
@endsection
@section('styles')

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
.font-big{
  font-size:13px !important;
  text-align: start !important;
}
.card_border{
	border-radius:15px !important;
	border:2px solid rgb(145, 145, 145);
}
.max-height-lg{
	min-height:260px !important;
}
.table-custom td,th{
  max-width:100px !important;
  min-width:50px !important;
  font-size:12px ;
}
#table-custom__id{
  min-width:15px !important;
  max-width:50px !important;
  text-align: center;
}
.socails{
  border-radius: 24px;margin: 0 0px 0 5px;color: #7a7c84; border: 1px solid #ccc;
  width: 30px;
  height: 30px;
  display: inline-block;
  text-align: center;
  line-height: 28px;
}
.table-swot .table-swot__th{
	background-color: #21cebf;
}

.table-swot .table-swot__td{
	background-color:#f0f2f5;
}

.table-swot .table-swot__th th{
	border-color: #595a5c !important;
	
	border-bottom: none !important;
	width:25% !important;
}

.table-swot  .table-swot__td td{
	border-color: #595a5c !important;
	width:25% !important;
	padding:10px 4px ;
}

.table-swot  .table-swot__td td ul{
	min-height:220px;
}
.active_button{
  color:#2cdd9b;
}
@endsection
@section('content')


<div class="container mt-5" >
  <div class="row">
    <div class="col-md-12">
       <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
               <li class="breadcrumb-item " aria-current="page"><a href="{{url('/Business')}}">Business</a></li>
               <li class="breadcrumb-item active" aria-current="page">{{$ent->company_name}}   <span class="ml-2"><i class="fas fa-eye"></i>@if(!$view->isEmpty()) {{$view[0]->total_view}} @endif</span></li>
             
             </ol>
       </nav>
    </div>
   </div>
</div>


<div class="container" style="position:sticky;top:60px;z-index:100">
<div class="row">
  <div class="col-md-12">
      <div class="third-menu"  >
        <div class="container ">
           <div class="row d-flex align-items-center justify-content-between">
              <div class="col-lg-12 left" style="padding-top:0px">
                 <ul>
                      <li class="nav-overview links "  data-href="#overview"><a >Overview</a></li>
              <li class="nav-description links" data-href="#finance"><a href="javascript:void();">Financial</a></li>
              <li class="nav-faq links" data-href="#expansion" ><a href="javascript:void();">Expansion Plan</a></li>

              <li class="nav-packagesTable links" data-href="#product"><a href="javascript:void();">Product</a></li>
              <li class="nav-faq links" data-href="#full"><a href="javascript:void();">Full Life Cycle</a></li>
            
              <li class="nav-aboutSeller links" data-href="#model"><a href="javscript:void();">Business Model Canvas</a></li>

              <li class="nav-recommendations links" data-href="#invest"><a   href="javascript:void();">Investment Management</a></li>
              <li class="nav-reviews links" data-href="#team"><a href="javascript:void();">Team</a></li>
                 </ul>
              </div>
             
           </div>
        </div>
      </div>
  </div>
 </div>
</div>

<div class="main-page">
       <div class="container">
          <div class="row">
            
        <div class="col-lg-4 right order-lg-4 mt-1">
      
           <article class="sticky" >
            <div class="sticky">
              <div class="bg-white mt-2 shadow-lg " style="border-radius:4px;">
                  <div class="text-center pt-3">
              @if(empty($ent->logo))
               <img src="{{url('public/web_assist/images/empty_img.png')}}"
              class="img-fluid rounded-circle" style="border-radius:50%;height:40px;width:40px" alt="Business logo">
                 @else
                 <img src="{{url('storage/app')}}/{{($ent->logo)}}" style="height:160px;width:100%;object-fit: contain;border-radius:4px;flex-shrink: 0;" >
                @endif
                
               </div>

                  <div class="p-4">
                  <div class="d-flex align-items-top ">
                      <label  class="mb-0 text-muted">Business Name</label>
                      <label class="font-weight-bold text-dark ml-auto">{{$ent->company_name}}</label>
                  </div>
                    <div class="d-flex align-items-top ">
                        <label class="mb-0 text-muted">Registered Entity</label>
                        <label class="font-weight-bold text-dark ml-auto">{{$ent->registred_entity}}</label>
                      </div>
                      <div class="d-flex align-items-top ">
                        <label class="mb-0 text-muted">Tax Identification Number</label>
                        <label class="font-weight-bold text-dark ml-auto">{{$ent->tax_identification_number}}</label>
                    </div>
                    <div class="d-flex align-items-top ">
                        <label class="mb-0 text-muted">Business License Number</label>
                        <label class="font-weight-bold text-dark ml-auto">{{$ent->license_number}}</label>
                    </div>
                    <div class="d-flex align-items-top ">
                        <label class="mb-0 text-muted">Trademark Name</label>
                        <label class="font-weight-bold text-dark ml-auto">{{$ent->trademark_name}}</label>
                    </div>
                    <div class="d-flex align-items-top ">
                      <label class="mb-0 text-muted">Rounds of investment	</label>
                      <label class="font-weight-bold text-dark ml-auto">{{$ent->round_invest}}</label>
                  </div>
                      <div class="d-flex align-items-top ">
                        <label class="mb-0 text-muted">Establishment date</label>
                        <label class="font-weight-bold text-dark ml-auto">{{$ent->establishment_date}}</label>
                    </div>
                      <div class="d-flex align-items-top ">
                        <label class="mb-0 text-muted">Business Sector</label>
                        <label class="font-weight-bold text-dark ml-auto">{{$ent->sector_name}}</label>
                    </div>
                  
                      <div class="d-flex justify-content-between">
                      <label class="mb-0 text-muted"> Type</label>
                    <small class="font-weight-bold text-dark mb-2 mt-0 ml-auto"><span class="badge badge-success badge-pill" style="font-size:10px">{{"Growth"}}</span></small>
                    </div>
              
                     
                      <div class="text-center mt-3">
                      <label class="font-weight-bold">Investment Amount</label>
                      <label class="text-muted font-weight-bold">{{'$'.number_format($ent->mainimum_amount_looking, 2, '.', ',')}}</label>
                    </div>

                          @php
                          $checkInvest=DB::table('investment_processes')->where('entrepreneurs_id',$ent->entrepreneurs_id)->get();
                         @endphp
                            @if($checkInvest->isEmpty())
                             @if(!empty(session('investor')))
           
                            <div class="d-flex mb-3 mt-1">
                              @if(!$saveCheck->count())
                              <button class="form-control savebtn" style="height:45px" data-process="Save">
                              <i class="fa fa-save  fa-lg" aria-hidden="true"></i>
                              <label style="font-size:14px">Save</label>
                              </button>
                              @else
                            <button class="form-control savebtn" style="height:45px" data-process="UnSave">
                              <i class="fa fa-save active_button fa-lg" id="save" aria-hidden="true"></i>
                              <label style="font-size:14px">Saved</label>
                              </button>
                              @endif
                              @if(!$investCheck->count())
                               <button class="form-control ml-1 investbtn" style="height:45px" data-toggle="modal" data-target="#myModal" >
                              <i class="fa fa-thumbs-up fa-lg " aria-hidden="true"></i>
                              <label style="font-size:14px">Interest to Invest</label>
                              </button>
                             @elseif($investCheck[0]->status=="Matched")
                             <button class="form-control ml-1" style="height:45px"  >
                               <i class="fa fa-thumbs-up fa-lg active_button " aria-hidden="true"></i>
                              <label style="font-size:14px">Matched</label>
                             </button>
                              @else
                              <button class="form-control ml-1 investbtn" style="height:45px" data-toggle="modal" data-target="#myModal3" >
                               <i class="fa fa-thumbs-up fa-lg active_button " aria-hidden="true"></i>
                              <label style="font-size:14px">Cancel Request</label>
                             </button>
                               @endif

                            </div>
                               @endif

                             @elseif($checkInvest[0]->status=="Matched")
                             <div class="text-center m-2">
                                <h2 class="badge badge-success text-center p-2">{{'Achieved'}}</h2>
                              </div>

                              @else
                         @if(!empty(session('investor')))
  
                        <div class="d-flex mb-3 mt-1">
                          @if(!$saveCheck->count())
                          <button class="form-control savebtn" style="height:45px" data-process="Save">
                          <i class="fa fa-save  fa-lg" aria-hidden="true"></i>
                          <label style="font-size:14px">Save</label>
                          </button>
                          @else
                        <button class="form-control savebtn" style="height:45px" data-process="UnSave">
                          <i class="fa fa-save active_button fa-lg" id="save" aria-hidden="true"></i>
                          <label style="font-size:14px">Saved</label>
                          </button>
                          @endif
                          @if(!$investCheck->count())
                           <button class="form-control ml-1 investbtn" style="height:45px" data-toggle="modal" data-target="#myModal" >
                          <i class="fa fa-thumbs-up fa-lg " aria-hidden="true"></i>
                          <label style="font-size:14px">Interest to Invest</label>
                          </button>
                         @elseif($investCheck[0]->status=="Matched")
                         <button class="form-control ml-1" style="height:45px"  >
                           <i class="fa fa-thumbs-up fa-lg active_button " aria-hidden="true"></i>
                          <label style="font-size:14px">Matched</label>
                         </button>
                          @else
                          <button class="form-control ml-1 investbtn" style="height:45px" data-toggle="modal" data-target="#myModal3" >
                           <i class="fa fa-thumbs-up fa-lg active_button " aria-hidden="true"></i>
                          <label style="font-size:14px">Cancel Request</label>
                         </button>
                           @endif

                        </div>
                         @endif
                            @endif

                      <div  class=" text-center">
                        <label class="mr-1">Share</label>
                        <a class="facebook_a"  target="_blank" class="fb-xfbml-parse-ignore" >
                        <button class="btn  btn-circle text-white facebook" style="background-color:#3b5998;border-radius:70%;width:32px;"><i class="fab fa-facebook-f "></i>
                          </button>
                      </a>
 
                           <a id="twitter"> <button class="btn  btn-circle text-white" style="background-color:#55acee;border-radius:70%;width:32px;"><i class="fab fab fa-twitter  "></i></button>
                          </a>
                           <a id="linkedin"> <button class="btn  btn-circle text-white" style="background-color:#007bb6;border-radius:70%;width:32px;"><i class="fab fa-linkedin-in"></i></button></a>
 
                       </div>
                       
                     
                  </div>
              </div>
            </div>
         
     </article>

           </div>
               <div class="col-lg-8">

                  <div id="overview" class="align-items-center">
                 
                     <div class="user-info d-flex">
                        <span class="user-info-rating d-flex">
                           <div class="star-rating-s15-wrapper">
                              </span>
                           </div>

                     </div>
                  </div>
                  <div class="slider mt-3">

                   @if(!$ent->pitch_video_link=="") 
                         @php $step1=explode('v=', $ent->pitch_video_link);
                                $step2 =explode('&',$step1[1]);
                                $vedio_id = $step2[0]; @endphp

                         <iframe class="shadow-lg"  style="border-radius:4px;height:350px;width:100%" src='https://www.youtube.com/embed/{{ $vedio_id}}' frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;"></iframe> 
                         @else <div style="height:350px;width:100%;text-align:center" class="bg-white">
                         <img src="{{url('public/web_assist/images/video_empty.png')}}" style="height:160px;width:40%;position:relative;top:20%" ></div> @endif

            
                  </div>

            <div  class="description card p-4 mt-2 shadow-lg">
                  <h6 class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Elevator Pitch</h6>
                     @php echo html_entity_decode($ent->elavator_picth); @endphp
                  </div>
                         
                  @if(!empty($ent->market_positon_file))
                  <div class="card div_market_position mt-3 p-3 shadow-lg">
                    <h6 class="div_market_position mb-4 p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Market Positioning Chart</h6>
                  <iframe src="{{url('storage/app')}}/{{$ent->market_positon_file}}" style="scrollbar-width:thin;" width="100%" height="500"></iframe>
                  </div>
                    @endif
                    <section class="mt-1 card p-4 shadow-lg">
                      <h6 class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Swot Analysis </h6>
                          <div class="table-responsive">
                                  <table class="table table-bordered table-swot">
                                      <thead class="text-center text-white">
                                          <tr class="table-swot__th">
                                              <th class="pt-3 pb-3">
                                                  <h4>S</h4>
                                                  <p>Strength</p>
                                              </th>
                                              <th class="pt-3 pb-3">
                                                  <h4>W</h4>
                                                  <p>Weaknesses</p>
                                              </th>
                                              <th class="pt-3 pb-3">
                                                  <h4>O</h4>
                                                  <p>opportunities</p>
                                              </th>
                                              <th class="pt-3 pb-3">
                                                  <h4>T</h4>
                                                  <p>Threats</p>
                                              </th>
                                          </tr>
                                      </thead>
                                      <tbody >
                                          <tr class="table-swot__td">
                                              <td  id="strength" >
                                            @php echo html_entity_decode($ent->swot_analysis_strength) @endphp 
                                              </td>
                                              <td id="weakness">
                                                  @php echo html_entity_decode($ent->swot_analysis_weaknesses) @endphp 
                                                                                              </td>
                                              <td contenteditable="true" id="opportunities"> 
                                              @php echo html_entity_decode($ent->swot_analysis_opportunities) @endphp 
                                              </td>
                                              <td contenteditable="true" id="threats">
                                               @php echo html_entity_decode($ent->swot_analysis_threats) @endphp 
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
              
                              </div>
                   </section>
                  <div class="card p-4 mt-1 shadow-lg">
                  <h6 class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">The Market</h6>
                    @php echo html_entity_decode($ent->the_market); @endphp
                  </div>

                  <div class="card p-1 mt-1" id="finance" ><h6 >Financial</h6></div>

                  <div class="d-flex" >
                       <div class="col-lg-6 border-right" style="padding: 0px 0px">
                       <div  class="table-responsive card p-2 shadow-lg">
                       <caption> <p style="font-size:14px;font-weight:bold;">Initial Investement</p></caption>
                          <table class="table tabel-sm  a">
                          <thead>
                              <tr>
                                 <th class="font-weight-bold">Expenses</th>
                                 <th class="font-weight-bold">Amount</th>
                               </tr>
                           </thead>    
                              <tbody>
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
                                   $total= $ent->intial_technology+
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
                  <div class="col-lg-6 "  style="padding: 0px 0px">        
                   <div  class="table-responsive card p-2 shadow-lg">
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
               <div class="d-flex">
                       <div class="col-lg-6 " style="padding: 0px 0px">
                       <div  class="table-responsive card p-2 shadow-lg">
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
                  <div class="col-lg-6 "  style="padding: 0px 0px">        
                   <div  class="table-responsive card p-2 shadow-lg">
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
   
        <div class="card p-4 shadow-lg mt-1">
            <canvas id="mixed-chart" width="800" height="450"></canvas>
        </div>

        <div class="card p-4 mt-1 shadow-lg">
          <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Risk Analysis</h6>
          <table class="table table-bordered table-sm table_1">
            @php echo html_entity_decode($ent->risk_analysis)@endphp
          </table>
        </div>
        
         <div class="card p-4 mt-1 shadow-lg">
          <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Business Trends</h6>
            <div class="table-responsive m-t-30">
              @if($ent->busniess_trends)
                 <table class="table  table-bordered ">
                 @php echo html_entity_decode($ent->busniess_trends)@endphp
                 
                 </table>
              @endif  
             </div>
        </div>


         <div class="card p-4 mt-1 shadow-lg">
          <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Competitive Advantages</h6>
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

            
           <div class="card p-1 mt-1 shadow-lg" id="expansion">
            <h6> Expansion Plan</h6>
            </div>
           <div class="card p-4 shadow-lg ">
            <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Expansion Plan</h6>
            <div class="table-responsive  mb-2">
               <table class="table table-bordered table-custom submit_define">
                   @php echo html_entity_decode($ent->expansion_plan) @endphp
               </table>
             </div>   
           </div>
           <div class="card p-4 shadow-lg mt-1">
            <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Executive Summary </h6>
            <div class="table-responsive  mb-2">
              <table class="table table-bordered table-custom submit_define">
                  @php echo html_entity_decode($ent->executive_summary) @endphp
              </table>
            </div>   
          </div>
          <div class="card p-4 shadow-lg mt-1">
            <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Target Market </h6>
            <div class="table-responsive  mb-2">
              <table class="table table-bordered table-custom submit_define">
                  @php echo html_entity_decode($ent->target_market) @endphp
              </table>
            </div>   
          </div>

          <div class="card p-4 shadow-lg mt-1">
            <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Market Study for Expansion </h6>
            <div class="table-responsive  mb-2">
              <table class="table table-bordered table-custom submit_define">
                  @php echo html_entity_decode($ent->market_study) @endphp
              </table>
            </div>   
          </div>
          <div class="card p-4 shadow-lg mt-1">
            <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;"> Product Upgrading/Development </h6>
            <div class="table-responsive  mb-2">
              <table class="table table-bordered table-custom submit_define">
                  @php echo html_entity_decode($ent->product_upgrading) @endphp
              </table>
            </div>   
          </div>
          <div class="card p-4 shadow-lg mt-1">
            <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;"> Product Upgrading/Development </h6>
            <div class="table-responsive  mb-2">
              <table class="table table-bordered table-custom submit_define">
                  @php echo html_entity_decode($ent->tech_resource) @endphp
              </table>
            </div>   
          </div>

         
           <div class="card p-1 mt-1 shadow-lg" id="product">
           <h6>Product</h6>
           </div>
          <div class="card p-4 shadow-lg">
            <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Business Minimum Viable Product</h6>
            <div class="table-responsive  mb-2">
              <table class="table table-bordered table-custom submit_define">
                  @php echo html_entity_decode($ent->business_minimum_viable_product) @endphp
              </table>
            </div>   
          </div> 
          <div class="card p-4 mt-1 shadow-lg">
            <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">High-level Product Specifications</h6>
                  @php echo html_entity_decode($ent->high_level_product_specifications) @endphp 
          </div> 
          <div class="card p-4 mt-1 shadow-lg">
            <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;"> Why the customers need your product/service</h6>
                  @php echo html_entity_decode($ent->product_needs) @endphp 
          </div> 
          <div class="card p-4 mt-1 shadow-lg">
            <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Product Plan</h6>
            <div class="table-responsive  mb-2 mt-3">
              <table class="table table-bordered table-custom submit_define">
                  @php echo html_entity_decode($ent->develop_product_plan) @endphp
              </table>
            </div>   
          </div> 
          <div class="card p-4 mt-1 shadow-lg">
            <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Cost of Customer Acquisition</h6>
            @php echo html_entity_decode($ent->calculate_the_cost) @endphp 
          </div> 
          <div class="card p-4 mt-1 shadow-lg">
            <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Market Segmentation</h6>
            <div class="row ">
              <!-- col-3 -->
              <div class="col-lg-3 col-md-6">
                  <!-- card -->
                  <div class="mb-3">
                      <div class="card text-center text-white card_border border-secondary" style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);">
                          <div class="card-body">
                              <p>Geographic</p>
                          </div>
                      </div>
                  </div><!-- End card -->
                  
                  <!-- card-->
                  <div class="mb-3">
                      <div class="card text-center bg-success text-white card_border pt-3 pb-3"  style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);">
                          <div class="card-body">
                              <p> E.g. "Customers
                                  whithin 10 miles of 
                                  th M25"
                              </p>
                          </div>
                      </div>
                  </div><!-- End card -->
                  
                 <div class="mb-3">
                  <div class="card text-center text-black card_border  pt-5 pb-5 max-height-lg" style="background-color:#21cec14f " >
                      <div class="card-body"  id="segment1">
                     
                      @php   echo html_entity_decode($ent->segment1)   @endphp
                      </div>
                  </div><!-- End card -->
                 </div>
                  
              </div>
              <!-- col-3 -->
              
              
              <!-- col-3 -->
              <div class="col-lg-3 col-md-6">
                  <!-- card -->
                  <div class="mb-3">
                      <div class="card text-center text-white card_border" style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);">
                          <div class="card-body">
                              <p>Demograpics</p>
                          </div>
                      </div>
                  </div><!-- End card -->
                  
                  <!-- card-->
                  <div class="mb-3" >
                      <div class="card text-center  text-white card_border  pt-3 pb-3" style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);height:120px">
                          <div class="card-body">
                              <p>
                                  E.g "A level &
                                  University
                                  student"
                              </p>
                          </div>
                      </div>
                  </div><!-- End card -->
                  
                  <div class="mb-3">
                      <div class="card text-center text-black card_border  pt-5 pb-5 max-height-lg" style="background-color:#21cec14f ">
                          <div class="card-body"  id="segment2">
                      @php   echo html_entity_decode($ent->segment2)   @endphp
                             
                          </div>
                      </div>
                     
                  </div>
                  
              </div>
              <!-- col-3 -->

              <!-- col-3 -->
              <div class="col-lg-3 col-md-6">
                  <!-- card -->
                  <div class="mb-3">
                      <div class="card text-center text-white card_border"  style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9)">
                          <div class="card-body">
                              <p>Behavioral</p>
                          </div>
                      </div>
                  </div><!-- End card -->
                  
                  <!-- card-->
                  <div class="mb-3">
                      <div class="card text-center  text-white card_border   pt-3 pb-3" style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);height:120px">
                          <div class="card-body ">
                              <p>
                                  E.g. "Customers
                                  vanting a value
                                  for money
                                  impulse"
                              </p>
                          </div>
                      </div>
                  </div><!-- End card -->
                  
                  <div class="mb-3">
                      <div class="card text-center text-black card_border pt-5 pb-5 max-height-lg" style="background-color:#21cec14f ">
                          <div class="card-body"  id="segment3">
                      @php   echo html_entity_decode($ent->segment3)   @endphp
                             
                          </div>
                      </div>
                  </div>
                  
              </div>
              <!-- col-3 -->
              
              
              <!-- col-3 -->
              <div class="col-lg-3 col-md-6">
                  <!-- card -->
                  <div class="mb-3">
                      <div class="card text-center  text-white card_border" style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);">
                          <div class="card-body">
                              <p>Psychographic</p>
                          </div>
                      </div>
                  </div><!-- End card -->
                  
                  <!-- card-->
                  <div class="mb-3">
                      <div class="card text-center bg-blut-light text-white card_border  pt-3 pb-3" style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);height:120px">
                          <div class="card-body">
                              <p>
                                  E.g " Customers
                                  who prefer to
                                  by organic food"
                              </p>
                          </div>
                      </div>
                  </div><!-- End card -->
                  
                  <div class="mb-3">
                     <div class="card text-center text-black card_border  pt-5 pb-5 max-height-lg" style="background-color:#21cec14f ">
                          <div class="card-body"  id="segment4">
                      @php   echo html_entity_decode($ent->segment4)   @endphp
                             
                          </div>
                      </div>
                  </div>
                  
              </div>
              <!-- col-3 -->  
          </div>
      </div>{{-- end of segmentation --}}

        <div class="card p-4 mt-1 shadow-lg">
          <h6   class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Beachhead Market</h6>
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>Is the target customer well-funded & readily accessible to the sales force?</td>
                    <td>{{$ent->b_head_qu1}}</td>
                </tr>
                <tr>
                  <td>Do they have a compelling reason to buy?</td>
                    <td>{{$ent->b_head_qu2}}</td>
                </tr>
                <tr>
                  <td>Can you today, with the help of partners, deliver a whole product? </td>
                    <td>{{$ent->b_head_qu3}}</td>
                </tr>
                <tr>
                  <td>Is there entrenched competition that could block you?</td>
                    <td>{{$ent->b_head_qu4}}</td>
                </tr>
                <tr>
                  <td>Can you leverage this segment to another segment?</td>
                    <td >{{$ent->b_head_qu5}}</td>
                </tr>
                <tr>
                  <td>Can you show results in an acceptable timeframe?</td>
                    <td>{{$ent->b_head_qu6}}</td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
     
      <div class="card p-4 mt-1 shadow-lg">
        <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Beachhead Market Summary </h6>
        @php echo $ent->beachhead_summary  @endphp
      </div>
      <div class="card p-4 mt-1 shadow-lg">
        <h6   class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Total Available Market Size for the Beachead Market </h6>
        <div class="table-responsive">
          <table class="table table-bordered"> 
          @php echo $ent->total_available_market_size  @endphp
          </table>
        </div> 
      </div>

      
  </div>
      </div>
    </div>

</div>


    <div class="container mt-1" id="full">
      <div class="card p-4 shadow-lg">
        <h6  class="p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">Full Life Cycle User Case</h6>
        <div class="table-responsive">
          <table class="table table-bordered"> 
          @php echo $ent->full_life_cycle_user_case  @endphp
          </table>
        </div> 
      </div>
      
    </div>

<!-- busniess model -->
<div class="container  mt-1 " id="model">
  <div class="card p-0 m-0 w-100 shadow-lg">
      <h6 class="p-2 pb-0" >Business Model Canvas </h6>
  </div>
           <div class="d-flex ">
             <div class="col-md-2 pr-1 p-0">
               <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">1.Key Partners</div>
               <div class="bg-white p-4 shadow-lg" style="height:27em;overflow-y:scroll;">@php echo html_entity_decode($ent->Key_Partners)@endphp</div>

             </div>
             <div class="col-md-3 pr-1 p-0 ">
               <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">2.Key Activities</div>
               <div class="bg-white p-4 shadow-lg" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($ent->Key_Activities)@endphp</div>
               <!--  -->
              <div class="btn btn-success form-control  pt-2 pb-2 mb-1 text-center model-text">6.Key Resources</div>
              <div class="bg-white p-4 shadow-lg" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($ent->Key_Resources)@endphp</div> 

             </div>
             <div class="col-md-2 p-0 pr-1">
               <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text" >3.Value Propositions</div>
              <div class="bg-white p-4 shadow-lg" style="height:27em;overflow-y:scroll;">@php echo html_entity_decode($ent->Value_Propositions)@endphp</div> 
               <!--  -->
              
             </div>
             <div class="col-md-3  pr-1 p-0">
               <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text" >4.Customer Relationships</div>
                 <div class="bg-white p-4 shadow-lg" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($ent->Customer_Relationships)@endphp</div> 
   
                <!--  -->
                 <div class="btn btn-success form-control pl-1 pt-2 pb-2 mb-1 text-center model-text">7.Channels</div>
                 <div class="bg-white p-4 shadow-lg" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($ent->Channels)@endphp</div> 


             </div>
               <div class="col-md-2  pr-1 p-0">
               <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">5.Customer Segments</div>
                 <div class="bg-white p-4 shadow-lg" style="height:27em;overflow-y:scroll;">@php echo html_entity_decode($ent->Customer_Segments)@endphp</div> 
            
             </div>
           </div>   
           <div class="d-flex ">
             <div class="col-md-6 " style="padding:0px 0px">
                <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">8.Cost Structure</div>
                 <div class="bg-white p-4 shadow-lg" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($ent->Cost_Structure)@endphp</div> 
             </div>
             <div class="col-md-6 " style="padding:0px 5px">
                 <div class="btn btn-success form-control pt-2 pb-2 mb-1 text-center model-text">9.Revenue Streams</div>
                 <div class="bg-white p-4 shadow-lg" style="height:12em;overflow-y:scroll;">@php echo html_entity_decode($ent->Revenue_Streams)@endphp</div> 
             </div>
             
           </div>
      </div>

<!-- implement plan -->

  <div class="container mt-1 " id="invest"> 
    <div class="card p-1 mt-1 shadow-lg" >
      <h6>Investment Management</h6>
      </div>
    <div class="d-flex">
      <div class="col-lg-6" style="padding:0px 0px">
        <div class="card  p-4 mt-1 shadow-lg"  style="text-align: justify;text-justify: inter-word ">
        <h6  class="mt-2 p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;">investment terms</h6>
            @php echo html_entity_decode($ent->define_your_investment_terms)@endphp
      </div>
    </div>
      <div class="col-lg-6 " style="padding:0px 0px">
        <div class="card p-4 mt-1 shadow-lg"  style="text-align: justify;text-justify: inter-word">
          <h6 class="mt-2 p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;"> Investment managment plan</h6>
            @php echo html_entity_decode($ent->plan_for_management_of__investment)@endphp
        </div>
      </div>
        
    </div> 
    <div class="bg-white p-4 mt-1 w-100 shadow-lg"  style="text-align: justify;text-justify: inter-word">
          <h6 class="mt-2 p-2" style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff;"> Breakdown the costs</h6>
            @php echo html_entity_decode($ent->breakdown_the_costs)@endphp
        </div>
  </div> 

  
<div class="container mt-1 " id="team" style="padding: 0px 0px">
 <div class="d-flex">
   <div class="col-lg-12" >
   <div class="card p-4 shadow-lg">
     <h6 style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff" class="p-2">The Team<h6>
          @foreach($team_member as $team)   

               <div class="row  mb-3 txt-center">
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
<div class="container mt-1 mb-3 ">
  <div class="d-flex">
      <div class="col-lg-12 " style="padding: 0px 1px">

            <div id="faq" class="faq">
               <div class="accordion " id="accordionExample">
                  <div class="card p-0 bg-white p-4 shadow-lg">
               <h6  style="background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);color:#ffffff" class="p-2">Data Room</h6>
                      <div class="accordion " id="accordionExample">
                  <div class="card p-0 bg-white">
                     <div class="card-header bg-white" id="headingThree">
                        <h2 class="mb-0 bg-white">
                           <button class="btn  collapsed" type="button" data-toggle="collapse"
                              data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <label style="color:#21cebf">
                              <i class="mdi mdi-chevron-right" style="font-size:16px"></i>
                              <i class="mdi mdi-folder" style="font-size:16px"></i> &nbsp; Pitch Deck
                              </label>  
                            </a>
                        </h2>
                     </div>
                     <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body pl-5">
                                                  
                            @if(!empty($ent->pitch_presentation))  <a target="_blank" href="{{url('storage/app')}}/{{$ent->pitch_presentation}}"> <i class="mdi mdi-file" style="font-size:20px"></i>{{$ent->company_name.' '. 'Picth Deck'}}</a>

                            @endif
                        </div>
                     </div>
                  </div>
                  {{--  --}}
                  <div class="card p-0 " >
                     <div class="card-header bg-white" id="headingThree">
                        <h2 class="mb-0 bg-white" >
                           <button class="btn  collapsed" type="button" data-toggle="collapse"
                              data-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                              <label style="color:#21cebf">
                              <i class="mdi mdi-chevron-right" style="font-size:16px"></i>
                              <i class="mdi mdi-folder" style="font-size:16px"></i> &nbsp;Business License  
                              </label>  
                            </a>
                        </h2>
                     </div>
                     <div id="collapsefour" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body pl-5">
                                                  
                            @if(!empty($ent->busniess_license))  <a target="_blank" href="{{url('storage/app')}}/{{$ent->busniess_license}}"> <i class="mdi mdi-file" style="font-size:20px"></i>{{$ent->company_name.' '. 'Business License'}}</a>

                            @endif
                        </div>
                      </div>
                    </div>
               {{--  --}}
               <div class="card p-0 bg-white">
               <div class="card-header bg-white" id="headingThree">
                  <h2 class="mb-0 bg-white">
                     <button class="btn  collapsed" type="button" data-toggle="collapse"
                        data-target="#collap7" aria-expanded="false" aria-controls="collap7">
                        <label style="color:#21cebf">
                        <i class="mdi mdi-chevron-right" style="font-size:16px"></i>
                        <i class="mdi mdi-folder" style="font-size:16px"></i>&nbsp; Corporate Business Profile 
                        </label>  
                      </a>
                  </h2>
               </div>
               <div id="collap7" class="collapse" aria-labelledby="headingThree"
                  data-parent="#accordionExample">
                  <div class="card-body pl-5">
                                            
                        @if(!empty($ent->company_profile))  <a target="_blank" href="{{url('storage/app')}}/{{$ent->company_profile}}"> <i class="mdi mdi-file" style="font-size:20px"></i>{{$ent->company_name.' '. 'Corporate Business Profile'}}</a>

                         @endif
                  </div>
               </div>
            </div>

               
            <div class="card p-0 bg-white">
               <div class="card-header bg-white" id="headingThree">
                  <h2 class="mb-0 bg-white">
                     <button class="btn  collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseseven" aria-expanded="false" aria-controls="collapseThree">
                        <label style="color:#21cebf">
                        <i class="mdi mdi-chevron-right" style="font-size:16px"></i>
                        <i class="mdi mdi-folder" style="font-size:16px"></i>&nbsp; Business Plan 
                        </label>  
                      </a>
                  </h2>
               </div>
               <div id="collapseseven" class="collapse" aria-labelledby="headingThree"
                  data-parent="#accordionExample">
                  <div class="card-body pl-5">
                                            
                      @if(!empty($ent->pitch_presentation))  <a target="_blank"  href="{{url('storage/app')}}/{{$ent->busniess_plan}}"> <i class="mdi mdi-file" style="font-size:20px"></i>{{$ent->company_name.' '. 'Business Plan'}}</a>

                      @endif
                  </div>
               </div>
            </div>
                     </div>
                  </div>
               </div>
            </div>

      </div>
    </div>
 </div>   

@if(!empty(session('investor')))
@php
   $investor=DB::table('investors')
   ->select('env_name','env_last_name','investor_id','env__email')
   ->where('investor_id',session('investor'))
   ->get();
   @endphp
    <div id="myModal" class="modal animated slideInDown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h6 class="modal-title" id="myModalLabel">Starting investment</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <form method="post" action="{{url('investment_process')}}">
                  @csrf
                <div class="form-group">
                  <label>Full Name</label>
                <div class="position-relative icon-form-control mb-2">
                      <i class="fas fa-user position-absolute text-muted"></i>

                   <input type="text" class="form-control" readonly name="full_name" value="{{$investor[0]->env_name}} {{$investor[0]->env_last_name}}">
                   </div>
                </div>
                
                <input type="hidden" name="ent" value="{{$ent->entrepreneurs_id}}">
                <input type="hidden" name="inv" value="{{$investor[0]->investor_id}}">

                 <div class="form-group">
                  <label>Email</label>
                   <div class="position-relative icon-form-control mb-2">
                      <i class="mdi mdi-email-outline  position-absolute text-muted"></i>
                      <input type="text" class="form-control" readonly name="email_name" value="{{$investor[0]->env__email}}">                           
                   </div>

                </div>       
                <div class="form-group">
                  <label>Invest Amount </label>
                   <div class="position-relative icon-form-control mb-2">
                          <i class="fas fa-dollar-sign position-absolute text-muted"></i>
                           <input  pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" value="{{old('invest_ammount')}}" name="invest_amount"  data-type="currency" 
                              class="form-control" placeholder="1,000.00"  required>
                   </div>


                {!!$errors->first('invest_amount', '<small style="color:red;margin-left:10px">:message</small>')!!}

                </div>
                <div class="form-group">
                  <label>Password</label>
                   <div class="position-relative icon-form-control mb-2">
                      <i class="fas fa-key position-absolute text-muted"></i>
                         <input type="password" class="form-control" name="password"  value="{{old('password')}}" required>
                           
                   </div>

                {!!$errors->first('password', '<small style="color:red;margin-left:10px">:message</small>')!!}

                </div>

              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-success" >Interest</button>
                  </form>
                  <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
              </div>
          </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

    <div id="myModal2" class="modal animated slideInDown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog model-lg" >
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
               
                  <div class="h-100 row align-items-center">
                    <div class="col" >
                      <div class="container h-100">
                    <div class="row h-100 justify-content-center align-items-center">
                      <div class="card ">
                        <div class="text-center mb-1">
                           <div bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; line-height: 48px;"> 
                                     <a href="{{url('/')}}"> <img src=" {{asset('public/web_assist/images/sarmayah_logo.png')}}" width="180" height="40" style="display: block; border: 0px;" /></a>
                            </div>

                         </div>
                        <div class="card-title" style="padding:40px">
                          <p style="margin:0;text-align: justify;text-justify: inter-word;">
                                Dear Investor,
                                <br><br>
                             Thank you for your interest to invest in the selected business.<br><br>
                             Your request is registered successfully. Please wait for the system to match you with the selected entrepreneur 
                                <br><br>
                                Regards,<br>
                                Sarmayah, Inc

                                </p>

                        <br><hr>
                      <p style="display:inline">Sarmayah.com</p>
                    </div>


                      </div>
                    </div>
                  </div>
                      
                    </div>
                  </div>

              </div>
              
          </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

    <div id="myModal3" class="modal animated slideInDown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h6 class="modal-title" id="myModalLabel">Canceling Request</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <form method="post" action="{{url('invest/request/cancel')}}">
                  @csrf
                <div class="form-group">
                  <label>Full Name</label>
                <div class="position-relative icon-form-control mb-2">
                      <i class="fas fa-user position-absolute text-muted"></i>

                   <input type="text" class="form-control" readonly name="full_name" value="{{$investor[0]->env_name}} {{$investor[0]->env_last_name}}">
                   </div>
                </div>
                
                <input type="hidden" name="ent" value="{{$ent->entrepreneurs_id}}">
                <input type="hidden" name="inv" value="{{$investor[0]->investor_id}}">

                 <div class="form-group">
                  <label>Email</label>
                   <div class="position-relative icon-form-control mb-2">
                      <i class="mdi mdi-email-outline  position-absolute text-muted"></i>
                      <input type="text" class="form-control" readonly name="email_name" value="{{$investor[0]->env__email}}">                           
                   </div>

                </div>       
   
                   <div class="form-group">
                  <label>Please write the reasone behind canceling this request </label>
                 <textarea class="form-control" rows="5" required name="summary"></textarea>

                {!!$errors->first('password', '<small style="color:red;margin-left:10px">:message</small>')!!}

                </div>

              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-success" >Send</button>
                  </form>
                  <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
              </div>
          </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  @endif
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
  <script src="{{asset('public/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
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
@if(!empty(session('investor')))
<script type="text/javascript">
  $('td').attr('contenteditable',false);
    $('.savebtn').click(function () {
    var proces=$(this).attr('data-process');
    var url="{{url('invest/business/save')}}"
    $.get(url,{type: proces,investor:@php echo $investor[0]->investor_id @endphp,ent:@php echo $ent->entrepreneurs_id @endphp},function(data){

        if(data=="set"){
            $('.savebtn').html('<i class="fa fa-save active_button fa-lg" id="save" aria-hidden="true"></i>\
                      <label style="font-size:14px">Saved</label>\
                      ');
               $.toast({
                   heading: '<small>The selected business saved </small>',
                  // text: 'Use the predefined ones, or specify a custom position object.',
                  position: 'top-right',
                  loaderBg:'#28d7aa',
                  icon: 'success',
                  hideAfter: 6500, 
                  stack: 6
                });
                         
             $('.savebtn').attr('data-process',"UnSave");

        }else{

             $('.savebtn').html('<i class="fa fa-save  fa-lg" id="save" aria-hidden="true"></i>\
                      <label style="font-size:14px">Save</label>\
                      ');
             $('.savebtn').attr('data-process',"Save");
        }
    
    });
  
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
 @if(session()->has('notiff'))
     <script>
    $.toast({
               heading: '<small>{{session()->get("notiff")}}</small>',
              // text: 'Use the predefined ones, or specify a custom position object.',
              position: 'top-right',
              loaderBg:'#28d7aa',
              icon: 'success',
              hideAfter: 6500, 
              stack: 6
            });

    </script>       
            @endif

<script type="text/javascript">
  // var a=window.location.href;
  var a='https://www.sarmayah.com';
    url="https://www.facebook.com/sharer/sharer.php?u="+a+'&'+'src=sdkpreparse';
    url2="https://www.linkedin.com/cws/share?url="+a+"";
    url3="https://twitter.com/intent/tweet?hashtags=investment&amp;original_referer=https%3A%2F%2Fdeveloper.twitter.com%2F&amp;ref_src=twsrc%5Etfw&amp;related=twitterapi%2Ctwitter&amp;text=Sarmayah.com&amp;tw_p=tweetbutton&amp;url="+a+"%2Ffoo&amp;via=twitterdev";

    $('.facebook_a').click(function () {
       window.open(url,'popup','width=600,height=600'); return false;      
    });
    $('#linkedin').click(function () {
       window.open(url2,'popup','width=600,height=600'); return false;      
      
    });
    $('#twitter').click(function () {
       window.open(url3,'popup','width=600,height=600'); return false;      
    });
FB.ui({
  method: 'feed',
  link: url
}, function(response){});
</script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".links").on('click', function(event) {
    var hash =$(this).attr('data-href');
    var a= $(hash).offset().top-120;
      $('.links').removeClass('selected');

      $(this).addClass('selected');
      // alert(a);
      $('html, body').animate({
        scrollTop: a
      }, 1000, function(){

      });
    
  });
});
 $(document).ready(function () {
$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});

function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}

});
</script>
@endsection