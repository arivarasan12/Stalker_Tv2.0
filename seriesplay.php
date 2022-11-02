<html>
<head>
<title><?php echo $_REQUEST["c"]; ?> | LiveTV</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="shortcut icon" type="image/x-icon" href="logo.jpg">
<script type="text/javascript" src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<script src="https://cdn.plyr.io/2.0.18/plyr.js"></script>
<link rel="stylesheet" href="https://cdn.plyr.io/2.0.18/plyr.css">
<style>
html {
  font-family: Poppins;
  background: #000;
  margin: 0;
  padding: 0
}

.loading {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        z-index: 9999;
    }
    
    .loading-text {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        text-align: center;
        width: 100%;
        height: 150px;
        line-height: 100px;
    }
    .loading-text span {
        display: inline-block;
        margin: 0 5px;
        color: #00b3ff;
        font-family: 'Quattrocento Sans', sans-serif;
    }
    
    .loading-text span:nth-child(1) {
        filter: blur(0px);
        animation: blur-text 1.5s 0s infinite linear alternate;
    }
    
    .loading-text span:nth-child(2) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.2s infinite linear alternate;
    }
    
    .loading-text span:nth-child(3) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.4s infinite linear alternate;
    }
    
    .loading-text span:nth-child(4) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.6s infinite linear alternate;
    }
    
    .loading-text span:nth-child(5) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.8s infinite linear alternate;
    }
    
    .loading-text span:nth-child(6) {
        filter: blur(0px);
        animation: blur-text 1.5s 1s infinite linear alternate;
    }
    
    .loading-text span:nth-child(7) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.2s infinite linear alternate;
    }
    
    @keyframes blur-text {
        0% {
            filter: blur(0px);
        }
        100% {
            filter: blur(4px);
        }
    }

    .plyr__video-wrapper::before {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 10;
        content: '';
        height: 35px;
        width: 35px;
        
        background-size: 35px auto, auto;
    }

    .plyr__video-wrapper::after {
        position: absolute;
        top: 15px;
        left: 15px;
        z-index: 10;
        content: '';
        height: 40px;
        width: 40px;
        background: url('logo.jpg') no-repeat;
        background-size: 35px auto, auto;
    }

</style>

</head>
<body>
  <div id="loading" class="loading">
<div class="loading-text">
    <span class="loading-text-words">S</span>
    <span class="loading-text-words">T</span>
    <span class="loading-text-words">A</span>
    <span class="loading-text-words">L</span>
    <span class="loading-text-words">K</span>
    <span class="loading-text-words">E</span>
    <span class="loading-text-words">R</span>
    <span class="loading-text-words">-</span>
    <span class="loading-text-words">T</span>
    <span class="loading-text-words">V</span>

</div>
</div>

<div id="player">
<video  title="<?php echo $_REQUEST["c"]; ?>" id="video" style="width:100%;height:100%;"></video>
</div>
<script>
  setTimeout(videovisible, 4000)

function videovisible() {
    document.getElementById('loading').style.display = 'none'
}


var url="<?php
$tem=$_REQUEST["c"];
// $tem='/media/36033.mpg';
$int_var = (int)filter_var($tem, FILTER_SANITIZE_NUMBER_INT);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://live.new4k.tv/stalker_portal/server/load.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
    'X-User-Agent: Model: MAG250; Link: WiFi',
    'Referer: http://live.new4k.tv/stalker_portal/c/',
    'Accept: /',
    'Host: live.new4k.tv',
    'Connection: Keep-Alive'));
curl_setopt($ch, CURLOPT_COOKIE, 'mac=00:1A:79:E2:19:11; stb_lang=en; timezone=GMT');

$response = curl_exec($ch);
// echo $response;
$decoded_json = json_decode($response, true);
 
$customers = $decoded_json['js'];
$token= $customers['token'];
$randome=$customers['random'];
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://live.new4k.tv/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription:%200.2.18-r14-pub-250;%20ImageDate:%20Fri%20Jan%2015%2015:20:44%20EET%202016;%20PORTAL%20version:%205.5.0;%20API%20Version:%20JS%20API%20version:%20328;%20STB%20API%20version:%20134;%20Player%20Engine%20version:%200x566&num_banks=2&sn=EA32DC71A0D9A&client_type=STB&image_version=218&video_out=hdmi&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&metrics=%7B\'mac\':\'00:1A:79:E2:19:11\',\'sn\':\'EA32DC71A0D9A\',\'type\':\'STB\',\'model\':\'MAG254\',\'uid\':\'ED6FF337FC14882EA2FE4CC668CE71DC453C485FAE065DE79DEBFF2066B0911E\',\'random\':\'bada5add10903e4463f7a35a8ec3f32ca143b54b\'%7D&hw_version_2=41493E46C7546D79CEBFEAC403818B05F6D496B8&api_signature=261&JsHttpRequest=1-xml&device_id=ED6FF337FC14882EA2FE4CC668CE71DC453C485FAE065DE79DEBFF2066B0911E&device_id2=ED6FF337FC14882EA2FE4CC668CE71DC453C485FAE065DE79DEBFF2066B0911E&JsHttpRequest=1-xml');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
    'X-User-Agent: Model: MAG250; Link: WiFi',
    'Referer: http://live.new4k.tv/stalker_portal/c/',
    'Authorization: Bearer '.$token,
    'Accept: /',
    'Host: live.new4k.tv',
    'Connection: Keep-Alive',
]);
curl_setopt($ch, CURLOPT_COOKIE, 'mac=00:1A:79:E2:19:11; stb_lang=en; timezone=GMT');

$response = curl_exec($ch);

curl_close($ch);

$episodeid=$_REQUEST["c"];
$cat=$_REQUEST["ca"];
$movieid=$_REQUEST["movid"];
$seasondid=$_REQUEST["seasonid"];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://live.new4k.tv/stalker_portal/server/load.php?type=vod&action=get_ordered_list&category='.$cat.'&movie_id='.$movieid.'&season_id='.$seasondid.'&episode_id='.$episodeid.'&p=1&sortby=added');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
    'X-User-Agent:  Model: MAG250; Link: WiFi',
    'Referer:  http://live.new4k.tv/stalker_portal/c/',
    'Authorization: Bearer '.$token,
    'Accept:  /',
    'Host:  live.new4k.tv',
    'Connection:  Keep-Alive',
    
    // 'Cookie: mac=00:1A:79:E2:19:11; stb_lang=en; timezone=GMT'
));
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_COOKIE, 'mac=00:1A:79:E2:19:11; stb_lang=en; timezone=GMT');
$response = curl_exec($ch);
// echo $response;
$decoded_json = json_decode($response, true);
$customers = $decoded_json['js'];
$channelurl= $customers['data'];
$id=$channelurl[0];
$json = json_encode($id); 
$customers = json_decode($json, true);
$channelurl= $customers['id'];
$json=$channelurl;


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://live.new4k.tv/stalker_portal/server/load.php?type=vod&action=create_link&cmd=%2Fmedia%2Ffile_'.$json.'.mpg&series=');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
    'X-User-Agent:  Model: MAG250; Link: WiFi',
    'Referer:  http://live.new4k.tv/stalker_portal/c/',
    'Authorization: Bearer '.$token,
    'Accept:  /',
    'Host:  live.new4k.tv',
    'Connection:  Keep-Alive',
    
    // 'Cookie: mac=00:1A:79:E2:19:11; stb_lang=en; timezone=GMT'
));
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_COOKIE, 'mac=00:1A:79:E2:19:11; stb_lang=en; timezone=GMT');
$response = curl_exec($ch);
// echo $response;
$decoded_json = json_decode($response, true);
$customers = $decoded_json['js'];
$channelurl= $customers['cmd'];
// $id=$channelurl[0];
// $json = json_encode($id); 
// echo $json;
// $customers = json_decode($json, true);
// $channelurl= $customers['cmd'];
$channelurl1=str_replace("http://edge237.maddogs.fun:80","http://185.59.223.242",$channelurl);
$channelurl2=str_replace("http://edge.metaa.tv","http://185.59.223.242",$channelurl1);
$channelurl3=str_replace("http://edge237.maddogs.fun","http://185.59.223.242",$channelurl2);
curl_close($ch);
echo $channelurl3;
?>";
plyr.setup(video);

 if(Hls.isSupported()) {
    var video = document.getElementById('video');
    var hls = new Hls();
    hls.loadSource(url);
    hls.attachMedia(video);
    hls.on(Hls.Events.MANIFEST_PARSED,function() {
      video.play();
  });
 }
  else if (video.canPlayType('application/vnd.apple.mpegurl')) {
    video.src = url;
    video.addEventListener('canplay',function() {
      video.play();
    });

  }


</script>

</body>
</html>

