
Projet annuel Kevin Robin 
pour L'ESGI



    Création de cube emboitable  permettant l'apprentissage de la programmation, notamment pour les plus jeunes.

    Les cube de notre projet ne sont pas simplement virtuel, il sont présents physiquement et intègre chacun un esp 8266 Arduino et communiquent entre eux à l'aide de buscan, remontant leurs informations vers un bloc "master", dont la Raspberry diffuse un site web NodeJS auquel le client peux se connecter via le Wifi diffusé par la Raspberry.

    Le but est d'emboîter les cubes ayant chacun une fonctionnalité différente (valeurs (1,2,..), fonctions (avancer, tourner,...), conditions (if, while,...) ), puis d’appuyer sur le bouton du cube primaire. Ce dernier fournit alors en énergie les autres bloc, qui au fur et a mesure envoient leur fonction ainsi que leur position au serveur, qui reconstruit la requête. Si celle ci est correct, le code est alors envoyé à une petite voiture qui effectue alors les commandes et/ou enregistré en base de données et/ou comparé avec la réponse attendu.

    Le site web permet au client d’accéder à des leçons, des exercice et de suivre son avancement. Ces leçons et exercice seront adapter à l'utilisateur selon son avancement et ses aptitudes.

    Une courbe de progression est mise à jour au fur et à mesure que l’utilisateur résout des “puzzle” dont la difficulté dépend de la connaissance de l’utilisateur et de sa capacité à résoudre les précédents puzzle.


Commandes symfony:

php bin/console doctrine:fixtures:load      || gen�re les fixtures

php bin/console make:entity                 || Creer une entit�e

symfony server:start                        || Demare le server

php bin/console cache:clear --no-warmup --env=dev

php bin/console make:migration
php bin/console doctrine:migrations:migrate
