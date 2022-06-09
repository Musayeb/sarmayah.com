<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class block_ip
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


public $blockIps = [];    

    public function handle(Request $request, Closure $next)
    {
    


     $ip= DB::table('ip_block')->select('ip_add')->get();
      foreach ($ip as $row ) {
         $blockIps[] = $row->ip_add;

      }
      if (!$ip->isEmpty()) {
          
    
        if (in_array($request->ip(), $blockIps)) {
            return response()->json("You don't have permission to access this website.");
        }else{

        return $next($request);
    }
      }else{
        return $next($request);
        
      }

}
}