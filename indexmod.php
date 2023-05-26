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
echo "Les modifs\n";
echo "<br>";

$a=$_POST["name"];
echo $a;
$b=$_POST["name2"];
$c=$_POST["name3"];
$d=$_POST["name4"];
$e=$_POST["name5"];
$f=$_POST["name6"];
echo $b;
echo $c;
echo $d;
echo $e;
echo $f;

$requete = "SELECT * FROM Equipement WHERE id = $a;";
$requete = "UPDATE Equipement SET nom = $b WHERE id = $a;";
$requete = "UPDATE Equipement SET adMAC = $c WHERE id = $a;";
$requete = "UPDATE Equipement SET adIP = $d WHERE id = $a;";
$requete = "UPDATE Equipement SET CIDR = $e WHERE id = $a;";
$requete = "UPDATE Equipement SET idT = $f WHERE id = $a;";
//echo "<h1> $requete </h1>";
$reponse = $bdd->query($requete);
while ($donnees = $reponse->fetch()) {
var_dump($donnees);
}





















/*$a = $_POST["nom2"];
$b = $_POST["mac2"];
$c = $_POST["ip2"];
$d = $_POST["cidr2"];
$e = $_POST["idt2"];

/*$aa = $_POST["nom"];
$ba = $_POST["adMAC"];
$ca = $_POST["adIP"];
$da = $_POST["cidr"];
$ea = $_POST["idt"];
$donnees['nom'];
$donnees['adMAC'];
$donnees['adIP'];
$donnees['id'];*/
/*echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
echo $d;
echo "<br>";
echo $e;

$requete = "UPDATE Equipement SET nom = '".$donnees."' WHERE nom = ".$a.";";
//echo "<h1> $requete </h1>";*/
/*$reponse = $bdd->query($requete);

/*while ($donnees = $reponse->fetch()) {
	$requete = "INSERT INTO Equipement (nom, adMAC, adIP, CIDR, idt) VALUES ("$var", "$vare", "$varea", "$vareb", "$varec");";
	echo "<h1> $requete</h1>";
	$reponse = $bdd->query($requete);*/
?>

