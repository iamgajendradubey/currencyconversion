
<?php
header("Content-Type:application/json");
if (isset($_POST['url'])) {
   if (isset($_POST['Authorization'])) {
$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => $_POST['url'],
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_HTTPHEADER => [
		"Authorization:".$_POST['Authorization'],
        "Content-Type:application/x-www-form-urlencoded"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
}
else {
	
echo "Unauthorized Access";
	
}
}else {
	echo "Missing Sandbox url Parameter";
}
?>