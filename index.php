
<?php
header("Content-Type:application/json");
if (isset($_GET['from']) && isset($_GET['to'])) {
	if (isset($_GET['amount'])) {
		$from = $_GET['from'];
		$to = $_GET['to'];
		$amount = $_GET['amount'];
		$curl = curl_init();
		curl_setopt_array($curl, [
			CURLOPT_URL => "https://currency-converter-by-api-ninjas.p.rapidapi.com/v1/convertcurrency?have=$from&want=$to&amount=$amount",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => [
				"X-RapidAPI-Host: currency-converter-by-api-ninjas.p.rapidapi.com",
				"X-RapidAPI-Key: ee3cf9b59fmsh44726a0770502e8p1cf1aajsnf0fcab2517b6"
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
	}else {
		echo json_encode("Please pass amount as parameter");
	}
} else {
	echo json_encode("Please pass the all parameter");
}
?>
