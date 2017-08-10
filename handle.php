$rec= $_POST['RecordingUrl'];
$callSid= $_POST['CallSid'];
$recSid= $_POST['RecordingSid'];

$url = "https://apis.voicebase.com/v2-beta/media";
$headers = array(
‘Authorization: Bearer <your-token>‘,
);
$params = array(
"configuration" => $customconfiguration,
"media" => $rec
);

<?php
        set_time_limit(0);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_VERBOSE, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 0);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_LOW_SPEED_LIMIT, 0);
	curl_setopt($ch, CURLOPT_LOW_SPEED_TIME, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	$response = curl_exec($ch);
	curl_close($ch);
	echo $response;
?>

$jsonDoc =json_decode($response, true);
$uploadresultstatus = $json_response['status'];
$mediaid = $json_response[‘mediaId'];
