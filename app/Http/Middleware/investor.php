<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\DB;

class investor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
         if (!$request->session()->exists('investor')) {
        

            if(!empty(session('startup'))){
             $id1=$request->route()->parameters;  

               foreach ($id1 as $key => $value){
                $id1=$value;
                }
              $slug=DB::table('entrepreneurs')->select('slug')->where('entrepreneurs_id',session('startup'))->get();

              if($id1==$slug[0]->slug){
                    return $next($request);
              }else{
              session()->flash('error','Investor account is required'); 
               return redirect()->back();
              
              }
            }



        if(!empty(session('sme'))){
             $id1=$request->route()->parameters;
               foreach ($id1 as $key => $value){
                $id1=$value;
                }
              $slug=DB::table('entrepreneurs')->select('slug')->where('entrepreneurs_id',session('sme'))->get();

              if($id1==$slug[0]->slug){
                    return $next($request);
              }else{
              session()->flash('error','Investor account is required'); 
               return redirect()->back();
              
              }
            }


         if(!empty(session('idea'))){
             $id1=$request->route()->parameters;  

               foreach ($id1 as $key => $value){
                $id1=$value;
                }
              $slug=DB::table('entrepreneurs')->select('slug')->where('entrepreneurs_id',session('idea'))->get();
              if($id1==$slug[0]->slug){
                return $next($request);
              }else{
               session()->flash('error','Investor account is required'); 
               return redirect()->back();
              }
            }

            else{
               session()->flash('error','Investor account is required'); 
              return redirect('account/login');
            }

        }
        else{
        return $next($request);
        }
    }
}
