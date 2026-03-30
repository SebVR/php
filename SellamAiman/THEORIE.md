**Total : 100 points — Seuil de réussite : 50/100**  
**Durée estimée : ~30 minutes**  
**Documents autorisés : Aucun**

> Répondez directement dans ce fichier en remplaçant les lignes `_Votre réponse ici_`.  
> Écrivez votre nom et prénom ci-dessous.

**Nom et prénom :** Sellam Aiman

---

## Question 1 — `isset()` vs `empty()` (40 points)

### a) La fonction `isset()` *(8 pts)*

Donnez la syntaxe complète de `isset()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

Syntaxe de'isset()' : isset(mixed $var, mixed ...$vars): bool

Si plusieurs paramètres sot fourni, elle retourne TRUE seulment si tous les paramètres sont définis. Sinon elle retourne FALSE si lors de la vérification d'une variable elle lis un null.

---

### b) La fonction `empty()` *(8 pts)*

Donnez la syntaxe complète de `empty()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

Syntaxe de 'empty()' : empty(mixed $var): bool

'empty()' retournera TRUE si var n'éxiste pas ou a une valeur vide ou égale a 0 sinon elle retourne FALSE

---

### c) Différence fondamentale *(8 pts)*

Quelle est la différence entre `isset()` et `empty()` lorsqu'une variable vaut `0` ? Justifiez votre réponse.

Lorsque var vaut 0 pendant qu'on utilise 'isset()' celui-ci retournera TRUE si toutes les autres variables sont definies, pendant que lorsque on utilise
'empty()' celui ci retournera true car var vaut 0 et seulment quand celui-ci vaut 0 ou qu'il n'as pas de valeur attribué.

---

### d) Tableau comparatif *(16 pts)*

Complétez ce tableau (TRUE ou FALSE) :

| Valeur de `$var` | `isset($var)` | `empty($var)` |
|---|---|---|
| `$var = 0;` | TRUE | TRUE |
| `$var = "";` | FALSE | TRUE |
| `$var = "bonjour";` | TRUE | FALSE |
| Variable non déclarée | FALSE | FALSE |
| `$var = "0";` | TRUE | FALSE |
| `$var = null;` | FALSE | FALSE |
| `$var = false;` | TRUE | FALSE |
| `$var = [];` | TRUE | FALSE |

---

## Question 2 — GET / POST et manipulation de fichiers (60 points)

### a) GET vs POST *(15 pts)*

Expliquez la différence entre la méthode `GET` et la méthode `POST` pour le passage de variables en PHP. Dans quel cas préfère-t-on utiliser `GET` ? Quelle est la limite de caractères de `GET` ?

Lorsque on utilise GET, l'instruction est rajouté à l'URL tandis que POST l'intègre au corp. On prefere utiliser GET lorsque on traite un demande de type String; la limite de caractères est de 512.

---

### b) Passage de paramètres dans l'URL *(15 pts)*

Donnez la syntaxe permettant de passer les variables `categorie` (valeur : "php") et `page` (valeur : 2) dans une URL pointant vers `catalogue.php`.

Montrez ensuite comment récupérer ces deux variables en PHP côté serveur.

catalogue.php?categorie=php&page=2

$cat = $_GET['categorie']; 
$p   = $_GET['page'];      

---

### c) Les modes d'ouverture de `fopen()` *(20 pts)*

Citez et expliquez les **6 modes d'ouverture** possibles de la fonction `fopen()`. Pour chacun, précisez : lecture, écriture, ou les deux ; et où est placé le pointeur.

_Votre réponse ici_

---

### d) La fonction `header()` *(10 pts)*

À quoi sert la fonction `header()` ? Donnez un exemple concret. Quelle contrainte très importante doit-on respecter lors de son utilisation, et pourquoi ?

_Votre réponse ici_

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
