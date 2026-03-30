<?php
$chemin_fichier = "inscrits.txt"; 
$recherche = "";
$erreur_recherche = "";

if (isset($_POST["rechercher"])) {
    if (empty($_POST["mot"])) {
        $erreur_recherche = "Veuillez entrer un mot.";
    } else {
        $recherche = str_replace("\\", "", $_POST["mot"]);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
</head>
<body>
    <h1>Liste des Inscrits</h1>

    <form method="post" action="admin_inscrits.php">
        <input type="text" name="mot" size ="40" 
            placeholder="Rechercher un inscrit" 
            value="<?php if (!empty($recherche)) echo htmlspecialchars($recherche); ?>" />
        <input type="submit" name="rechercher" value="Rechercher" />
        <?php if (!empty($erreur_recherche)) echo "<p style='color: red;'>" . $erreur_recherche . "</p>"; ?>
    </form>

    <?php
    if (!file_exists($chemin_fichier) || filesize($chemin_fichier) == 0) {
        echo "<p>Aucun inscrit trouvé.</p>";
    } else {

        if (empty($recherche) && !isset($_POST["rechercher"])) {
            $inscrits = fopen($chemin_fichier, "r");
            $content = fread($inscrits, filesize($chemin_fichier));
            fclose($inscrits);
            $nb_inscrits = substr_count($content, "\n");
            echo "<p>Nombre d'inscrits : $nb_inscrits</p>";
        }

        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Prénom</th>";
        echo "<th>Email</th>";
        echo "<th>Niveau</th>";
        echo "<th>Date d'inscription</th>";
        echo "</tr>";

        $inscrits = fopen($chemin_fichier, "r");
        $nb_total_recherches = 0;

        while (!feof($inscrits)) {
            $line = fgets($inscrits);

            if (trim($line) == "") continue;
    if (!empty($recherche) && !stristr($line, $recherche)) continue;

            $champs = explode("|", $line);
            $prenom = htmlentities(trim($champs[0]));
            $email  = htmlentities(trim($champs[1]));
            $niveau = htmlentities(trim($champs[2]));
            $date   = htmlentities(trim($champs[3])); 

            echo "<tr>";
            echo "<td>" . $prenom . "</td>";
            echo "<td>" . $email . "</td>";
            echo "<td>" . $niveau . "</td>";
            echo "<td>" . $date . "</td>";
            echo "</tr>";

            $nb_total_recherches++;
        }

        fclose($inscrits);

        echo "</table>";

        if (!empty($recherche) && $nb_total_recherches == 0) {
            echo "<p>Aucun inscrit ne correspond à votre recherche.</p>";
        }
    }
    ?>
    <br>
    <a href="inscription.php">Retour à l'administration</a>
</body>
</html>