<?php
$nomFichier = "inscrits.txt";
$recherche = "";
$message = "";
$lignesAAfficher = array();
$totalInscrits = 0;


if (file_exists($nomFichier) && filesize($nomFichier) > 0) {
$fichier = fopen($nomFichier, "r");
$contenu = fread($fichier, filesize($nomFichier));
fclose($fichier);

$totalInscrits = substr_count($contenu, "\n");
} else {
$contenu = "";
}


if (isset($_POST["rechercher"])) {
if (empty($_POST["motcle"])) {
$message = "Veuillez saisir un mot-clé.";
} else {
$recherche = trim($_POST["motcle"]);

if (file_exists($nomFichier) && filesize($nomFichier) > 0) {
$fichier = fopen($nomFichier, "r");

while (!feof($fichier)) {
$ligne = fgets($fichier);

if ($ligne !== false && stristr($ligne, $recherche)) {
$lignesAAfficher[] = $ligne;
}
}

fclose($fichier);

if (empty($lignesAAfficher)) {
$message = "Aucun inscrit ne correspond à votre recherche.";
}
} else {
$message = "Aucun inscrit pour l'instant.";
}
}
} else {

if (file_exists($nomFichier) && filesize($nomFichier) > 0) {
$fichier = fopen($nomFichier, "r");

while (!feof($fichier)) {
$ligne = fgets($fichier);

if ($ligne !== false && trim($ligne) != "") {
$lignesAAfficher[] = $ligne;
}
}

fclose($fichier);
} else {
$message = "Aucun inscrit pour l'instant.";
}
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Administration des inscrits</title>
</head>
<body>

<h1>Liste des inscrits</h1>

<p><strong>Nombre total d'inscrits :</strong> <?php echo $totalInscrits; ?></p>

<form method="post" action="admin_inscrits.php">
<label for="motcle">Rechercher un inscrit (prénom ou email)</label><br>
<input
type="text"
name="motcle"
id="motcle"
value="<?php echo htmlentities($recherche); ?>"
size="40"
>
<input type="submit" name="rechercher" value="Rechercher">
</form>

<br>

<?php if (!empty($message)) { ?>
<p><?php echo htmlentities($message); ?></p>
<?php } ?>

<?php if (!empty($lignesAAfficher)) { ?>
<table border="1" cellpadding="8" cellspacing="0">
<tr>
<th>Prénom</th>
<th>Email</th>
<th>Niveau</th>
<th>Date d'inscription</th>
</tr>

<?php foreach ($lignesAAfficher as $ligne) { ?>
<?php
$infos = explode("|", $ligne);

$prenom = isset($infos[0]) ? trim($infos[0]) : "";
$email = isset($infos[1]) ? trim($infos[1]) : "";
$niveau = isset($infos[2]) ? trim($infos[2]) : "";
$date = isset($infos[3]) ? trim($infos[3]) : "";
?>
<tr>
<td><?php echo htmlentities($prenom); ?></td>
<td><?php echo htmlentities($email); ?></td>
<td><?php echo htmlentities($niveau); ?></td>
<td><?php echo htmlentities($date); ?></td>
</tr>
<?php } ?>
</table>
<?php } ?>

<br>
<p><a href="inscription.php">Retour vers inscription.php</a></p>

</body>
</html>

