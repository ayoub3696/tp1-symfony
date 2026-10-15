
Question 1 : La commande symfony check:requirements vérifie que PHP et ses extensions sont compatibles avec Symfony. Les avertissements signalent les éventuels problèmes qui peuvent affecter le fonctionnement de l’application.

Question 2
Le dossier public/ est le dossier accessible par le navigateur. Le fichier index.php est dedans parce que c'est le point d'entrée de l'application : toutes les requêtes passent par lui. Comme ça, les autres fichiers (config, .env, code) ne sont pas visibles directement.

Question 3
C'est la variable APP_ENV (elle vaut dev en développement et prod en production).

Question 4
On a une erreur 404 (page non trouvée), parce que la route accepte seulement des chiffres (\d+) et abc n'est pas un nombre.

Question 5
Avec la commande php bin/console debug:router, j'ai vu qu'il y a plusieurs routes (le nombre dépend du projet). Celles que j'ai créées sont app_accueil, app_bonjour, app_profil et app_articles. Les autres sont celles de Symfony pour le debug et le profiler (comme _wdt et _profiler).

Question 6
loop.index donne le numéro du tour de la boucle en commençant à 1 (1, 2, 3...). loop.index0 donne aussi le numéro du tour mais en commençant à 0 (0, 1, 2...).

Question 7
Le fichier de migration contient principalement une requête CREATE TABLE article, qui permet de créer la table article dans la base de données avec ses différentes colonnes.

Question 8
Le ParamConverter permet à Symfony de convertir automatiquement l'identifiant de l'URL en objet Article. Il évite d'effectuer manuellement une recherche avec le Repository et renvoie automatiquement une erreur 404 si l'article n'existe pas.

TP 2 
question 1 :
Créer un FormType dans une classe séparée permet de :
- Réutiliser le formulaire dans plusieurs contrôleurs.
- Séparer les responsabilités et rendre le code plus propre.
- Faciliter la maintenance et les modifications du formulaire.

Questiion 2 :
Le cycle de vie d'un formulaire Symfony se déroule en 5 étapes :
1. Création du formulaire : Symfony crée le formulaire avec createForm().
2. Affichage : le formulaire vide est affiché à l'utilisateur avec form_start() et form_widget().
3. Soumission : l'utilisateur remplit le formulaire et clique sur Envoyer.
4. Validation : Symfony vérifie les données saisies avec isSubmitted() et isValid().
5. Enregistrement : si les données sont valides, Doctrine enregistre l'objet en base de données avec persist() et flush().

Question 3 :
- form_row() : affiche automatiquement le label, le champ et les erreurs.
- form_label() + form_widget() : permet de personnaliser séparément le label et le champ.
Quand les utiliser ?
- form_row() : pour créer rapidement un formulaire simple.
- form_label() + form_widget() : pour personnaliser la mise en page et le design du formulaire.

Question 4 :
Validation côté client (HTML5, JavaScript) : vérifie les données directement dans le navigateur et affiche rapidement les erreurs.
Validation côté serveur (Symfony Validator) : vérifie les données sur le serveur avant de les enregistrer dans la base de données.

Question 5 :
- La migration ajoute une colonne contenant l'identifiant de l'entité liée et une contrainte FOREIGN KEY pour créer la relation entre les deux tables.
- Qu'est-ce qu'une clé étrangère ?
Une clé étrangère (FOREIGN KEY) est une colonne qui référence la clé primaire d'une autre table afin de relier les deux tables et garantir la cohérence des données.

Question 6 :
createFormBuilder() :
- Avantages : rapide et simple pour créer un petit formulaire directement dans le contrôleur.
- Inconvénients : le contrôleur devient plus chargé et le formulaire est difficile à réutiliser.
FormType séparé (make:form) :
- Avantages : code mieux organisé, réutilisable et facile à maintenir.
- Inconvénients : nécessite de créer une classe supplémentaire.

Question 7 :
Il ne faut pas appeler persist() lors de la modification d'une entité existante, car Doctrine gère automatiquement les modifications des entités déjà chargées.

Question 8 :
Une attaque CSRF (Cross-Site Request Forgery) consiste à forcer un utilisateur connecté à effectuer une action sans son accord.
Pourquoi ne pas utiliser GET pour supprimer ?
Une requête GET peut être déclenchée facilement par un lien ou une image, ce qui risque de supprimer une ressource sans confirmation de l'utilisateur.