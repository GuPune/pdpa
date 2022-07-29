<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;
use DB;

class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
// $images = Images::where('status','Y')->orderBy('created_at', 'DESC')->paginate(25);

$images = DB::table('images')
->select('images.id','images.images','images.status','images.user_id','images.updated_at','images.posts_id','posts.status','users.avatar','users.name','images.status as img_status')
->join('users', 'users.id', '=', 'images.user_id')
->join('posts', 'posts.id', '=', 'images.posts_id')
->where('posts.status','=','Y')
->where('images.status','=','S')
->orderBy('images.updated_at', 'desc')
->paginate(10);

// dd

// $images = Images::with('profileuser')->where('status','S')->orderBy('updated_at', 'DESC')->get();



        return view('page.front.gallery.index')->with('item',$images);
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
