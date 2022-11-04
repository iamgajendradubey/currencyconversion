
<?php
header("Content-Type:application/json");
if(isset($_GET['from'])){
$from = $_GET['from'];
// $to = $_GET['to'];
// $amount = $_GET['amount'];
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.apilayer.com/currency_data/live?base=$from",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "apikey: zBxLWPeSDweSSdpyDltGwnJRklLV71wK"
    ],
]);
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
echo $response;
}else{
	echo "please pass all the perameter";
}

?>
