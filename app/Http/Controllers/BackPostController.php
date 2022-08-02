<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Post;
use Illuminate\Http\Request;

class BackPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

$post = Post::orderBy('created_at','desc')->get();

        return view('page.post.index')->with('item',$post);
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

        $sepost = Post::where('id',$id)->first();


        return view('page.post.edit')->with('items',$sepost);
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

     $uppost = Post::where('id',$id)->update(['status' => $request->status]);

        return redirect()->route('postrequest.index')
        ->with('success','แก้ไขสำเร็จ');
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



        $delpost = Post::where('id',$id)->delete();
        $delimage = Images::where('posts_id',$id)->delete();

        return response()->json([
            'msg_return' => 'ลบสำเร็จ',
            'code_return' => 1
        ]);
    }
}
