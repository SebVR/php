<?php
$nomFichier = "inscrits.txt";
$totalInscrits = 0;
$messageErreur = "";

if (file_exists($nomFichier) && filesize($nomFichier) > 0) {
    $pointeur = fopen($nomFichier, "r");
    $contenu = fread($pointeur, filesize($nomFichier));
    $totalInscrits = substr_count($contenu, "\n");
    fclose($pointeur); 
} else {
    $messageErreur = "Aucun inscrit pour l'instant";
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

    <form method="GET" action="">
        <input type="text" name="motcle" placeholder="Rechercher (prénom/email)" value="<?php echo htmlspecialchars($recherche); ?>">
        <button type="submit">Rechercher</button>
    </form>
    <br>
    
    <?php 
    if (!empty($messageErreur)) {
        echo "<p>" . $messageErreur . "</p>";
    } else {
        echo "<p>Nombre total d'inscrits : " . $totalInscrits . "</p>";
    }
    ?>
        <table>
        <tr>
            <th>Prénom</th>
            <th>Email</th> 
            <th>Niveau</th>
            <th>Date d'inscription    </th>
        </tr>
        <tbody>
        <?php
        $pointeur =fopen($nomFichier, "r");
        while (($ligne =fgets($pointeur)) !== false) {
            $inscrit = explode(";", $ligne);
            echo "<tr>";
            echo "<td>" . htmlspecialchars($inscrit[0]) . "</td>";
            echo "<td>" . htmlspecialchars($inscrit[1]) . "</td>";
            echo "<td>" . htmlspecialchars($inscrit[2]) . "</td>";
            echo "<td>" . htmlspecialchars($inscrit[3]) . "</td>";
            echo "</tr>";
        }
        fclose($pointeur);
        ?>
        </tbody>





        </table>

    </body>
</html>