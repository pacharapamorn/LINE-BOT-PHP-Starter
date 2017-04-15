<?php
$access_token = 'PK8HrMKBrooef4C66+qzxfhOhDIFIKWXmRpupxyHgfC99B83mhkmX61zZcKJLWOUpNiKRMQ+nSvxsMIJ1j3mOsJqsS9nNzl3rCa5pyKWEEDBJVWCJgnas7iYklFe2zl5TgiR+v+clmL+WZJydE7JNwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;