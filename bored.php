<?php

    $url = "https://www.boredapi.com/api/activity";
    $data = file_get_contents($url);
    $json = json_decode($data);

    var_dump($json);
?>