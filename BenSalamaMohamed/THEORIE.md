**Total : 100 points — Seuil de réussite : 50/100**  
**Durée estimée : ~30 minutes**  
**Documents autorisés : Aucun**

> Répondez directement dans ce fichier en remplaçant les lignes `_Votre réponse ici_`.  
> Écrivez votre nom et prénom ci-dessous.

**Nom et prénom :** _______Ben salama Mohamed Rida________________

---

## Question 1 — `isset()` vs `empty()` (40 points)

### a) La fonction `isset()` *(8 pts)*

Donnez la syntaxe complète de `isset()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

isset($var); verifie si la variable est définis si elle l'est il retourne TRUE sinon FALSE

---

### b) La fonction `empty()` *(8 pts)*

Donnez la syntaxe complète de `empty()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

empty($var); renvoie TRUE si la var est egal 0 ou null ou "0" sinon renvoie False

---

### c) Différence fondamentale *(8 pts)*

Quelle est la différence entre `isset()` et `empty()` lorsqu'une variable vaut `0` ? Justifiez votre réponse.

_isset() renverra TRUE car elle est définis et n est pas null et empty() aussi car la variable est egal a 0

---

### d) Tableau comparatif *(16 pts)*

Complétez ce tableau (TRUE ou FALSE) :

| Valeur de `$var` | `isset($var)` | `empty($var)` |
|---|---|---|
| `$var = 0;` | TRUE | TRUE |
| `$var = "";` | TRUE | TRUE|
| `$var = "bonjour";` | TRUE | FALSE |
| Variable non déclarée | FALSE| TRUE |
| `$var = "0";` | TRUE | TRUE |
| `$var = null;` | FALSE | TRUE |
| `$var = false;` | TRUE | TRUE |
| `$var = [];` | TRUE | TRUE |

---

## Question 2 — GET / POST et manipulation de fichiers (60 points)

### a) GET vs POST *(15 pts)*

Expliquez la différence entre la méthode `GET` et la méthode `POST` pour le passage de variables en PHP. Dans quel cas préfère-t-on utiliser `GET` ? Quelle est la limite de caractères de `GET` ?

GET permet de prendre prendre les variables dans les urls et elles ne sont pas cachés et GET à une limite de caractère de 255 caractère. POST  permet de prendre les variables des les formulaires qui elles sont cachés 
on prefere GET pour les liens pas les données sensible 
on prefere POST pour les données des formulaires et les données cachés

---

### b) Passage de paramètres dans l'URL *(15 pts)*

Donnez la syntaxe permettant de passer les variables `categorie` (valeur : "php") et `page` (valeur : 2) dans une URL pointant vers `catalogue.php`.

Montrez ensuite comment récupérer ces deux variables en PHP côté serveur.

catalogue.php?categorie=php&page=2

$categorie = $_GET["categorie"]; 
$page = $_GET["page"];  

---

### c) Les modes d'ouverture de `fopen()` *(20 pts)*

Citez et expliquez les **6 modes d'ouverture** possibles de la fonction `fopen()`. Pour chacun, précisez : lecture, écriture, ou les deux ; et où est placé le pointeur.

fopen($fichier,"r"); mode lecture uniquement pointeur au début
fopen($fichier,"w"); mode ecriture mais en supprimant ce qu il y avait avant cree le fichier si il n existe pas 
fopen($fichier,"a"); mode ecriture en ajoutant a la fin du fichier sans effacer cree le fichier si il n existe pas
fopen($fichier,"r+");mode lecture + ecriture pointeur au debut
fopen($fichier,"w+");mode lecture + ecriture supprime le contenu precedent cree le fichier si il n existe pas
fopen($fichier,"a+");mode lecture + ecriture ajoute a la fin cree le fichier si il n existe pas


---

### d) La fonction `header()` *(10 pts)*

À quoi sert la fonction `header()` ? Donnez un exemple concret. Quelle contrainte très importante doit-on respecter lors de son utilisation, et pourquoi ?

header permet de redirigé vers une autre page il faut utiliser header avant l'affichage html car sinon cela ne fonctionnera pas la page n acceptera aucune redirection
exemple: header("Location: livre.php");

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
