-include .env
export

.PHONY: default
default: install migrate fixtures algolia-index

.PHONY: install
install:
	@echo "Install dependencies"
	@docker-compose run --rm composer install

.PHONE: migrate
migrate:
	@echo "Migrating database"
	@docker-compose run --rm php bin/console doctrine:migrations:migrate --no-interaction

.PHONY: fixtures
fixtures:
	@echo "Loading fixtures"
	@docker-compose run --rm php bin/console doctrine:fixtures:load --no-interaction

.PHONY: algolia-index
algolia-index:
	@echo "Importing data to algolia"
	@docker-compose run --rm php bin/console search:import --no-interaction
