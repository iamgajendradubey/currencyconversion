<?php
header("Content-Type:application/json");
if(isset($_GET['from'])){
$from = $_GET['from'];
$response = [
    "success"=> true,
    "USD" => "1",
    "EUR" => 1.02
];
echo json_encode($response);
}else{
    echo "please pass all the perameter";
}
?>