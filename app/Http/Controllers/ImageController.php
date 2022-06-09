<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class ImageController extends Controller
{
    /**
     * Uploads a new image.
     *
     * @param mixed $request
     * @author Niklas Fandrich
     * @return mixed
     */

    public function resizeImagess()
    {
    	return view('test');
    }
    public function upload(Request $request) {
      $this->validate($request, [
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
      ]);

      $this->storeImage($request);
    }


    /**
     * Prepares a image for storing.
     *
     * @param mixed $request
     * @author Niklas Fandrich
     * @return bool
     */
    public function storeImage($request) {
      // Get file from request
      $file = $request->file('image');

      // Get filename with extension
      $filenameWithExt = $file->getClientOriginalName();

      // Get file path
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

      // Remove unwanted characters
      $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
      $filename = preg_replace("/\s+/", '-', $filename);

      // Get the original image extension
      $extension = $file->getClientOriginalExtension();

      // Create unique file name
      $fileNameToStore = $filename.'_'.time().'.'.$extension;

      // Refer image to method resizeImage
      $save = $this->resizeImage($file, $fileNameToStore);

      return true;
    }

    /**
     * Resizes a image using the InterventionImage package.
     *
     * @param object $file
     * @param string $fileNameToStore
     * @author Niklas Fandrich
     * @return bool
     */
    public function resizeImage($file, $fileNameToStore) {
      // Resize image
      $resize = Image::make($file)->resize(200,null, function ($constraint) {
        $constraint->aspectRatio();
      })->encode('png');

      // Create hash value
      $hash = md5($resize->__toString());

      // Prepare qualified image name
      $image = $hash."png";

      // Put image to storage
      $save = Storage::put("public/images/{$fileNameToStore}", $resize->__toString());

      if($save) {
        return true;
      }
      return false;
    }

}


// namespace App\Http\Controllers;
   
// use Illuminate\Http\Request;
// use App\Http\Requests;
// use Image;
// class ImageController extends Controller
// {
  
//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function resizeImage()
//     {
//         return view('test');
//     }
  
//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function resizeImagePost(Request $request)
//     {
//         $this->validate($request, [
//             'title' => 'required',
//             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//         ]);
  
//         $image = $request->file('image');
//         $input['imagename'] = time().'.'.$image->extension();
     
//         $destinationPath = public_path('storage\app\public\test');
//         $img = Image::make($image->path());
//         $img->resize(100, 100, function ($constraint) {
//             $constraint->aspectRatio();
//         })->save($destinationPath.'/'.$input['imagename']);
   
//         $destinationPath = public_path('\images');
//         $image->move($destinationPath, $input['imagename']);
   
//         return back()
//             ->with('success','Image Upload successful')
//             ->with('imageName',$input['imagename']);
//     }
   
// }