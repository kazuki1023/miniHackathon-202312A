up:
	docker compose up -d
# aritasan:
# 	docker compose down --rmi all --volumes --remove-orphans
app:
	docker compose exec app bash
app/install:
	docker compose exec app composer install
app/laravel-init:
	docker compose exec app php artisan migrate
	docker compose exec app php artisan db:seed
node/install:
	docker compose exec node npm install
node:
	docker compose exec node npm run dev
lint:
	docker compose exec app composer analyse
arisatan:
	@make up
	@make app/install
	@make app/laravel-init
	@make node/install
	@make node

