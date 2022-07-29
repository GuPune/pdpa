<?php

namespace App\Http\Controllers;

use App\CoreFunction\Datatable;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Images;
use App\Helpers\UserSystemInfoHelper;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


       $id = Auth::user()->id;
         $getpost = Post::max('id') + 1;
        $url = env('APP_URL'). '/post/'.$getpost;

        if($request->allow == 'true'){

            $inpost = Post::create([
            'url' => $url,
            'status' => 'Y'
        ]);
        }
        else {

        $inpost = Post::create([
            'url' => $url,
            'status' => 'F'
        ]);
        }





if($request->images_upload){
    $Checkimp = UserSystemInfoHelper::checkimplode($request->images_upload);

    foreach ($Checkimp as $key => $shareLocationData) {
        $urlupload = env('APP_URL'). '/storage/thumbnails/'.$shareLocationData;
             $saveimages = Images::create([
            'user_id' => $id,
            'posts_id' => $inpost->id,
            'images' => $urlupload,
            'status' => 'Y',
        ]);


    }


}


    return response()->json($inpost->id, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //




$datapost = Post::where('id',$id)->first();
        $datas = [];

        $datas['id'] = $datapost->id;
        $datas['url'] = $datapost->url;
        $datas['images'] = [];

        $image = Images::where('posts_id',$datapost->id)->get();

        foreach ($image as $key => $shareLocationData) {

            $datas['images'][$key] = $shareLocationData;


        }





        return view('page.front.post.index')->with('item',$datas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
