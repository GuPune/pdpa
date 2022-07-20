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






    //     $image = $request->file('file_upload');


    //   $imageName = time().'.'.$image->extension();



    //     $destinationPath = public_path('/storage/thumbnails');



    //     $img = Image::make($image->path());
    //     $img->resize(250, 250, function ($constraint) {
    //         $constraint->aspectRatio();
    //     })->save($destinationPath.'/'.$imageName);


\Log::info($request->hasfile('file_upload'));








        return response()->json([
            'data' => 0
        ], 200);

      //  return response()->json(['success'=>$input['imagename']]);


    }
}
