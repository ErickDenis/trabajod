install:
	@make build
	@make up
	docker compose exec apperick composer install
	docker compose exec apperick cp .env.example .env
	docker compose exec apperick php artisan key:generate
	docker compose exec apperick php artisan storage:link
	docker compose exec apperick chmod -R 777 storage bootstrap/cache
	@make fresh
create-project:
	mkdir -p src
	docker compose build
	docker compose up -d
	docker compose exec apperick composer create-project --prefer-dist laravel/laravel .
	docker compose exec apperick php artisan key:generate
	docker compose exec apperick php artisan storage:link
	docker compose exec apperick chmod -R 777 storage bootstrap/cache
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
log-apperick:
	docker compose logs apperick
log-apperick-watch:
	docker compose logs --follow apperick
log-db:
	docker compose logs db
log-db-watch:
	docker compose logs --follow db
web:
	docker compose exec web bash
apperick:
	docker compose exec apperick bash
migrate:
	docker compose exec apperick php artisan migrate
fresh:
	docker compose exec apperick php artisan migrate:fresh --seed
seed:
	docker compose exec apperick php artisan db:seed
dacapo:
	docker compose exec apperick php artisan dacapo
rollback-test:
	docker compose exec apperick php artisan migrate:fresh
	docker compose exec apperick php artisan migrate:refresh
tinker:
	docker compose exec apperick php artisan tinker
test:
	docker compose exec apperick php artisan test
optimize:
	docker compose exec apperick php artisan optimize
optimize-clear:
	docker compose exec apperick php artisan optimize:clear
cache:
	docker compose exec apperick composer dump-autoload -o
	@make optimize
	docker compose exec apperick php artisan event:cache
	docker compose exec apperick php artisan view:cache
cache-clear:
	docker compose exec apperick composer clear-cache
	@make optimize-clear
	docker compose exec apperick php artisan event:clear
db:
	docker compose exec db bash
sql:
	docker compose exec db bash -c 'mysql -u $$MYSQL_USER -p$$MYSQL_PASSWORD $$MYSQL_DATABASE'
redis:
	docker compose exec redis redis-cli
ide-helper:
	docker compose exec apperick php artisan clear-compiled
	docker compose exec apperick php artisan ide-helper:generate
	docker compose exec apperick php artisan ide-helper:meta
	docker compose exec apperick php artisan ide-helper:models --nowrite
