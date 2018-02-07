<?php
$access_token = 'Uevan4Gva4A6wDRonsx4zPJGxBcvThxpTxC7VbRO98+fKMRPcFs8w4wp9j8Dy0hSRVBBOMdnapbboZcCQgLSsAj7O/xNrG+7kUSgt3OMTClsjdK5cTfyS25bUT9W4/82327WgAWbPPQJz7HwGIXR5QdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>