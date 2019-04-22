
<?php

$username = 'Admin';
$password = '248625759';
$max_connections = "1";
$reseller = "";
$arrayName = array(1,2);

$arr = array('1' => 1, '2' => 2);


$expire_date = strtotime( "+1 month" );

$post_data = array( 'user_data' => array(
        'username' => $username,
        'password' => $password,
        'is_restreamer' => $reseller,
        'exp_date' => $expire_date,﻿﻿
        'bouquet' => json_decode($arr) ) );﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://185.165.241.20:25461/api.php?action=user&sub=create');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$headers = array();
$headers[] = 'Content-type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

curl_close ($ch);
echo $result;

echo $expire_date;
?>

