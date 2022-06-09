<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page_content;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class website_pages_controller extends Controller
{

	public function privacy(){
		$privacy=Page_content::find(1);		
		return view('Admin.privacy_policy',compact('privacy'));
	}
	public function privacy_post(Request $request){

        $datavalide = $request->validate([
			'privacy'=>'required'
		]);
        if ($datavalide==true){
		DB::table('page_contents')
		->where('page_id',1)
		->update([
			'privacy_page'=>$request->privacy
		]);
		session()->flash('notif','information updated successfully');
		return back();
		}
	}

		public function term_of_use(){
		$terms_of_use=Page_content::find(2);		
		return view('Admin.terms_of_use',compact('terms_of_use'));
	}
		public function term_of_use_post(Request $request){
	   $datavalide = $request->validate([
			'terms_of_use'=>'required'
		]);
        if ($datavalide==true){
		DB::table('page_contents')
		->where('page_id',2)
		->update([
			'terms_of_use_page'=>$request->terms_of_use
		]);
		session()->flash('notif','information updated successfully');
		return back();
		}
	}


	public function intellectual_property(){
		$intellectual_property=Page_content::find(3);		
		return view('Admin.intellectual_property',compact('intellectual_property'));
	}
		public function intellectual_property_post(Request $request){
	   $datavalide = $request->validate([
			'intellectual_property'=>'required'
		]);
        if ($datavalide==true){
		DB::table('page_contents')
		->where('page_id',3)
		->update([
			'intellectual_property'=>$request->intellectual_property
		]);
		session()->flash('notif','information updated successfully');
		return back();
		}
	}
		public function support(){
		$support=Page_content::find(4);		
		return view('Admin.support',compact('support'));
	}
		public function support_post(Request $request){
	   $datavalide = $request->validate([
			'support'=>'required'
		]);
        if ($datavalide==true){
		DB::table('page_contents')
		->where('page_id',4)
		->update([
			'support'=>$request->support
		]);
		session()->flash('notif','information updated successfully');
		return back();
		}
	}
		public function investors_relationship(){
		$investor_relation=Page_content::find(5);		
		return view('Admin.investor_relation',compact('investor_relation'));
	}
		public function investors_relationship_post(Request $request){
	   $datavalide = $request->validate([
			'investors_relation'=>'required'
		]);
        if ($datavalide==true){
		DB::table('page_contents')
		->where('page_id',5)
		->update([
			'investors_relationship'=>$request->investors_relation
		]);
		session()->flash('notif','information updated successfully');
		return back();
		}
	}



	public function website_pages(){
		$pages=DB::table('page_contents')->join('users','users.id','page_contents.autor')->orderBy('page_contents.created_at','DESC')->get();
		
		return view('Admin.website_pages',compact('pages'));
	}

	public function create_pages(){
		
		return view('Admin.create_pages');
	}



	public function add_page_add(Request $request)
	{
		  $datavalide = $request->validate([
			'page_type'=>'required',
			'page_content'=>'required'

		]);

		if ($datavalide==true) {
		$check=DB::table('page_contents')->where('page_name',$request->page_type)->get();
		if ($check->isEmpty()) {
			
		DB::table('page_contents')
		->insert(['page_name'=>$request->page_type,
				 'page_content'=>$request->page_content,
				 'created_at'=>date('Y-m-d h:i:s'),
				 'autor'=>Auth::user()->id,

				]);

		session()->flash('notif','Successfully Page Created');
		return redirect('ad/website_pages');
		}else{
		session()->flash('error','Page is  Already Exist! ');
		return back();	
		}
		}

	}
	public function page_edit($id)
	{
		$page=DB::table('page_contents')->where('page_id',$id)->get();
		return view('Admin.edit_page',compact('page'));		
	}

	public function page_update(Request $request)
	{
		DB::table('page_contents')->where('page_id',$request->hide)
		->update(['page_content'=>$request->page_content]);
			
		session()->flash('notif','Information Updated Successfully');
		return redirect('ad/website_pages');		

	}

	public function delete_update($id)
	{
		DB::table('page_contents')->where('page_id',$id)->delete();
	}


	public function press_pages(){
		
		$blog=DB::table('blogs')->where('type','news')->join('users','users.id','blogs.author')->get();
		return view('Admin.press.press_all',compact('blog'));
	}

	public function press_page_add()
	{
		return view('Admin.press.press_add');	
	}

	public function press_page_add_new(Request $request)
	{
		    $validate=$request->validate([
                    'news_title'=>'required',
                    'news_content'=>'required',
                    'news_tag'=>'required',
                ]);
                  
            if($validate==true){ 
               
                if($request->hasFile('featuer_img')){
                    $path = Storage::putFile('public/blog', $request->file('featuer_img'));
                    DB::table('blogs')
                        ->insert([
                    'blog_title'=>$request->news_title,
                    'blog_content'=>$request->news_content,
                    'blog_feture_img'=>$path,
                    'tags'=> $request->news_tag,
                    'author'=>Auth::user()->id,
                    'blog_reg_date'=>date('y-m-d'),
                    'slug'=>Str::slug($request->news_title, '-'),
                    'type'=>"news",

                    ]);
                   session()->flash('notif','Information updated successfully !');
                    return redirect('ad/press-news');
                }else{ 
                    DB::table('blogs')
                    ->insert([
                    'blog_title'=>$request->news_title,
                    'blog_content'=>$request->news_content,
                    'slug'=>Str::slug($request->news_title, '-'),
                    'tags'=> $request->news_tag,
                    'author'=>Auth::user()->id,
                    'type'=>"news",
                    'blog_reg_date'=>date('y-m-d')
                    ]);
                    session()->flash('notif','Information updated successfully !');
                    return redirect('ad/press-news');
                    
                 }
            }

	}


public function press_page_edit($id){
	$blog=DB::table('blogs')->where('type','news')->where('blog_id',$id)->get();
	return view('Admin.press.press_edit',compact('blog'));
}
public function press_page_update(request $request){	
	   $validate=$request->validate([
                'news_title'=>'required',
                'news_content'=>'required',
                'news_tag'=>'required',
            ]);

            if($request->hasFile('featuer_img')){
                $path = Storage::putFile('assets/', $request->file('featuer_img'));
                $id=$request->blog_hidden; 
                DB::table('blogs')
                ->where('blog_id',$id)
                    ->update([
                        'blog_title'=>$request->news_title,
                        'blog_content'=>$request->news_content,
                        'blog_feture_img'=>$path,
                        'slug'=>Str::slug($request->news_title, '-'),
                        'tags'=> $request->news_tag
                    ]);
                session()->flash('notif','Information updated successfully !');
                return redirect('ad/press-news');
            }else{ 
                $id=$request->blog_hidden; 
                DB::table('blogs')
                ->where('blog_id',$id)
                ->update([
                    'blog_title'=>$request->news_title,
                    'blog_content'=>$request->news_content,
                    'slug'=>Str::slug($request->news_title, '-'),
                    'tags'=> $request->news_tag,
                ]);
                session()->flash('notif','Information updated successfully !');
                return redirect('ad/press-news');
            }

}


public function press_page_delete($id){
    DB::table('blogs')
    ->where('blog_id',$id)
    ->delete();
}


	public function career_pages(){
	 $blog=DB::table('blogs')->where('type','career')->join('users','users.id','blogs.author')->get();
		return view('Admin.career.career_all',compact('blog'));
	}
	public function career_add(){
		return view('Admin.career.careers_add');
	}
	
	public function career_create(Request $request){
		$validate=$request->validate([
                    'job_title'=>'required',
                    'job_location'=>'required',
                    'job_catagory'=>'required',
                    'job_type'=>'required',
                    'job_closing_date'=>'required',
                    'job_content'=>'required',
                    'job_tag'=>'required',

                ]);
                  
            if($validate==true){ 
               
                    DB::table('blogs')->insert([
                    'blog_title'=>$request->job_title,
                    'blog_content'=>$request->job_content,
                    'tags'=> $request->job_tag,
                    'job_location'=> $request->job_location,
                    'job_catagory'=> $request->job_catagory,
                    'job_type'=> $request->job_type,
                    'job_close_date'=> $request->job_closing_date,
                    'author'=>Auth::user()->id,
                    'blog_reg_date'=>date('y-m-d'),
                    'slug'=>Str::slug($request->job_title, '-'),
                    'type'=>"career",		
                    ]);
                   session()->flash('notif','Information updated successfully !');
                    return redirect('ad/Careers');
                      
            }
	}
	public function career_edit ($id)
	{
		$blog=DB::table('blogs')->where('type','career')->where('blog_id',$id)->get();

			return view('Admin.career.career_edit',compact('blog'));
	}
	public function career_update (Request $request)
	{
		$validate=$request->validate([
                    'job_title'=>'required',
                    'job_location'=>'required',
                    'job_catagory'=>'required',
                    'job_type'=>'required',
                    'job_closing_date'=>'required',
                    'job_content'=>'required',
                    'job_tag'=>'required',

                ]);
                  
            if($validate==true){ 
               
                    DB::table('blogs')->where('blog_id',$request->id)->update([
                    'blog_title'=>$request->job_title,
                    'blog_content'=>$request->job_content,
                    'tags'=> $request->job_tag,
                    'job_location'=> $request->job_location,
                    'job_catagory'=> $request->job_catagory,
                    'job_type'=> $request->job_type,
                    'job_close_date'=> $request->job_closing_date,
                    'author'=>Auth::user()->id,
                    'slug'=>Str::slug($request->job_title, '-'),
                    'type'=>"career",		
                    ]);
                    session()->flash('notif','Information updated successfully !');
                    return redirect('ad/Careers');
                      
            }

			return view('Admin.career.career_edit',compact('blog'));
	}
		public function career_delete($id){
		    DB::table('blogs')
		    ->where('blog_id',$id)
		    ->delete();
		}


		public function partners()
		{
	     	$blog=DB::table('blogs')->where('type','partner')->join('users','users.id','blogs.author')->get();
			return view('Admin.partners.parteners',compact('blog'));
		}


		public function partners_store(Request $request){
        $path = Storage::putFile('public/partners', $request->file('partner_logo'));

			DB::table('blogs')->insert([
		 	    'partner_name'=>$request->partner_name,
				'partner_logo'=>$path,
		   	    'partner_website_link'=>$request->website_link,
				'partner_catagory'=>$request->catagory,
				'type'=>"partner",
				'author'=>Auth::user()->id,
				'blog_reg_date'=>date('Y-m-d'),

			]);
			 session()->flash('notif','Information updated successfully !');
            return redirect()->back();

		}
}
 