

> Répondez directement dans ce fichier en remplaçant les lignes `_Votre réponse ici_`.  
> Écrivez votre nom et prénom ci-dessous.

**Nom et prénom :** ___________KEMO FRANC LOIC ____________

---

## Question 1 — `isset()` vs `empty()` (40 points)

### a) La fonction `isset()` *(8 pts)*

Donnez la syntaxe complète de `isset()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

la syntaxe de isset() est isset($variable)

la fonction retourne TRUE  si la variable existe et n'est pas égale a null et elle retourne false si : la variable n'existe pas ou si la valeur est nulle

---

### b) La fonction `empty()` *(8 pts)*

Donnez la syntaxe complète de `empty()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

la syntaxe de empty () est : empty($variable)

la fonction retourne TRUE si la variable est vide

elle retourne FALSE si la variable contient une valeur noon vide 

---

### c) Différence fondamentale *(8 pts)*

Quelle est la différence entre `isset()` et `empty()` lorsqu'une variable vaut `0` ? Justifiez votre réponse.

la différence fondamentale si une variable vaut 0 : isset($var) retourne true car la variable existe et n'est pas null

empty($var) retourne TRUE car 0 est considéré comme une valeur vide en PHP
la différence fondamentale est donc:

- isset() vérifie si la variable existe et n'est pas null
- empty() vérifie si la variable est vide 
---

### d) Tableau comparatif *(16 pts)*

Complétez ce tableau (TRUE ou FALSE) :

| Valeur de `$var` | `isset($var)` | `empty($var)` |
|---|---|---|
| `$var = 0;` | true| true|
| `$var = "";` | true | true |
| `$var = "bonjour";` | ?true| false|
| Variable non déclarée | false | true |
| `$var = "0";` | true | true |
| `$var = null;` | false | true |
| `$var = false;` | true| true |
| `$var = [];` | true| true |

---

## Question 2 — GET / POST et manipulation de fichiers (60 points)

### a) GET vs POST *(15 pts)*

Expliquez la différence entre la méthode `GET` et la méthode `POST` pour le passage de variables en PHP. Dans quel cas préfère-t-on utiliser `GET` ? Quelle est la limite de caractères de `GET` ?

la methode GET transmet les données dan l'URL et la méthode POST transmet les données dans le corps de la requete HTTP

on utilise GET pour les recherches, les filtres , les liens partageables.

la limite de GET dépend du navigateur mais est généralement autour de 2000 carractères 

---

### b) Passage de paramètres dans l'URL *(15 pts)*

Donnez la syntaxe permettant de passer les variables `categorie` (valeur : "php") et `page` (valeur : 2) dans une URL pointant vers `catalogue.php`.

Montrez ensuite comment récupérer ces deux variables en PHP côté serveur.

passage des variables dans l'URL : catalogue.php?categorie=php&page=2

recupération en PHP: $categorie = $_GET["categore"];     $page = $_GET["page"];

---

### c) Les modes d'ouverture de `fopen()` *(20 pts)*

Citez et expliquez les **6 modes d'ouverture** possibles de la fonction `fopen()`. Pour chacun, précisez : lecture, écriture, ou les deux ; et où est placé le pointeur.

- "r" lecture seule 
le fichier doit exister 
pointeur au debut 

- "r+" lecture et ecriture 
le fichier doit exister 
pointeur au debut

- "W" ecriture seule 
cree le fichier s'il n'existe pas 
supprime le contenu s'il existe 
pointeur au debut 

- "W+" lecture et ecriture 
cree le fichier s'il n'existe pas 
supprime le contenu s'il existe 
pointeur au debut 

- "a" ecriture seule
cree le fichier s'il n'existe pas 
pointeur a la fin 

- a+" lecture et ecriture 
cree le fichier s'il n'existe pas 
pointeur a la fin 

---

### d) La fonction `header()` *(10 pts)*

À quoi sert la fonction `header()` ? Donnez un exemple concret. Quelle contrainte très importante doit-on respecter lors de son utilisation, et pourquoi ?

la fonction header permet d'envoyer un entete http

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


> ⚠️ Seuil de réussite : **50/100 minimum**
