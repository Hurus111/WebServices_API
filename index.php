<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebServices</title>
</head>
<body>
    <h1>Liste des Activites</h1>
    <a href="activite.php"><button>Ici</button></a>
    
    <h1>Ajouter une Activite</h1>
    <form method="post">
        <label for="titre">Titre</label><br>
        <input type="text" name="titre"><p>

        <label for="a_pour_team_leader_id">Team Leader</label><br>
        <input type="text" name="a_pour_team_leader_id"><p>

        <label for="date">Date</label><br>
        <input type="text" name="date"><p>

        <label for="heure_debut">Heure Debut</label><br>
        <input type="text" name="heure_debut"><p>

        <label for="heure_fin">Heure Fin</label><br>
        <input type="text" name="heure_fin"><p>

        <label for="lieu">Lieu</label><br>
        <input type="text" name="lieu"><p>

        <label for="niveau">Niveau</label><br>
        <input type="text" name="niveau"><p>

        <label for="nbr_participant">Participants</label><br>
        <input type="text" name="nbr_participant"><p>

        <label for="activite_terminee">Activite Terminee</label><br>
        <input type="text" name="activite_terminee"><p>

        <input type="submit" value="Créer Activite" name="valider">
    </form>

    <?php
        if(isset($_POST['valider'])){
            
            // API URL
            $url = 'http://lakartxela.iutbayonne.univ-pau.fr/~hrgeslin/WebServices/Projet/WebServices_API/activite.php';

            // Create a new cURL resource
            $ch = curl_init($url);

            // Setup request to send json via POST
            $data = array('a_pour_team_leader_id' => $_POST['a_pour_team_leader_id']
            , 'titre' => $_POST['titre']
            , 'date' => $_POST['date']
            , 'heure_debut' => $_POST['heure_debut']
            , 'heure_fin' => $_POST['heure_fin']
            , 'lieu' => $_POST['lieu']
            , 'niveau' => $_POST['niveau']
            , 'nbr_participant' => $_POST['nbr_participant']
            , 'activite_terminee' => $_POST['activite_terminee']);


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




        }
    
    ?>
</body>
</html>