<?php
$url = "http://mud-kage.kakao.com/dn/KXSE4/oZPfQueNQ1/cz0O9Xe7qhh0qkDHzisjt1/f_atcbpk.txt";
$fileType = pathinfo($url, PATHINFO_EXTENSION);
$fileName = pathinfo($url, PATHINFO_FILENAME);

$options = array(
    'http' => array(
        "method" => "GET",
        "header" => "\r\n"
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

header("Pragma: public");
header("Expires: 0");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=$fileName.$fileType");
header("Content-Transfer-Encoding: binary");
header("Content-Length: " . strlen($result));

ob_clean();
flush();

// echo strlen($result);
echo $result;
