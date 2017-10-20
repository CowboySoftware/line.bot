<?php
$access_token = 'K6FFrE1obPIdg/LtwR5jdPTUkqgRULNhhZH0gq4GDgz852xqvguoqeKcN0WWyQ8O389+eMRTWcXLRkH5uw0TpxRx18uG5Ost9FAwmj63ZD49ksisvlruV4gwbernPjJ4FH2GQEp63wmkZOEk599k3AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
