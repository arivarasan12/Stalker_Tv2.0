<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
    <title><?php echo $_REQUEST["name"]; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/37fVLxB/f4027915ec9335046755d489a14472f2.png">
    <meta name="robots" content="noindex" />
    <link rel="stylesheet" href="css/darkmode.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.5/lazysizes.min.js"></script>
</head>

<body data-new-gr-c-s-check-loaded="14.1012.0" data-gr-ext-installed="">
    <div id="jtvh1"><a href="https://github.com/arivarasan12">
            <h1><?php echo $_REQUEST["name"]; ?> </h1>
    </div></a>
    <div id="content">
        <div class="container">
            <div id="list" class="row">
                <?php
                $tem = $_REQUEST["c"];
                // $tem = '/media/36043.mpg';
                $cat = $_REQUEST["ca"];
                // $cat = "109";
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
                    'Connection: Keep-Alive'
                ));
                curl_setopt($ch, CURLOPT_COOKIE, 'mac=00:1A:79:E2:19:11; stb_lang=en; timezone=GMT');

                $response = curl_exec($ch);
                // echo $response;
                $decoded_json = json_decode($response, true);

                $customers = $decoded_json['js'];
                $token = $customers['token'];
                $randome = $customers['random'];
                curl_close($ch);

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'http://live.new4k.tv/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription:%200.2.18-r14-pub-250;%20ImageDate:%20Fri%20Jan%2015%2015:20:44%20EET%202016;%20PORTAL%20version:%205.5.0;%20API%20Version:%20JS%20API%20version:%20328;%20STB%20API%20version:%20134;%20Player%20Engine%20version:%200x566&num_banks=2&sn=EA32DC71A0D9A&client_type=STB&image_version=218&video_out=hdmi&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&metrics=%7B\'mac\':\'00:1A:79:E2:19:11\',\'sn\':\'EA32DC71A0D9A\',\'type\':\'STB\',\'model\':\'MAG254\',\'uid\':\'ED6FF337FC14882EA2FE4CC668CE71DC453C485FAE065DE79DEBFF2066B0911E\',\'random\':\'bada5add10903e4463f7a35a8ec3f32ca143b54b\'%7D&hw_version_2=41493E46C7546D79CEBFEAC403818B05F6D496B8&api_signature=261&JsHttpRequest=1-xml&device_id=ED6FF337FC14882EA2FE4CC668CE71DC453C485FAE065DE79DEBFF2066B0911E&device_id2=ED6FF337FC14882EA2FE4CC668CE71DC453C485FAE065DE79DEBFF2066B0911E&JsHttpRequest=1-xml');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
                    'X-User-Agent: Model: MAG250; Link: WiFi',
                    'Referer: http://live.new4k.tv/stalker_portal/c/',
                    'Authorization: Bearer ' . $token,
                    'Accept: /',
                    'Host: live.new4k.tv',
                    'Connection: Keep-Alive',
                ]);
                curl_setopt($ch, CURLOPT_COOKIE, 'mac=00:1A:79:E2:19:11; stb_lang=en; timezone=GMT');

                $response = curl_exec($ch);

                curl_close($ch);




                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'http://live.new4k.tv:/stalker_portal/server/load.php?type=vod&action=get_ordered_list&movie_id=' . $int_var . 'JsHttpRequest1-xml');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
                    'X-User-Agent:  Model: MAG250; Link: WiFi',
                    'Referer:  http://live.new4k.tv/stalker_portal/c/',
                    'Authorization: Bearer ' . $token,
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
                $total_items = $customers['total_items'];
                $max_page_items = $customers["max_page_items"];
                $maxpageno = $total_items / $max_page_items;
                if ($maxpageno < 1) {
                    $maxpageno = 1;
                }
                // echo $maxpageno;
                $token1 = $customers["data"];
                $token2 = $token1[0];
                $json2 = json_encode($token2);
                for ($x = 0; $x < sizeof($token1); $x++) {
                    $tempvar = $token1[$x];
                    $name = $tempvar['name'];
                    $seasonid = $tempvar["id"];
                    $movieid = $tempvar["video_id"];
                    $name = json_encode($name);

                    echo '<div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2"><a href="episode.php?c=';
                
                $name = json_encode($name);
                $seasonid = json_encode($seasonid);
                $name = trim(str_replace('\/', '/', $name), '"');
                $movieid = json_encode($movieid);
                echo trim(str_replace('\/', '/', $movieid), '"');
                echo '&ca=';
                echo $cat;
                echo '&seasonid=';
                echo trim(str_replace('\/', '/', $seasonid), '"');
                echo '&name=';
                echo trim($name, '\"');
                echo '" class="card">';
                echo '<img class="lazyload" data-src="';
                echo 'http://live.new4k.tv';
                echo '" onerror=this.src="http://static2.tgstat.ru/channels/_0/8b/8b2b3c0f2516974f647268e9b5337c60.jpg" style="height: 200px">';
                echo '<div class="card-body"><p class="card-text">';
                echo trim($name, '\"');
                echo ' </p></div></a></div>';

                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>