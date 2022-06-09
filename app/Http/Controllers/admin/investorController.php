<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investor;
use Illuminate\Support\Facades\DB;
use App\Models\Investment_process;
use App\Mail\FallupMail;
use App\Mail\MatchEmail;
use App\Mail\investor_account_status;
use App\Models\notifications;
use Illuminate\Support\Facades\Mail;

class investorController extends Controller
{
    public function index(){
    	$inv=Investor::all();
    	$country =DB::table('country_names')->get();
    	return view('Admin.investors',compact('inv','country'));
    }

    public function profile($id)
    {
    	$investor=Investor::find($id);
		$country=DB::table('country_names')->get();
          $sectors=DB::table('sectors')
              ->get();
                  
          $sector_data="";
         foreach ($sectors as $row) {
         $sector_data.="'".$row->sector_name."',";
         }
         $sector_data=substr($sector_data, 0,-2);



    	return view('Admin.investor_profile',compact('investor','country','sector_data'));

    }

    public function update1(Request $request)
    {
    	
         $id=$request->investor;

            $datavalide = $request->validate([
            'first_name' => 'required', 'string',
            'last_name' => 'required', 'string',
            'email' => 'required', 'string',
            'investor_account' => 'required',

            ]);
           if ($datavalide == true) {
            
            DB::table('investors')
            ->where('investor_id',$id)
            ->update([
              'env_name'=>$request->first_name,
              'env_last_name'=>$request->last_name,
              'env__email'=>$request->email,
              'account_type'=>$request->investor_account,
            ]);
            session()->flash('notif','Successfully Updated ! ');
            return back();
         }
    }
    public function update2(Request $request)
    {
          $id=$request->investor;
           $datavalide = $request->validate([
             'invest_amount'=>'required',
             'country'=>'required',
             'phone'=>'required',
             'interested_sector'=>'required',
             'Initial_Startup'=>'required',  
            ]);
         if ($datavalide == true) {
             DB::table('investors')
            ->where('investor_id',$id)
            ->update([
             'investment_amount'=>$request->invest_amount,
             'country'=>$request->country,
             'env_phone'=>$request->phone,
             'intersted_sector'=>$request->interested_sector,
             'intial_startup_criteria'=>$request->Initial_Startup,
            ]);
            session()->flash('notif','Successfully Updated ! ');
            return back();

         }    }

     public function update3(Request $request)
    {
          $id=$request->investor;

			$datavalide = $request->validate([
            'invest_date' => 'required', 'string',
            'investment_amount' => 'required', 'string',
            'Business_sector' => 'required', 'string',
            'Bussness_name'=>'required',   
            'resuts'=>'required',   
            ]);
         if ($datavalide==true) {
           
              DB::table('investors')
            ->where('investor_id',$id)
            ->update([
             'port_busniess_name'=>$request->Bussness_name,
             'port_busniess_sector'=>$request->Business_sector,
             'port_invest_date'=>$request->invest_date,
             'port_invest_amount'=>$request->investment_amount,
             'results'=>$request->resuts,             
            ]);

            session()->flash('notif','Successfully Updated ! ');
            return back();
         }


    }


    public function delete($id)
    {
      
      DB::table('notifications')->where('investor_id',$id)->delete();
        Investor::find($id)->delete();
    }

    public function invest_request(){
       
       $invest=DB::table('investment_processes')
       ->select('entrepreneurs.entre_email','entrepreneurs.entrepreneurs_id','entrepreneurs.company_name','entrepreneurs.startup_name','investors.investor_id','investors.env__email','investors.env_last_name','investors.env_name','investment_processes.investment_ammount','investment_processes.created_at','investment_processes.invest_process_id','investment_processes.status')
        ->join('entrepreneurs','entrepreneurs.entrepreneurs_id','investment_processes.entrepreneurs_id')
       ->join('investors','investors.investor_id','investment_processes.investor_id')
       ->orderBy('investment_processes.created_at','DESC')->get();

       return view('Admin.investment_request',compact('invest'));
    }


    public function saved_business(){
   $invest=DB::table('saved_business_log')
       ->select('entrepreneurs.entre_email','entrepreneurs.company_name','entrepreneurs.startup_name','investors.env__email','investors.env_last_name','investors.env_name'
            ,'entrepreneurs.entre_last_name','entrepreneurs.entre_name')
        ->join('entrepreneurs','entrepreneurs.entrepreneurs_id','saved_business_log.entre_id')
       ->join('investors','investors.investor_id','saved_business_log.investor_id')
       ->orderBy('saved_log_id','DESC')->get();

       return view('Admin.business_log_save',compact('invest'));
    }

    public function cancel_business (){
       
   $invest=DB::table('cancel_request')
     ->select('entrepreneurs.entre_email','entrepreneurs.company_name','entrepreneurs.startup_name','investors.env__email','investors.env_last_name','investors.env_name'
            ,'entrepreneurs.entre_last_name','entrepreneurs.entre_name','summary')
        ->join('entrepreneurs','entrepreneurs.entrepreneurs_id','cancel_request.entre_id')
       ->join('investors','investors.investor_id','cancel_request.investor_id')
       ->orderBy('cancel_id','DESC')->get();

       return view('Admin.cancel_request',compact('invest'));

    }

    public function fallup_email(Request $request)
    {
                 
          $details=[
                'body'=>$request->body,
                'subject'=>$request->subject
            ];

            
                    $ex=explode(',', $request->email);
                    $a=$ex[0];
                    $b=$ex[1];
                    $emails = [$a,$b];

                 Mail::to($emails)->send(new FallupMail($details));
                 session()->flash('notif','Your Email Send Successfully! ');
                 return back();
    }


    public function match($investor_id,$enterprenure_id,$invest_process_id){
               $investor=DB::table('investors')->where('investor_id',$investor_id)->get();
              $url=url('matched-business');
                $ndetails="<p>Dear <b>".$investor[0]->env_name .' '.$investor[0]->env_last_name.", </b> 
                 <br>Thanks for your interest to invest.<br> This link contains the selected entrepreneur's full information including contact details.<br>
                    <a href=".$url.">Link</a>
                    </p>";

                    // notifications
                     $not=new notifications;
                     $not->investor_id=$investor_id;
                     $not->html_description=$ndetails;
                     $not->description="";
                     $not->save();

           $details=[
                'body'=>$ndetails,
            ];
            Mail::to($investor[0]->env__email)->send(new MatchEmail($details));

        DB::table('investment_processes')
        ->where('invest_process_id',$invest_process_id)
        ->update(['status'=>'Matched']);
    
        
        session()->flash('notif','Investor & Entreprenure Matched Successfully !');

        return back();
    }

    public function change_account_status2 ($id ,$status)
    {
           $inv=DB::table('investors')
          ->where('investor_id',$id)->get();

         $details=[
            'name'=> $inv[0]->env_name.' '. $inv[0]->env_last_name,
            ];
            Mail::to($inv[0]->env__email)->send(new investor_account_status($details));  
           $not=new notifications;
             $not->investor_id=$id;
             $not->description="Your account is approved. Now you can start exploring investment opportunities on the platform";
             $not->save();
        
           DB::table('investors')
          ->where('investor_id',$id)
          ->update([
            'admin_status'=>$status,
          ]);
         session()->flash('notif','investor account status changed successfully');
        return redirect()->back();
        
        
    }
}
