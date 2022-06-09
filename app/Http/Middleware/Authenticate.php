<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        
        if($request->ip()<>'58.147.144.1'){
        
        if (!$request->expectsJson()) {
            return url('ad/login');
        }
    }else{

        return url('/');
    }
    }
}
