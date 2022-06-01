<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CoreFunction\Datatable;
use App\Models\Branch;


use DataTables;


class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //



        return view('page.branch.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.branch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $save = Branch::create([
            'code' => $request->code,
            'name' => $request->name,
            'status' => 'Y'
        ]);
        return redirect()->route('branch.index')
        ->with('success','เพิ่มข้อมูลสำเร็จ');
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

        $find = Branch::find($id);

   

       
        return view('page.branch.edit')->with('item',$find);
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


        $upd = Branch::find($id)->update([
            'code' => $request->code,
            'name' => $request->name,
        ]);

        return redirect()->route('branch.index')
        ->with('success','แก้ข้อมูลสำเร็จ');
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

        $delup = Branch::find($id)->update([
            'status' => 'D'
        ]);

        return response()->json([
            'msg_return' => 'ลบสำเร็จ',
            'code_return' => 1

        ]);
    }


    public function getDatashoptable(Request $request)
    {

        $data = Branch::where('status','Y')->get();
        return DataTables::of($data)->make(true);
    }

    public function delupdate(Request $request)
    {

 \Log::info($request->all());

 
    }


    

}
