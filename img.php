<?php
$url = "http://dn-m.talk.kakao.com/talkm/oXyPxYU5SR/O1OWwrkSKfCkzit9B8psLK/i_ko0fnh.png";
// $url = "http://dn-m.talk.kakao.com/talkm/oXAsjY7EZh/RovsK8h6jfdmBKAZPwKWg1/i_lrek6p.jpg";
$fileType = pathinfo($url, PATHINFO_EXTENSION);

$options = array(
    'http' => array(
        "method" => "GET",
        "header" => "\r\n"
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

$fileData = base64_encode($result);

echo "data:" . $fileType . ";base64," . $fileData;
