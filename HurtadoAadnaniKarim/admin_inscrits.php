<!DOCTYPE  html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recherche Inscrits</title>
</head>
<body>
    <h1>Inscrits</h1>

    <?php
        $fichier = "inscrits.txt";
        if (!file_exists($fichier) || filesize($fichier) == 0) {
            echo "Aucun inscrit pour l'instant";
        } else {
            $ouvertureFichier = fopen($fichier, "r");
            $lectureFichier = fread($ouvertureFichier, filesize($fichier));
            fclose($fichier);

            $nombreInscrits = substr_count($lectureFichier, "\n");

            echo <p "Nombre d'inscrits : " . $nombreInscrits . "</p>";

            $lectureFichier2 = fopen($fichier, "r");

            echo "<table>";
            echo "<tr><th>Prénom</th><th>Email</th><th>Niveau</th><th>Date d'inscription</th></tr>";

            
        }
    ?>
</body>
</html>