Projet annuel Kevin Robin 
pour L'ESGI

Commandes symfony:

php bin/console doctrine:fixtures:load      || gen�re les fixtures

php bin/console make:entity                 || Creer une entit�e

symfony server:start                        || Demare le server

php bin/console cache:clear --no-warmup --env=dev

php bin/console make:migration
 php bin/console doctrine:migrations:migrate