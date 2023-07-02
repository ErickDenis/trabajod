install:
	@make build
	@make up
	docker compose exec appe composer install
	docker compose exec appe cp .env.example .env
	docker compose exec appe php artisan key:generate
	docker compose exec appe php artisan storage:link
	docker compose exec appe chmod -R 777 storage bootstrap/cache
	@make fresh
create-project:
	mkdir -p src
	docker compose build
	docker compose up -d
	docker compose exec appe composer create-project --prefer-dist laravel/laravel .
	docker compose exec appe php artisan key:generate
	docker compose exec appe php artisan storage:link
	docker compose exec appe chmod -R 777 storage bootstrap/cache
	@make fresh
up:
	docker compose up -d
build:
	docker compose build
remake:
	@make destroy
	@make install
stop:
	docker compose stop
down:
	docker compose down --remove-orphans
down-v:
	docker compose down --remove-orphans --volumes
restart:
	@make down
	@make up
destroy:
	docker compose down --rmi all --volumes --remove-orphans
ps:
	docker compose ps
logs:
	docker compose logs
logs-watch:
	docker compose logs --follow
log-web:
	docker compose logs web
log-web-watch:
	docker compose logs --follow web
log-appe:
	docker compose logs appe
log-appe-watch:
	docker compose logs --follow appe
log-db:
	docker compose logs db
log-db-watch:
	docker compose logs --follow db
web:
	docker compose exec web bash
appe:
	docker compose exec appe bash
migrate:
	docker compose exec appe php artisan migrate
fresh:
	docker compose exec appe php artisan migrate:fresh --seed
seed:
	docker compose exec appe php artisan db:seed
dacapo:
	docker compose exec appe php artisan dacapo
rollback-test:
	docker compose exec appe php artisan migrate:fresh
	docker compose exec appe php artisan migrate:refresh
tinker:
	docker compose exec appe php artisan tinker
test:
	docker compose exec appe php artisan test
optimize:
	docker compose exec appe php artisan optimize
optimize-clear:
	docker compose exec appe php artisan optimize:clear
cache:
	docker compose exec appe composer dump-autoload -o
	@make optimize
	docker compose exec appe php artisan event:cache
	docker compose exec appe php artisan view:cache
cache-clear:
	docker compose exec appe composer clear-cache
	@make optimize-clear
	docker compose exec appe php artisan event:clear
db:
	docker compose exec db bash
sql:
	docker compose exec db bash -c 'mysql -u $$MYSQL_USER -p$$MYSQL_PASSWORD $$MYSQL_DATABASE'
redis:
	docker compose exec redis redis-cli
ide-helper:
	docker compose exec appe php artisan clear-compiled
	docker compose exec appe php artisan ide-helper:generate
	docker compose exec appe php artisan ide-helper:meta
	docker compose exec appe php artisan ide-helper:models --nowrite
