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
echo "Voici les details\n";
echo "<br>";
/*echo gettype($reponse);*/

while ($donnees = $reponse->fetch()) {
/*a*/
echo $donnees['nom'] .'; '.$donnees['adIP'] .'; '.$donnees['adMAC'] .'; '.$donnees['id'] .'<br />';

/*echo $donnees['nom'] .'; '.$donnees['id'] .'<br />';*/
}
?>

