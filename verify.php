<?php
$access_token = 'r4Qu7atGU6f3BSoBebvCkrIOdDm3HFyK9h0KpNBRkLy4hX+wooEh8ZdWua0kkbpm389+eMRTWcXLRkH5uw0TpxRx18uG5Ost9FAwmj63ZD4K/xR/rgZkDAY3unDwRg4O3pLAqdf4qgfCTE1BqPbDDgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
