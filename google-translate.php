<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://google-translate20.p.rapidapi.com/translate",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "text=The%20POST%20method%20has%20several%20advantages%20over%20GET%3A%20it%20is%20more%20secure%20because%20most%20of%20the%20request%20is%20hidden%20from%20the%20user%3B%20Suitable%20for%20big%20data%20operations.&tl=es&sl=en",
	CURLOPT_HTTPHEADER => [
		"content-type: application/x-www-form-urlencoded",
		"x-rapidapi-host: google-translate20.p.rapidapi.com",
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