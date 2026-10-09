Question 2
Le dossier public/ est le seul accessible depuis le navigateur. Le fichier index.php y est placé pour des raisons de sécurité : le code source, la config et .env restent hors de portée des visiteurs. index.php est le point d'entrée (front controller) : toutes les requêtes passent par lui.

Question 3
La variable APP_ENV (dev ou prod).

Question 4
Erreur 404 (page introuvable). La contrainte \d+ n'accepte que des chiffres, donc abc ne correspond pas à la route.

Question 5
Le nombre varie selon votre projet (en général une quinzaine de routes avec --webapp). Vos routes : app_accueil, app_bonjour, app_profil et app_articles. Les autres, comme _wdt, _profiler, etc., viennent de Symfony (debug et profiler).

Question 6
loop.index donne le numéro de l'itération en commençant à 1 (1, 2, 3...). loop.index0 fait pareil mais en commençant à 0 (0, 1, 2...).
