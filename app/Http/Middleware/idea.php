<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Entrepreneurs;

class idea 
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
        if (!$request->session()->exists('idea')) {
            return redirect('account/login');
        }
        else{
        $enter=Entrepreneurs::select('login_status','entrepreneurs_id')->where('entrepreneurs_id',session('idea'))->get();
       if(empty($enter[0]->login_status)||empty($enter[0]->entrepreneurs_id)) {        
        return $next($request);
        }else{
        session()->forget('idea');
        return redirect('account/login');
        
        }

        }
    }
}
