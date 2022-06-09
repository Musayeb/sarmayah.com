<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Entrepreneurs;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Str;


class ideaController extends Controller{

 public function idea_update_logo(Request $request){

             $id = $request->hide_input;
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
                 session()->flash('forth_tab','forth_tab'); 
                  return redirect()->back();
            }              
    }

     public function idea_update_pitch_deck(Request $request){
           $id = $request->hide_input;

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
                 session()->flash('forth_tab','forth_tab');   
                 session()->flash('notif','Information update successfully!');
                  return redirect()->back();
            }  
    } 

    public function idea_team_member($id){

      return view('Admin.team.idea_add_team_member',compact('id'));
    } 
    public function idea_add_team_member_add(Request $request){

      try {
	    $id = decrypt($request->hide_id);
	    } catch (DecryptException $e) {
	        abort(404);
	    }   

      $datavalide = $request->validate([  
        'full_name' => 'required', 'string',
        'position' => 'required', 'string',
        'summary' => 'required',
        'photo'=>'required|mimes:png,jpg,jpeg|max:2048|'
    ]);
    if($datavalide==true){
        if($request->hasFile('photo')){
        $path=Storage::put('public/members_photo',$request->file('photo'));		
        DB::table('team_members')->insert([
        'entre_id'=>$id,	
        'full_name'=>$request->full_name,
        'position'=>$request->position,
        'summary'=>$request->summary,
        'photo'=>$path,
        ]);
    session()->flash('notif','Information update successfully!');
     $url='ad/business_profile'.'/'.$request->hide_id;
 
    return redirect($url);
      }
     }
    } 

    public function idea_add_team_member_delete($id){
      try {
        $id = decrypt($id);
        } catch (DecryptException $e) {
            abort(404);
        }   
     $member=DB::table('team_members')->where('team_id',$id)->get();
          Storage::delete($member[0]->photo);
        DB::table('team_members')->where('team_id',$id)->delete();
      
  }
  public function idea_edit_team_member($id){
     
    try {
    $id = decrypt($id);
     $member=DB::table('team_members')->where('team_id',$id)->get();
     return view('Admin.team.idea_edit_team_member',compact('member'));
    } catch (DecryptException $e) {
        abort(404);
    }   
  }

  public function idea_update_team_member(Request $request)
  {
     
          $datavalide = $request->validate([  
            'full_name' => 'required', 'string',
            'position' => 'required', 'string',
            'summary' => 'required',
        ]);
    

    if($datavalide==true){

       try {$id = decrypt($request->id);} catch (DecryptException $e) {abort(404);}
         
        $team=DB::table('team_members')->where('team_id',$id)->get();


        if($request->hasFile('photo')){
        Storage::delete($team[0]->photo);	
        $path=Storage::put('public/members_photo',$request->file('photo'));		
            DB::table('team_members')->where('team_id',$id)
            ->update([
            'full_name'=>$request->full_name,
            'position'=>$request->position,
            'summary'=>$request->summary,
            'photo'=>$path,
        ]);
         session()->flash('notif','Information update successfully!');
             $url='ad/business_profile'.'/'.$request->ad_id;
             return redirect($url);
        }else{
            DB::table('team_members')->where('team_id',$id)->update([
            'full_name'=>$request->full_name,
            'position'=>$request->position,
            'summary'=>$request->summary,
        ]);

        session()->flash('notif','Information update successfully!');
        $url='ad/business_profile'.'/'.$request->ad_id;
        return redirect($url);
        }	

        }	
      }

      public function  idea_profile_update(Request $request){
 
        $id = $request->hide_input;
      
        DB::table('entrepreneurs')
        ->where('entrepreneurs_id',$id)
        ->update([
          'startup_name'=>$request->idea_name,
          'slug'=>Str::slug($request->idea_name, '-'),
          'establishment_date'=>$request->establishment_date,
          'ent_industry_sector'=>$request->business_sector,
          'mainimum_amount_looking'=>str_replace(',', '', $request->mainimum_amount),
          'team_size'=>$request->team_size,
          'pitch_video_link'=>$request->youtube,
          ]);

      }


      public function idea_profile_elevator(Request $request)
      {

            $data = json_decode($request->inputdata); 
             $id = $request->hide_input;
              DB::table('entrepreneurs')
              ->where('entrepreneurs_id',$id)
              ->update(['elavator_picth'=>$data->inputdata]);
                
       }
       
      public function idea_profile_problem(Request $request)
      {
            $data = json_decode($request->inputdata); 
               $id = $request->hide_input;
              DB::table('entrepreneurs')
              ->where('entrepreneurs_id',$id)
              ->update(['problem_sulotion'=>$data->inputdata]);
    
       }
       public function idea_profile_solution(Request $request)
       {
             $data = json_decode($request->inputdata); 
  				$id = $request->hide_input;
                 DB::table('entrepreneurs')
               ->where('entrepreneurs_id',$id)
               ->update(['solution'=>$data->inputdata]);
     
        }
    public function busniess_model($data,$id){

        $buniess=DB::table('busniess_model_convas')->select($data)->where('entre_id',$id)->get();        
        return json_encode($buniess);
      }


       
      public function idea_busniess_model_store(Request $request){
        $data = json_decode($request->inputdata); 
         	$id = $request->hide_input;
        DB::table('busniess_model_convas')
          ->where('entre_id',$id)
          ->update([
            $request->hide=>$data->inputdata
          ]);   
      }
      public function the_market(Request $request)
      {
         	$id = $request->hide_input;

         $data = json_decode($request->inputdata); 
          DB::table('market_positionning')->where('entre_id',$id)
          ->update(['the_market'=>$data->inputdata]);
                 
      }
    
      public function busniess_trends_add(Request $request){
         	$id = $request->hide_input;
         $data = json_decode($request->inputdata); 
      
        DB::table('busniess_trends')
          ->where('entre_id',$id)
          ->update([
            'busniess_trends'=>$data->inputdata,
          ]);
  
      }  

        public function idea_risk_analysis(Request $request)
        {
         	$id = $request->hide_input;
  
         $data = json_decode($request->inputdata); 
            DB::table('entrepreneurs')
            ->where('entrepreneurs_id',$id)
            ->update([
              'risk_analysis'=>$data->inputdata
            ]);
        }  
  

        public function compatitive_adv(Request $request){
         	$id = $request->hide_input;

          DB::table('compititive_advantage')
          ->where('entre_id',$id)
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




        public function idea_store_define_invest(Request $request){
         	$id = $request->hide_input;
      
          $data=json_decode($request->inputdata);
          DB::table('investment_manage')->where('entre_id',$id)
          ->update(['define_your_investment_terms'=>$data->inputdata]);
    
    
        }
         public function idea_store_define_invest_plan(Request $request){
         	$id = $request->hide_input;
          
          $data=json_decode($request->inputdata);
          DB::table('investment_manage')->where('entre_id',$id)
          ->update(['plan_for_management_of__investment'=>$data->inputdata]);
          
    
        }
        public function idea_store_define_invest_breackdown(Request $request){
         	$id = $request->hide_input;
          $data=json_decode($request->inputdata);
          DB::table('investment_manage')->where('entre_id',$id)->update(['breakdown_the_costs'=>$data->inputdata]);
          
        }



        public function plan_implement($id){
          $implemet=DB::table('implement_phase')->where('entre_id',$id)->get();
          echo json_encode($implemet);
        }
        public function implement_phase(Request $request)
          {
             $data=json_decode($request->inputdata);
         	  $id = $request->hide_input;

            if ($request->phasetype=="first_phase") {
              DB::table('implement_phase')->where('entre_id',$id)->update([
                'phase_first'=>$data->inputdata,
                'number_1'=>$request->number_timeline,
                'type_1'=>$request->type_timeline,
              ]);
              
              
            }

            if ($request->phasetype=="second_phase") {
              DB::table('implement_phase')->where('entre_id',$id)->update([
                'phase_second'=>$data->inputdata,
                'number_2'=>$request->number_timeline,
                'type_2'=>$request->type_timeline,
              ]);
  
            }

            if ($request->phasetype=="third_phase") {
              DB::table('implement_phase')->where('entre_id',$id)->update([
                'phase_third'=>$data->inputdata,
                'number_3'=>$request->number_timeline,
                'type_3'=>$request->type_timeline,
              ]);
       
            }
        }


        public function idea_finance1(Request $request){
  	       $id = $request->hide_input;
      
      
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

public function idea_finance3(Request $request){
             $id = $request->hide_input;
      
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
          ->where('entre_id',$id)
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
      public function idea_finance2(Request $request){
           $id = $request->hide_input;
      
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

    public function idea_finance4(Request $request)
    {
		     $id = $request->hide_input;
      
      DB::table('entre_financial')
      ->where('entre_id',$id)
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


       public function market_position(Request $request){
         $id=$request->hide_input;
        $ent=Entrepreneurs::find($id)->market_positon_file;    
        $datavalide = $request->validate([            
            'market_positon_file' => 'required|file|mimes:pdf|max:20000|',
        ]);


        if($request->hasFile('market_positon_file')){
         if ($datavalide == true) {
           Storage::delete($ent);      
          $path= Storage::putFile('/public/market_position',$request->file('market_positon_file'));
            DB::table('market_positionning')->where('entre_id',session('idea'))
            ->update(['market_positon_file'=>$path]);
             session()->flash('market_position','market_position');   
             session()->flash('notif','Information update successfully !');  
             return back();
              
          }
  
        }
               
        
        } 





}
