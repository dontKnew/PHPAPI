<?php
 
// function file_get_contents_ssl($url) {
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
//     curl_setopt($ch, CURLOPT_HEADER, false);
//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_REFERER, $url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3000); // 3 sec.
//     curl_setopt($ch, CURLOPT_TIMEOUT, 10000); // 10 sec.
//     $result = curl_exec($ch);
//     curl_close($ch);
//     return $result;
// }

// echo file_get_contents_ssl('https://localhost/Angular/WebAPI/API/FailureBoy/project/8');

echo file_get_contents('http://localhost/Angular/WebAPI/API/FailureBoy/project/8');


?>