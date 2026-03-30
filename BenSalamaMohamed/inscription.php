> Pour les trous de code (Q1) : répondez dans ce fichier en numérotant vos réponses.  
> Pour le code from scratch (Q2) : créez les fichiers PHP directement dans votre dossier.  
> Écrivez votre nom et prénom ci-dessous.

**Nom et prénom :** ____Ben Salama Mohamed___________________

---

## Question 1 — Compléter du code PHP (40 points)

> **Contexte :** Un visiteur s'inscrit à un atelier en ligne. Le formulaire doit **conserver les données saisies** si le formulaire est renvoyé incomplet, et sauvegarder l'inscription dans un fichier texte.

Complétez les parties `/* 1 */` à `/* 12 */` dans le code ci-dessous.  
**Écrivez vos réponses numérotées dans la section "Vos réponses" plus bas.**

```php
<?php
$erreur = "";

// Traitement si le formulaire a été soumis
if(/* 1 */isset($_POST["envoyer"])) {

    // Vérification des champs obligatoires
    if(/* 2 */empty($_POST["prenom"]) || empty($_POST["email"])) {
        $erreur = "Veuillez remplir tous les champs obligatoires.";
    } else {
        // Nettoyage des données
        $prenom = /* 3 */str_replace("\\", "", $_POST["prenom"]);
        $email  = str_replace("\\", "", $_POST["email"]);
        $niveau = str_replace("\\", "", $_POST["niveau"]);

        // Récupération de la date du jour (format jj/mm/aaaa)
        $date = /* 4 */date("d/n/Y");

        // Sauvegarde dans le fichier (ajout à la fin)
        $fichier = /* 5 */fopen("inscrits.txt", /* 6 */"a");
        /* 7 */fwrite($fichier, $prenom . " | " . $email . " | " . $niveau . " | " . $date . "\n");
        /* 8 */fclose($fichier);

        // Redirection vers la page de confirmation
        /* 9 */header("Location: confirmation.php");
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
        if(/* 10 */!empty($_POST["prenom"]))
          echo /* 11 */htmlentities($_POST["prenom"]);
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
          echo "checked =\"checked\""/* 12 */;
      ?> />
    <br />

    <input type="submit" name="envoyer" value="S'inscrire" />
    <input type="reset" value="Effacer" />
  </fieldset>
</form>
```

### ✏️ Vos réponses — Q1

Remplacez chaque `?` par votre réponse :

| N° | Votre réponse |
|---|---|
| 1 | isset |
| 2 | empty |
| 3 | str_replace |
| 4 | date |
| 5 | fopen |
| 6 | "a" |
| 7 | fwrite |
| 8 | fclose |
| 9 | header |
| 10 | empty |
| 11 | htmlentities |
| 12 | "checked =\"checked\""|

*(~3,5 pts par réponse correcte)*

---