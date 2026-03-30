**Total : 100 points — Seuil de réussite : 50/100**  
**Durée estimée : ~30 minutes**  
**Documents autorisés : Aucun**

> Répondez directement dans ce fichier en remplaçant les lignes `_Votre réponse ici_`.  
> Écrivez votre nom et prénom ci-dessous.

**Nom et prénom :** HURTADO AADNANI Karim

---

## Question 1 — `isset()` vs `empty()` (40 points)

### a) La fonction `isset()` *(8 pts)*

Donnez la syntaxe complète de `isset()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

boolean isset($var)

La fonction retourne "TRUE" quand la variable donnée en paramètre est définie et retourne "FALSE" dans le cas contraire.

---

### b) La fonction `empty()` *(8 pts)*

Donnez la syntaxe complète de `empty()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

boolean empty($var)

La fonction retourne "TRUE" si la variable fournie en paramètre n'est pas initialisée ou elle est "NULL" ou elle est de 0 ou une chaîne de caractères avec la valeur "0". Retourne "FALSE" dans le cas contraire. 

---

### c) Différence fondamentale *(8 pts)*

Quelle est la différence entre `isset()` et `empty()` lorsqu'une variable vaut `0` ? Justifiez votre réponse.

La fonction isset() va vérifier que la variable possède une valeur même si elle est de "0". Tandis que la fonction empty() va juste vérifier que la variable aie une valeur "vide" ou "fausse/false" dont le "0" fait partie pour ce cas-ci.

---

### d) Tableau comparatif *(16 pts)*

Complétez ce tableau (TRUE ou FALSE) :

| Valeur de `$var` | `isset($var)` | `empty($var)` |
|---|---|---|
| `$var = 0;` | TRUE | TRUE |
| `$var = "";` | TRUE | FALSE |
| `$var = "bonjour";` | TRUE | FALSE |
| Variable non déclarée | FALSE | TRUE |
| `$var = "0";` | TRUE | TRUE |
| `$var = null;` | FALSE | TRUE |
| `$var = false;` | FALSE | TRUE |
| `$var = [];` | TRUE | FALSE |

---

## Question 2 — GET / POST et manipulation de fichiers (60 points)

### a) GET vs POST *(15 pts)*

Expliquez la différence entre la méthode `GET` et la méthode `POST` pour le passage de variables en PHP. Dans quel cas préfère-t-on utiliser `GET` ? Quelle est la limite de caractères de `GET` ?

1) Avec la méthode "GET" les données sont visibles dans l'URL donc moins confidentielles, avec la méthode POST non.

2) Dans les cas des recherches comme dans les moteurs de recherche par exemple. Car, cette méthode est plus adaptée car les données sont dans l'URL donc restent dans l'hisstorique, le cache, etc.

3) 255 caractères.

---

### b) Passage de paramètres dans l'URL *(15 pts)*

Donnez la syntaxe permettant de passer les variables `categorie` (valeur : "php") et `page` (valeur : 2) dans une URL pointant vers `catalogue.php`.

Montrez ensuite comment récupérer ces deux variables en PHP côté serveur.

1) <a href="catalogue.php?categorie=php&page=2">Catalogue</a>

2) <?php
    if (isset($_GET["categorie"]) && isset($_GET["page"])) {
        $categorie = $_GET["categorie"];
        $page = $_GET["page"];

        echo "Catégorie : " . $categorie . "<br>";
        echo "Page : " . $page;

    } else {
        echo "Valeurs non retoruvées";
    }
?>

---

### c) Les modes d'ouverture de `fopen()` *(20 pts)*

Citez et expliquez les **6 modes d'ouverture** possibles de la fonction `fopen()`. Pour chacun, précisez : lecture, écriture, ou les deux ; et où est placé le pointeur.

1) 'r' ouvre le fichier en lecture et place le pointeur au début du fichier.

2) "r+" ouvre le fichier en lecture et écriture et place le pointeur au début du fichier.

3) 'w' ouvre le fichier en écriture et place le pointeur au début du fichier.

4) "w+" ouvre le fichier en écriture et lecture et place le pointeur au début du fichier.

5) 'a' ouvre le fichier en écriture et place le pointeur à la fin du fichier.

6) "a+" ouvre le fichier en écriture et lecture et place le pointeur à la fin du fichier.
---

### d) La fonction `header()` *(10 pts)*

À quoi sert la fonction `header()` ? Donnez un exemple concret. Quelle contrainte très importante doit-on respecter lors de son utilisation, et pourquoi ?

1) Rediriger le navigateur vers l'adresse désignée.

2) header("Achats: http://localhost/achats.php");

3) Cette méthode doit être appellée avant que des données soient envoyées via HTML ou PHP. Sinon, il y aura des erreurs.

---

## 📊 Barème

| Question | Sous-question | Points |
|---|---|---|
| Q1 — isset() vs empty() | a) isset() | 8 |
| | b) empty() | 8 |
| | c) Différence avec 0 | 8 |
| | d) Tableau | 16 |
| Q2 — GET/POST/fichiers | a) GET vs POST | 15 |
| | b) Passage de paramètres | 15 |
| | c) Modes fopen() | 20 |
| | d) header() | 10 |
| **TOTAL** | | **100** |

---

> ⚠️ Seuil de réussite : **50/100 minimum**
