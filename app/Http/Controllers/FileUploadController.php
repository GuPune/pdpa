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




        // $filePath = $request->file('file_upload');
        // $fileName = $filePath->getClientOriginalName();
        // $path = $request->file('file_upload')->storeAs('thumbnails', $fileName, 'public');


        // $image = $request->file('file_upload');
        // $imageName = time().'.'.$image->extension();

        // $destinationPathThumbnail = public_path('/thumbnail');






        $image = $request->file('file_upload');

        $x = $request->files->all();
        \Log::info($x);
        foreach ($request->file('file_upload') as $key => $file)
        {

        }
      //  $Checkimp = UserSystemInfoHelper::checkimplode($image);

      $imageName = time().'.'.$image->extension();



        $destinationPath = public_path('/storage/thumbnails');



        $img = Image::make($image->path());
        $img->resize(250, 250, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imageName);

        // $destinationPath = public_path('/images');
        // $image->move($destinationPath, $input['imagename']);

\Log::info($imageName);

        return response()->json([
            'data' => $imageName
        ], 200);

      //  return response()->json(['success'=>$input['imagename']]);


    }
}
