<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Investor;
use App\Models\notifications;
use App\Models\Entrepreneurs;


class InvestorController extends Controller
{
   	
     public function profile()
     {
      $id=session('investor');
      $investor=Investor::find($id);
      $country=DB::table('country_names')->get();

      $sectors=DB::table('sectors')
      ->get();
      
      $sector_data="";
     foreach ($sectors as $row) {
     $sector_data.="'".$row->sector_name."',";
     }
     $sector_data=substr($sector_data, 0,-2);




       return view('investor_profile',compact('country','investor','sector_data'));
     }
     public function change_detail_main(Request $request){
           $id=session('investor');
         $investor=Investor::find($id);
            $datavalide = $request->validate([
            'first_name' => 'required', 'string',
            'last_name' => 'required', 'string',
            'email' => 'required', 'string',
            'investor_account' => 'required',
             'password'=>'required',   
            ]);

           if ($datavalide == true) {
           if (Hash::check($request->password,$investor->env_password)){
            
            DB::table('investors')
            ->where('investor_id',$id)
            ->update([
              'env_name'=>$request->first_name,
              'env_last_name'=>$request->last_name,
              'env__email'=>$request->email,
              'env_password'=>password_hash($request->password, PASSWORD_DEFAULT),
              'account_type'=>$request->investor_account,
            ]);
            session()->flash('notif','Successfully Updated ! ');
            return back();
         }else{
            session()->flash('error','Current password is Wrong !');
           return back();
         }

       }     
     }


     public function change_password(Request $request){
         $id=session('investor');
         $investor=Investor::find($id);       
        
         $datavalide = $request->validate([
             'current_password'=>'required|min:6',
             'new_password'=>'required|min:6|same:conferm_password',   
             'conferm_password'=>'required|min:6',   
            ]);

        if ($datavalide == true) {
         if (Hash::check($request->current_password,$investor->env_password)){
          DB::table('investors')
            ->where('investor_id',$id)
            ->update([
              'env_password'=>password_hash($request->new_password, PASSWORD_DEFAULT),
            ]);
          
            session()->flash('notif','Successfully Updated ! ');
            return back();
          }else{
            session()->flash('error','Current password is Wrong !');
            return back();

          }

        }
     }

     public function change_detail(Request $request){
        //  echo "string";
        // exit;
         $id=session('investor');     
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
             'env_protfolio'=>$request->portfolio,  
            ]);
            session()->flash('notif','Successfully Updated ! ');
            return back();

         }

     }


     public function add_portfolio(Request $request){
               $id=session('investor');     

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


public function show_notification()
{
    $notfi = DB::table('notifications')
     ->where('investor_id',session('investor'))
     ->orderBy('created_at','Desc')->get();

     DB::table('notifications')
     ->where('investor_id',session('investor'))
     ->update([
      'status'=>'1',

     ]);
     
  return view('Investor.notifications',compact('notfi'));
}


  public function delete_notification($id)
  {
     notifications::find($id)->delete();
          
  }

 
public function invested_entreprenure($id)
{
        
        $id=explode('$', $id);

        if ($id[0]==hash('MD5',$id[1])) {
             
        $ent=Entrepreneurs::find($id[1]);

        return view('Investor.invested_entreprenure_startup',compact('ent'));

        }else{
          return back();
        }
          


}

}
