<?php
$chemin_fichier = "inscrits.txt"; 
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

    <?php
    if (!file_exists($chemin_fichier) || filesize($chemin_fichier) == 0) {
        echo "<p>Aucun inscrit trouvé.</p>";
    } else {
        $inscrits = fopen($chemin_fichier, "r");
        $content = fread($inscrits, filesize($chemin_fichier));
        fclose($inscrits);

        $nb_inscrits = substr_count($content, "\n");
        echo "<p>Nombre d'inscrits : $nb_inscrits</p>";

        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Prénom</th>";
        echo "<th>Email</th>";
        echo "<th>Niveau</th>";
        echo "<th>Date d'inscription</th>";
        echo "</tr>";

        $inscrits = fopen($chemin_fichier, "r");
        while (!feof($inscrits)) {
            $line = fgets($inscrits);

            $champs = explode("|", $line);

            echo "<tr>";
            echo "<td>" . $prenom . "</td>";
            echo "<td>" . $email . "</td>";
            echo "<td>" . $niveau . "</td>";
            echo "<td>" . $date . "</td>";
            echo "</tr>";
        }

        fclose($inscrits);

        echo "</table>";
    }
    ?>
</body>
</html>