<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CallbacklineController extends Controller
{
    //


    public function sendmessage()
    {

      //demo  $accessToken = "5UzVXzbvCNq6hDCpDgT2GIRUA7ZMg4mN4dW5mpliuO7Ri8A34/mIWJHZxR67htNCHQ/tYmpp46XwjjOzBGzQdaxK2HLIKLZ1Wkzvw9tKovn0KrXxF3bGr9c1gSzOAf1C4WpS6c3XgRxmQFDNTq4sjQdB04t89/1O/w1cDnyilFU=";//copy ข้อความ Channel access token ตอนที่ตั้งค่า
        //production
     //   $accessToken = "MnoPaFXP66KY6G00TalxorswgdrC0sMlH127aiCmCP/urVBlN270DUv/9GZwcPafVxCoX/5EnBZ9FAtA6DFC+be6qudjYLMpTROpmDHpJzdU6cpI0HvSdNxC6PVl7ImRzUhpGfGq/NNd83zCgKFAwwdB04t89/1O/w1cDnyilFU=";//copy ข้อความ Channel access token ตอนที่ตั้งค่า


//        $accessToken = System::where('system_encodeid','A2')->pluck('system_link')->first();
//        $content = file_get_contents('php://input');
//        $arrayJson = json_decode($content, true);
//        $arrayHeader = array();
//        $arrayHeader[] = "Content-Type: application/json";
//        $arrayHeader[] = "Authorization: Bearer {$accessToken}";
//        //รับข้อความจากผู้ใช้
//        \Log::info($accessToken);
//
//        $mid = $arrayJson['events'][0]['source'];
//        $messagetext = $arrayJson['events'][0];
//
//      //  $replyToken = $arrayJson["events"][0]["replyToken"];
//        $follow = $arrayJson["events"][0]["type"];
//        if($follow == 'message'){
//$pic = 'https://projecttests.com/storage/image/ybT6tFLwMcTLQFYLTBSiJJIETYIDcODBhpELL6I7.png';
//            $message = $arrayJson['events'][0]['message']['text'];
//            $keyword = Keyword::where('ask',$message)->value('answer');
//            if($message == 'ประกันภัยยานภาหนะ'){
//                $arrayPostData['to'] = $mid['userId'];
//                $arrayPostData['messages'][0]['type'] = "text";
//                $arrayPostData['messages'][0]['text'] = $keyword;
//                $motorinsu = [];
//                $motor = Insurance::where('type','Y')->get();
//
//
//                $this->flexmessage($arrayHeader,$arrayPostData,$mid,$motor);
//            }
//            if($message == 'ประกันภัยอื่นๆ'){
//                $arrayPostData['to'] = $mid['userId'];
//                $arrayPostData['messages'][0]['type'] = "text";
//                $arrayPostData['messages'][0]['text'] = $keyword;
//                $motorinsu = [];
//                $nonmotor = Insurance::where('type','N')->get();
//
//                $this->flexmessagenon($arrayHeader,$arrayPostData,$mid,$nonmotor);
//            }
//
//            if($keyword){
//                $arrayPostData['to'] = $mid['userId'];
//                $arrayPostData['messages'][0]['type'] = "text";
//                $arrayPostData['messages'][0]['text'] = $keyword;
//              //  $this->pushMsg($arrayHeader,$arrayPostData);
//                $this->pushMsg($arrayHeader,$arrayPostData);
//
//            }
//        }
//        if($follow == 'follow'){
//            $str = "ติดตามแล้ว";
//\Log::info('ติดตามแล้ว');
//            $this->follow($mid);
//
//        }
//        if($follow == 'unfollow'){
//            $str = "ติดตามแล้ว";
//            $this->unfollow($mid);
//
//        }




        return response()->json(['status' => 'ok'], 200);
    }

    public function follow($mid){

      //  $LINEDatas = [];
        $accessToken = System::where('system_encodeid','A2')->pluck('system_link')->first();
        $LINEDatas['url'] = "https://api.line.me/v2/bot/profile/".$mid['userId'];
        $LINEDatas['token'] = $accessToken;
       // $results = $this->getLINEProfile($LINEDatas);

       // $results = self::getUserProfile($mid['userId']);

       // $pictureUrl = (array_key_exists('pictureUrl', $userProfile))? $userProfile['pictureUrl'] : null;


       $check = LineUserProfile::where('userId',$mid['userId'])->first();

       if(!$check){

           $this->storeLineUserProfile($mid['userId']);
       }else{

           $this->updateLineUserProfile($mid['userId'],1);
       }

    }

    public function unfollow($mid){

        //  $LINEDatas = [];
        $accessToken = System::where('system_encodeid','A2')->pluck('system_link')->first();
        $LINEDatas['url'] = "https://api.line.me/v2/bot/profile/".$mid['userId'];
        $LINEDatas['token'] = $accessToken;
        // $results = $this->getLINEProfile($LINEDatas);

        // $results = self::getUserProfile($mid['userId']);

        // $pictureUrl = (array_key_exists('pictureUrl', $userProfile))? $userProfile['pictureUrl'] : null;


        $check = LineUserProfile::where('userId',$mid['userId'])->first();
        if($check){
            $this->updateLineUserProfile($mid['userId'],0);
        }

    }



    public static function getUserProfile($mid)
    {
      //  $lineSettingBusiness = LineSettingBusiness::where('active', 1)->first();
        $accessToken = System::where('system_encodeid','A2')->pluck('system_link')->first();
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.line.me/v2/bot/profile/".$mid,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer ".$accessToken,
                "cache-control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }

        return json_decode($response,true);
    }


    public static function storeLineUserProfile($mid)
    {
        $lineUserProfile = LineUserProfile::where('userId',$mid)->first();
        // GreetingMessage::sendGreeting($mid);

        $userProfile = self::getUserProfile($mid);

        $displayName = (array_key_exists('displayName', $userProfile))? $userProfile['displayName'] : null;
        $pictureUrl = (array_key_exists('pictureUrl', $userProfile))? $userProfile['pictureUrl'] : null;
        if($lineUserProfile == ''){
            $lineUserProfile = LineUserProfile::create([
                'userId' => $mid,
                'name' => $displayName,
                'avatar' => $pictureUrl,
                'flag' => '1',
            ]);
        }else{
            if($displayName != $lineUserProfile->name || $pictureUrl != $lineUserProfile->avatar){
                $lineUserProfile->update([
                    'name' => $displayName,
                    'avatar' => $pictureUrl,
                ]);
            }
        }
        return $lineUserProfile;
    }


    public static function updateLineUserProfile($mid,$flag)
    {
        $lineUserProfile = LineUserProfile::where('userId',$mid)->first();


        $lineUserProfile->update([
            'flag' => $flag
        ]);
        return $lineUserProfile;
    }


        public static function pushMsg($arrayHeader,$arrayPostData){
        $strUrl = "https://api.line.me/v2/bot/message/push";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$strUrl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrayPostData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close ($ch);
    }


    public function flexmessage($arrayHeader,$arrayPostData,$mid,$motor){

            $arrayPostData['to'] = $mid['userId'];

$motortoken = System::where('system_encodeid','A4')->where('system_status','Y')->value('system_link');

        $datas = collect();
        foreach ($motor as $key => $insur) {

            $kas = [];
            $kas = Fact_insurance::where('insurance_id', $insur->id)->get();

$inu = [];
            foreach ($kas as $index => $kass) {
                $typearray = Type::where('id', $kass->type_id)->value('name');
                array_push($inu, $typearray);
            }

           $type_inname = implode( ',', $inu );

          //  $urlx ="https://liff.line.me/1655673015-aG0g96zK/".urlencode($insur->id);
            $urlx ="https://liff.line.me/$motortoken?=".urlencode($insur->id);
            $pic = 'https://projecttests.com/storage/'.$insur->icon;

            $carousel = '{
      "type": "bubble",
      "hero": {
        "type": "image",
        "url": "'.$pic.'",
        "size": "full",
        "aspectRatio": "20:13",
        "aspectMode": "cover",
        "action": {
          "type": "uri",
          "label": "Action",
          "uri": "https://linecorp.com"
        }
      },
      "body": {
        "type": "box",
        "layout": "vertical",
        "spacing": "md",
        "action": {
          "type": "uri",
          "label": "Action",
          "uri": "https://linecorp.com"
        },
        "contents": [
          {
            "type": "text",
            "text": "'.$insur->name.'",
            "weight": "bold",
            "size": "xl",
            "contents": []
          },
          {
            "type": "text",
             "text": "'.$type_inname.'",
            "size": "xxs",
            "color": "#AAAAAA",
            "wrap": true,
            "contents": []
          }
        ]
      },
      "footer": {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "spacer",
            "size": "xxl"
          },
          {
            "type": "button",
            "action": {
              "type": "uri",
              "label": "สนใจทำประกัน",
              "uri": "'.$urlx.'"
            },
            "color": "#E67825",
            "style": "primary"
          }
        ]
      }
    }';
            $datas->push(json_decode($carousel, true));
        }




            $cut = substr($datas, 0, -2);
            $cutx = substr($cut, 2);


            $x1 = '[{
       "type": "flex",
      "altText": "ขอบคุณสำหรับข้อควาวม",
      "contents": {
  "type": "carousel",
  "contents": '.$datas.'
}
    }]';

            $manage = json_decode($x1);
            $arrayPostData['messages'] = $manage;
        $this->pushMsg($arrayHeader,$arrayPostData);

    }

    public function flexmessagenon($arrayHeader,$arrayPostData,$mid,$motor){


        $arrayPostData['to'] = $mid['userId'];

        $motortoken = System::where('system_encodeid','A5')->where('system_status','Y')->value('system_link');

        $datas = collect();
        foreach ($motor as $key => $insur) {

            $urlx ="https://liff.line.me/$motortoken?=".urlencode($insur->id);
            $pic = 'https://projecttests.com/storage/'.$insur->icon;

            $carousel = '{
      "type": "bubble",
      "hero": {
        "type": "image",
        "url": "'.$pic.'",
        "size": "full",
        "aspectRatio": "20:13",
        "aspectMode": "cover",
        "action": {
          "type": "uri",
          "label": "Action",
          "uri": "https://linecorp.com"
        }
      },
      "body": {
        "type": "box",
        "layout": "vertical",
        "spacing": "md",
        "action": {
          "type": "uri",
          "label": "Action",
          "uri": "https://linecorp.com"
        },
        "contents": [
          {
            "type": "text",
            "text": "'.$insur->name.'",
            "weight": "bold",
            "size": "xl",
            "contents": []
          },
          {
            "type": "text",
            "text": "'.$insur->description.'",
            "size": "xxs",
            "color": "#AAAAAA",
            "wrap": true,
            "contents": []
          }
        ]
      },
      "footer": {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "spacer",
            "size": "xxl"
          },
          {
            "type": "button",
            "action": {
              "type": "uri",
              "label": "สนใจทำประกัน",
              "uri": "'.$urlx.'"
            },
            "color": "#E67825",
            "style": "primary"
          }
        ]
      }
    }';
            $datas->push(json_decode($carousel, true));
        }




        $cut = substr($datas, 0, -2);
        $cutx = substr($cut, 2);


        $x1 = '[{
       "type": "flex",
      "altText": "ขอบคุณสำหรับข้อควาวม",
      "contents": {
  "type": "carousel",
  "contents": '.$datas.'
}
    }]';

        $manage = json_decode($x1);
        $arrayPostData['messages'] = $manage;

        $this->pushMsg($arrayHeader,$arrayPostData);

    }

}
