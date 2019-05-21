<?php
$a=$_GET['a'];

$response['rumah']['merah']['boleh'] = $a;
$response['rumah']['merah']['tidak'] = "iya";
$response['rumah']['biru'] = "enggak";
$response['rumah']['biru']= "iya";
	
$response['rumah2']['merah2'] = "enggak";
$response['rumah2']['merah2']= "iya";
$response['rumah2']['biru2']= "enggak";
$response['rumah2']['biru2'] = "iya";


echo json_encode($response);


?>