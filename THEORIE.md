**Total : 100 points — Seuil de réussite : 50/100**  
**Durée estimée : ~30 minutes**  
**Documents autorisés : Aucun**

> Répondez directement dans ce fichier en remplaçant les lignes `_Votre réponse ici_`.  
> Écrivez votre nom et prénom ci-dessous.

**Nom et prénom :** ___KAMENI ORGUIDE____________________

---

## Question 1 — `isset()` vs `empty()` (40 points)

### a) La fonction `isset()` *(8 pts)*

Donnez la syntaxe complète de `isset()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

_Votre réponse ici_
la syntaxe est la suivante : isset($var);
EXPLICATION:* isset() retourne TRUE si : la variable existe et n’est pas égale à NULL
            *isset() retourne FALSE si :la variable n’est pas définie ou si elle vaut NULL

---

### b) La fonction `empty()` *(8 pts)*

Donnez la syntaxe complète de `empty()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

_Votre réponse ici_
la syntaxe est la suivante : empty($var);
EXPLICATION:* empty() retourne TRUE si la variable est vide ou non definie
            * empty() retourne FALSE si la variable contient une valeur non vide

---

### c) Différence fondamentale *(8 pts)*

Quelle est la différence entre `isset()` et `empty()` lorsqu'une variable vaut `0` ? Justifiez votre réponse.

_Votre réponse ici_
$var = 0;
isset($var) vaut TRUE (car la variable existe et n’est pas NULL)
empty($var) va utTRUE (car 0 est considéré comme une valeur vide)


---

### d) Tableau comparatif *(16 pts)*

Complétez ce tableau (TRUE ou FALSE) :

| Valeur de `$var` | `isset($var)` | `empty($var)` |
|---|---|---|
| `$var = 0;` | true | true |
| `$var = "";` | true| tue |
| `$var = "bonjour";` | true | false |
| Variable non déclarée | false | true |
| `$var = "0";` | true | true |
| `$var = null;` | false | true |
| `$var = false;` | true | false |
| `$var = [];` | true | false |

---

## Question 2 — GET / POST et manipulation de fichiers (60 points)

### a) GET vs POST *(15 pts)*

Expliquez la différence entre la méthode `GET` et la méthode `POST` pour le passage de variables en PHP. Dans quel cas préfère-t-on utiliser `GET` ? Quelle est la limite de caractères de `GET` ?

_Votre réponse ici_
la difference entre get et post est que: GET c'est données sont visibles dans l’URL et permet la lecture/affichage POST quant a lui les donnees sont envoyees dans le corps de la requetes HTTP et non visible dans url  et permet l'envoie securise,la modification.

* Données limitées en taille 2000 caractères selon les navigateurs
---

### b) Passage de paramètres dans l'URL *(15 pts)*

Donnez la syntaxe permettant de passer les variables `categorie` (valeur : "php") et `page` (valeur : 2) dans une URL pointant vers `catalogue.php`.

Montrez ensuite comment récupérer ces deux variables en PHP côté serveur.

_Votre réponse ici_
pointage vers url est catalogue.php?categorie=php&page=2
pointage php est $categorie = $_GET['categorie'];
                 $page = $_GET['page'];

---

### c) Les modes d'ouverture de `fopen()` *(20 pts)*

Citez et expliquez les **6 modes d'ouverture** possibles de la fonction `fopen()`. Pour chacun, précisez : lecture, écriture, ou les deux ; et où est placé le pointeur.

_Votre réponse ici_

---

### d) La fonction `header()` *(10 pts)*

À quoi sert la fonction `header()` ? Donnez un exemple concret. Quelle contrainte très importante doit-on respecter lors de son utilisation, et pourquoi ?

_Votre réponse ici_
la fonction HEADER Permet d’envoyer des en-têtes HTTP au navigateur.
exemple: header("Location: index.php");
la contrainte quon dois respecter est que Aucune sortie ne doit être envoyée avant header
Pourquoi ?
Car les en-têtes HTTP doivent être envoyés avant le contenu de la page. Sinon, PHP génère une erreur

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
