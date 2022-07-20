<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Helpers\UserSystemInfoHelper;

class FileUploadController extends Controller
{
    //

    public  function dropzoneFileUpload(Request $request)
    {









        if($request->hasFile('file_upload'))
        {
            \Log::info('เข้าif');
            //run actions with files
            $files = $request->file('file_upload');

            foreach($files as $key => $file)
            {
                \Log::info('เข้าloop');
                //Action your file thing here!

            }
        }




    //   $imageName = time().'.'.$image->extension();


    //     $destinationPath = public_path('/storage/thumbnails');


    //     $img = Image::make($image->path());
    //     $img->resize(250, 250, function ($constraint) {
    //         $constraint->aspectRatio();
    //     })->save($destinationPath.'/'.$imageName);




        return response()->json([
            'data' => 1
        ], 200);

      //  return response()->json(['success'=>$input['imagename']]);


    }
}
