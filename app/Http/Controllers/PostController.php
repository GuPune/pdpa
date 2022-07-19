<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Images;
use Illuminate\Support\Facades\Auth;
use App\CoreFunction\Datatable;

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


        // $id = Auth::user()->id;
        // $getpost = Post::max('id') + 1;
        // $url = env('APP_URL'). '/post/'.$getpost;
        // $inpost = Post::create([
        //     'url' => $url,
        //     'status' => 'Y'
        // ]);

        // $saveimages = Images::create([
        //     'user_id' => $id,
        //     'posts_id' => $inpost->id,
        //     'images' => 'Y',
        //     'status' => 'Y',
        // ]);



//         foreach ($request->images_upload as $key => $images) {
// \Log::info($images);

//         }


if($request->images_upload){
    $Checkimp = Datatable::checkimplode($request->images_upload);
    \Log::info($Checkimp);

}






     //   return response()->json($inpost->id, 200);
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
        $datas['images'] = [];


        return view('page.front.post.index');
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
