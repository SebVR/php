<?php
$erreur = "";

// Traitement si le formulaire a été soumis
if(isset($_POST["envoyer"])) {

    // Vérification des champs obligatoires
    if(empty($_POST["prenom"]) || empty($_POST["email"])) {
        $erreur = "Veuillez remplir tous les champs obligatoires.";
    } else {
        // Nettoyage des données
        $prenom = str_replace("\\", "", $_POST["prenom"]);
        $email  = str_replace("\\", "", $_POST["email"]);
        $niveau = str_replace("\\", "", $_POST["niveau"]);

        // Récupération de la date du jour (format jj/mm/aaaa)
        $date = date("d/n/Y");

        // Sauvegarde dans le fichier (ajout à la fin)
        $fichier = fopen("inscrits.txt", "a");
        fwrite($fichier, $prenom . " | " . $email . " | " . $niveau . " | " . $date . "\n");
        fclose($fichier);

        // Redirection vers la page de confirmation
        header("Location: confirmation.php");
    }
}
?>

<form method="post" action="inscription.php">
  <fieldset>
    <legend>Inscription à l'atelier</legend>

    <?php if(!empty($erreur)) echo "<p style='color:red'>" . $erreur . "</p>"; ?>

    Prénom :
    <input type="text" name="prenom" size="40" value="
      <?php
        if(!empty($_POST["prenom"]))
          echo htmlentities($_POST["prenom"]);
      ?>" />
    <br />

    Email :
    <input type="text" name="email" size="40" value="
      <?php
        if(!empty($_POST["email"]))
          echo htmlentities($_POST["email"]);
      ?>" />
    <br />

    Débutant :
    <input type="radio" name="niveau" value="débutant"
      <?php
        if(isset($_POST["niveau"]) && $_POST["niveau"] == "débutant")
          echo "checked=\"checked\"";
      ?> />

    Avancé :
    <input type="radio" name="niveau" value="avancé"
      <?php
        if(isset($_POST["niveau"]) && $_POST["niveau"] == "avancé")
          echo "checked=\"checked\"";
      ?> />
    <br />

    <input type="submit" name="envoyer" value="S'inscrire" />
    <input type="reset" value="Effacer" />
  </fieldset>
</form>