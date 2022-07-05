<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PdpaExport;
use Carbon\Carbon;

class ExcelController extends Controller
{
    //

    public function fileExport()
    {
        $nowTimeDate = Carbon::now()->format('mdY');

    return Excel::download(new PdpaExport, $nowTimeDate.'.xlsx');
    }
}
