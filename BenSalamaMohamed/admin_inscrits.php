<?php
$recherche = "";
$mode_recherche = false;

if(isset($_POST["rechercher"]) && !empty($_POST["mot"])) {
    $recherche = str_replace("\\", "", $_POST["mot"]);
    $mode_recherche = true;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration des inscrits</title>
</head>
<body>

<h1>Administration des inscrits</h1>

<form method="post" action="admin_inscrits.php">
    <input type="text" name="mot" value="<?php if(!empty($_POST["mot"])) echo htmlentities($_POST["mot"]); ?>" size="40" />
    <input type="submit" name="rechercher" value="Rechercher" />
</form>

<?php
$fichier = fopen("inscrits.txt", "r");

if(!$fichier || filesize("inscrits.txt") == 0) {
    echo "<p>Aucun inscrit pour l'instant.</p>";
} else {
    $contenu = fread($fichier, filesize("inscrits.txt"));
    fclose($fichier);

    $nb_inscrits = substr_count($contenu, "\n");
    echo "<p><b>Nombre total d'inscrits : " . $nb_inscrits . "</b></p>";

    $nb_resultats = 0;

    echo "<table border='1' cellpadding='5'>";
    echo "<tr>
            <th>Prénom</th>
            <th>Email</th>
            <th>Niveau</th>
            <th>Date d'inscription</th>
          </tr>";

    $fichier = fopen("inscrits.txt", "r");
    $ligne = fgets($fichier, 255);

    while($ligne) {
        $champs = explode("|", $ligne);

        if(count($champs) == 4) {
            $prenom = $champs[0];
            $email  = $champs[1];
            $niveau = $champs[2];
            $date   = $champs[3];

            if($mode_recherche) {
                if(stristr($ligne, $recherche)) {
                    echo "<tr>
                            <td>" . htmlentities($prenom) . "</td>
                            <td>" . htmlentities($email)  . "</td>
                            <td>" . htmlentities($niveau) . "</td>
                            <td>" . htmlentities($date)   . "</td>
                          </tr>";
                    $nb_resultats++;
                }
            } else {
                echo "<tr>
                        <td>" . htmlentities($prenom) . "</td>
                        <td>" . htmlentities($email)  . "</td>
                        <td>" . htmlentities($niveau) . "</td>
                        <td>" . htmlentities($date)   . "</td>
                      </tr>";
                $nb_resultats++;
            }
        }
        $ligne = fgets($fichier, 255);
    }

    fclose($fichier);
    echo "</table>";

    if($mode_recherche && $nb_resultats == 0) {
        echo "<p>Aucun inscrit ne correspond à votre recherche.</p>";
    }
}
?>

<br />
<a href="inscription.php">Retour à l'inscription</a>

</body>
</html>

