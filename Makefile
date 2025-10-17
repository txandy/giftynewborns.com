# File: `Makefile`
.PHONY: up down restart build composer artisan npm test migrate migrate-fresh seed shell logs

up:
	docker compose up -d --build

down:
	docker compose down -v

stop:
	docker compose stop

restart: down up

build:
	docker compose build --no-cache

composer:
	docker compose run --rm app composer $(ARGS)

artisan:
	docker compose run --rm app php artisan $(ARGS)

npm:
	docker compose run --rm node sh -lc "npm install && npm run $(ARGS)"

test:
	docker compose run --rm app ./vendor/bin/pest --colors

migrate:
	docker compose run --rm app php artisan migrate --seed

migrate-fresh:
	docker compose run --rm app php artisan migrate:fresh --seed

seed:
	docker compose run --rm app php artisan db:seed

shell:
	docker compose exec app bash

logs:
	docker compose logs -f --tail=200

# Usage notes:
# - Arranca: `make up`
# - Ejecutar artisan: `make artisan ARGS="migrate"`
# - Ejecutar composer: `make composer ARGS="install --no-interaction"`
# - Ejecutar npm script: `make npm ARGS="build"`.
