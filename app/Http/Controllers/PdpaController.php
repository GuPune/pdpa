<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\PdpaForm;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Str;

class PdpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

      //  $data = PdpaForm::where('status','Y')->get();

        $data = PdpaForm::with('branchform')->where('status','Y')->get();
        foreach($data as $datas){
            $datas->branchform; // posts is already loaded and no additional DB query is run
        }
        return view('page.pdpa.index')->with('item',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $typebranch = Branch::all();

        return view('page.pdpa.create')->with('branch',$typebranch);
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
        $randomString = Str::random(30);

        $formpdpa = PdpaForm::create([
            'code_form' => $request->code_form,
            'note' => $request->note,
            'des' => $request->detail,
            'branch_id' => $request->branch_id,
            'linenoti' => $request->linenoti,
            'agree' => $request->agree,
            'status' => 'Y',
            'token' => $randomString
        ]);


        return response()->json([
            'msg_return' => 'บันทึกสำเร็จ',
            'code_return' => 1
        ]);


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
        $datapdpa = PdpaForm::find($id);

        $typebranch = Branch::all();

        return view('page.pdpa.edit')->with('item',$datapdpa)->with('branch',$typebranch);

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




        $datapdpa = PdpaForm::find($id)->update([
            'code_form' => $request->code_form,
            'note' => $request->note,
            'linenoti' => $request->linenoti,
            'agree' => $request->agree,
            'des' => $request->detail,
            'branch_id' => $request->branch_id
        ]);


        return response()->json([
            'msg_return' => 'บันทึกสำเร็จ',
            'code_return' => 1
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $delup = PdpaForm::find($id)->update([
            'status' => 'D'
        ]);

        return response()->json([
            'msg_return' => 'ลบสำเร็จ',
            'code_return' => 1

        ]);
    }


    public function getDatashoptable(Request $request)
    {

        $data = PdpaForm::where('status','Y')->get();
        return DataTables::of($data)->make(true);
    }
}
