<?php
header("Content-Type:application/json");
if(isset($_GET['from']) && isset($_GET['to']) && isset($_GET['amount']) ){
    
$to= $_GET['to'];   
$from = $_GET['from'];
$amount = $_GET['amount'];
$response = [
    "new_amount"=> $amount*1.02,
    "new_currency"=> $to,
    "old_currency"=> $from,
    "old_amount"=>$amount
];

echo json_encode($response);

}else{
    echo "please pass all the perameter";
}
?>