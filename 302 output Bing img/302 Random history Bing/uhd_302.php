<?php
// 生成一个0到7之间的随机数，代表过去8天中的某一天
$idx = rand(0, 7); 
$url = "https://cn.bing.com/HPImageArchive.aspx?format=js&idx={$idx}&n=1&mkt=zh-CN";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array(
   "Accept: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// 仅用于调试，生产环境请谨慎使用
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);

$array = json_decode($resp);

// 拼接UHD超高清图片URL
$imgurl = 'https://cn.bing.com'.$array->{"images"}[0]->{"urlbase"}.'_UHD.jpg';

if ($imgurl) {
    header('Location: '.$imgurl); 
    exit(); 
} else {     
    exit('error'); 
}
?>
