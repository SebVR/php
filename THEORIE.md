**Total : 100 points — Seuil de réussite : 50/100**  
**Durée estimée : ~30 minutes**  
**Documents autorisés : Aucun**

> Répondez directement dans ce fichier en remplaçant les lignes `_Votre réponse ici_`.  
> Écrivez votre nom et prénom ci-dessous.

**Nom et prénom :** ___MELEU Leonnelle pascale____________________

---

## Question 1 — `isset()` vs `empty()` (40 points)

### a) La fonction `isset()` *(8 pts)*

Donnez la syntaxe complète de `isset()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

_Votre réponse ici_

---

### b) La fonction `empty()` *(8 pts)*

Donnez la syntaxe complète de `empty()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

_Votre réponse ici_

---

### c) Différence fondamentale *(8 pts)*

Quelle est la différence entre `isset()` et `empty()` lorsqu'une variable vaut `0` ? Justifiez votre réponse.

_Votre réponse ici_

---

### d) Tableau comparatif *(16 pts)*

Complétez ce tableau (TRUE ou FALSE) :

| Valeur de `$var` | `isset($var)` | `empty($var)` |
|---|---|---|
| `$var = 0;` | ? | ? |
| `$var = "";` | ? | ? |
| `$var = "bonjour";` | ? | ? |
| Variable non déclarée | ? | ? |
| `$var = "0";` | ? | ? |
| `$var = null;` | ? | ? |
| `$var = false;` | ? | ? |
| `$var = [];` | ? | ? |

---

## Question 2 — GET / POST et manipulation de fichiers (60 points)

### a) GET vs POST *(15 pts)*

Expliquez la différence entre la méthode `GET` et la méthode `POST` pour le passage de variables en PHP. Dans quel cas préfère-t-on utiliser `GET` ? Quelle est la limite de caractères de `GET` ?

_Votre réponse ici_ la difference entre la methode GET et la methode POST LE GET EST FIXE ELLE EST RENDU T'elle quelle est et le post genere un traitement

---

### b) Passage de paramètres dans l'URL *(15 pts)*

Donnez la syntaxe permettant de passer les variables `categorie` (valeur : "php") et `page` (valeur : 2) dans une URL pointant vers `catalogue.php`.

Montrez ensuite comment récupérer ces deux variables en PHP côté serveur.

_Votre réponse ici_catalogue.php?categorie=phpetpage=2

En PHP, on récupère les valeurs envoyées dans l’URL grâce au tableau superglobal $_GET :

php
$categorie = $_GET['categorie'];
$page = $_GET['page'];


---

### c) Les modes d'ouverture de `fopen()` *(20 pts)*

Citez et expliquez les **6 modes d'ouverture** possibles de la fonction `fopen()`. Pour chacun, précisez : lecture, écriture, ou les deux ; et où est placé le pointeur.

_Votre réponse ici_

— Lecture seule
Lecture : oui

Écriture : non

Pointeur : début du fichier

Le fichier doit exister, sinon erreur.

- Lecture + écriture
Lecture : oui

Écriture : oui

Pointeur : début du fichier

Le fichier doit exister.

Écraser du contenu dès qu’on ecrit

-Écriture seule (écrasement)
Lecture : non

Écriture : oui

Pointeur : début du fichier

Si le fichier existe → il est entièrement écrasé

S’il n’existe pas → il est créé

Lecture + écriture (écrasement)
Lecture : oui

Écriture : oui

Pointeur : début du fichier

Même comportement que "w" :

Écrase si existe

Crée si n’existe pas

Écriture seule (ajout)
Lecture : non

Écriture : oui

Pointeur : fin du fichier

Le fichier n’est jamais écrasé

Si le fichier n’existe pas → il est créé

Toute écriture se fait à la fin (append)

Lecture + écriture (ajout)
Lecture : oui

Écriture : oui

Pointeur : fin du fichier

Le fichier n’est pas écrasé

Écriture toujours en fin de fichier

Créé s'i n'existe pas 



---

### d) La fonction `header()` *(10 pts)*

À quoi sert la fonction `header()` ? Donnez un exemple concret. Quelle contrainte très importante doit-on respecter lors de son utilisation, et pourquoi ?

_Votre réponse ici_ La fonction header() permet d’envoyer des en-têtes HTTP au navigateur avant l’envoi du contenu HTML.
Elle sert notamment à :

rediriger l’utilisateur vers une autre page

définir le type de contenu 

gérer le cache

forcer un téléchargement

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
