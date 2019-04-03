<?php

$ch = curl_init();
$vars=$_GET['payment_request_id'];
curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/'.$vars.'/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:95f8aaec011f218da370a3cc478b1954",
                  "X-Auth-Token:a6dc9e938dbd556dfd35cee2cfd7c9d5"));
$response = curl_exec($ch);

$phpvar = json_decode($response);
//$ch_id = $response['payment_request']['purpose'];
include("dbcred.php");
$link = mysqli_connect("51.68.139.41","chimera","szkzj7muFrEizlg3", "chimera_");
         if (mysqli_connect_error()) {  
            die("Failed to connect to MySQL: (" . mysqli_connect_error() . ") " . mysqli_error($link));     
        }

	//echo $response;
	$pid = $_GET['payment_id'];
		$query = "SELECT `CH_ID` FROM `payment` WHERE `payment_id` = '$pid'";
$result = mysqli_query($link, $query);
            $row = $result->fetch_assoc();
			$ch_id = $row['CH_ID'];
curl_close($ch); 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Payment Successful</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<style type="text/css">
	html { 
		  background: url(background.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
</style>

</head>
<body>

<div class="container" style="background: white;">
	<div class="col s12 m2 z-depth-5 center-align" style="margin-top: 15%;padding: 10px; ">
	<p><b><h4>You have successfully completed your payment!</h4></b></p>
	<p><h5><b>CHIMERA ID:</b> <?php echo $ch_id;?></h5></p>
	<p><h5><b>Payment ID:</b> <?php echo $_GET['payment_id'];?></h5></p>
	</div>
</div>

</body>
</html>