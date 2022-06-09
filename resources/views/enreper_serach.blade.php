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
