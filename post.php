<?php
 
  // API URL
$url = 'http://lakartxela.iutbayonne.univ-pau.fr/~hrgeslin/WebServices/Projet/WebServices_API/activite.php';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data = array('a_pour_team_leader_id' => '1'
  //, 'titre' => 'X'
  , 'date' => 'X'
  , 'heure_debut' => 'X'
  , 'heure_fin' => 'X'
  , 'lieu' => 'New York'
  , 'niveau' => 'X'
  , 'nbr_participant' => 'X'
  , 'activite_terminee' => 'X');


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