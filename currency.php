<?php
    $from = $_POST["from"];
    $to = $_POST["to"];
    $amount = $_POST["amount"];

    $string = $from . "_" . $to;

    $curl = curl_init();
	curl_setopt_array($curl, array(
	    CURLOPT_URL => "https://free.currconv.com/api/v7/convert?q=" . $string . "&compact=ultra&apiKey={your_api_key}",
	    CURLOPT_RETURNTRANSFER => 1
	));

	$response = curl_exec($curl);
	echo "<br><br><br>";
	print_r($response);

	$response = json_decode($response, true);
	echo "<br><br><br>";
	print_r($response);

	$rate = $response[$string];
	$total = $rate * $amount;

	echo "<br><br><br>";
	print_r($total);
?>