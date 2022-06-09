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
use App\Mail\sendToBusiness;
use App\Mail\week;    

use Illuminate\Support\Facades\Mail;


class homecontroller extends Controller
{
    

 public function test($value='')
  {
        $details=[
          'post'=>'sass'

        ];
         Mail::to("shakib@asaraglobal.com")->send(new week($details));



  }   
public function sendreminder()
{
//   $check=DB::table('reminder_email_log')->where('date',date('Y-m-d'))->get();
//   if (empty($check[0]->date)) {
//       \Artisan::call('command:Reminder');
//       session()->flash('notif','Reminder email send successfully');
//       return back();
//   }else{
//       session()->flash('error','Today reminder emails already sended');
//       return back();

//   }
//  exec('composer dump-autoload');
// dd(done);

}

 public function account_settings(){
  
   return view('Admin.account_settings'); 
  }
  public function admin_info_update(Request $request)
  {
  

  $datavalide = $request->validate([
            'name'=>'required',
            'email'=>'required',
        ]);
         if($datavalide==true){
       
        if ($request->hasFile('photo')) {
      
            $name = Storage::putFile('/public/usersProfile', $request->file('photo'));
            $prev=Auth::user()->profile_photo_path;
            Storage::delete($prev);
            DB::table('users')
           ->where('id',Auth::user()->id)
            ->update([
              'name'=>$request->name,
              'email'=>$request->email,
              'profile_photo_path'=>$name,
            ]);
           session()->flash('notif','Inforamation updated successfully');
            return redirect()->back(); 
        }else{
          DB::table('users')
          ->where('id',Auth::user()->id)
            ->update([
              'name'=>$request->name,
              'email'=>$request->email,
            ]);
           session()->flash('notif','Inforamation updated successfully');
      
          return redirect()->back();
      
        }

      }


  }

  public function change_pasword(Request $request)
  {

   $datavalide = $request->validate([
            'current_password' =>'required|',
            'new_password' =>'required|min:8|same:confirm_password',
            'confirm_password' => 'required|min:8|',
        ]);

       if ($datavalide==true) {
         if (Hash::check($request->current_password,Auth::user()->password)){
            DB::table('users')
          ->where('id',Auth::user()->id)
          ->update([
            'password'=>password_hash($request->new_password, PASSWORD_DEFAULT),
          ]);
        session()->flash('notif','Information updated successfully!');
        return back();
       }else{
         session()->flash('passerror','Current password is Worng!');
        return back();
       }
      }else{
         session()->flash('passerror','Failed! passowrd not changed!');

      }
  }
  
    public function index()
    {
      $result=DB::select('select year(created_at) as year ,month(created_at) as month,count(entrepreneurs_id) as count
     from entrepreneurs
     group by year(created_at),month(created_at)
     order by year(created_at),month(created_at)');
     $chart_data="";
     foreach ($result as $query) {
      $month_name = date("F", mktime(0, 0, 0, $query->month, 10)); 
     $chart_data.="{Month:'".$month_name.''.$query->year."',Business:".$query->count."},";

     }
     $chart_data=substr($chart_data, 0,-2);


  $result1=DB::select('select year(created_at) as year ,month(created_at) as month,count(investor_id) as count
     from investors
     group by year(created_at),month(created_at)
     order by year(created_at),month(created_at)');
     $chart_data1="";
     foreach ($result1 as $query1) {
      $month_name1 = date("F", mktime(0, 0, 0, $query1->month, 10)); 
     $chart_data1.="{Month:'".$month_name1.''.$query1->year."',Investor:".$query1->count."},";

     }
     $chart_data1=substr($chart_data1, 0,-2);


    	return view('Admin.home',compact('chart_data','chart_data1'));
    }
    
    public function userShow()
    {	
    	$users=User::all();
    	return view('Admin.users',compact('users'));
    }
    public function userregister(Request $request)
    {
    	
   $datavalide = $request->validate([
            'username'=>'required','string',
            'email'=>'required','string','max:255','unique:users',
            'password' =>'required|min:8|same:confrem_password',
            'confrem_password' => 'required|min:8|',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($request->hasFile('photo')) {
            $name = Storage::putFile('/public/usersProfile', $request->file('photo'));

        if($datavalide==true){
            $user = new User;
            $user->name =$request->username;
            $user->email= $request->email;
            $user->password =Hash::make($request->password);
            $user->profile_photo_path=$name;
            $user->save();
           session()->flash('notif','User Registered successfully');
            return redirect()->back();
        }

    }

	}
	public function useredit($id)
	{
		$user=User::find($id);
		echo json_encode($user);
	}

	public function userupdate(Request $request)
	{

		  $datavalide = $request->validate([
            'name'=>'required','string',
            'email_address'=>'required','string','max:255','unique:users',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

		   if ($request->hasFile('photo')) {
            $name = Storage::putFile('/public/usersProfile', $request->file('photo'));
           if($datavalide==true){
            $user=User::find($request->user);
            $user->name =$request->name;
            $user->email= $request->email_address;
            $user->profile_photo_path=$name;
            $user->save();
		session()->flash('notif','User Registered successfully');
            return redirect()->back();
    	}


    }else{

	    if($datavalide==true){
         $user=User::find($request->user);     
           $user->name =$request->name;
            $user->email= $request->email_address;
            $user->save();
            session()->flash('notif','User Registered successfully');
            return redirect()->back();

    	}


    }

		
	}
    public function userdelete($id)
    {
        User::find($id)->delete();
    }

    public function sector_index(){

       $sector=DB::table('sectors')
       ->join('users','users.id','sectors.autor')
       ->get();
        
        return view('Admin.sector',compact('sector'));

    }
      public function sector_add(Request $request){
       $date=date('Y-m-d');
         $datavalide = $request->validate([
         'sector_name'=>'required','string',
            ]);
     if ($datavalide==true) {
      if($request->file('sector_photo')){
        $path = Storage::putFile('/public/sectors_photo', $request->file('sector_photo'));
       $sector=DB::table('sectors')
       ->insert([
        'sector_name'=>$request->sector_name,
        'sector_photo'=>$path,
        'autor'=>Auth::user()->id,
        'created_at'=>$date,
        'slug'=>Str::slug($request->sector_name, '-'),

       ]);

       $sec=DB::table('sectors')->orderBy('sector_id','DESC')->limit(1)->get();

       DB::table('popular_serach')->insert(['sector_id'=> $sec[0]->sector_id,'value'=>0]);
  
        session()->flash('notif','Registered successfully');
        return back();
    }else{
       $sector=DB::table('sectors')
       ->insert([
        'sector_name'=>$request->sector_name,
        'autor'=>Auth::user()->id,
        'created_at'=>$date,
        'slug'=>Str::slug($request->sector_name, '-'),

       ]);

       $sec=DB::table('sectors')->orderBy('sector_id','DESC')->limit(1)->get();

       DB::table('popular_serach')->insert(['sector_id'=> $sec[0]->sector_id,'value'=>0]);
  
        session()->flash('notif','Registered successfully');
        return back();
    }

    }
  }
    public function delete_sector($id)
    {
        DB::table('sectors')
        ->where('sector_id',$id)->delete();
        DB::table('popular_serach')->where('sector_id',$id)->delete();

    }
     public function sector_edit($id)
    {
        $sector=DB::table('sectors')
        ->where('sector_id',$id)->get();
        echo json_encode($sector);

    }
    public function sector_update(Request $request){
       $date=date('Y-m-d');
       $datavalide = $request->validate([
         'Update_sector_name'=>'required','string',
         ]);
   if ($datavalide==true) {
      if ($request->hasFile('update_sector_photo')) {
        $photo=DB::table('sectors')->where('sector_id',$request->sector)->select('sector_photo')->get();
         Storage::delete($photo[0]->sector_photo);  
        $path = Storage::putFile('/public/sectors_photo', $request->file('update_sector_photo'));

       $sector=DB::table('sectors')
       ->where('sector_id',$request->sector)
       ->update([
        'sector_name'=>$request->Update_sector_name,
        'slug'=>Str::slug($request->Update_sector_name, '-'),
        'autor'=>Auth::user()->id,
        'sector_photo'=>$path,
        'updated_at'=>$date,
       ]);
        session()->flash('notif','Updated successfully');
        return back();
    }else{
      $sector=DB::table('sectors')
       ->where('sector_id',$request->sector)
       ->update([
        'sector_name'=>$request->Update_sector_name,
        'slug'=>Str::slug($request->Update_sector_name, '-'),
        'autor'=>Auth::user()->id,
        'updated_at'=>$date,
       ]);
        session()->flash('notif','Updated successfully');
        return back();
    }
   }

    }


    public function profile1($id){
      $ent_id=$id;
          try {
            $id = decrypt($id);
            } catch (DecryptException $e) {
                abort(404);
            }  

          $ent1=DB::table('entrepreneurs')->select('entrepreneurs_id','catagory','ent_industry_sector')->where('entrepreneurs_id',$id)->get();
        
        if(!empty($ent1[0]->ent_industry_sector)){
          if($ent1[0]->catagory=="IDEA"){
         $ent =DB::table('entrepreneurs')
         ->join('compititive_advantage','entrepreneurs.entrepreneurs_id','compititive_advantage.entre_id')
         ->join('busniess_trends','entrepreneurs.entrepreneurs_id','busniess_trends.entre_id')
         ->join('busniess_model_convas','entrepreneurs.entrepreneurs_id','busniess_model_convas.entre_id')
         ->join('entre_financial','entrepreneurs.entrepreneurs_id','entre_financial.entre_id')
         ->join('market_positionning','entrepreneurs.entrepreneurs_id','market_positionning.entre_id')
         ->join('implement_phase','entrepreneurs.entrepreneurs_id','implement_phase.entre_id')
         ->join('investment_manage','entrepreneurs.entrepreneurs_id','investment_manage.entre_id')
         ->join('market','entrepreneurs.entrepreneurs_id','market.entre_id')
         ->join('sectors','sectors.sector_id','entrepreneurs.ent_industry_sector')
         ->where('entrepreneurs.entrepreneurs_id',$id)
         ->groupBy('entrepreneurs.entrepreneurs_id')->get();   
         }else{
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
         ->groupBy('entrepreneurs.entrepreneurs_id')->get();   
         }

          }else{
      
        if($ent1[0]->catagory=="IDEA"){
         $ent =DB::table('entrepreneurs')
         ->join('compititive_advantage','entrepreneurs.entrepreneurs_id','compititive_advantage.entre_id')
         ->join('busniess_trends','entrepreneurs.entrepreneurs_id','busniess_trends.entre_id')
         ->join('busniess_model_convas','entrepreneurs.entrepreneurs_id','busniess_model_convas.entre_id')
         ->join('entre_financial','entrepreneurs.entrepreneurs_id','entre_financial.entre_id')
         ->join('market_positionning','entrepreneurs.entrepreneurs_id','market_positionning.entre_id')
         ->join('implement_phase','entrepreneurs.entrepreneurs_id','implement_phase.entre_id')
         ->join('investment_manage','entrepreneurs.entrepreneurs_id','investment_manage.entre_id')
         ->join('market','entrepreneurs.entrepreneurs_id','market.entre_id')
         ->where('entrepreneurs.entrepreneurs_id',$id)
         ->groupBy('entrepreneurs.entrepreneurs_id')->get();   
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
         ->groupBy('entrepreneurs.entrepreneurs_id')->get();   
         }



          }  
          $team_member=DB::table('team_members')->where('entre_id',$id)->get();
      
        
          $ent=$ent[0];

        
         if($ent->catagory=="STARTUP"){
           return view('Admin.startup_business_profile',compact('ent','team_member','ent_id'));
         }
         if($ent->catagory=="SME"){

               return view('Admin.sme_business_profile',compact('ent','team_member','ent_id'));
         }else{
            return view('Admin.idea_business_profile',compact('ent','team_member','ent_id')); 
         }

      }      

    public function profile($id){
      
          try {
            $id = decrypt($id);
            } catch (DecryptException $e) {
                abort(404);
            }  

       $ent =Entrepreneurs::find($id);
       $finance=DB::table('entre_financial')->where('entre_id',$id)->get();
       
       if (empty($finance[0]->statustab1)) {
            $intial_total=null;    
            }else{
            $intial_total=$finance[0]->intial_technology+$finance[0]->intial_machinery+
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


         $model=DB::table('busniess_model_convas')->where('entre_id',$id)->get();
         $implement=DB::table('implement_phase')->where('entre_id',$id)->get();
         $market=DB::table('market')->where('entre_id',$id)->get();

         $busniess_trends=DB::table('busniess_trends')->where('entre_id',$id)->get();
         $compititive=DB::table('compititive_advantage')->where('entre_id',$id)->get();
         $invest_management=DB::table('investment_manage')->where('entre_id',$id)->get();
         $team=DB::table('team_members')->where('entre_id',$id)->get();  
         $market_position=DB::table('market_positionning')->where('entre_id',$id)->get();


      // }
        $ent_id=$id;

         // $ent=$ent[0];
         if($ent->catagory=="STARTUP"){
           return view('Admin.startup_profile',compact('ent','intial_total','operation_total','raised_total','total_revenue','finance','team','model','busniess_trends','compititive','invest_management','market_position','market','ent_id'));

         }
         if($ent->catagory=="SME"){

               return view('Admin.sme_profile',compact('ent','intial_total','operation_total','raised_total','total_revenue','finance','team','model','busniess_trends','compititive','invest_management','market_position','market','ent_id'));
         }else{
            return view('Admin.idea_profile',compact('ent','intial_total','operation_total','raised_total','total_revenue','finance','busniess_trends','model','compititive','implement','market','invest_management','team','ent_id','market_position')); 
         }

      

    }



    public function blockip_add()
    {
      $block=DB::table('ip_block')->join('users','users.id','ip_block.Author')->orderBy('Registred_date','DESC')->get(); 
      return view('Admin.blockip',compact('block'));
   }

   public function add_blockip(Request $request)
    {
    $date=Date('Y-m-d');
     
     DB::table('ip_block')->insert([
      'ip_add'=> $request->ipv4,
      'description'=>$request->Description,
      'Author'=>Auth::user()->id,
      'Registred_date'=>$date
    ]);
        session()->flash('notif','Ip Blocked successfully');
      return redirect()->back();
   }

   public function add_blockip_delete($id)
   {
     DB::table('ip_block')->where('block_id',$id)->delete();
   }
  


  public function featured_busniess()
   {
      $month=Date('m');
      $year=Date('Y');


      $view=DB::table('business_view')
      ->select(DB::raw('count(view_id) as total'),'entrepreneurs.startup_name','entrepreneurs.company_name','entrepreneurs.entrepreneurs_id','entrepreneurs.entre_email','entrepreneurs.catagory',DB::raw('Month(business_view.Date) as date'),DB::raw('Year(business_view.Date) as year'))
      ->join('entrepreneurs','entrepreneurs.entrepreneurs_id','business_view.entre_id')
      ->groupBy('entrepreneurs.entrepreneurs_id')
      ->orderBy('total','DESC')
      ->whereYear('Date',$year)
      ->whereMonth('Date',$month)
      ->get();
      
      $view_year=DB::table('business_view')
      ->distinct()
      ->select(DB::raw('Month(business_view.Date) as month'),DB::raw('Year(business_view.Date) as year'))      
      ->get();
     
     $feature= DB::table('feature_busniess')
      ->join('entrepreneurs','entrepreneurs.entrepreneurs_id','feature_busniess.entre_id')
      ->select('entrepreneurs.startup_name','entrepreneurs.company_name','entrepreneurs.entrepreneurs_id','entrepreneurs.entre_email','entrepreneurs.catagory','feature_id','feature_busniess.month','feature_busniess.year')
            ->groupBy('entrepreneurs.entrepreneurs_id')

      ->where('month',$month)
      ->where('year',$year)

      ->get();

      $feature_year=DB::table('feature_busniess')
      ->select('month','year')
      ->distinct()
      ->get();

     return view('Admin.featured_business',compact('view','feature','feature_year','view_year'));
   }

   public function add_feature(Request $request){
    
    $ex=explode('-',$request->month);
    $year=$ex[0];
    $month=$ex[1];
    foreach ($request->business as $value) {
      DB::table('feature_busniess')
      ->insert([
      'month'=>$month,
      'year'=>$year,
     'entre_id'=>$value,
    ]);

    }
      session()->flash('notif','Inforamation Update successfully');
      return redirect()->back(); 
   } 

   public function filter_view($date){

    $ex=explode(' ',$date);
    $year=$ex[1];
    $month=$ex[0];
    
     $view=DB::table('business_view')
      ->select(DB::raw('count(view_id) as total'),'entrepreneurs.startup_name','entrepreneurs.company_name','entrepreneurs.entrepreneurs_id','entrepreneurs.entre_email','entrepreneurs.catagory',DB::raw('Month(business_view.Date) as date'),DB::raw('Year(business_view.Date) as year'))
      ->join('entrepreneurs','entrepreneurs.entrepreneurs_id','business_view.entre_id')
      ->groupBy('entrepreneurs.entrepreneurs_id')
      ->orderBy('total','DESC')
      ->whereYear('Date',$year)
      ->whereMonth('Date',$month)
      ->get();
      return response()->json($view);
   }


   public function filter_feature($date){
    $ex=explode(' ',$date);
    $year=$ex[1];
    $month=$ex[0];
    
     $feature= DB::table('feature_busniess')
      ->join('entrepreneurs','entrepreneurs.entrepreneurs_id','feature_busniess.entre_id')
      ->select('entrepreneurs.startup_name','entrepreneurs.company_name','entrepreneurs.entre_email','entrepreneurs.catagory','feature_id','feature_busniess.month','feature_busniess.year')
      ->where('month',$month)
      ->where('year',$year)
      ->get();
      return response()->json($feature);
   }
   public function delete_feature($id){
    DB::table('feature_busniess')
    ->where('feature_id',$id)->delete();
   }

   public function feature_detail_more($date,$id)
   {
         $ex=explode(' ',$date);
          $year=$ex[1];
          $month=$ex[0];
     
     $view=DB::table('business_view')
      ->select('entrepreneurs.startup_name','entrepreneurs.company_name','entrepreneurs.entrepreneurs_id','entrepreneurs.entre_email','entrepreneurs.catagory','Date',
        'investors.env_name','investors.env_last_name','investors.env__email','business_view.os','business_view.getBrowser','business_view.ip_address')
      ->join('entrepreneurs','entrepreneurs.entrepreneurs_id','business_view.entre_id')
      ->join('investors','business_view.investor_id','investors.investor_id')
      ->whereYear('Date',$year)
      ->whereMonth('Date',$month)
      ->where('business_view.entre_id',$id)
      ->get();
      return response()->json($view);
   }


   public function notification()
   {
      DB::table('admin_notifications')->update(['status'=>'read']);
     $not=DB::table('admin_notifications')->orderBy('created_at','DESC')->get(); 

     return view('Admin.notification',compact('not'));
   }


   public function invited_user()
   {
     $invited=DB::table('invite_friend')->orderBy('date','DESC')->get();
     return view('Admin.user_invitation',compact('invited'));
   }
 
  public function send_mail(Request $request)
   {
    $datavalide = $request->validate([
          'from_email'=>'required',
          'email_body'=>'required',
          'subject_email'=>'required',
      ]);

    if( $datavalide==true){
    foreach ($request->from_email as $key => $value) {
      $details=[
        'subject'=>$request->subject_email,
        'body'=>$request->email_body,
      ];
       Mail::to($value)->send(new sendToBusiness($details));
    }
       session()->flash('notif','Email send successfully');
       return back();
   }
 }
 }