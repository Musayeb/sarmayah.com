<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entrepreneurs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\changeEntreStatus;
use App\Mail\entreChangeCatagory;
use App\Models\notifications;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class entrepreneurcontroller extends Controller
{
public function bus_draft(){	
	$ent=DB::table('entrepreneurs')
  ->where('admin_status','Draft')
  ->where('varify_status','varifyed')
	->orderBY('entrepreneurs.created_at','desc')
	->get();
  $pagetype="Draft Business";

	$country=DB::table('country_names')->get();
	return view('Admin.enterpreuners',compact('ent','country','pagetype'));

  }
  public function bus_all(){ 
  $ent=DB::table('entrepreneurs')
  ->orderBY('entrepreneurs.created_at','desc')
  ->get();
  $pagetype="All Business";
  $country=DB::table('country_names')->get();
  return view('Admin.enterpreuners',compact('ent','country','pagetype'));

  }
  public function submited_business(){ 
      
  $ent=DB::table('entrepreneurs')
  ->where('admin_status','Submitted')
  ->where('varify_status','varifyed')
  ->orderBY('entrepreneurs.created_at','desc')
  ->get();
  
  $pagetype="Submited Business";

  $country=DB::table('country_names')->get();
  return view('Admin.enterpreuners',compact('ent','country','pagetype'));

  }



  public function bus_approved(){ 
  $ent=DB::table('entrepreneurs')
  ->where('admin_status','Approved')
  ->where('varify_status','varifyed')
  ->orderBY('entrepreneurs.created_at','desc')
  ->get();
  $pagetype="Approved Business";
  $country=DB::table('country_names')->get();
  return view('Admin.enterpreuners',compact('ent','country','pagetype'));

  }
  public function bus_reject(){ 
  $ent=DB::table('entrepreneurs')
  ->where('admin_status','Rejected')
  ->where('varify_status','varifyed')
  ->orderBY('entrepreneurs.created_at','desc')
  ->get();
  $pagetype="Rejected Business";


  $country=DB::table('country_names')->get();
  return view('Admin.enterpreuners',compact('ent','country','pagetype'));

  }
  public function bus_not_verifyed(){ 
  $ent=DB::table('entrepreneurs')
  ->where('varify_status',null)
  ->orderBY('entrepreneurs.created_at','desc')
  ->get();
  $pagetype="Not Verified";

  $country=DB::table('country_names')->get();
  return view('Admin.enterpreuners',compact('ent','country','pagetype'));

  }

    public function Edit($id){
    	$edit=DB::table('entrepreneurs')
    	->where('entrepreneurs_id',$id)
    	->get();
    	// return "ssaa";
    	echo json_encode($edit);
    }
     public function update(Request $request){
  
        $datavalide = $request->validate([
           'first_name' => 'required', 'string',
            'last_name' => 'required', 'string',
            'email' => 'required', 'string',
            'phone' => 'required', 'string',
            'country' => 'required', 'string',
    
        ]);
              
          if ($datavalide == true) {

		   	 DB::table('entrepreneurs')
		   	 ->where('entrepreneurs_id', $request->en_id)
		     ->update(['entre_name' => $request->first_name,
		     		  'entre_last_name'=>$request->last_name,
		     		  'country'=>$request->country,
		     		  'entre_phone'=>$request->phone,
		     		  'entre_email'=>$request->email
		 	]);
		 }
		 	 session()->flash('notif','Record updated successfully!');

  		 return redirect()->back();

    }
     public function delete($id){
        	
           Entrepreneurs::find($id)->delete();
            DB::table('entre_financial')->where('entre_id',$id)->delete();
            DB::table('busniess_trends')->where('entre_id',$id)->delete();
            DB::table('business_view')->where('entre_id',$id)->delete();
            DB::table('busniess_model_convas')->where('entre_id',$id)->delete();
            DB::table('compititive_advantage')->where('entre_id',$id)->delete();
            DB::table('implement_phase')->where('entre_id',$id)->delete();
            DB::table('market_positionning')->where('entre_id',$id)->delete();
            DB::table('investment_manage')->where('entre_id',$id)->delete();
            DB::table('market')->where('entre_id',$id)->delete();
            DB::table('team_members')->where('entre_id',$id)->get();
            DB::table('notifications')->where('entreprenure_id',$id)->get();
            
           session()->flash('notif','Record Deleted Successfully !');

    }
   

    //sme admin update 
    public function sme_profile_update(Request $request){
            $id =$request->hide;

        $datavalide = $request->validate([
            
            'company_name' => 'required', 'string',
            'establishment_date' => 'required', 'string',
            'kind_of_investment' => 'required',
            'rounds_of_investment' => 'required',
            'business_sector' => 'required', 'string',
            'mainimum_amount' => 'required', 'integer',
            'team_size' => 'required', 'integer',
            'company_address' => 'required', 'string',    
        ]);
              
              if ($datavalide == true) {
                DB::table('entrepreneurs')
                ->where('entrepreneurs_id',$id)
                ->update([
                  'company_name'=>$request->company_name,
                  'establishment_date'=>$request->establishment_date,
                  'company_address'=>$request->company_address,
                  'contract_client'=>$request->contract_client,
                  'contract_value'=>$request->contract_value,
                  'contract_client_email'=>$request->contract_client_email,
                  'contract_duration_strat'=>$request->start_date,
                  'contract_duration_end'=>$request->end_date,
                  'kind_of_investment'=>$request->kind_of_investment,
                  'round_invest'=>$request->rounds_of_investment,
                  'ent_industry_sector'=>$request->business_sector,
                  'mainimum_amount_looking'=>$request->mainimum_amount,
                  'team_size'=>$request->team_size,
                  'website_url'=>$request->website_url,
                  'facebook_url'=>$request->facebook_url,
                  'linkedin_url'=>$request->linkedin_url,
                  'instagram_url'=>$request->instagram_url

                ]);
                  session()->flash('notif','Information Update Successfully !');
                  return back();

         }
        
    }public function sme_profile_update1(Request $request){
            $id =$request->hide;
            $datavalide = $request->validate([
            
            'Eleventor_Pitch' => 'required', 'string',
            'problem_and_solution' => 'required', 'string',

            
        ]);
              
              if ($datavalide == true) {
            
                DB::table('entrepreneurs')
                ->where('entrepreneurs_id',$id)
                ->update([
                  'elavator_picth'=>$request->Eleventor_Pitch,
                  'problem_sulotion'=>$request->problem_and_solution,
          
                ]);
                   session()->flash('notif','Information Update Successfully !');
                  return redirect()->back();

              }



        
    }public function sme_profile_update2(Request $request){
            $id =$request->hide;

          $datavalide = $request->validate([
            'top_Competitiors' => 'required','string',
        ]);
              
              if ($datavalide == true) {
                DB::table('entrepreneurs')
                ->where('entrepreneurs_id',$id)
                ->update([
                  'ent_revenue'=>$request->Bussiness_Revenue,
                  'ent_operation_cost'=>$request->Bussiness_Operation,
                  'top_three_campatitors'=>$request->top_Competitiors,
                  'incobation_program_center'=>$request->incoubation,
                  'graduation_date'=>$request->Graduation_date,
              ]);
                  session()->flash('notif','Information Update Successfully !');
                  return redirect()->back();
              }
        
    }public function sme_profile_update3(Request $request){   

            $id =$request->hide;  
             $ent =Entrepreneurs::find($id);
             if (empty($request->profile_picture)&&empty($request->company_profile)&&empty($request->pitch_presentation)&&empty($request->youtube_video)) {
               return back();
             }
             $datavalide = $request->validate([            
            'profile_picture' =>'image|mimes:jpeg,png,jpg|max:7000|',
            'company_profile' => 'file|mimes:pdf,pptx|max:25000|',
            'pitch_presentation' => 'file|mimes:pdf,pptx|max:25000|',   
            'youtube_video'=>'',   
        ]);
              
              if ($datavalide == true) {
             
                 if ($request->hasFile('profile_picture')&&$request->hasFile('pitch_presentation')&&$request->hasFile('company_profile')){
                          Storage::delete($ent->logo);
                          $logo= Storage::putFile('/public/bussnessLogo/',$request->file('profile_picture'));
                           Storage::delete($ent->pitch_presentation);
                          $presentation= Storage::putFile('/public/presentation/',$request->file('pitch_presentation'));
                          Storage::delete($ent->company_profile);
                            $companyprofile= Storage::putFile('/public/companyprofile/',$request->file('company_profile'));
                    }

                    if ($request->hasFile('profile_picture')){
                          Storage::delete($ent->logo);
                          $logo= Storage::putFile('/public/bussnessLogo/',$request->file('profile_picture'));
                    }
                    if ($request->hasFile('pitch_presentation')){
                          Storage::delete($ent->pitch_presentation);
                          $presentation= Storage::putFile('/public/presentation/',$request->file('pitch_presentation'));
                    }if ($request->hasFile('company_profile')){
                            Storage::delete($ent->company_profile);
                            $companyprofile= Storage::putFile('/public/companyprofile/',$request->file('company_profile'));
                    }

                   if (empty($request->profile_picture)) {

                      $logo=$ent->logo;
                    }
                    if (empty($request->pitch_presentation)) {
                      $presentation=$ent->pitch_presentation;
                    }
                    if (empty($request->company_profile)) {
                      $companyprofile=$ent->company_profile;
                    }
             

                   DB::table('entrepreneurs')
                      ->where('entrepreneurs_id',$id)
                      ->update([
                        'logo'=> $logo,
                        'pitch_presentation'=>$presentation,
                        'company_profile'=>$companyprofile,
                        'pitch_video_link'=>$request->youtube_video,

                 ]);
                 session()->flash('notif','Information Update Successfully !');
                  return redirect()->back();

        }

    }

    // end of sme
    public function startup_profile_update(Request $request){


        $datavalide = $request->validate([
            
            'startup_name' => 'required', 'string',
            'establishment_date' => 'required', 'string',
            'kind_of_investment' => 'required',
            'rounds_of_investment' => 'required',
            'business_sector' => 'required', 'string',
            'mainimum_amount' => 'required', 'integer',
            'team_size' => 'required', 'integer',

    
        ]);
              
              if ($datavalide == true) {
                
                $id =session('startup');
                DB::table('entrepreneurs')
                ->where('entrepreneurs_id',$id)
                ->update([
                  'startup_name'=>$request->startup_name,
                  'establishment_date'=>$request->establishment_date,
                  'kind_of_investment'=>$request->kind_of_investment,
                  'round_invest'=>$request->rounds_of_investment,
                  'ent_industry_sector'=>$request->business_sector,
                  'mainimum_amount_looking'=>$request->mainimum_amount,
                  'team_size'=>$request->team_size,
                  'website_url'=>$request->website_url,
                  'facebook_url'=>$request->facebook_url,
                  'linkedin_url'=>$request->linkedin_url,
                  'instagram_url'=>$request->instagram_url

                ]);
                  session()->flash('notif','Information Update Successfully !');
                  return redirect()->back();


                
           } 
    }public function startup_profile_update1(Request $request){
        $id=$request->hide;
         $datavalide = $request->validate([
            
            'Eleventor_Pitch' => 'required', 'string',
            'problem_and_solution' => 'required', 'string',

        ]);

              if ($datavalide == true) {

                DB::table('entrepreneurs')
                ->where('entrepreneurs_id',$id)
                ->update([
                  'elavator_picth'=>$request->Eleventor_Pitch,
                  'problem_sulotion'=>$request->problem_and_solution,
          
                ]);
                   session()->flash('notif','Information Update Successfully !');
                  return redirect()->back();

              }
         
    }public function startup_profile_update2(Request $request){
                $id =$request->hide;

          $datavalide = $request->validate([
            'top_Competitiors' => 'required','string',
        ]);
              
              if ($datavalide == true) {
                DB::table('entrepreneurs')
                ->where('entrepreneurs_id',$id)
                ->update([
                  'ent_revenue'=>$request->Bussiness_Revenue,
                  'ent_operation_cost'=>$request->Bussiness_Operation,
                  'top_three_campatitors'=>$request->top_Competitiors,
                  'incobation_program_center'=>$request->incoubation,
                  'graduation_date'=>$request->Graduation_date,
              ]);
                  session()->flash('notif','Information Update Successfully !');
                  return redirect()->back();
              }



    }public function startup_profile_update3(Request $request){
          $id =$request->hide;
             $ent =Entrepreneurs::find($id);
             if (empty($request->profile_picture)&&empty($request->company_profile)&&empty($request->pitch_presentation)&&empty($request->youtube_video)) {
               return back();
             }
             $datavalide = $request->validate([            
            'profile_picture' =>'image|mimes:jpeg,png,jpg|max:7000|',
            'company_profile' => 'file|mimes:pdf,pptx|max:25000|',
            'pitch_presentation' => 'file|mimes:pdf,pptx|max:25000|',   
            'youtube_video'=>'',   
        ]);
              
              if ($datavalide == true) {
             
                 if ($request->hasFile('profile_picture')&&$request->hasFile('pitch_presentation')&&$request->hasFile('company_profile')){
                          Storage::delete($ent->logo);
                          $logo= Storage::putFile('/public/bussnessLogo/',$request->file('profile_picture'));
                           Storage::delete($ent->pitch_presentation);
                          $presentation= Storage::putFile('/public/presentation/',$request->file('pitch_presentation'));
                          Storage::delete($ent->company_profile);
                            $companyprofile= Storage::putFile('/public/companyprofile/',$request->file('company_profile'));
                    }

                    if ($request->hasFile('profile_picture')){
                          Storage::delete($ent->logo);
                          $logo= Storage::putFile('/public/bussnessLogo/',$request->file('profile_picture'));
                    }
                    if ($request->hasFile('pitch_presentation')){
                          Storage::delete($ent->pitch_presentation);
                          $presentation= Storage::putFile('/public/presentation/',$request->file('pitch_presentation'));
                    }if ($request->hasFile('company_profile')){
                            Storage::delete($ent->company_profile);
                            $companyprofile= Storage::putFile('/public/companyprofile/',$request->file('company_profile'));
                    }

                   if (empty($request->profile_picture)) {

                      $logo=$ent->logo;
                    }
                    if (empty($request->pitch_presentation)) {
                      $presentation=$ent->pitch_presentation;
                    }
                    if (empty($request->company_profile)) {
                      $companyprofile=$ent->company_profile;
                    }
             

                   DB::table('entrepreneurs')
                      ->where('entrepreneurs_id',$id)
                      ->update([
                        'logo'=> $logo,
                        'pitch_presentation'=>$presentation,
                        'company_profile'=>$companyprofile,
                        'pitch_video_link'=>$request->youtube_video,

                 ]);
                 session()->flash('notif','Information Update Successfully !');
                  return redirect()->back();

        }
    }


    public function idea_profile_update(Request $request){

        $id =$request->hide; 

           DB::table('entrepreneurs')
              ->where('entrepreneurs_id',$id)
              ->update([
                'education_degree'=>$request->education_degree,
                'school_name'=>$request->School_name,
                'graduaction_year'=>$request->school_graduation_year,
                'eduaction_field'=>$request->education_field,
                 'university_name'=>$request->university_name,
                'uni_graduation_year'=>$request->university_graduation_year,
                 'position'=>$request->position,
                'organization'=>$request->organization,
                'exper_start_date'=>$request->start_date,
                'exper_end_date'=>$request->end_date,
         ]);
        session()->flash('notif','Information Update Successfully !');
        return back();


    
    }public function idea_profile_update1(Request $request){
          $datavalide = $request->validate([
            
            'Eleventor_Pitch' => 'required', 'string',
            'problem_and_solution' => 'required', 'string',

            
        ]);
              if ($datavalide == true) {
   
                $id =$request->hide;
                DB::table('entrepreneurs')
                ->where('entrepreneurs_id',$id)
                ->update([
                  'elavator_picth'=>$request->Eleventor_Pitch,
                  'problem_sulotion'=>$request->problem_and_solution,
          
                ]);
                   session()->flash('notif','Information Update Successfully !');
                  return redirect()->back();

              }
        
    }

    public function idea_profile_update2(Request $request){
        
         $datavalide = $request->validate([
            
            'Estimated_Revenue' => 'required', 'string',
            'Estimated_Operation' => 'required',
            'Potential_top_Competitiors' => 'required',
            'raised_ammount' => 'required', 'string',  
        ]);
              
              if ($datavalide == true) {
                
               $id =$request->hide;
                DB::table('entrepreneurs')
                ->where('entrepreneurs_id',$id)
                ->update([
                  'startup_name'=>$request->startup_name,
                  'establishment_date'=>$request->establishment_date,
                  'kind_of_investment'=>$request->kind_of_investment,
                  'round_invest'=>$request->rounds_of_investment,
                  'ent_industry_sector'=>$request->business_sector,
                  'mainimum_amount_looking'=>$request->mainimum_amount,
                  'ent_revenue'=>$request->Estimated_Revenue,
                  'ent_operation_cost'=>$request->Estimated_Operation,
                  'top_three_campatitors'=>$request->Potential_top_Competitiors,
                  'raised_ammount'=>$request->raised_ammount,
                  'incobation_program_center'=>$request->incoubation,
                  'graduation_date'=>$request->Graduation_date,

                ]);
                  session()->flash('notif','Information Update Successfully !');
                  return redirect()->back();
           } 
    }

    public function idea_profile_update3(Request $request){
      
          $datavalide = $request->validate([
            
            'idea_name' => 'required', 'string',
            'establishment_date' => 'required', 'string',
            'kind_of_investment' => 'required',
            'rounds_of_investment' => 'required',
            'business_sector' => 'required', 'string',
            'mainimum_amount' => 'required', 'integer',
            'team_size' => 'required', 'integer',
        ]);
              
              if ($datavalide == true) {
                
               $id =$request->hide;
                DB::table('entrepreneurs')
                ->where('entrepreneurs_id',$id)
                ->update([
                  'startup_name'=>$request->idea_name,
                  'establishment_date'=>$request->establishment_date,
                  'kind_of_investment'=>$request->kind_of_investment,
                  'round_invest'=>$request->rounds_of_investment,
                  'ent_industry_sector'=>$request->business_sector,
                  'mainimum_amount_looking'=>$request->mainimum_amount,
                  'team_size'=>$request->team_size,
                   ]);

                  session()->flash('notif','Information Update Successfully !');
                  return redirect()->back();
                
           } 
    }
    public function idea_profile_update4(Request $request){
          $id =$request->hide;
             $ent =Entrepreneurs::find($id);
             if (empty($request->profile_picture)&&empty($request->company_profile)&&empty($request->pitch_presentation)&&empty($request->youtube_video)) {
               return back();
             }
             $datavalide = $request->validate([            
            'profile_picture' =>'image|mimes:jpeg,png,jpg|max:7000|',
            'pitch_presentation' => 'file|mimes:pdf|max:25000|',   
            'youtube_video'=>'',   
        ]);
              
              if ($datavalide == true) {
             
                 if ($request->hasFile('profile_picture')&&$request->hasFile('pitch_presentation')){
                          Storage::delete($ent->logo);
                          $logo= Storage::putFile('/public/bussnessLogo/',$request->file('profile_picture'));
                           Storage::delete($ent->pitch_presentation);
                          $presentation= Storage::putFile('/public/presentation/',$request->file('pitch_presentation'));
                    }

                    if ($request->hasFile('profile_picture')){
                          Storage::delete($ent->logo);
                          $logo= Storage::putFile('/public/bussnessLogo/',$request->file('profile_picture'));
                    }
                    if ($request->hasFile('pitch_presentation')){
                          Storage::delete($ent->pitch_presentation);
                          $presentation= Storage::putFile('/public/presentation/',$request->file('pitch_presentation'));
                    }

                   if (empty($request->profile_picture)) {

                      $logo=$ent->logo;
                    }
                    if (empty($request->pitch_presentation)) {
                      $presentation=$ent->pitch_presentation;
                    }
   

                   DB::table('entrepreneurs')
                      ->where('entrepreneurs_id',$id)
                      ->update([
                        'logo'=> $logo,
                        'pitch_presentation'=>$presentation,
                        'pitch_video_link'=>$request->youtube_video,

                 ]);
                 session()->flash('notif','Information Update Successfully !');
                  return redirect()->back();

        }
  }

        public function change_account_status($id,$status){
           $entre=DB::table('entrepreneurs')
          ->where('entrepreneurs_id',$id)->get();

         $details=[
            'name'=> $entre[0]->entre_name.' '. $entre[0]->entre_last_name,
            'previous_status'=>$entre[0]->admin_status,
            'next_status'=>$status
            ];
            Mail::to($entre[0]->entre_email)->send(new changeEntreStatus($details));  
           $not=new notifications;
             $not->entreprenure_id=$id;
             $not->description="Your account is approved";
             $not->save();
 
          DB::table('entrepreneurs')
          ->where('entrepreneurs_id',$id)
          ->update([
            'admin_status'=>$status,
          ]);

         session()->flash('notif','Information Updated Successfully !');
            return redirect()->back();
        }

        public function change_account_cat($id ,$catagory){
            $entre=DB::table('entrepreneurs')
          ->where('entrepreneurs_id',$id)->get();

         $details=[
            'name'=> $entre[0]->entre_name.' '. $entre[0]->entre_last_name,
            'previous_status'=>$entre[0]->catagory,
            'next_status'=>$catagory
            ];
            Mail::to($entre[0]->entre_email)->send(new entreChangeCatagory($details));  
           $not=new notifications;
             $not->entreprenure_id=$id;
             $not->description="Your busniess catagory has changed";
             $not->save();
                session()->pull('sme',1); 
          
             if($entre[0]->catagory=="SME"){
                session()->pull('sme',1); 
             }
              if($entre[0]->catagory=="STARTUP"){
                session()->pull('startup',$id);
             } if($entre[0]->catagory=="IDEA"){
                session()->pull('idea',$id);
             }
          
            DB::table('entrepreneurs')
            ->where('entrepreneurs_id',$id)
            ->update([
              'catagory'=>$catagory,
            ]);
      session()->flash('notif','Information Updated Successfully !');
            return redirect()->back();
          
        }
  





}
