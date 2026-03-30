**Total : 100 points — Seuil de réussite : 50/100**  
**Durée estimée : ~30 minutes**  
**Documents autorisés : Aucun**

> Répondez directement dans ce fichier en remplaçant les lignes `_Votre réponse ici_`.  
> Écrivez votre nom et prénom ci-dessous.

**Nom et prénom :** Karraz Ayoub

---

## Question 1 — `isset()` vs `empty()` (40 points)

### a) La fonction `isset()` *(8 pts)*

Donnez la syntaxe complète de `isset()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

isset(mixed $var, mixed ...$var)

Return true si la variable a été déclarée et que sa valeur est différente de null.
Return false si la variable n'a pas été déclarée, lorsqu'elle vaut null, ou lorsqu'elle a été détruite avec unset().

---

### b) La fonction `empty()` *(8 pts)*

Donnez la syntaxe complète de `empty()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

empty(mixed $var)

Return true si la variable vaut : "", "0", 0, 0.0, null, false, [], ou si elle n'est pas déclarée.
Return false si la variable contient une valeur non vide : chaîne non vide, entier non nul, tableau non vide.

---

### c) Différence fondamentale *(8 pts)*

Quelle est la différence entre `isset()` et `empty()` lorsqu'une variable vaut `0` ? Justifiez votre réponse.

isset() retourne TRUE car la variable est déclarée et n'est pas null.
empty() retourne TRUE car 0 est considéré comme une valeur vide.
---

### d) Tableau comparatif *(16 pts)*

Complétez ce tableau (TRUE ou FALSE) :

| Valeur de `$var` | `isset($var)` | `empty($var)` |
|---|---|---|
| `$var = 0;` | true | true |
| `$var = "";` | true | true |
| `$var = "bonjour";` | true | false |
| Variable non déclarée | false | true |
| `$var = "0";` | true | true |
| `$var = null;` | false | true |
| `$var = false;` | true | true |
| `$var = [];` | true | true |

---

## Question 2 — GET / POST et manipulation de fichiers (60 points)

### a) GET vs POST *(15 pts)*

Expliquez la différence entre la méthode `GET` et la méthode `POST` pour le passage de variables en PHP. Dans quel cas préfère-t-on utiliser `GET` ? Quelle est la limite de caractères de `GET` ?

GET passe les variables dans l'URL tandis que POST les passe dans le corps de la requête HTTP.
Niveau sécurité GET est plus faible que POST.
GET a une limite de plus ou moins 2048 caractères alors que POST n'en a pas.
On va utiliser GET lorsque la reqète n'a pas besoin de mot de passe ou de données personnelles.
---

### b) Passage de paramètres dans l'URL *(15 pts)*

Donnez la syntaxe permettant de passer les variables `categorie` (valeur : "php") et `page` (valeur : 2) dans une URL pointant vers `catalogue.php`.

Montrez ensuite comment récupérer ces deux variables en PHP côté serveur.

catalogue.php?categorie=php&page=2

$categorie = $_GET['categorie'];
$page = $_GET['page'];
---

### c) Les modes d'ouverture de `fopen()` *(20 pts)*

Citez et expliquez les **6 modes d'ouverture** possibles de la fonction `fopen()`. Pour chacun, précisez : lecture, écriture, ou les deux ; et où est placé le pointeur.

- Lecture (r) -> pointeur au début;
- Ecriture (w) -> pointeur au début;
- Ecriture (a) -> pointeur à la fin;
- Ecriture (x) -> pointeur au début;
- Lecture (r+) -> pointeur au début;
- Lecture (w+) -> pointeur au début;
---

### d) La fonction `header()` *(10 pts)*

À quoi sert la fonction `header()` ? Donnez un exemple concret. Quelle contrainte très importante doit-on respecter lors de son utilisation, et pourquoi ?

header() permet d'envoyer des en-têtes HTTP au navigateur

Exemple :
<?php
header("Location: connexion.php");
exit();
?>
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
