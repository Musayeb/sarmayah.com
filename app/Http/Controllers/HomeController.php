<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Entrepreneurs;
use App\Models\Investor;
use App\Mail\EntreAccountActive;
use App\Mail\InvstorAciveAcount;
use App\Mail\Investprocess;
use App\Mail\Entre_invest_process;
use App\Models\Investment_process;
use App\Mail\InviteFriendEmail;
use App\Models\notifications;
use Symfony\Component\HttpFoundation\Cookie;
use Illuminate\Http\Response;
use App\Mail\password_reset_email;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\AdminNotification;
use Validator;
use Session;

class HomeController extends Controller
{

// login
public function login(){
    return view('login');

}
public function check(Request $request)
{

if (empty(session('investor'))&&empty(session('idea'))&&empty(session('startup'))&&empty(session('sme'))) {

  $investor=DB::table('investors')
  ->where('env__email',$request->email)
  ->where('account_status','varifyed')
  ->where('admin_status','!=','Rejected')
  ->limit(1)
  ->get(); 
     
    $entrep=DB::table('entrepreneurs')
    ->where('entre_email',$request->email)
    ->where('varify_status','varifyed')
    ->where('admin_status','!=','Rejected')
    ->limit(1)
    ->get();  

   if (!Empty($entrep[0]->entre_email)){ 
     $dbpassword=$entrep[0]->enter_password;

      if (Hash::check($request->password,$dbpassword)){
        
      if ($entrep[0]->catagory=="STARTUP") {
      session()->put('startup',$entrep[0]->entrepreneurs_id);
       return redirect('ent/startup/profile');
      }elseif($entrep[0]->catagory=="SME"){
        session()->put('sme',$entrep[0]->entrepreneurs_id);
        return redirect('ent/sme/profile');
      }else{
           session()->put('idea',$entrep[0]->entrepreneurs_id);
          return redirect('ent/idea/profile/edit');
      }


      }
      else {
        session()->flash('loginerror','Your email address or password has been entered incorrectly.<br>Please try again or request to change.');
        return back()->withInput();
      }    
     
      }
   if (!Empty($investor[0]->env__email)){
        $dbpassword=$investor[0]->env_password;

      if (Hash::check($request->password,$dbpassword)){
        $session=session()->put('investor',$investor[0]->investor_id);

        return redirect('/');

      }else{

        session()->flash('loginerror','Your email address or password has been entered incorrectly.<br>Please try again or request to change.');
        return back()->withInput();
      }
    }
    else {
         session()->flash('loginerror','Your email address or password has been entered incorrectly.<br>Please try again or request to change');
       return back()->withInput();
      }
   }else{
         session()->flash('loginerror','Attempt Fialed! You are already logged in');

        return back();

   }  
    }

       public function startup_logout(){
        session()->forget('startup');
        return redirect('/');
       }
       public function sme_logout(){
        session()->forget('sme');
        return redirect('/');
       }
       public function idea_logout(){
        session()->forget('idea');
        return redirect('/');
       }
    public function logout()
     {
       session()->forget('investor');
      return redirect('/');
     }


     public function password_reset(){
       return view('password_reset'); 
     }


     public function password__change_reset(Request $request){
      
      $investor=DB::table('investors')
      ->select('investor_id','env__email','env_name','env_last_name')
      ->where('env__email',$request->email)
      ->where('account_status','varifyed')
      ->limit(1)
      ->get(); 
             
        $entrep=DB::table('entrepreneurs')
        ->select('entrepreneurs_id','entre_email','entre_name','entre_last_name')
        ->where('entre_email',$request->email)
        ->where('varify_status','varifyed')
        ->limit(1)
        ->get();  

   
      if (!Empty($investor[0]->env__email)){

      setcookie("check", "check", time()+60*10);
          $id=encrypt($investor[0]->investor_id);

         $details=[
            'acccount_id'=>$request->email,
            'id'=>$id,
            'full_name'=>$investor[0]->env_name." ".$investor[0]->env_last_name, 
 
        ];
        Mail::to($request->email)->send(new password_reset_email($details));

        session()->flash('notif','Password reset link send to your email address');
        return back();

       }
       if (!Empty($entrep[0]->entre_email)){

          setcookie("check", "check", time()+60*10);
          $id=encrypt($entrep[0]->entrepreneurs_id);    
        $details=[
            'acccount_id'=>$request->email,
            'id'=>$id,
           'full_name'=>$entrep[0]->entre_name." ".$entrep[0]->entre_last_name,
        ];
        Mail::to($request->email)->send(new password_reset_email($details));
        session()->flash('notif','Password reset link sent to your email address');
        return back();

       }else{
         session()->flash('loginerror','Your email does not exist in the system. 
          Please make sure you have entered a correct registered email.');
        return back()->withInput();

       }
       
     }
 


public function password_recovery($email,$id)
{
   if (!empty(cookie('check'))) {
   if (empty(session('startup')) && empty(session('sme')) && empty(session('idea')) && empty(session('investor'))) {

    return view('password_recovery',compact('email','id'));
  }else{
    return redirect('/');
  }

}else{

    session()->flash('error','Password recovery link is expired !');
    return redirect('/');

}
}
public function password_recovery_change(Request $request)
{
    $datavalide = $request->validate([
     'password'=>'required|min:6|same:confirm_password',
     'confirm_password' => 'required|min:6|',     
    ]);

   if ($datavalide == true) {
    try {
      $id=decrypt($request->id);
    } catch (DecryptException $e) {
      abort(404);
    }
     $investor=DB::table('investors')
     ->select('investor_id')->where('env__email',$request->email)->where('investor_id',$id)->get();
     $entre=DB::table('entrepreneurs')
     ->select('entrepreneurs_id','catagory')->where('entre_email',$request->email)->where('entrepreneurs_id',$id)->get();


      if (!empty($investor[0]->investor_id)) {
      DB::table('investors')
      ->where('env__email',$request->email)
      ->where('investor_id',$id)
      ->update(['env_password'=>password_hash($request->password,PASSWORD_DEFAULT)]);
        session()->put('investor',$investor[0]->investor_id);
        return redirect('/');
      }
      if (!empty($entre[0]->entrepreneurs_id)){
      DB::table('entrepreneurs')
      ->where('entre_email',$request->email)
      ->where('entrepreneurs_id',$id)
      ->update(['enter_password'=>password_hash($request->password,PASSWORD_DEFAULT)]);

       if ($entre[0]->catagory=="STARTUP") {
      session()->put('startup',$entre[0]->entrepreneurs_id);
      }elseif($entre[0]->catagory=="SME"){
        session()->put('sme',$entre[0]->entrepreneurs_id);
      }else{
        session()->put('idea',$entre[0]->entrepreneurs_id);
      }
        return redirect('/');

      }

}
}

   public function index(Request $request){
 
      $year=Date('Y');
      $month=Date('m');

      $ent =DB::table('feature_busniess')
      ->select('sector_name','startup_name','company_name','elavator_picth','catagory','mainimum_amount_looking','profile_pic','logo','entrepreneurs.slug','entrepreneurs_id')
      ->join('entrepreneurs','entrepreneurs.entrepreneurs_id','feature_busniess.entre_id')
      ->join('sectors','sectors.sector_id','entrepreneurs.ent_industry_sector')
      ->where('feature_busniess.month',$month)
      ->where('feature_busniess.year',$year)
      ->groupBy('entrepreneurs_id')
      ->orderBy('feature_busniess.feature_id', 'DESC')
      ->get();

        $sectors=DB::table('sectors')->orderBy('sector_name','ASC')->get();
   

    $popular= DB::select('SELECT sectors.sector_name , sectors.sector_id,popular_serach.value
           FROM popular_serach
           INNER JOIN sectors on sectors.sector_id =popular_serach.sector_id
           where popular_serach.value>1000
         ');




      return view('Home',compact('ent','sectors','popular'));

    }


    public function sector_search($sector){
          
        $ent=DB::table('entrepreneurs')
        ->select('sector_name','startup_name','company_name','elavator_picth','catagory','mainimum_amount_looking','profile_pic','logo','entrepreneurs.slug','entrepreneurs.entrepreneurs_id')
         ->join('sectors','sectors.sector_id','entrepreneurs.ent_industry_sector')
          ->where('sectors.slug',$sector)
          ->where('entrepreneurs.admin_status','Approved')
         ->groupBy('entrepreneurs.entrepreneurs_id')
          ->paginate(6);
           
         $popular= DB::select('SELECT sectors.sector_name , sectors.sector_id,popular_serach.value
                   FROM popular_serach
                   INNER JOIN sectors on sectors.sector_id =popular_serach.sector_id
                   where popular_serach.value>1000');
          return view('entrepreneurs_page',compact('ent','popular'));

    }
   


    public function serach_home_bus(Request $request,$sector="",$catagory="",$name=""){


      
      $sector = $request->sector;
      $catagory = $request->catagory;
      $name = $request->name;

      if (!empty($sector)&&!empty($catagory)&&empty($name)) {
    


        $ent=DB::table('entrepreneurs')
        ->select('sector_name','startup_name','company_name','elavator_picth','catagory','mainimum_amount_looking','profile_pic','logo','entrepreneurs.slug')
        ->join('sectors','sectors.sector_id','entrepreneurs.ent_industry_sector')
        ->where('sectors.slug',$sector)         
        ->where('catagory',$catagory)
        ->where('admin_status','Approved')
        ->groupBy('entrepreneurs.entrepreneurs_id')
        ->paginate(6);
  
         $popular= DB::select('SELECT sectors.sector_name , sectors.sector_id,popular_serach.value
                   FROM popular_serach
                   INNER JOIN sectors on sectors.sector_id =popular_serach.sector_id
                   where popular_serach.value>1000');
          return view('entrepreneurs_page',compact('ent','popular'));

        
        

      }
      if (!empty($sector)&&!empty($catagory)&&!empty($name)) {
        
      if ($catagory=="STARTUP"||$catagory=="IDEA") {
          $ent=DB::table('entrepreneurs')
          ->select('sector_name','startup_name','company_name','elavator_picth','catagory','mainimum_amount_looking','profile_pic','logo','entrepreneurs.slug')
          ->join('sectors','sectors.sector_id','entrepreneurs.ent_industry_sector')
          ->where('sectors.slug',$sector)
          ->where('catagory',$catagory)
          ->where('admin_status','Approved')
          ->where('startup_name', 'like', $name)
          ->paginate(6);

        }else{
        $ent=DB::table('entrepreneurs')
        ->select('sector_name','startup_name','company_name','elavator_picth','catagory','mainimum_amount_looking','profile_pic','logo','entrepreneurs.slug')
        ->join('sectors','sectors.sector_id','entrepreneurs.ent_industry_sector')
          ->where('sectors.slug',$sector)
          ->where('catagory',$catagory)
          ->where('company_name', 'like', $name)
          ->where('admin_status','Approved')
          ->paginate(6);

        }    
         $popular= DB::select('SELECT sectors.sector_name , sectors.sector_id,popular_serach.value
                   FROM popular_serach
                   INNER JOIN sectors on sectors.sector_id =popular_serach.sector_id
                   where popular_serach.value>1000');
          return view('entrepreneurs_page',compact('ent','popular'));
  
      
      }

      


    }
    

    public function show_reg_option(){
      return view('Registration_option');
 
    }
    public function showEntrepreneur(){
    if (empty(session('investor'))&&empty(session('idea'))&&empty(session('startup'))&&empty(session('sme'))) {
        $country=DB::table('country_names')->get();
      return view('Enterpreneur_registration',compact('country'));
    }else{
     session()->flash('error','Attempt Fialed! You are already logged in');
      return back();
    }
    }
    public function entre_register(Request $request)
    {

        $datavalide = $request->validate([
            
            'first_name' => 'required', 'string',
            'How_did_you_Hear_About_us' => 'required', 'string',
            'last_name' => 'required', 'string',
            'email' => 'required', 'string',
            'catagory' => 'required',
            'password' => 'required|min:6|',
            'phone' => 'required', 'string',
            'country' => 'required', 'string',
            'gender' => 'required',
        ]);
              $emailcheck=DB::table('entrepreneurs')
              ->where('entre_email',$request->email)->get();
               $emailcheck2=DB::table('investors')
              ->where('env__email',$request->email)->get();

              if(empty($emailcheck[0]->entre_email)){
              if(empty($emailcheck2[0]->env__email)){

              if ($datavalide == true) {
         
               $entre =new Entrepreneurs;
                $entre->entre_name =ucwords($request->first_name);
                $entre->entre_last_name=ucwords($request->last_name);
                $entre->entre_email = $request->email;
                $entre->catagory = $request->catagory;
                $entre->how_hear_ab_us = $request->How_did_you_Hear_About_us;
                $entre->enter_password =password_hash($request->password, PASSWORD_DEFAULT);
                $entre->entre_phone = $request->phone;
                $entre->country = $request->country;
                $entre->admin_status ='Draft';
                $entre->gender =$request->gender;                
                $entre->save();
            }

        
        
        $details=[
            'name'=>ucwords($request->first_name).' '.ucwords($request->last_name),
            'acccount_id'=>$entre->entrepreneurs_id,
        ];
        Mail::to($request->email)->send(new EntreAccountActive($details));

           $first_name=ucwords($request->first_name);
           $last_name=ucwords($request->last_name);

         return view('account_verification',compact('first_name','last_name'));


           }else{
          session()->flash('notif','Failed, Email Already Exists!');
            return back();
         }

         }else{
          session()->flash('notif','Failed, Email Already Exists!');
            return back();
         }   

   }

        public function account_activation_e($id)
        {
          try {
            $id = decrypt($id);
            } catch (DecryptException $e) {
                abort(404);
            }  

    
            $ent=DB::table('entrepreneurs')
            ->select('entrepreneurs_id','varify_status','catagory')
            ->where('entrepreneurs_id',$id)->get();

        if($ent[0]->varify_status=="varifyed"){

            session()->flash('error','Attempt Failed! Your account is already verified');
            return view('login');

        }else{
           DB::table('entrepreneurs')
            ->where('entrepreneurs_id',$id)
            ->update([
                'varify_status'=>'varifyed'
            ]);

            DB::table('entre_financial')->insert(['entre_id'=>$id]);
            DB::table('busniess_trends')->insert(['entre_id'=>$id]);
            DB::table('busniess_model_convas')->insert(['entre_id'=>$id]);
            DB::table('compititive_advantage')->insert(['entre_id'=>$id]);
            if($ent[0]->catagory=="IDEA"){
            DB::table('implement_phase')->insert(['entre_id'=>$id]);
            }
            DB::table('market_positionning')->insert(['entre_id'=>$id]);
            DB::table('investment_manage')->insert(['entre_id'=>$id]);
            DB::table('market')->insert(['entre_id'=>$id]);
            

             $not=new notifications;
             $not->entreprenure_id=$id;
             $not->description="Welcome to the sarmayah.com community, your account is activated successfully";
             $not->save();
             
            return redirect('account/login');

        }
              

          
        }
         public function account_activation_i($id)
        {
           try {
            $id = decrypt($id);
            } catch (DecryptException $e) {
                abort(404);
            }  



            $inv=DB::table('investors')
            ->select('account_status')
            ->where('investor_id',$id)->get();

            if ($inv[0]->account_status=="varifyed") {
              session()->flash('error','Attempt Failed! Your account is already verified');
              return redirect('account/login');
            }else{
             DB::table('investors')
            ->where('investor_id',$id)
            ->update(['account_status'=>'varifyed']);

             $not=new notifications;
             $not->investor_id=$id;
             $not->description="Welcome to sarmayah.com community, your account is activated successfully";
             $not->save();

             $notif= new AdminNotification;
             $notif->entre_id=$id;
             $notif->notification_content="Investor account has varified his email address";
             $notif->type="Investor";
             $notif->save();
              return redirect('account/login');
            }
            

          
        }
        public function showinvestor(){
          if (empty(session('investor'))&&empty(session('idea'))&&empty(session('startup'))&&empty(session('sme'))) {
              $country=DB::table('country_names')->get();
            return view('investor_registration',compact('country'));
          }else{
           session()->flash('error','Attempt Fialed! You are already logged in');
            return back();
          }
        }



        public function account_verification(){
            return view('account_verification');

        }
        public function investor_register(Request $request){
            
            $datavalide = $request->validate([
            'first_name' => 'required', 'string',
            'last_name' => 'required', 'string',
            'email' => 'required', 'string',
            'gender'=>'required',
             'password'=>'required|min:6|',
             'country'=>'required',
             'How_did_you_Hear_About_us'=>'required',
             'phone'=>'required',
            ]);
              
              $emailcheck=DB::table('entrepreneurs')
              ->where('entre_email',$request->email)->get();
               $emailcheck2=DB::table('investors')
              ->where('env__email',$request->email)->get();
         
           if(empty($emailcheck[0]->entre_email)){
            if(empty($emailcheck2[0]->env__email)){

           if ($datavalide == true) {

            $inves=new Investor();
            $inves->env_name=ucwords($request->first_name);
            $inves->env_last_name=ucwords($request->last_name);
            $inves->env__email=$request->email;
            $inves->env_password=password_hash($request->password, PASSWORD_DEFAULT);
            $inves->admin_status ='Draft';
            $inves->how_hear_ab_us =$request->How_did_you_Hear_About_us;
            $inves->gender =$request->gender;
            $inves->env_phone =$request->phone;
            $inves->country =$request->country;
            $inves->save();
         
           $notif= new AdminNotification;
             $notif->investor_id=$inves->investor_id;
             $notif->notification_content="New Investor Account has Registered";
             $notif->type="Investor";
             $notif->save();

           $details=[
            'name'=>ucwords($request->first_name).' '.ucwords($request->last_name),
            'acccount_id'=>$inves->investor_id
            ];
            Mail::to($request->email)->send(new InvstorAciveAcount($details));  
          $first_name=ucwords($request->first_name);
          $last_name=ucwords($request->last_name);

           return view('account_verification_investor',compact('first_name','last_name'));

           }

           }else{
          session()->flash('notif','Failed, Email Already Exists!');
            return back();
         }

         }else{
          session()->flash('notif','Failed, Email Already Exists!');
            return back();
         }   

        }

        public function careers()
        {
          $career=DB::table('blogs')->where('type','career')->orderBy('blog_reg_date','DESC')->get();
            return view('website_pages.Careers',compact('career'));
        }

        public function careers_show($slug)
        {
          $career=DB::table('blogs')->where('type','career')->where('slug',$slug)->get();
        
           if(count($career) > 0){
            $career=$career[0];
            return view('website_pages.careers_detail',compact('career'));
  
            }else{
              abort(404);
            }

        
        }
        
           public function partner()
        {
            return view('website_pages.partners');
        }
           public function privacy_page(){
            $content=DB::table('page_contents')->where('page_name','Privacy Policy')->get();

            return view('website_pages.privacy',compact('content'));
        }
          public function terms_of_use(){
            $content=DB::table('page_contents')->where('page_name','Terms of Use')->get();

            return view('website_pages.terms_of_use',compact('content'));
        }
        public function intellectual_property(){
          
          $content=DB::table('page_contents')->where('page_name','Intellectual Property')->get();

            return view('website_pages.intellectual_property',compact('content'));
        }
        public function support()
        {
          $content=DB::table('page_contents')->where('page_name','Support')->get();

            return view('website_pages.support',compact('content'));
        }

        public function invite_friend()
        {
          return view('invite_friend');
        }

        public function invite_friend_post(Request $request){
         
         $check=DB::table('invite_friend')->select('receiver_email')->where('receiver_email',$request->friend_email)->get();

         if($check->isEmpty()){
          DB::table('invite_friend')
          ->insert([
                    'inviter_email'=>$request->inviter_email,
                    'inviter_name'=>$request->inviter_name,
                    'receiver_email'=>$request->friend_email,
                    'receiver_name'=>$request->friend_name,
                    'date'=>date("Y-m-d"),
                  ]);

     $details=[
       'inviter_name'=>$request->inviter_name,
       'receiver_name'=>$request->friend_name,
     ];

        Mail::to($request->friend_email)->send(new InviteFriendEmail($details));

          session()->flash('notif','Your friend is invited Successfully !');
          return redirect()->back();
         }else{
         session()->flash('error','Your friend is already invited to the platform ');
          return redirect()->back();

         }

        }

     public function investors_relationship()
        {
          $content=DB::table('page_contents')->where('page_name','Investors Relationship')->get();
         
            return view('website_pages.investor_relation',compact('content'));
        }

        
        public function press_news(){
          $news=DB::table('blogs')->where('type','news')->paginate(6);
          return view('website_pages.press_news',compact('news'));
        }


        public function about_page(){
            return view('website_pages.about');
        }
        public function contact_page()
        {
            return view('website_pages.contact');
          
        }
        public function entrepreneurs_page($search=null)
        {

               $ent=Entrepreneurs::select('sector_name','startup_name','company_name','elavator_picth','catagory','mainimum_amount_looking','profile_pic','logo','entrepreneurs.slug','entrepreneurs.entrepreneurs_id')->join('sectors','sectors.sector_id','entrepreneurs.ent_industry_sector')->where('admin_status','Approved')->paginate(6);

                $popular= DB::select('SELECT sectors.sector_name , sectors.sector_id,popular_serach.value
                   FROM popular_serach
                   INNER JOIN sectors on sectors.sector_id =popular_serach.sector_id
                   where popular_serach.value>1000');

            return view('entrepreneurs_page',compact('ent','popular'));
              

        }

       public function Busserach(Request $request){

        if (isset($request->sector)) {
          $sector=$request->sector;
          $ent=DB::table('entrepreneurs')
          ->join('sectors','sectors.sector_id','entrepreneurs.ent_industry_sector')
          ->whereIn('ent_industry_sector',explode(',',$sector))
          ->where('admin_status','Approved')
          ->paginate(6);

          $sectors=explode(',',$sector);
          foreach ($sectors as $row ) {
        
              DB::select('update popular_serach
               set value=value+1
               where sector_id="'.$row.'" ');
          }
          response()->json($ent);
          return view('enreper_serach',compact('ent'));
        }

          if(isset($request->min)){

            $min=$request->min;
            $max=$request->max;
         
           
            $ent=DB::table('entrepreneurs')
            ->select('*')
            ->join('sectors','sectors.sector_id','entrepreneurs.ent_industry_sector')
            ->where('admin_status','Approved')
            ->whereBetween('mainimum_amount_looking',[$min , $max])
            ->paginate(6);
          
          response()->json($ent);
          
          return view('enreper_serach',compact('ent'));
    

        }else{
          $ent=Entrepreneurs::join('sectors','sectors.sector_id','entrepreneurs.ent_industry_sector')->where('admin_status','Approved')->paginate(6);
          response()->json($ent);
          return view('enreper_serach',compact('ent'));
        }

       }

       public function blog_all()
       {
           $blogs=DB::table('blogs')->where('type',null)->orderBy('blog_reg_date','DESC')->paginate(6);
            return view('website_pages.blogs_all',compact('blogs'));

       }

        public function blog_details($slug){
          $blog=DB::select('SELECT * FROM `blogs` WHERE blogs.slug = "'.$slug.'"');
          $blogs=DB::table('blogs')->where('slug','!=',$slug)->where('type',null)->orderBy('blog_reg_date','DESC')->get();
          if(count($blog) > 0){
          $blog=$blog[0];
            return view('blog_details',compact('blog','blogs'));

          }else{
            abort(404);
          }

         }

        public function news_details($slug){

          $blog=DB::select('SELECT * FROM `blogs` WHERE blogs.slug = "'.$slug.'"');
          $blogs=DB::table('blogs')->where('slug','!=',$slug)->where('type','news')->orderBy('blog_reg_date','DESC')->get();
          if(count($blog) > 0){
          $blog=$blog[0];
            return view('website_pages.news_detail',compact('blog','blogs'));

          }else{
            abort(404);
          }

         }

        public function  entrepreneurs_prof(Request $request,$id) {  
          
          $check=DB::table('entrepreneurs')->select('catagory','entrepreneurs_id')->where('admin_status','Approved')->where('slug','like',$id)->get();
       if(empty($check[0]->entrepreneurs_id)){
        abort(404);
        }else{

          $view=DB::table('business_view')
          ->select(DB::raw('count(view_id)as total_view','catagory'))
          ->where('entre_id',$check[0]->entrepreneurs_id)->groupBy('entre_id','investor_id')->get();
    
         if($check[0]->catagory=="IDEA"){

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
         ->where('entrepreneurs.entrepreneurs_id',$check[0]->entrepreneurs_id)
         ->where('admin_status','Approved')
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
         ->join('sectors','sectors.sector_id','entrepreneurs.ent_industry_sector')
         ->where('entrepreneurs.entrepreneurs_id',$check[0]->entrepreneurs_id)
         ->where('admin_status','Approved')
         ->GroupBy('entrepreneurs.entrepreneurs_id')->get();
      

         }

         $ent=$ent[0];

      if(!empty(session('investor'))){

       $check2=DB::table('business_view')->where('investor_id',session('investor'))->where('entre_id',$check[0]->entrepreneurs_id)->get(); 

       if($check2->isEmpty()){
 

     function getOS() { 
 
     $user_agent = $_SERVER['HTTP_USER_AGENT'];

     $os_platform =   "Bilinmeyen İşletim Sistemi";
     $os_array =   array(
    '/windows nt 10/i'      =>  'Windows 10',
    '/windows nt 6.3/i'     =>  'Windows 8.1',
    '/windows nt 6.2/i'     =>  'Windows 8',
    '/windows nt 6.1/i'     =>  'Windows 7',
    '/windows nt 6.0/i'     =>  'Windows Vista',
    '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
    '/windows nt 5.1/i'     =>  'Windows XP',
    '/windows xp/i'         =>  'Windows XP',
    '/windows nt 5.0/i'     =>  'Windows 2000',
    '/windows me/i'         =>  'Windows ME',
    '/win98/i'              =>  'Windows 98',
    '/win95/i'              =>  'Windows 95',
    '/win16/i'              =>  'Windows 3.11',
    '/macintosh|mac os x/i' =>  'Mac OS X',
    '/mac_powerpc/i'        =>  'Mac OS 9',
    '/linux/i'              =>  'Linux',
    '/ubuntu/i'             =>  'Ubuntu',
    '/iphone/i'             =>  'iPhone',
    '/ipod/i'               =>  'iPod',
    '/ipad/i'               =>  'iPad',
    '/android/i'            =>  'Android',
    '/blackberry/i'         =>  'BlackBerry',
    '/webos/i'              =>  'Mobile'
  );

  foreach ( $os_array as $regex => $value ) { 
    if ( preg_match($regex, $user_agent ) ) {
      $os_platform = $value;
    }
  }   
  return $os_platform;
}

/**
 * Kullanicinin kullandigi internet tarayici bilgisini alir.
 * 
 * @since 2.0
 */
function getBrowser() {
  $user_agent = $_SERVER['HTTP_USER_AGENT'];

  $browser        = "Bilinmeyen Tarayıcı";
  $browser_array  = array(
    '/msie/i'       =>  'Internet Explorer',
    '/firefox/i'    =>  'Firefox',
    '/safari/i'     =>  'Safari',
    '/chrome/i'     =>  'Chrome',
    '/edge/i'       =>  'Edge',
    '/opera/i'      =>  'Opera',
    '/netscape/i'   =>  'Netscape',
    '/maxthon/i'    =>  'Maxthon',
    '/konqueror/i'  =>  'Konqueror',
    '/mobile/i'     =>  'Handheld Browser'
  );

  foreach ( $browser_array as $regex => $value ) { 
    if ( preg_match( $regex, $user_agent ) ) {
      $browser = $value;
    }
  }
  return $browser;
}
 $date=date('Y-m-d H:i:s');

    DB::table('business_view')
    ->insert([
      'entre_id'=>$check[0]->entrepreneurs_id,
      'investor_id'=> session('investor'),                      
      'ip_address'=> $request->ip(),           
      'getBrowser'=>getBrowser(),            
      'os'=>getOS(),
      'Date'=>$date,              
    ]);      

}
  $investCheck=DB::table('investment_processes')
  ->where('investor_id',session('investor'))
  ->where('entrepreneurs_id',$check[0]->entrepreneurs_id)->get();
  $saveCheck=DB::table('saved_business')
  ->where('investor_id',session('investor'))
  ->where('entre_id',$check[0]->entrepreneurs_id)->get();

}else{
$investCheck=null; 
$saveCheck=null; 
}
          

     if($ent->catagory=="STARTUP"){
         $team_member=DB::table('team_members')->where('entre_id',$check[0]->entrepreneurs_id)->get();
         return view('Investor.startup_profile',compact('ent','team_member','view','investCheck','saveCheck'));

     }
     if($ent->catagory=="SME"){
       $team_member=DB::table('team_members')->where('entre_id',$check[0]->entrepreneurs_id)->get();  

         return view('Investor.sme_profile',compact('ent','team_member','view','investCheck','saveCheck'));

     }
     else{
        $team_member=DB::table('team_members')->where('entre_id',$check[0]->entrepreneurs_id)->get();  
         return view('Investor.idea_profile',compact('ent','team_member','view','investCheck','saveCheck'));
     }

      }
          
         }
         public function invest_process(Request $request){
             

            $datavalide = $request->validate([
            'invest_amount' => 'required', 'string',
            'password' => 'required', 'string',    
           ]);
            $check=DB::table('investment_processes')
            ->where('investor_id',$request->inv)
            ->where('entrepreneurs_id',$request->ent)
            ->get();

      
             $password=DB::table('investors')
             ->select('env_password','env_name','env_last_name','env__email')
            ->where('investor_id',$request->inv)->get();

            $entre=DB::table('entrepreneurs')
             ->select('entre_name','entre_last_name','entre_email')
            ->where('entrepreneurs_id',$request->ent)->get();

            // echo $password[0]->env_last_name ;
            // exit;

            if ($datavalide == true) {
             if (Hash::check($request->password,$password[0]->env_password)){
                  if (empty($check[0]->invest_process_id)) {
           
              // emails
              $details=[
                  'body'=>"Thank you for your interest to invest in the selected business.
                         Your request is registered successfully. Please wait for the system to match you with the selected entrepreneur.",
                   'name'=>$password[0]->env_name.' '.$password[0]->env_last_name];
                  //notification 
                     $not=new notifications;
                     $not->investor_id=$request->inv;
                     $not->description=$details['body'];

                     $not->save();
           
            Mail::to($password[0]->env__email)->send(new Investprocess($details));
             
          $details=[
                'body'=>"Thank you for being an active user of sarmayah.com
                We glade to inform you a potential investor has showed interested to invest on your business 
                please wait for an email and system notification to match you with the interested investor",
                'name'=>$entre[0]->entre_name.' '.$entre[0]->entre_last_name
            ];
                 
            Mail::to($entre[0]->entre_email)->send(new Entre_invest_process($details));
            // notifcatiion
                     $not=new notifications;
                     $not->entreprenure_id=$request->ent;
                     $not->description=$details['body'];
                     $not->save();
              // end mails

                $process= new Investment_process;
                $process->investor_id=$request->inv;
                $process->entrepreneurs_id=$request->ent;
                $process->investment_ammount= str_replace(',', '', $request->invest_amount);
                $process->save();

                  session()->flash('notif','Investment Request Send Successfully!');
                  return redirect()->back();
            }else{
                  session()->flash('error','Your Request is already Exisit  !');
                  return redirect()->back();
            }
           }else{
                  session()->flash('error','invalid password !');
                  return redirect()->back();
           }

       }

         }


         public function invest_cancel(Request $request){
           
           DB::table('cancel_request')->insert([
            'entre_id'=>$request->ent,
            'investor_id'=>$request->inv, 
             'summary'=>$request->summary
           ]);
           DB::table('investment_processes')->where('investor_id',$request->inv)->where('entrepreneurs_id',$request->ent)->delete();
            session()->flash('notiff','Request cancelled Successfully!');
            return redirect()->back();

         }


         
         public function save_business(request $request){
           if (isset($request->type)) {

            if ($request->type=="Save") {
              DB::table('saved_business')->insert([
                'entre_id'=>$request->ent,
                'investor_id'=>$request->investor,
              ]);

          $check=DB::table('saved_business_log')->where('entre_id',$request->ent)->where('investor_id',$request->investor)->get();
            if($check->isEmpty()){
            DB::table('saved_business_log')->insert(['entre_id'=>$request->ent,'investor_id'=>$request->investor]);   
            }

              return response()->json('set');

            }else{
            DB::table('saved_business')->where('entre_id',$request->ent)->where('investor_id',$request->investor)->delete();
            
              return response()->json('notset');
             }
          }
         
         }
        


         public function saved_business_show()
         {
          $savedd=DB::table('saved_business')
          ->join('entrepreneurs','entrepreneurs.entrepreneurs_id','saved_business.entre_id')
          ->select('entrepreneurs_id','startup_name','company_name','logo','elavator_picth','catagory')
          ->where('investor_id',session('investor'))->orderBy('saved_id','DESC')->paginate(3);

           return view('Investor.saved_bus',compact('savedd'));
         }

         public function interested_business_show(Request $request)
         {
           $intrested=DB::table('investment_processes')
          ->join('entrepreneurs','entrepreneurs.entrepreneurs_id','investment_processes.entrepreneurs_id')
          ->select('investment_processes.entrepreneurs_id','startup_name','company_name','logo','elavator_picth','catagory')
          ->where('investor_id',session('investor'))->where('investment_processes.status',null)->orderBy('invest_process_id','DESC')->paginate(3);

           return view('Investor.intrested_bus',compact('intrested'));

         }
        public function matched_business_show(Request $request)
         {
           $intrested=DB::table('investment_processes')
          ->join('entrepreneurs','entrepreneurs.entrepreneurs_id','investment_processes.entrepreneurs_id')
          ->select('investment_processes.entrepreneurs_id','startup_name','company_name','logo','elavator_picth',
            'facebook_url','linkedin_url','instagram_url','website_url','entre_email','catagory','entre_phone','country')
          ->where('investor_id',session('investor'))->where('investment_processes.status','Matched')->orderBy('invest_process_id','DESC')->paginate(3);

           return view('Investor.matched_business',compact('intrested'));

         }


         public function investment_request()
         {
             return view('investment_request');
         }
        

}