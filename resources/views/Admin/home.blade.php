@extends('Admin.master')

@section('css')
   <link href="{{asset('public/assets/node_modules/morrisjs/morris.css')}}" rel="stylesheet">
@endsection

@section('content1')
@php  

    $draft=DB::table('entrepreneurs')->select(DB::raw('count(entrepreneurs_id)as draft'))->where('admin_status','Draft')->get();
    $Approved=DB::table('entrepreneurs')->select(DB::raw('count(entrepreneurs_id)as approved'))->where('admin_status','Approved')->get();
    $Rejected=DB::table('entrepreneurs')->select(DB::raw('count(entrepreneurs_id)as rejected'))->where('admin_status','Rejected')->get();
    $total=DB::table('entrepreneurs')->select(DB::raw('count(entrepreneurs_id)as total'))->get();
    $submit=DB::table('entrepreneurs')->select(DB::raw('count(entrepreneurs_id)as submit'))->where('admin_status','Submitted')->get();
    $varify_status=DB::table('entrepreneurs')->select(DB::raw('count(entrepreneurs_id)as verifyed'))->where('varify_status',Null)->get();
    $idea=DB::table('entrepreneurs')->select(DB::raw('count(entrepreneurs_id)as idea'))->where('catagory','Idea')->get();
    $startup=DB::table('entrepreneurs')->select(DB::raw('count(entrepreneurs_id)as startup'))->where('catagory','STARTUP')->get();
    $sme=DB::table('entrepreneurs')->select(DB::raw('count(entrepreneurs_id)as sme'))->where('catagory','SME')->get();
    $investors=DB::table('investors')->select(DB::raw('count(investor_id)as investors'))->get();
    $draft_investor=DB::table('investors')->select(DB::raw('count(investor_id)as draft'))->where('admin_status','Draft')->get();
    $approved_investor=DB::table('investors')->select(DB::raw('count(investor_id)as approve'))->where('admin_status','Approved')->get();
    $reject_investor=DB::table('investors')->select(DB::raw('count(investor_id)as reject'))->where('admin_status','Rejected')->get();
    $unverified_investor=DB::table('investors')->select(DB::raw('count(investor_id)as verifyed'))->where('account_status',Null)->get();

  @endphp
  @if(session('status'))
  <span class="alert alert-success mb-5">{{session('status')}}</span>
  @endif
 
<div class="row">
<div class="col-lg-2 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="round align-self-center round-success"><i class="fas fa-check  "></i></div>
                <div class="m-l-10 align-self-center">
                    <p class="m-b-0">{{$total[0]->total}}</p>
                    <p class="text-muted m-b-0">Total Business</p></div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-2 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="round align-self-center round-success"><i class="fas fa-check  "></i></div>
                <div class="m-l-10 align-self-center">
                    <p class="m-b-0">{{$Approved[0]->approved}}</p>
                    <p class="text-muted m-b-0">Approved Business</p></div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-2 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="round align-self-center round-warning"><i class="far fa-envelope-open  "></i></div>
                <div class="m-l-10 align-self-center">
                    <p class="m-b-0">{{$submit[0]->submit}}</p>
                    <p class="text-muted m-b-0">Submitted Business</p></div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-2 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="round align-self-center round-warning"><i class="far fa-envelope-open  "></i></div>
                <div class="m-l-10 align-self-center">
                    <p class="m-b-0">{{$draft[0]->draft}}</p>
                    <p class="text-muted m-b-0">Draft Business</p></div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-2 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="round align-self-center round-danger"><i class="fas fa-window-close  "></i></div>
                <div class="m-l-10 align-self-center">
                    <p class="m-b-0">{{$Rejected[0]->rejected}}</p>
                    <p class="text-muted m-b-0">Rejected Business</p></div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-2 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="round align-self-center round-info"><i class="ti-save  "></i></div>
                <div class="m-l-10 align-self-center">
                    <p class="m-b-0">{{$varify_status[0]->verifyed}}</p>
                    <p class="text-muted m-b-0">Not Verified</p></div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="round align-self-center round-warning"><i class="fas fa-chart-bar  "></i></div>
                    <div class="m-l-10 align-self-center">
                        <p class="m-b-0">{{$idea[0]->idea}}</p>
                        <p class="text-muted m-b-0">IDEA</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="round align-self-center round-info"><i class=" fas fa-chart-area  "></i></div>
                    <div class="m-l-10 align-self-center">
                        <p class="m-b-0">{{$startup[0]->startup}}</p>
                        <p class="text-muted m-b-0">STARTUP</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="round align-self-center round-success"><i class="fas fa-chart-line   "></i></div>
                    <div class="m-l-10 align-self-center">
                        <p class="m-b-0">{{$sme[0]->sme}}</p>
                        <p class="text-muted m-b-0">GROWTH</p></div>
                </div>
            </div>
        </div>
    </div>
</div>
  <div class="row">
      <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Registred Business</h4>
                    <div id="morris-bar-chart"></div>
                </div>
            </div>
        </div>
    </div>
<div class="row">
<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="round align-self-center round-success"><i class="fas fa-check  "></i></div>
                <div class="m-l-10 align-self-center">
                    <p class="m-b-0">{{$investors[0]->investors}}</p>
                    <p class="text-muted m-b-0">Total Investors</p></div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-2 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="round align-self-center round-success"><i class="fas fa-check  "></i></div>
                <div class="m-l-10 align-self-center">
                    <p class="m-b-0">{{$approved_investor[0]->approve}}</p>
                    <p class="text-muted m-b-0">Approved Investors</p></div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-2 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="round align-self-center round-warning"><i class="far fa-envelope-open  "></i></div>
                <div class="m-l-10 align-self-center">
                    <p class="m-b-0">{{$draft_investor[0]->draft}}</p>
                    <p class="text-muted m-b-0">Draft Investors</p></div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-2 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="round align-self-center round-danger"><i class="fas fa-window-close  "></i></div>
                <div class="m-l-10 align-self-center">
                    <p class="m-b-0">{{$reject_investor[0]->reject}}</p>
                    <p class="text-muted m-b-0">Rejected Investors</p></div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="round align-self-center round-info"><i class="ti-save  "></i></div>
                <div class="m-l-10 align-self-center">
                    <p class="m-b-0">{{$unverified_investor[0]->verifyed}}</p>
                    <p class="text-muted m-b-0">Not Verified Investors</p></div>
            </div>
        </div>
    </div>
</div>
</div>



  <div class="row">
        <div class="col-lg-12 m-t-1 ">
            <div class="card ">
                <div class="card-body">
                    <h4 class="card-title">Registred Investor</h4>
                    <div id="morris-bar-chart1"></div>
                </div>
            </div>
        </div>
    </div>   

@endsection
@section('page_title')
Dashboard
@endsection

@section('page_directory')
Dashboard
@endsection
@section('jquery')
 <script src="{{asset('public/assets/node_modules/morrisjs/morris.js')}}"></script>
  <script src="{{asset('public/assets/node_modules/raphael/raphael-min.js')}}"></script>

<script type="text/javascript">
        Morris.Bar({
        element: 'morris-bar-chart',
        data: [<?php echo $chart_data?>
        ,}],
        xkey: 'Month',
        ykeys: ['Business'],
        labels: ['Business'],
        barColors:['#01c0c8'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
    });

        Morris.Bar({
        element: 'morris-bar-chart1',
        data: [<?php echo $chart_data1?>
        ,}],
        xkey: 'Month',
        ykeys: ['Investor'],
        labels: ['Investor'],
        barColors:['#00c292'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
    });

$('.card1').css('display','none');
</script>

@endsection    