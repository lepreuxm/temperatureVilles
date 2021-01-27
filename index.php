<FORM action= 'affichage_temperature.php' method ='POST'>

<SELECT name="ville" id=ville>

<?php 

$destinataire = 'mysql:host=localhost; dbname=bdd_temperaturevilles; port=3306'; 
$utilisateur = 'root'; 
$motPasse = ''; 

$connexion = new PDO($destinataire, $utilisateur, $motPasse);

$sql_requette = "SELECT ville FROM temperaturevilles";

$resultats=$connexion->query($sql_requette);

while ($data =$resultats->fetch()) {
?>

<OPTION value= "<?php echo htmlspecialchars($data['ville']);?>"> <?php echo ucfirst($data['ville']);?>   </OPTION>
 
 <?php
 }
 ?>

</SELECT>

<Input type="submit" value="valider" >  

</FORM>