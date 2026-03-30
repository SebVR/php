<?php

// Partie A - Affichage de la liste des inscrits

$fichier = fopen("inscrits.txt", "r");
    if (($tailleFichier = (filesize("inscrits.txt"))) == 0) echo 'Aucun inscrit pour l\'instant';
    else {
        $contenu = fread($fichier, $tailleFichier);
        $nbInscrits = substr_count($contenu, '\n');
        echo 'Nombre total d\'inscrits : ' . $nbInscrits;
        fclose($fichier);
    $fichier = fopen("inscrits.txt", "r");
    $tableau = [];
    while (!feof($fichier)) {
        $ligne = fgets($fichier);
        $ligneExplosee = explode('|', $ligne);
        array_push ($tableau, $ligneExplosee);
    }

    $ligneHTML = "";
    for($i=0;$i<count($tableau)-1; $i++) {
        $ligneHTML = $ligneHTML . '<tr><td>' . $tableau[$i][0] . '</td><td>' . $tableau[$i][1] . '</td><td>' . $tableau[$i][2] . '</td><td>' . $tableau[$i][3] . '</td></tr>';
    }
    $tableauHTML = '<table><tr><th>Prénom</th><th>Email</th><th>Niveau</th><th>Date d\'inscription' . $ligneHTML . '</th></tr></table>';
    echo $tableauHTML;
    }
?>

