<?php


$url = "https://www.boredapi.com/api/activity";
    $json = file_get_contents($url);
    $data = json_decode($json);

    //var_dump($data->{'activity'});
    var_dump($data->{'activity'});


$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://google-translate1.p.rapidapi.com/language/translate/v2",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "q=".$data->{'activity'}."&target=fr&source=en",
	CURLOPT_HTTPHEADER => [
		"accept-encoding: application/gzip",
		"content-type: application/x-www-form-urlencoded",
		"x-rapidapi-host: google-translate1.p.rapidapi.com",
		"x-rapidapi-key: e13d6edd5fmsh56c25d4405cdaa6p1e2624jsn2f063bccce41"
	],
]);

$activiteFrance = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $activiteFrance;
}
echo '<br>';




$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://geo-services-by-mvpc-com.p.rapidapi.com/countries?language=en",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: geo-services-by-mvpc-com.p.rapidapi.com",
		"x-rapidapi-key: e13d6edd5fmsh56c25d4405cdaa6p1e2624jsn2f063bccce41"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $data=json_decode($response);
}





$i=random_int(0,219);

$pays=$data->{'data'}[$i];

$iso_alpha=$pays->{'iso_alpha2'};

var_dump($iso_alpha);

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://geo-services-by-mvpc-com.p.rapidapi.com/cities/significant?sort=population%2Cdesc&language=en&countrycode=".$iso_alpha."&pourcent=0.05&limit=10",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: geo-services-by-mvpc-com.p.rapidapi.com",
		"x-rapidapi-key: e13d6edd5fmsh56c25d4405cdaa6p1e2624jsn2f063bccce41"
	],
]);

$json = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$data=json_decode($json);
}


$villes=$data->{'data'};
var_dump($villes);

$j=random_int(0,9);

$laVille=$villes[$j];


