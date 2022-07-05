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
        return Consent::select("id", "pdpaform_id", "branch_id","telephone","ip","browser","os")->get();
    }


    public function headings(): array
    {
        return ["ID", "Pdpaform", "Branch","Telephone","IP","BROWSER","OS"];
    }
}
