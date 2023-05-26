<?php
$server = "localhost";
$dbname = "test";
$user = "romain";
$passwd = "btsinfo";

try {
	$bdd = new PDO('mysql:host='.$server.';dbname='.$dbname.';charset=utf8',
	$user, $passwd);
} catch (Exception $except){
	die('Erreur : ' . $except->getMessage());
}

$requete = 'SELECT * FROM Equipement';
$reponse = $bdd->query($requete);
echo "saisie le nom de la machine\n";
echo "a erase\n";
echo "<br>";
$suppr = $_POST["sup"];
echo $suppr;

$requete = "DELETE FROM Equipement WHERE nom = '".$suppr."'";
echo "<h1> $requete </h1>";
$reponse = $bdd->query($requete);

/*while ($donnees = $reponse->fetch()) {
	$requete = "INSERT INTO Equipement (nom, adMAC, adIP, CIDR, idt) VALUES ("$var", "$vare", "$varea", "$vareb", "$varec");";
	echo "<h1> $requete</h1>";
	$reponse = $bdd->query($requete);*/
?>

