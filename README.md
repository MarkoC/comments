# comments
composer install

bin/console doctrine:database:create

bin/console doctrine:schema:create

bin/console doctrine:fixtures:load

bin/console server:run

http://127.0.0.1:8000/api/
