##################
# Docker compose
##################

build:
	docker compose -f ./docker-compose.yml build

start:
	docker compose -f ./docker-compose.yml start

stop:
	docker compose -f ./docker/docker-compose.yml stop

up:
	docker-compose -f ./docker/docker-compose.yml up -d --remove-orphans

up_dev:
	docker compose -f ./docker-compose.yml up

ps:
	docker-compose -f ./docker/docker-compose.yml ps

logs:
	docker-compose -f ./docker/docker-compose.yml logs -f

down:
	docker-compose -f ./docker/docker-compose.yml down -v --rmi=all --remove-orphans


##################
# App
##################

app_bash:
	docker compose -f ./docker-compose.yml exec -u www-data php-fpm bash

php:
	app_bash

test:
	./bin/phpunit