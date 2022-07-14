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


        $originalImage= $request->file('file_upload');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/thumbnail/';
        $originalPath = public_path().'/images/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(150,150);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

        // $img = Image::make($image->path());
        // $img->resize(100, 100, function ($constraint) {
        //     $constraint->aspectRatio();
        // })->save($destinationPathThumbnail.'/'.$imageName);

        // $destinationPath = public_path('/images');
        // $image->move($destinationPath, $imageName);


        // $img = Image::make($image->path());
        // $img->resize(100, 100, function ($constraint) {
        //     $constraint->aspectRatio();
        // })->save($destinationPathThumbnail.'/'.$imageName);



        // \Log::info($img);

        return response()->json([
            'data' => $path,
        ], 200);
    }
}
