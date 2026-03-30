<?php
// Nom du fichier
$fichier_nom = "inscrits.txt";

// Variable recherche
$mot_cle = "";
$resultats = array();

// Vérifier si une recherche a été envoyée
if(isset($_POST["recherche"])) {
    if(!empty($_POST["mot_cle"])) {
        $mot_cle = $_POST["mot_cle"];
    } else {
        $erreur = "Veuillez entrer un mot-clé.";
    }
}

// Vérifier si fichier existe et n'est pas vide
if(file_exists($fichier_nom) && filesize($fichier_nom) > 0) {

    // Compter nombre d'inscrits
    $fichier = fopen($fichier_nom, "r");
    $contenu = fread($fichier, filesize($fichier_nom));
    fclose($fichier);

    $nombre_inscrits = substr_count($contenu, "\n");

} else {
    $nombre_inscrits = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Administration des inscrits</title>
</head>
<body>

<h2>Liste des inscrits</h2>

<?php
if($nombre_inscrits > 0) {
    echo "<p>Nombre total d'inscrits : " . $nombre_inscrits . "</p>";
} else {
    echo "<p>Aucun inscrit pour l'instant.</p>";
}
?>

<!-- FORMULAIRE DE RECHERCHE -->
<form method="post">
    <input type="text" name="mot_cle" placeholder="Rechercher un inscrit (prenom ou email)">
    <input type="submit" name="recherche" value="Rechercher">
</form>

<br>

<?php
// Si fichier existe et pas vide
if($nombre_inscrits > 0) {

    echo "<table border='1'>";
    echo "<tr>
            <th>Prénom</th>
            <th>Email</th>
            <th>Niveau</th>
            <th>Date d'inscription</th>
          </tr>";

    $fichier = fopen($fichier_nom, "r");

    while($ligne = fgets($fichier)) {

        // Si recherche active
        if(!empty($mot_cle)) {
            // Vérifie si le mot existe dans la ligne (insensible à la casse)
            if(!stristr($ligne, $mot_cle)) {
                continue; // passer à la ligne suivante
            }
        }

        // Découper les champs
        $donnees = explode("|", $ligne);

        // Nettoyage simple (enlever espaces)
        $prenom = trim($donnees[0]);
        $email = trim($donnees[1]);
        $niveau = trim($donnees[2]);
        $date = trim($donnees[3]);

        // Affichage
        echo "<tr>";
        echo "<td>$prenom</td>";
        echo "<td>$email</td>";
        echo "<td>$niveau</td>";
        echo "<td>$date</td>";
        echo "</tr>";
    }

    fclose($fichier);

    echo "</table>";

    // Si recherche mais aucun résultat trouvé
    if(!empty($mot_cle)) {
        // Recompter pour voir si rien trouvé
        $fichier = fopen($fichier_nom, "r");
        $trouve = false;

        while($ligne = fgets($fichier)) {
            if(stristr($ligne, $mot_cle)) {
                $trouve = true;
            }
        }
        fclose($fichier);

        if(!$trouve) {
            echo "<p>Aucun inscrit ne correspond à votre recherche.</p>";
        }
    }

}
?>

<br>
<a href="inscription.php">Retour à l'inscription</a>

</body>
</html>