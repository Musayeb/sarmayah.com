<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\notifications;


class NotificationsController extends Controller
{
    public function entreNotifications()
    {
    	if (!empty(session('startup'))) {
    		$notfi = DB::table('notifications')
	        ->where('entreprenure_id',session('startup'))
           ->orderBy('created_at','Desc')->get();
		
	     DB::table('notifications')
	      ->where('entreprenure_id',session('startup'))
	     ->update(['status'=>'1']);

	        return view('Enterpreneur.notifications',compact('notfi'));
    	}
    	if (!empty(session('sme'))) {
    		
		 $notfi = DB::table('notifications')
	        ->where('entreprenure_id',session('sme'))
            ->orderBy('created_at','Desc')->get();

		     DB::table('notifications')
		      ->where('entreprenure_id',session('sme'))
		     ->update(['status'=>'1']);

	        return view('Enterpreneur.notifications',compact('notfi'));
	    }

    if (!empty(session('idea'))) {
    	 $notfi = DB::table('notifications')
	        ->where('entreprenure_id',session('idea'))
			->orderBy('created_at','Desc')->get();	             

		     DB::table('notifications')
		      ->where('entreprenure_id',session('idea'))
		     ->update(['status'=>'1']);

	        return view('Enterpreneur.notifications',compact('notfi'));
	      
    	}
}

		public function Notifications_delete($id)
		{
			notifications::find($id)->delete();
			
		}



}
