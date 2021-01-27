<?php

$destinataire = 'mysql:host=localhost; dbname=bdd_temperaturevilles; port=3306'; 
$utilisateur = 'root'; 
$motPasse = ''; 

$connexion = new PDO($destinataire, $utilisateur, $motPasse);



$resultats=$connexion->prepare('SELECT  temperature, DAY(last_update) as jour, MONTH(last_update) as mois, YEAR(last_update) as annee, HOUR(last_update) as heure, MINUTE(last_update) as minutes, ville   FROM temperaturevilles WHERE ville = ?');
$resultats->execute(array($_POST['ville']));

while ($data= $resultats->fetch() )
{

	
echo 'Le '  .$data['jour']. '/' .$data['mois']. '/' .$data['annee'].' à '. $data['heure'] .':' . $data['minutes'] . ' il faisait ' . $data['temperature'] . '°C à ' . ucfirst($data['ville']);
		

} 




$resultats->closeCursor();

?>
