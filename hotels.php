<?php
// API_KEY = f978fbe633msh335e80f24b00380p1d3edejsn1afa0e8791ab
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://hotels4.p.rapidapi.com/locations/v2/search?query=new%20york&locale=en_US&currency=USD",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: hotels4.p.rapidapi.com",
		"x-rapidapi-key: f978fbe633msh335e80f24b00380p1d3edejsn1afa0e8791ab"
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

?>