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
echo "Les ajouts\n";
echo "<br>";
$var = $_POST["nom"];
$vare = $_POST["mac"];
$varea = $_POST["ip"];
$vareb = $_POST["cidr"];
$varec = $_POST["idt"];
echo $var;
echo "<br>";
echo $vare;
echo "<br>";
echo $varea;
echo "<br>";
echo $vareb;
echo "<br>";
echo $varec;

$requete = "INSERT INTO Equipement (nom, adMAC, adIP, CIDR, idt) VALUES ('$var', '$vare', '$varea', '$vareb', '$varec');";
//echo "<h1> $requete </h1>";*/
$reponse = $bdd->query($requete);

/*while ($donnees = $reponse->fetch()) {
	$requete = "INSERT INTO Equipement (nom, adMAC, adIP, CIDR, idt) VALUES ("$var", "$vare", "$varea", "$vareb", "$varec");";
	echo "<h1> $requete</h1>";
	$reponse = $bdd->query($requete);*/
?>

