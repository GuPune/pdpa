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






        $image = $request->file('file_upload');


        $imageName = uniqid().'.'.$image->extension();



        $destinationPath = public_path('/storage/thumbnails');



        $img = Image::make($image->path());
        $img->resize(600, 600, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imageName);





        return response()->json([
            'data' => $imageName
        ], 200);

      //  return response()->json(['success'=>$input['imagename']]);


    }
}
