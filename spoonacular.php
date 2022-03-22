<?php
    $API_KEY = "e1dc9db02ad54d2eb85616af3405cd80";
    $query = "";
    
    $url = "https://api.spoonacular.com/recipes/complexSearch?apiKey=$API_KEY&$query";
    $json = file_get_contents($url);
    $api = json_decode($json);

    var_dump($api);
    
?>