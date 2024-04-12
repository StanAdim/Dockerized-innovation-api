setup:
	@make build
	@make up 
	@make composer-update
build:
	docker compose build 
stop:
	docker compose stop
up:
	docker compose up -d
composer-update:
	docker exec  innovation-api bash -c "composer update"
data:
	docker exec  innovation-api bash -c "php artisan migrate:fresh --seed"
bash:
	docker exec -it  innovation-api bash
start:
	docker compose restart
boost: 
	docker exec  innovation-api bash -c "php artisan optimize"
	docker exec  innovation-api bash -c "composer dump-autoload"
rmi:
	docker image rm -f innovation-api-innovation-api
logs:
	docker logs -f innovation-api
