<?php
$API_URL = 'https://raw.githubusercontent.com/btuny/infos/main/hash-00';
$SITE_CODE ='a8st4f59bj';
$HASH_TYPE = 'SHA256';
$HASH_URL = $API_URL . '?siteCode=' . $SITE_CODE . '&hashType=' . $HASH_TYPE;

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $HASH_URL,
));

$response = json_decode(curl_exec($curl));

// Some method to compare the hash code
checkHash(response.hashCode);

curl_close($curl);
