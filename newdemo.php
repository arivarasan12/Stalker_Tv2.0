<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://tv.tvzon.tv/stalker_portal/server/load.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
    'X-User-Agent: Model: MAG250; Link: WiFi',
    'Referer: http://tv.tvzon.tv/stalker_portal/c/',
    'Accept: /',
    'Host: tv.tvzon.tv',
    'Connection: Keep-Alive'));
curl_setopt($ch, CURLOPT_COOKIE, 'mac=00:1a:79:d6:82:fc; stb_lang=en; timezone=GMT');

$response = curl_exec($ch);
$decoded_json = json_decode($response, true);
 
$customers = $decoded_json['js'];
$token= $customers['token'];
$randome=$customers['random'];
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://tv.tvzon.tv/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A%200.2.18-r14-pub-250%3B%20ImageDate%3A%20Fri%20Jan%2015%2015%3A20%3A44%20EET%202016%3B%20PORTAL%20version%3A%205.1.0%3B%20API%20Version%3A%20JS%20API%20version%3A%20328%3B%20STB%20API%20version%3A%20134%3B%20Player%20Engine%20version%3A%200x566&num_banks=2&sn=C17992B38C6B1&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=&device_id2=&signature=&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=c17992b38c6b1ef0e854c478029b8ab3&timestamp=1666586897&api_signature=263&metrics=%7B%22mac%22%3A%2200%3A1A%3A79%3AD6%3A82%3AFC%22%2C%22sn%22%3A%22C17992B38C6B1%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22395d1941f5b3f4649eb51e9cc13e05ae%22%7D&JsHttpRequest=1-xml');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
    'X-User-Agent: Model: MAG250; Link: WiFi',
    'Referer: http://tv.tvzon.tv/stalker_portal/c/',
    'Authorization: Bearer '.$token,
    'Accept: /',
    'Host: tv.tvzon.tv',
    'Connection: Keep-Alive',
]);
curl_setopt($ch, CURLOPT_COOKIE, 'mac=00:1a:79:d6:82:fc; stb_lang=en; timezone=GMT');

$response = curl_exec($ch);

curl_close($ch);








$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://tv.tvzon.tv/stalker_portal/server/load.php?type=itv&action=create_link&forced_storage=undefined&download=0&cmd=ffrt+http%3A%2F%2Flocalhost%2Fch%2F'.$channelno);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
    'X-User-Agent:  Model: MAG250; Link: WiFi',
    'Referer:  http://tv.tvzon.tv/stalker_portal/c/',
    'Authorization: Bearer '.$token,
    'Accept:  /',
    'Host:  tv.tvzon.tv',
    'Connection:  Keep-Alive',
    
    // 'Cookie: mac=00:1a:79:d6:82:fc; stb_lang=en; timezone=GMT'
));
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_COOKIE, 'mac=00:1a:79:d6:82:fc; stb_lang=en; timezone=GMT');
$response = curl_exec($ch);
$decoded_json = json_decode($response, true);
 
$customers = $decoded_json['js'];
$channelurl= $customers['cmd'];
echo $channelurl;
curl_close($ch);