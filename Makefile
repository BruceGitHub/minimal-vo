.ONESHELL:

psalm:
	docker-compose -f .container/docker-compose.yml exec php php ./vendor/bin/psalm

psalm-clearcache:
	docker-compose -f .container/docker-compose.yml exec php php ./vendor/bin/psalm --clear-cache

psalm-with-issue:
	docker-compose -f .container/docker-compose.yml exec php php ./vendor/bin/psalm --show-info=true

psalm-update-baseline:
	docker-compose -f .container/docker-compose.yml exec php php ./vendor/bin/psalm --update-baseline --set-baseline=psalm-baseline.xml

csf:
	docker-compose -f ./.container/docker-compose.yml exec php php ./tools/php-cs-fixer/vendor/bin/php-cs-fixer fix src

composer-shell:
	docker-compose -f ./.container/docker-compose.yml run --rm composer sh

test:
	docker-compose -f ./.container/docker-compose.yml exec php php ./vendor/bin/phpunit --bootstrap ./vendor/autoload.php tests --testdox --colors=always --order-by=defects

test-filter:
	docker-compose -f ./.container/docker-compose.yml exec php php ./vendor/bin/phpunit --bootstrap ./vendor/autoload.php tests --testdox --colors=always --order-by=defects --filter=$(filter)

test-coverage:
	./vendor/bin/phpunit --bootstrap ./vendor/autoload.php tests --coverage-html=./.coverage/ --whitelist=./src

install-phpunit:
	wget -O phpunit https://phar.phpunit.de/phpunit-9.phar
	mv phpunit ./vendor/bin/phpunit
	chmod +x ./vendor/bin/phpunit
	./vendor/bin/phpunit --check-version

install-csfixer:
	composer require --working-dir=tools/php-cs-fixer friendsofphp/php-cs-fixer

install-composer:
	docker-compose -f ./.container/docker-compose.yml run composer install

container-build:
	docker build . -t brucegithub/minimal-vo:0.1.0 -f .container/Dockerfile

container-start:
	docker-compose -f ./.container/docker-compose.yml up php

container-shell:
	docker-compose -f ./.container/docker-compose.yml run php sh

container-stop:
	docker-compose -f ./.container/docker-compose.yml down

container-restart: stop start


.SILENT:
