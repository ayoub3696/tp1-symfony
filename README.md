
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

