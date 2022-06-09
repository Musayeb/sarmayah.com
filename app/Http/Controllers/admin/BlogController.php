<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use validate;

use Illuminate\Support\Str;

class BlogController extends Controller
{
 	public function index(){	
        $blog=DB::table('blogs')->where('type',null)->join('users','users.id','blogs.author')->get();
        return view('Admin.blogs',compact('blog'));
}


        public function add(){
            return  view('Admin.blog');
        }


      public function create(Request $request){
         
                $validate=$request->validate([
                    'blog_title'=>'required',
                    'blog_content'=>'required',
                    'blog_tag'=>'required',
                ]);
                  
            if($validate==true){ 
               
                if($request->hasFile('featuer_img')){
                    $path = Storage::putFile('public/blog', $request->file('featuer_img'));
                    DB::table('blogs')
                        ->insert([
                    'blog_title'=>$request->blog_title,
                    'blog_content'=>$request->blog_content,
                    'blog_feture_img'=>$path,
                    'tags'=> $request->blog_tag,
                    'author'=>Auth::user()->id,
                    'blog_reg_date'=>date('y-m-d'),
                    'slug'=>Str::slug($request->blog_title, '-'),

                    ]);
                   session()->flash('notif','Information updated successfully !');
                    return redirect('ad/blogs');
                }else{ 
                    DB::table('blogs')
                    ->insert([
                    'blog_title'=>$request->blog_title,
                    'blog_content'=>$request->blog_content,
                    'slug'=>Str::slug($request->blog_title, '-'),
                    'tags'=> $request->blog_tag,
                    'author'=>Auth::user()->id,
                    'blog_reg_date'=>date('y-m-d')
                    ]);
                    session()->flash('notif','Information updated successfully !');
                    return redirect('ad/blogs');
                    
                 }
            }
        }



        public function BlogUpdateView($id){
            $up_blogs=DB::table('blogs')->where('blog_id',$id)->get();
      
            return view('Admin.edit_blog',compact('up_blogs'));
        }

        public function BlogUpdate(Request $request){
            $validate=$request->validate([
                'blog_title'=>'required',
                'blog_content'=>'required',
                'blog_tag'=>'required',
            ]);

            if($request->hasFile('featuer_img')){
                $path = Storage::putFile('public/blog', $request->file('featuer_img'));
                $id=$request->blog_hidden; 
                DB::table('blogs')
                ->where('blog_id',$id)
                    ->update([
                        'blog_title'=>$request->blog_title,
                        'blog_content'=>$request->blog_content,
                        'blog_feture_img'=>$path,
                        'slug'=>Str::slug($request->blog_title, '-'),
                        'tags'=> $request->blog_tag
                    ]);
                session()->flash('notif','Information updated successfully !');
                return redirect('ad/blogs');
            }else{ 
                $id=$request->blog_hidden; 
                DB::table('blogs')
                ->where('blog_id',$id)
                ->update([
                    'blog_title'=>$request->blog_title,
                    'blog_content'=>$request->blog_content,
                    'slug'=>Str::slug($request->blog_title, '-'),
                    'tags'=> $request->blog_tag,
                ]);
                session()->flash('notif','Information updated successfully !');
                return redirect('ad/blogs');
            }

        }

        public function deleBlog($id){
            DB::table('blogs')
            ->where('blog_id',$id)
            ->delete();
        }
}
