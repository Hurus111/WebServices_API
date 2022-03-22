<?php
    $API_KEY = "55865038d4ef6483a53cacdb6a181062";
    $city = "Anglet";

    $url = "http://api.weatherstack.com/current?access_key=$API_KEY&query=$city";
    $json = file_get_contents($url);
    $api = json_decode($json);

    var_dump($api);
?>