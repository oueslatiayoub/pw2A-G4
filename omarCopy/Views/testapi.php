<?php
$string ="azerty pussy fuck fuck";
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://neutrinoapi-bad-word-filter.p.rapidapi.com/bad-word-filter",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "content=$string&censor-character=*",
	CURLOPT_HTTPHEADER => [
		"content-type: application/x-www-form-urlencoded",
		"x-rapidapi-host: neutrinoapi-bad-word-filter.p.rapidapi.com",
		"x-rapidapi-key: 2ceefd083cmsh9c8f3a7577c9822p10ff24jsncbe1c9883482"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode('"', $response);
echo $pieces[3]; // piece1
 // piece2
/*if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}*/
?>