<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FileUploadController extends Controller
{
    //

    public  function dropzoneFileUpload(Request $request)
    {




        // $filePath = $request->file('file_upload');
        // $fileName = $filePath->getClientOriginalName();
        // $path = $request->file('file_upload')->storeAs('thumbnails', $fileName, 'public');


        // $image = $request->file('file_upload');
        // $imageName = time().'.'.$image->extension();

        // $destinationPathThumbnail = public_path('/thumbnail');






        $image = $request->file('file_upload');
        $input['imagename'] = time().'.'.$image->extension();

        $destinationPath = public_path('\storage\thumbnails');


        $img = Image::make($image->path());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        // $destinationPath = public_path('/images');
        // $image->move($destinationPath, $input['imagename']);

        // return response()->json(['success'=>$input['imagename']]);


    }
}
