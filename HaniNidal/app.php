<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration des inscrits</title>
</head>
<body>
    <h1>Administration des inscrits</h1>

    <?php
    $fichier = "inscrits.txt";
    
    if (file_exists($fichier) && filesize($fichier) > 0) {
        $handle = fopen($fichier, "r");
        $contenu = fread($handle, filesize($fichier));
        fclose($handle);
        
        $nombre_inscrits = substr_count($contenu, "\n");
        
        echo "Nombre total d'inscrits : $nombre_inscrits";
        
        $handle = fopen($fichier, "r");
        
        echo "<table border='1'>";
        echo "<tr>
                <th>Prénom</th>
                <th>Email</th>
                <th>Niveau</th>
                <th>Date d'inscription</th>
              </tr>";
        
        while (($ligne = fgets($handle)) !== false) {
            $ligne = trim($ligne);
        
            if (!empty($ligne)) {
                $champs = explode("|", $ligne);
                
                if (count($champs) == 4) {
                    echo "<tr>
                            <td>{$champs[0]}</td>
                            <td>{$champs[1]}</td>
                            <td>{$champs[2]}</td>
                            <td>{$champs[3]}</td>
                          </tr>";
                }
            }
        }
        
        echo "</table>";
        fclose($handle);
        
    } else {
        echo "Aucun inscrit pour l'instant";
    }
    ?>

</body>
</html>

