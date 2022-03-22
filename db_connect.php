<?php
    $server = "lakartxela.iutbayonne.univ-pau.fr";
    $username = "nvgouvet_pro";
    $password = "nvgouvet_pro";
    $db = "nvgouvet_pro";

    $conn = mysqli_connect($server,$username,$password,$db);

    if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
    }

?>