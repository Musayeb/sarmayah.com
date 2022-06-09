<?php

namespace App\Http\Controllers\entreprenuer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Models\AdminNotification;
use Illuminate\Support\Facades\Hash;
use App\Models\Entrepreneurs;
use App\Models\notifications;
use Illuminate\Support\Str;



class StartupController extends Controller
{
   public function profile1(){   
       $id =session('startup');
   
     $ent1=DB::table('entrepreneurs')->where('entrepreneurs.entrepreneurs_id',$id)->get();
          if(!empty($ent1[0]->ent_industry_sector)){
         $ent =DB::table('entrepreneurs')
         ->join('compititive_advantage','entrepreneurs.entrepreneurs_id','compititive_advantage.entre_id')
         ->join('busniess_trends','entrepreneurs.entrepreneurs_id','busniess_trends.entre_id')
         ->join('busniess_model_convas','entrepreneurs.entrepreneurs_id','busniess_model_convas.entre_id')
         ->join('entre_financial','entrepreneurs.entrepreneurs_id','entre_financial.entre_id')
         ->join('market_positionning','entrepreneurs.entrepreneurs_id','market_positionning.entre_id')
         ->join('investment_manage','entrepreneurs.entrepreneurs_id','investment_manage.entre_id')
         ->join('market','entrepreneurs.entrepreneurs_id','market.entre_id')
         ->join('sectors','sectors.sector_id','entrepreneurs.ent_industry_sector')
         ->where('entrepreneurs.entrepreneurs_id',$id)
         ->GroupBy('entrepreneurs.entrepreneurs_id')->get();

          }else{

         $ent =DB::table('entrepreneurs')
         ->join('compititive_advantage','entrepreneurs.entrepreneurs_id','compititive_advantage.entre_id')
         ->join('busniess_trends','entrepreneurs.entrepreneurs_id','busniess_trends.entre_id')
         ->join('busniess_model_convas','entrepreneurs.entrepreneurs_id','busniess_model_convas.entre_id')
         ->join('entre_financial','entrepreneurs.entrepreneurs_id','entre_financial.entre_id')
         ->join('market_positionning','entrepreneurs.entrepreneurs_id','market_positionning.entre_id')
         ->join('investment_manage','entrepreneurs.entrepreneurs_id','investment_manage.entre_id')
         ->join('market','entrepreneurs.entrepreneurs_id','market.entre_id')
         ->where('entrepreneurs.entrepreneurs_id',$id)
         ->GroupBy('entrepreneurs.entrepreneurs_id')->get();
         
          }  
     

        $ent=$ent[0];
     
      
       if(empty($ent->startup_name)|| empty($ent->establishment_date)|| empty($ent->ent_industry_sector)|| empty($ent->logo)
       || empty($ent->intial_technology)|| empty($ent->elavator_picth)){
          session()->flash('error','Business account is not completed');
         return redirect('ent/startup/profile/edit');
      }else{
        $team_member=DB::table('team_members')->where('entre_id',$id)->get();
      
         return view('ent_startup_profile',compact('ent','team_member'));
        

       }
    }

    public function add_team_member(){
    	return view('Enterpreneur.startup_add_team_member');
   }
   public function add_team_member_add(Request $request){
   		
	    $datavalide = $request->validate([  
            'full_name' => 'required', 'string',
            'position' => 'required', 'string',
            'bio' => 'required',
            'photo'=>'required|mimes:png,jpg,jpeg|max:2048|'
        ]);
        if($datavalide==true){
        	if($request->hasFile('photo')){
        	$path=Storage::put('public/members_photo',$request->file('photo'));		
        	DB::table('team_members')->insert([
        	'entre_id'=>session('startup'),	
        	'full_name'=>ucwords($request->full_name),
        	'position'=>$request->position,
        	'summary'=>$request->bio,
        	'photo'=>$path,
        	]);
        session()->flash('notif','Information update successfully!');
      
        return redirect('ent/startup/profile/edit');
        }
    }
   }

  public function add_team_member_delete($id){
	  try {
	    $id = decrypt($id);
		} catch (DecryptException $e) {
		    abort(404);
		}   
	 $member=DB::table('team_members')->where('team_id',$id)->get();
  		Storage::delete($member[0]->photo);
		DB::table('team_members')->where('team_id',$id)->delete();
  	
  }
  public function edit_team_member($id){
    
  try {
    $id = decrypt($id);
	 $member=DB::table('team_members')->where('team_id',$id)->get();
	 return view('Enterpreneur.startup_edit_team_member',compact('member'));
	} catch (DecryptException $e) {
	    abort(404);
	}   
  }


  public function update_team_member(Request $request){
  	
  	    $datavalide = $request->validate([  
            'full_name' => 'required', 'string',
            'position' => 'required', 'string',
            'bio' => 'required',
        ]);
    

    if($datavalide==true){

       try {$id = decrypt($request->id);} catch (DecryptException $e) {abort(404);}
   	  
	    $team=DB::table('team_members')->where('team_id',$id)->get();


        if($request->hasFile('photo')){
		Storage::delete($team[0]->photo);	
		$path=Storage::put('public/members_photo',$request->file('photo'));		
        	DB::table('team_members')->where('team_id',$id)
        	->update([
        	'full_name'=>ucwords($request->full_name),
        	'position'=>$request->position,
        	'summary'=>$request->bio,
        	'photo'=>$path,
        ]);
     	session()->flash('notif','Information update successfully!');
        return redirect('ent/startup/profile/edit');

    	}else{
        	DB::table('team_members')->where('team_id',$id)->update([
            'full_name'=>ucwords($request->full_name),
        	'position'=>$request->position,
        	'summary'=>$request->bio,
        ]);

		session()->flash('notif','Information update successfully!');
        return redirect('ent/startup/profile/edit');
    	}	

        }	
  	}

 public function star_profile_edit(){
       $id =session('startup');
        $ent =Entrepreneurs::find($id);
        $finance=DB::table('entre_financial')->where('entre_id',session('startup'))->get();
    if (empty($finance[0]->statustab1)) {
      $intial_total=null;    
      }else{
      $intial_total=$finance[0]->intial_technology+$finance[0]->intial_machinery+$finance[0]->intial_machinery+
     $finance[0]->intial_other1+$finance[0]->intial_other2+$finance[0]->intial_other3;
      } 
    if (empty($finance[0]->statustab3)) {
         $operation_total=null;      
     }else{
      $operation_total=$finance[0]->operation_payroll+$finance[0]->operation_operation_cost+$finance[0]->operation_marketing
     +$finance[0]->operation_other1+$finance[0]->operation_other2+$finance[0]->operation_other3;
     }
    if (empty($finnacne[0]->statustab2)) {
      $raised_total=null;     
      }else{
     $raised_total=$finance[0]->raised_r1+$finance[0]->raised_r1+$finance[0]->raised_r2;
      }
     if (empty($finance[0]->statustab4)) {
      $total_revenue=null;        
      }else{
     $total_revenue=$finance[0]->current_revenue;          
        }       
      // }

      $team=DB::table('team_members')->where('entre_id',session('startup'))->get();  
      $model=DB::table('busniess_model_convas')->where('entre_id',session('startup'))->get();  
      $busniess_trends=DB::table('busniess_trends')->where('entre_id',session('startup'))->get();
      $compititive=DB::table('compititive_advantage')->where('entre_id',session('startup'))->get();
      $invest_management=DB::table('investment_manage')->where('entre_id',session('startup'))->get();
      $market_position=DB::table('market_positionning')->where('entre_id',session('startup'))->get();
      $market=DB::table('market')->where('entre_id',session('startup'))->get();



      // exit;
      return view('ent_startup_profile_edit',compact('ent','intial_total','operation_total','raised_total','total_revenue','finance','team','model','busniess_trends','compititive','invest_management','market_position','market'));
    }
// end profile
// startup
     public function startup_edit_settings(){
        $id=session('startup');
        $country=DB::table('country_names')->get();
        $entre=DB::table('entrepreneurs')->where('entrepreneurs_id',$id)->get();
      
       return view('startup_edit_account',compact('country','entre'));

      }

      public function startup_change_photo(Request $request){
           $id=session('startup');
          $datavalide = $request->validate([            
          'photo' =>'required|image|mimes:jpeg,png,jpg|max:3000|',
      ]);
        $entre=Entrepreneurs::find($id)->profile_pic;
       if ($datavalide==true) {
        if($request->hasFile('photo')){
            Storage::delete($entre);
          $path= Storage::putFile('/public/bussnessprofile_pic/',$request->file('photo'));
          DB::table('entrepreneurs')
          ->where('entrepreneurs_id',$id)
          ->update([
            'profile_pic'=>$path,
          ]);
        session()->flash('second_tab','second_tab');
        session()->flash('notif','Information update successfully!');
        return back();

        }    
      }
   }

   public function startup_change_genral(Request $request){
        $id=session('startup');
         $datavalide = $request->validate([
            'first_name' => 'required', 'string',
            'last_name' => 'required', 'string',
            'phone' => 'required', 'string',
            'country' => 'required', 'string',
            'gender' => 'required',
        ]);

        if ($datavalide == true) {
           DB::table('entrepreneurs')
          ->where('entrepreneurs_id',$id)
          ->update([
            'entre_name'=>$request->first_name,
            'entre_last_name'=>$request->last_name,
            'entre_phone'=>$request->phone,
            'country'=>$request->country,
            'gender'=>$request->gender,
          ]);
        session()->flash('third_tab','third_tab');
        session()->flash('notif','Information update successfully!');
        return back();
      }    
   }

   public function startup_change_password(Request $request)
   {
      $id =session('startup');
      $entre=Entrepreneurs::find($id);
       $pass=$entre->enter_password; 

       $datavalide = $request->validate([
            'current_password' => 'required', 'string',
            'new_password' => 'required|min:6|same:confirm_password',
            'confirm_password' => 'required|min:6',
        ]);
       if ($datavalide==true) {
         if (Hash::check($request->current_password,$pass)){
            DB::table('entrepreneurs')
          ->where('entrepreneurs_id',$id)
          ->update([
            'enter_password'=>password_hash($request->new_password, PASSWORD_DEFAULT),
          ]);
        session()->flash('notif','Information update successfully!');
        return back();
       }else{
        session()->flash('forth','forth');
         session()->flash('error','Current password is Worng!');
        return back();
       }
       }

   }   

    public function star_finance1(Request $request){
          $id=session('startup');
      
      
          if(empty($request->first_amount)){
              $request1=null;
          }else{
            $request1=str_replace(',', '', $request->first_amount);
          }
          if(empty($request->second_amount)){
            $request2=null;
          }else{
            $request2=str_replace(',', '', $request->second_amount);
          }if(empty($request->third_amount)){
            $request3=null;
          }else{
            $request3=str_replace(',', '', $request->third_amount);
          }
        
        DB::table('entre_financial')
        ->where('entre_id',$id)
        ->update([
         'intial_technology'=>str_replace(',', '', $request->intial_technology),
         'intial_machinery'=>str_replace(',', '', $request->intial_machinery),
         'other_name1'=>$request->first_amount_name,
         'intial_other1'=>$request1,
         'other_name2'=>$request->second_amount_name,
         'intial_other2'=>$request2,
         'other_name3'=>$request->third_amount_name,
         'intial_other3'=>$request3,
         'statustab1'=>"1",
        ]);    

    }

public function star_finance3(Request $request){
        
    // -------------------------------------------------
    $f_total_cost_per_unit=str_replace(',', '', $request->f_fixed_cost_per_unit)+
    str_replace(',', '', $request->f_variable_cost_per_unit);
    $f_price_per_unit= $f_total_cost_per_unit+str_replace(',', '', $request->f_profit_margin_per_unit);
      // ---------------------------------------------
    $s_total_cost_per_unit=str_replace(',', '', $request->s_fixed_cost_per_unit)+
    str_replace(',', '', $request->s_variable_cost_per_unit);
    $s_price_per_unit= $s_total_cost_per_unit+str_replace(',', '', $request->s_profit_margin_per_unit);
    // -----------------------------------------------------------------------
    $t_total_cost_per_unit=str_replace(',', '', $request->t_fixed_cost_per_unit)+
    str_replace(',', '', $request->t_variable_cost_per_unit);
    $t_price_per_unit= $t_total_cost_per_unit+str_replace(',', '', $request->t_profit_margin_per_unit);
    // ----------------------------------------------------------------------
          
        DB::table('entre_financial')
          ->where('entre_id',session('startup'))
          ->update([
            'f_fixed_cost_per_unit'=>str_replace(',', '', $request->f_fixed_cost_per_unit),
            'f_profit_margin_per_unit'=>str_replace(',', '', $request->f_profit_margin_per_unit),
            'f_variable_cost_per_unit'=>str_replace(',', '', $request->f_variable_cost_per_unit),
            'f_price_per_unit'=> $f_price_per_unit,
            'f_total_cost_per_unit'=>$f_total_cost_per_unit,
//
            's_fixed_cost_per_unit'=>str_replace(',', '', $request->s_fixed_cost_per_unit),
            's_profit_margin_per_unit'=>str_replace(',', '', $request->s_profit_margin_per_unit),
            's_variable_cost_per_unit'=>str_replace(',', '', $request->s_variable_cost_per_unit),
            's_price_per_unit'=>  $s_price_per_unit,
            's_total_cost_per_unit'=>$s_total_cost_per_unit,
// 
            't_fixed_cost_per_unit'=>str_replace(',', '', $request->t_fixed_cost_per_unit),
            't_profit_margin_per_unit'=>str_replace(',', '', $request->t_profit_margin_per_unit),
            't_variable_cost_per_unit'=>str_replace(',', '', $request->t_variable_cost_per_unit),
            't_price_per_unit'=>  $t_price_per_unit,
            't_total_cost_per_unit'=>$t_total_cost_per_unit,

             ]);

}  
      public function star_finance2(Request $request){
             $id =session('startup');
          if(empty($request->amount_first)){
              $request1=null;
          }else{
            $request1=str_replace(',', '', $request->amount_first);
          }
          if(empty($request->amount_second)){
            $request2=null;
          }else{
            $request2=str_replace(',', '', $request->amount_second);
          }if(empty($request->amount_third)){
            $request3=null;
          }else{
            $request3=str_replace(',', '', $request->amount_third);
          }  
 
        DB::table('entre_financial')
        ->where('entre_id',$id)
        ->update([
         'operation_payroll'=>str_replace(',', '', $request->operation_payroll),
         'operation_operation_cost'=>str_replace(',', '', $request->operation_cost),
         'operation_marketing'=>str_replace(',', '', $request->marketing),
         'other_name4'=>$request->amount_name_first,
         'operation_other1'=>$request1,  
          'other_name5'=>$request->amount_name_second,
         'operation_other2'=>$request2, 
          'other_name6'=>$request->amount_name_third,
         'operation_other3'=>$request3,
         'statustab3'=>"1",    
        ]);

 }
        

 //          current_revenue

    public function star_finance4(Request $request)
    {
      DB::table('entre_financial')
      ->where('entre_id',session('startup'))
      ->update([
       'f_number_of_products_sold'=>$request->f_number_of_products_sold,
       'f_price_per_sale_unit'=>str_replace(',', '',$request->f_price_per_sale_unit),
       'f_number_of_customers'=>$request->f_number_of_customers,
       'f_total_sales_Revenue'=> $request->f_number_of_products_sold * str_replace(',', '',$request->f_price_per_sale_unit),
       
       's_number_of_products_sold'=>$request->s_number_of_products_sold,
       's_price_per_sale_unit'=>str_replace(',', '',$request->s_price_per_sale_unit),
       's_number_of_customers'=>$request->s_number_of_customers,
       's_total_sales_Revenue'=> $request->s_number_of_products_sold * str_replace(',', '',$request->s_price_per_sale_unit),

       't_number_of_products_sold'=>$request->t_number_of_products_sold,
       't_price_per_sale_unit'=>str_replace(',', '',$request->t_price_per_sale_unit),
       't_number_of_customers'=>$request->t_number_of_customers,
       't_total_sales_Revenue'=> $request->t_number_of_products_sold * str_replace(',', '',$request->t_price_per_sale_unit),
       'statustab4'=>1,       
      
       ]);
       
      }



    public function star_profile_update(Request $request){

        $datavalide = $request->validate([
            
            'startup_name' => 'required', 'string',
            'establishment_date' => 'required', 'string',
            'business_sector' => 'required', 'string',
            'minimum_ammount_of_investment' => 'required',
            'pitch_video'=>'required',
    
        ]);
              if ($datavalide == true) {
                
                $id =session('startup');
                DB::table('entrepreneurs')
                ->where('entrepreneurs_id',$id)
                ->update([
                  'startup_name'=>$request->startup_name,
                  'slug'=>Str::slug($request->startup_name, '-'),
                  'establishment_date'=>$request->establishment_date,
                  'ent_industry_sector'=>$request->business_sector,
                  'mainimum_amount_looking'=>str_replace(',', '', $request->minimum_ammount_of_investment),
                  'website_url'=>$request->website_url,
                  'facebook_url'=>$request->facebook_url,
                  'linkedin_url'=>$request->linkedin_url,
                  'instagram_url'=>$request->instagram_url,
                  'trademark_name'=>$request->trademark_name,
                  'license_number'=>$request->license_number,
                  'pitch_video_link'=>$request->pitch_video,

                ]);
                  session()->flash('notif','Information update successfully !');
                  return redirect()->back();                
           } 

     }
    // form ajax
      public function viable_product(Request $request){
      
        $data = json_decode($request->inputdata); 
  
        DB::table('entrepreneurs')
        ->where('entrepreneurs_id',session('startup'))
        ->update([
          'business_minimum_viable_product'=> $data->inputdata,
        ]);
          
      }
      
      public function high_level_product(Request $request){
      
        $data = json_decode($request->inputdata); 
  
        DB::table('entrepreneurs')
        ->where('entrepreneurs_id',session('startup'))
        ->update([
          'high_level_product_specifications'=> $data->inputdata,
        ]);
          
      }
      public function product_need(Request $request){
      
        $data = json_decode($request->inputdata); 
  
        DB::table('entrepreneurs')
        ->where('entrepreneurs_id',session('startup'))
        ->update([
          'product_needs'=> $data->inputdata,
        ]);
          
      }
      public function product_plan(Request $request){
        $data = json_decode($request->inputdata); 
        DB::table('entrepreneurs')
        ->where('entrepreneurs_id',session('startup'))
        ->update([
          'develop_product_plan'=> $data->inputdata,
        ]);
          
      }
      public function busniess_modal_content($data){
        $buniess=DB::table('busniess_model_convas')->select($data)->where('entre_id',session('startup'))->get();        
        return json_encode($buniess);
      }
      public function store_busniess_model(Request $request){
        $data = json_decode($request->inputdata); 
        
       DB::table('busniess_model_convas')
      ->where('entre_id',session('startup'))
      ->update([
        $request->hidden=>$data->inputdata
      ]);
      }

      // end form ajax
 
         public function star_profile_update1(Request $request){
          $data = json_decode($request->inputdata); 

          $datavalide = $request->validate([
            'inputdata' => 'required',
        ]);
              
              if ($datavalide == true) {
               

                DB::table('entrepreneurs')
                ->where('entrepreneurs_id',session('startup'))
                ->update([
                  'elavator_picth'=>$data->inputdata,
                ]);
              
                  return back();

              }
         }
         public function star_profile_update2(Request $request){
             $datavalide = $request->validate([
            'top_Competitiors' => 'required','string',
        ]);
              
              if ($datavalide == true) {
                $id =session('startup');
                DB::table('entrepreneurs')
                ->where('entrepreneurs_id',$id)
                ->update([
                  'ent_revenue'=>$request->Bussiness_Revenue,
                  'ent_operation_cost'=>$request->Bussiness_Operation,
                  'top_three_campatitors'=>$request->top_Competitiors,
                  'incobation_program_center'=>$request->incoubation,
                  'graduation_date'=>$request->Graduation_date,
              ]);
                  session()->flash('notif','Information update successfully !');
                  return redirect()->back();
              }
         }
         //file upload 
         public function star_profile_update3(Request $request){
            $id =session('startup');
             $ent =Entrepreneurs::find($id);
    
             $datavalide = $request->validate([             
            'pitch_video'=>'required',   
        ]);
              if ($datavalide == true) {
                   DB::table('entrepreneurs')
                      ->where('entrepreneurs_id',$id)
                      ->update([
                        'pitch_video_link'=>$request->pitch_video,
                 ]);
           if($ent->admin_status=="Draft"){
             session()->flash('note','note');
          // notification
                 $not=new notifications;
                 $not->entreprenure_id=$id;
                 $not->description="Your Business application has been submitted for approval";
                 $not->save();
                 }   
   
                 session()->flash('forth_tab','forth_tab');        
                 session()->flash('notif','Information update successfully !');
                  return redirect()->back();

        }
   }

     public function star_profile_update4(){


        $main=Entrepreneurs::find(session('startup'));

      $model=DB::table('busniess_model_convas')->where('entre_id',session('startup'))->get(); $model=$model[0];
         $trends=DB::table('busniess_trends')->where('entre_id',session('startup'))->get();
         $comp=DB::table('compititive_advantage')->where('entre_id',session('startup'))->get();
         $finace=DB::table('entre_financial')->where('entre_id',session('startup'))->get();
         $manage=DB::table('investment_manage')->where('entre_id',session('startup'))->get();
         $position=DB::table('market_positionning')->where('entre_id',session('startup'))->get();
         $market=DB::table('market')->where('entre_id',session('startup'))->get();
         $team=DB::table('team_members')->where('entre_id',session('startup'))->get();

           
      $error=[];         
   if(empty($team[0]->entre_id)){
          array_push($error,"Team");
     }

    if(empty($main->startup_name)||empty($main->establishment_date)){
          array_push($error,"About Business");
     }
     if(empty($main->elavator_picth)){
             array_push($error,"Elevator Pitch"); 
     }


       if(empty($model->Key_Partners)||empty($model->Key_Activities)||empty($model->Value_Propositions)||empty($model->Customer_Segments)||empty($model->Customer_Relationships)||empty($model->Key_Resources)||empty($model->Channels)||empty($model->Cost_Structure)||empty($model->Revenue_Streams)){
             array_push($error,"Business Model"); 
         }

      if(empty($trends[0]->busniess_trends)){
           array_push($error,"Business Trends");               
       }
    

        if(empty($main->risk_analysis)){
          array_push($error,"Risk Analysis");   
         }

      if(empty($comp[0]->advan_1)||empty($comp[0]->comp_1)){
           array_push($error,"Compititive Advantage");               
       }

       if(empty($main->business_minimum_viable_product)||empty($main->high_level_product_specifications)||empty($main->product_needs)||empty($main->develop_product_plan)
          ||empty($market[0]->full_life_cycle_user_case)){
          array_push($error,"Product");   
        }      
         if(empty($market[0]->calculate_the_cost)||empty($market[0]->segment1)||empty($market[0]->segment2)||empty($market[0]->segment3)
          ||empty($market[0]->segment4)||empty($market[0]->total_available_market_size)||empty($market[0]->beachhead_summary)||empty($market[0]->b_head_qu1)){
          array_push($error,"Market");   
        } 
     
     if(empty($position[0]->market_positon_file)||empty($position[0]->the_market)){
         array_push($error," Market Positioning ");               

       }
      if(empty($manage[0]->define_your_investment_terms)||empty($manage[0]->plan_for_management_of__investment)||empty($manage[0]->breakdown_the_costs)){
         array_push($error," Investment Management");               
       }
  
       if(empty($finace[0]->intial_technology)||empty($finace[0]->operation_payroll)||empty($finace[0]->f_number_of_products_sold)||empty($finace[0]->f_fixed_cost_per_unit)){
         array_push($error,"Financial ");               
        
       }
     if(empty($main->logo)||empty($main->pitch_presentation)||empty($main->busniess_plan)){
          array_push($error,"Upload");       
         }

    
     if(!empty($error)){

      return redirect('ent/startup/profile/edit')->with('msg', $error);

     }else{

        DB::table('entrepreneurs')->where('entrepreneurs_id',session('startup'))->update(['admin_status'=>'Submitted']);

           $notif= new AdminNotification;
             $notif->entre_id=session('startup');
             $notif->notification_content="Business Account has Submited his Application Form";
             $notif->type="Business";
             $notif->save();


            $not=new notifications;
             $not->entreprenure_id=session('startup');
             $not->description="Your business application has been successfully submitted for review and approval of our administrator team, if you have any questions check our guide and FAQ.";
             $not->save();
             session()->flash('note','note'); 
           return redirect()->back();

     }






     }

         
         // end startup
  // startup upload
  public function startup_update_logo(Request $request){
             $id =session('startup');
             $ent =Entrepreneurs::find($id);
           $datavalide = $request->validate([            
            'busniess_logo' =>'required|image|mimes:jpeg,png,jpg|max:7000|',
        ]);            
              if ($datavalide == true) {
                 if ($request->hasFile('busniess_logo')){
               Storage::delete($ent->logo);
               $logo= Storage::putFile('/public/bussnessLogo/',$request->file('busniess_logo'));
                 }
                  DB::table('entrepreneurs')
                    ->where('entrepreneurs_id',$id)
                    ->update([
                      'logo'=> $logo,
                 ]);
                 session()->flash('notif','Information update successfully!');
                 session()->flash('upload','upload'); 
                  return redirect()->back();
            }              
    }

public function startup_update_tazkira(Request $request){
       $id =session('startup');
       $ent=DB::table('entrepreneurs')->where('entrepreneurs_id',$id)->select('tazkira')->get();
           
      $datavalide = $request->validate([            
       'Tazkira/passport' =>'required|file|mimes:jpeg,png,jpg,pdf|max:2000|',
   ]);            
         
        if ($datavalide == true) {
             if ($request->hasFile('Tazkira/passport')){
           Storage::delete($ent[0]->tazkira);
           $logo= Storage::putFile('/public/tazkira/',$request->file('Tazkira/passport'));
             }
              DB::table('entrepreneurs')
                ->where('entrepreneurs_id',$id)
                ->update([
                  'tazkira'=> $logo,
             ]);
             session()->flash('upload','upload');   
             session()->flash('notif','Information update successfully!');
              return redirect()->back();
        }  

} 

 public function startup_update_Business_profile(Request $request){
           $id =session('startup');
             $ent =Entrepreneurs::find($id);
           $datavalide = $request->validate([            
            'Business_profile' =>'required|file|mimes:pdf|max:20000|',
        ]);            
              if ($datavalide == true) {
                 if ($request->hasFile('Business_profile')){
               Storage::delete($ent->company_profile);
               $logo= Storage::putFile('/public/companyprofile/',$request->file('Business_profile'));
                 }
                  DB::table('entrepreneurs')
                    ->where('entrepreneurs_id',$id)
                    ->update([
                      'company_profile'=> $logo,
                 ]);
                 session()->flash('upload','upload');    
                 session()->flash('notif','Information update successfully!');
                  return redirect()->back();
            }  
    }   
 public function startup_update_Business_plan(Request $request){
           $id =session('startup');
             $ent =Entrepreneurs::find($id);
           $datavalide = $request->validate([            
            'busniess_plan' =>'required|file|mimes:pdf|max:20000|',
        ]);            
              if ($datavalide == true) {
                 if ($request->hasFile('busniess_plan')){
               Storage::delete($ent->busniess_plan);
               $logo= Storage::putFile('/public/busniess_plan/',$request->file('busniess_plan'));
                 }
                  DB::table('entrepreneurs')
                    ->where('entrepreneurs_id',$id)
                    ->update([
                      'busniess_plan'=> $logo,
                 ]);
                 session()->flash('upload','upload');     
                 session()->flash('notif','Information update successfully!');
                  return redirect()->back();
            }  
    } 
 public function startup_update_pitch_deck(Request $request){
           $id =session('startup');
             $ent =Entrepreneurs::find($id);
           $datavalide = $request->validate([            
            'pitch_deck' =>'required|file|mimes:pdf|max:20000|',
        ]);            
              if ($datavalide == true) {
                 if ($request->hasFile('pitch_deck')){
               Storage::delete($ent->pitch_presentation);
               $logo= Storage::putFile('/public/presentation/',$request->file('pitch_deck'));
                 }
                  DB::table('entrepreneurs')
                    ->where('entrepreneurs_id',$id)
                    ->update([
                      'pitch_presentation'=> $logo,
                 ]);
                 session()->flash('upload','upload');    
                 session()->flash('notif','Information update successfully!');
                  return redirect()->back();
            }  
    } 


 public function startup_update_bus_license(Request $request){
           $id =session('startup');
             $ent =Entrepreneurs::find($id);
           $datavalide = $request->validate([            
            'busniess_license' =>'required|file|mimes:pdf|max:20000|',
        ]);            
              if ($datavalide == true) {
                 if ($request->hasFile('busniess_license')){
               Storage::delete($ent->busniess_license);
               $logo= Storage::putFile('/public/busniess_license/',$request->file('busniess_license'));
                 }
                  DB::table('entrepreneurs')
                    ->where('entrepreneurs_id',$id)
                    ->update([
                      'busniess_license'=> $logo,
                 ]);
                 session()->flash('upload','upload');     
                 session()->flash('notif','Information update successfully!');
                  return redirect()->back();
            }  
    } 


    public function busniess_trends(Request $request){
     
      $data=json_decode($request->inputdata);
      DB::table('busniess_trends')
        ->where('entre_id',session('startup'))
        ->update([
          'busniess_trends'=>$data->inputdata,
        ]);

    }

    public function risk_a_add(Request $request){
      $data=json_decode($request->inputdata);
      DB::table('entrepreneurs')
      ->where('entrepreneurs_id',session('startup'))
      ->update([
        'risk_analysis'=>$data->inputdata
      ]);

    }

    public function advantage(Request $request){

      DB::table('compititive_advantage')
      ->where('entre_id',session('startup'))
      ->update([
       'ad_1'=>$request->ad_1,
       'ad_2'=>$request->ad_2,
       'ad_3'=>$request->ad_3,
       'ad_4'=>$request->ad_4,
       'ad_5'=>$request->ad_5,
       'ad_6'=>$request->ad_6,
       'ad_7'=>$request->ad_7,
       'ad_8'=>$request->ad_8,
       'ad_9'=>$request->ad_9,
       'ad_10'=>$request->ad_10,
       'ad_11'=>$request->ad_11,
       'ad_12'=>$request->ad_12,
       'ad_13'=>$request->ad_13,
       'ad_14'=>$request->ad_17,
       'ad_15'=>$request->ad_15,
       'ad_16'=>$request->ad_16,
       'ad_17'=>$request->ad_17,
       'ad_18'=>$request->ad_18,
       'ad_19'=>$request->ad_19,
       'ad_20'=>$request->ad_20,
       'ad_21'=>$request->ad_21,
       'ad_22'=>$request->ad_22,
       'ad_23'=>$request->ad_23,
       'ad_24'=>$request->ad_24,
       'ad_25'=>$request->ad_25,

       'advan_1'=>$request->advan_1,
       'advan_2'=>$request->advan_2,
       'advan_3'=>$request->advan_3,
       'advan_4'=>$request->advan_4,
       'advan_5'=>$request->advan_5,

       'comp_1'=>$request->comp_1,
       'comp_2'=>$request->comp_2,
       'comp_3'=>$request->comp_3,
       'comp_4'=>$request->comp_4,
       'comp_5'=>$request->comp_5,
      ]);
    }


    public function startup_market_position(Request $request){
      $datavalide=$request->validate(['market_positon_file'=>'required|file|mimes:pdf|max:7000|']);
      $ent=DB::table('market_positionning')->where('entre_id',session('startup'))->get();

      if($request->hasFile('market_positon_file')){
       if ($datavalide == true) {
         Storage::delete($ent[0]->market_positon_file);      
        $path= Storage::putFile('/public/market_position',$request->file('market_positon_file'));
          DB::table('market_positionning')->where('entre_id',session('startup'))
          ->update(['market_positon_file'=>$path]);
           session()->flash('market_position','market_position');   
           session()->flash('notif','Information update successfully !');  
           return back();
            
        }

      }
    }
    public function startup_themarket(Request $request){
      $data=json_decode($request->inputdata);
      DB::table('market_positionning')->where('entre_id',session('startup'))
      ->update(['the_market'=>$data->inputdata]);
      
    } 

    public function startup_store_define_invest(Request $request){
      
      $data=json_decode($request->inputdata);
      DB::table('investment_manage')->where('entre_id',session('startup'))
      ->update(['define_your_investment_terms'=>$data->inputdata]);


    }
     public function startup_store_define_invest_plan(Request $request){
      
      $data=json_decode($request->inputdata);
      DB::table('investment_manage')->where('entre_id',session('startup'))
      ->update(['plan_for_management_of__investment'=>$data->inputdata]);
      

    }
    public function startup_store_define_invest_breackdown(Request $request){
      
      $data=json_decode($request->inputdata);
      DB::table('investment_manage')->where('entre_id',session('startup'))->update(['breakdown_the_costs'=>$data->inputdata]);
      
    }

    public function calculate_cost(Request $request){
      
      $data=json_decode($request->inputdata);
      DB::table('market')->where('entre_id',session('startup'))
      ->update(['calculate_the_cost'=>$data->inputdata]);
      
    }
    
    public function store_market_segment(Request $request){
      
      $data1=json_decode($request->segment1);
      $data2=json_decode($request->segment2);
      $data3=json_decode($request->segment3);
      $data4=json_decode($request->segment4);

      DB::table('market')->where('entre_id',session('startup'))
      ->update([
        'segment1'=>$data1->segment1,
        'segment2'=>$data2->segment2,
        'segment3'=>$data3->segment3,
        'segment4'=>$data4->segment4

        ]);
      
    }


    public function b_head_question(Request $request){
  
        DB::table('market')
        ->where('entre_id',session('startup'))
        ->update([
          'b_head_qu1'=>$request->qus1,
          'b_head_qu2'=>$request->qus2,
          'b_head_qu3'=>$request->qus3,
          'b_head_qu4'=>$request->qus4,
          'b_head_qu5'=>$request->qus5,
          'b_head_qu6'=>$request->qus6,
          ]);
    }
    
    public function b_head_summary(Request $request){
      $data = json_decode($request->inputdata); 

          $datavalide = $request->validate([
            'inputdata' => 'required',
        ]);
              
              if ($datavalide == true) {
               
                DB::table('market')
                ->where('entre_id',session('startup'))
                ->update([
                  'beachhead_summary'=>$data->inputdata,
                ]);
              
                  return back();

              }
    }

    public function total_market_size(Request $request){
      $data=json_decode($request->inputdata);
      DB::table('market')->where('entre_id',session('startup'))
      ->update(['total_available_market_size'=>$data->inputdata]);

    }

    public function market_life_cycle(Request $request){
      $data=json_decode($request->inputdata);
      DB::table('market')->where('entre_id',session('startup'))
      ->update(['full_life_cycle_user_case'=>$data->inputdata]);

    }


}
