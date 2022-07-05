<?php

namespace App\Exports;

use App\Models\Consent;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PdpaExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //

        $x = Consent::join('branch', 'branch.id', '=', 'consent.branch_id')
               ->get(['consent.id', 'branch.name','consent.telephone','consent.ip','consent.browser','consent.os']);
    //    return Consent::select("id", "pdpaform_id", "branch_id","telephone","ip","browser","os")->get();
    return $x;
    }


    public function headings(): array
    {
        return ["ID","Branch","Telephone","IP","BROWSER","OS"];
    }
}
