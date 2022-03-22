<?php

  // API URL
$url = 'http://lakartxela.iutbayonne.univ-pau.fr/~nvgouvet/PHP/S4/Api/utilisateurs';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data = array(
  'identifiant' => 'y', 'nom' => 'y', 'prenom' => 'y', 'date_naissance' => '01/01/2002'
  , 'email' => 'y.vierat@gmail.com'
  , 'mot_de_passe' => 'y'
);
$payload = json_encode( $data);
// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);
echo($result);

// Close cURL resource
curl_close($ch);
?>