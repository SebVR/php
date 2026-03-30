<?php
$fichier_inscrits = "inscrits.txt";

$nombre_inscrits = 0;
if (file_exists($fichier_inscrits)) {
    $contenu = fread(fopen($fichier_inscrits, "r"), filesize($fichier_inscrits));
    $nombre_inscrits = substr_count($contenu, "\n");
    if ($nombre_inscrits > 0 && substr($contenu, -1) == "\n") {
        $nombre_inscrits--;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration - Liste des inscrits</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .compteur { font-size: 1.2em; margin-bottom: 20px; padding: 10px; background-color: #e8f4f8; border-left: 4px solid #2196F3; }
        .vide { color: #666; font-style: italic; padding: 20px; background-color: #f9f9f9; border: 1px solid #ddd; }
    </style>
</head>
<body>
    <h1>Administration des inscriptions</h1>
    
    <div class="compteur">
        <strong>Nombre total d'inscrits :</strong> <?php echo $nombre_inscrits; ?>
    </div>

    <?php 
    if (!file_exists($fichier_inscrits) || filesize($fichier_inscrits) == 0) {
        echo '<div class="vide">Aucun inscrit pour l\'instant.</div>';
    } else {
        $fichier = fopen($fichier_inscrits, "r");
        
        if ($fichier) {
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Prénom</th>';
            echo '<th>Email</th>';
            echo '<th>Niveau</th>';
            echo '<th>Date d\'inscription</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            
            while (($ligne = fgets($fichier)) !== false) {
                $ligne = trim($ligne);
                
                if (empty($ligne)) {
                    continue;
                }
                
                $champs = explode(" | ", $ligne);
                
                if (count($champs) == 4) {
                    $prenom = htmlspecialchars(trim($champs[0]));
                    $email = htmlspecialchars(trim($champs[1]));
                    $niveau = htmlspecialchars(trim($champs[2]));
                    $date = htmlspecialchars(trim($champs[3]));
                    
                    echo '<tr>';
                    echo '<td>' . $prenom . '</td>';
                    echo '<td>' . $email . '</td>';
                    echo '<td>' . $niveau . '</td>';
                    echo '<td>' . $date . '</td>';
                    echo '</tr>';
                }
            }
            
            echo '</tbody>';
            echo '</table>';
            
            fclose($fichier);
        } else {
            echo '<div class="vide">Erreur : Impossible d\'ouvrir le fichier.</div>';
        }
    }
    ?>
    
    <p style="margin-top: 20px;">
        <a href="inscription.php">← Retour à l'inscription</a>
    </p>
</body>
</html>