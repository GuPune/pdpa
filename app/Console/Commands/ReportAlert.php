<?php

namespace App\Console\Commands;

use App\Models\Branch;
use App\Models\Consent;
use App\Models\PdpaForm;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class ReportAlert extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $signature = 'cron:report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {




$endWeek   = Carbon::now()->subWeek()->endOfWeek();  //
$end   = Carbon::now()->subWeek()->endOfWeek()->addDay(7);  //






     //    $address = $request['address'];
     //    $province_id = $request['province_id'];
     //    $districts_id = $request['districts_id'];
     //    $sub_districts_id = $request['sub_districts_id'];
     //    $zipcode = $request['zipcode'];
     //    $name = $request['name'];


     $getpapdform = PdpaForm::where('status','Y')->get();


     foreach ($getpapdform as $getpapdforms){
        $m = Carbon::now()->format('m');
        $y = Carbon::now()->format('Y');
        $getbranch = Branch::where('id',$getpapdforms->branch_id)->first();
        $getconsent = Consent::where('branch_id',$getpapdforms->branch_id)->whereBetween('created_at', [$endWeek, $end])->count();
        $getconsentm = Consent::where('branch_id',$getpapdforms->branch_id)->whereMonth('created_at', $m)->whereYear('created_at', '=', $y)->count();


        $str = "จำนวนผู้ลงทะเบียน Consent $getconsent
        📋 ระหว่างวันที่  : $endWeek
        📋 ถึงวันที่ : $end
        📋 สาขา : $getbranch->name
        📋 จำนวนทั้งหมดเดือนปัจจุบัน : $getconsentm
        ";

        $message =  $str;
        $lineapi = $getpapdforms->linenoti; // ใส่ token key ที่ได้มา
        $mms =  trim($message); // ข้อความที่ต้องการส่ง
        date_default_timezone_set("Asia/Bangkok");
        $chOne = curl_init();
        curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        // SSL USE
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
        //POST
        curl_setopt( $chOne, CURLOPT_POST, 1);

        curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=$mms");

        curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1);

        $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'', );
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);

        curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec( $chOne );


     //   return $result;
        }





        // return 0;
    }
}
