<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:95f8aaec011f218da370a3cc478b1954",
                  "X-Auth-Token:a6dc9e938dbd556dfd35cee2cfd7c9d5"));
session_start();
if(isset($_SESSION['regid'])){
include("dbcred.php");

$link = mysqli_connect("51.68.139.41","chimera","szkzj7muFrEizlg3", "chimera_");
         if (mysqli_connect_error()) {  
            die("Failed to connect to MySQL: (" . mysqli_connect_error() . ") " . mysqli_error($link));     
        }

$query = "SELECT * FROM `users` WHERE CH_ID = '".mysqli_real_escape_string($link, $_SESSION['regid'])."'";

            $result = mysqli_query($link, $query);
            $row = $result->fetch_assoc();


$id = $_SESSION['regid'];
$name = $row['f_name'];
$email = $row['e_mail'];
$phone = $row['phone_number'];
$kiitian = $row['institution'];
if($kiitian == 'KIIT'){
    $type = '150';
}
else if($kiitian == 'School student'){
    $type = '100';
}
else if($kiitian == 'Others'){
    $type = '200';
}
$payload = Array(
    'purpose' => $id,
    'amount' => $type,
    'phone' => $phone,
    'buyer_name' => $name,
    'redirect_url' => 'https://www.kritarth.org/webhook/success.php',
    'send_email' => false,
    'webhook' => 'https://www.kritarth.org/payment/webhook.php',
    'send_sms' => false,
    'email' => $email,
    'allow_repeated_payments' => false
);



curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

$paymentArray = json_decode($response, true);
 print_r($paymentArray);
$long_url = $paymentArray['payment_request']['longurl'];
header('Location: '.$long_url);

session_destroy();

}
?>