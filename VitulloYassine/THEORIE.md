**Total : 100 points — Seuil de réussite : 50/100**  
**Durée estimée : ~30 minutes**  
**Documents autorisés : Aucun**

> Répondez directement dans ce fichier en remplaçant les lignes `_Votre réponse ici_`.  
> Écrivez votre nom et prénom ci-dessous.

**Nom et prénom : Vitullo Yassine 

---

## Question 1 — `isset()` vs `empty()` (40 points)

### a) La fonction `isset()` *(8 pts)*

Donnez la syntaxe complète de `isset()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

La syntaxe est isset($var) ou isset ($var1,$var2,...)
Elle retourne true lorsque la variable est déclarée et que sa valeur est =/ de null

Elle retourne false lorsque la variable n'a pas été déclarée ou que sa valeur est null.

---

### b) La fonction `empty()` *(8 pts)*

Donnez la syntaxe complète de `empty()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

la syntaxe est empty($var)
Elle retourne true lorsque la variable existe pas ou qu'elle est vide (0,"0",null,false)
Elle retourne false lorsque la valeur existe et qu'elle possede une valeur non vide et diff de 0

### c) Différence fondamentale *(8 pts)*

Quelle est la différence entre `isset()` et `empty()` lorsqu'une variable vaut `0` ? Justifiez votre réponse.

le isset va retourner true parce que la variable existe et n'est pas nul et empty va retourner true aussi car le 0 est considéré comme une valeur null
---

### d) Tableau comparatif *(16 pts)*

Complétez ce tableau (TRUE ou FALSE) :

| Valeur de `$var` | `isset($var)` | `empty($var)` |
|---|---|---|
| `$var = 0;` | True | True|
| `$var = "";` | True| True |
| `$var = "bonjour";` | True | False |
| Variable non déclarée | False| True |
| `$var = "0";` | True | True |
| `$var = null;` | False | True |
| `$var = false;` | True | True|
| `$var = [];` | True | True |

---

## Question 2 — GET / POST et manipulation de fichiers (60 points)

### a) GET vs POST *(15 pts)*

Expliquez la différence entre la méthode `GET` et la méthode `POST` pour le passage de variables en PHP. Dans quel cas préfère-t-on utiliser `GET` ? Quelle est la limite de caractères de `GET` ?

La différence est que GET envoie les données via URL (c'est visible par l'utilisateur) alors que les requetes POST sont invisibles. 

Le Get est utilisé pour de la recherche, de la navivation, lorsqu'on veut diriger l'utilisateur vers un endroit précis. 

Le Post va être utilisé pour cacher des élèments à l'utilisateur, exemple : les formulaires et  les logins sont toujours  en POST. 

La limite du get est que ça dépend du navigateur et du serv.

---

### b) Passage de paramètres dans l'URL *(15 pts)*

Donnez la syntaxe permettant de passer les variables `categorie` (valeur : "php") et `page` (valeur : 2) dans une URL pointant vers `catalogue.php`.


Montrez ensuite comment récupérer ces deux variables en PHP côté serveur.

$categorie = $_GET['categorie'];
$page = $_GET['page'];


### c) Les modes d'ouverture de `fopen()` *(20 pts)*

Citez et expliquez les **6 modes d'ouverture** possibles de la fonction `fopen()`. Pour chacun, précisez : lecture, écriture, ou les deux ; et où est placé le pointeur.

r(read) => lecture seul et pointeur placé au début du fichier
r+(read/write) => ecriture seule. Pointeur au debut 
w (write) => écriture seule. pointeur au début du fichier + crée le fichier s'il nexiste pas ou le vide s'il existe.

a(append) => écriture seule. Pointeur à la fin + crée le fichier.
a+(append/read): Lecture et écriture . Pointeur à la fin + crée si existe pas
---

### d) La fonction `header()` *(10 pts)*

À quoi sert la fonction `header()` ? Donnez un exemple concret. Quelle contrainte très importante doit-on respecter lors de son utilisation, et pourquoi ?

Permet de rediriger le client en envoyant des entete http au client.

expl : header("Location: livre.php");
la contraite est qu'elle doit etre appele avant tout envoie du contenu au navigateur parce que HTTP veut que les entetes soient transmis au client avant le contenu.

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
